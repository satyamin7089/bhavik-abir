"""Static-content contracts. Run: python3 -m unittest discover -s tests -v"""
import re
import unittest
from collections import Counter
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
MATERIALS = {
    "HDPE": "template-material.php",
    "LDPE": "template-material-LDPE.php",
    "PP": "template-material-PP.php",
    "PVC": "template-material-PVC.php",
    "PS": "template-material-PS.php",
    "ABS": "template-material-ABS.php",
    "EVA": "template-material-EVA.php",
}
GRADES = ("prime", "off-grade", "recycled", "scrap-regrind")
LABELS = ("Prime / Virgin", "Off-grade", "Recycled", "Scrap / Regrind")


class MaterialSupplyTests(unittest.TestCase):
    def test_static_supply_content_and_link_targets(self):
        for material, filename in MATERIALS.items():
            with self.subTest(material=material):
                source = (ROOT / "page-template" / filename).read_text()
                # Grade copy must stay literal markup, not PHP-generated content.
                guide = source.split('data-supply-guide>', 1)[1].split(
                    '<!-- 1. Hero section -->', 1
                )[0]
                self.assertNotIn("foreach", guide)
                self.assertNotIn("array(", guide)
                self.assertNotRegex(guide, r'<section\b[^>]*\shidden(?:[=>\s])')
                for grade, label in zip(GRADES, LABELS):
                    self.assertIn(f'id="{grade}"', guide)
                    self.assertIn(f'href="#{grade}"', guide)
                    self.assertIn(f'data-grade="{label}"', guide)
                    self.assertIn(f'data-grade-choice="{label}"', guide)
                    self.assertIn(f"<option>{label}</option>", source)
                self.assertIn('id="primary-enquiry"', source)
                self.assertIn('id="datasheet-upload"', source)
                self.assertIn(f'name="enquiry_kind" value="{material.lower()}"', source)
                html = re.sub(r"<\?php.*?\?>", "", source, flags=re.S)
                self.assertEqual(len(re.findall(r"<h1\b", html)), 1)
                ids = Counter(re.findall(r'\bid="([^"]+)"', html))
                self.assertFalse([key for key, count in ids.items() if count > 1])
                for target in GRADES + ("supply-types", "primary-enquiry"):
                    self.assertEqual(ids[target], 1)

    def test_ps_is_polystyrene_not_the_old_hdpe_copy(self):
        source = (ROOT / "page-template/template-material-PS.php").read_text()
        # Historical shared form/gallery IDs remain for compatibility with material.js.
        visible_copy = re.sub(r"<[^>]+>", " ", re.sub(r"<\?php.*?\?>", "", source, flags=re.S))
        self.assertNotIn("HDPE", visible_copy)
        self.assertIn("Polystyrene", visible_copy)
        self.assertIn("GPPS", visible_copy)
        self.assertIn("HIPS", visible_copy)

    def test_ps_is_discoverable(self):
        for filename in ("template-home.php", "template-product-families.php", "template-product-range.php"):
            with self.subTest(template=filename):
                source = (ROOT / "page-template" / filename).read_text()
                self.assertIn("Polystyrene (PS)", source)
                self.assertIn("home_url( '/ps/' )", source)

    def test_shared_two_line_wordmark(self):
        for filename in ("header.php", "footer.php"):
            with self.subTest(template=filename):
                source = (ROOT / filename).read_text()
                self.assertIn('<span class="ab-logo-name">Bhavik</span>', source)
                self.assertIn('<span class="ab-logo-descriptor">Enterprises</span>', source)


if __name__ == "__main__":
    unittest.main()
