"""Category navigation and supply-page presentation contracts."""
import re
import unittest
from pathlib import Path
from test_supply_pages import MATERIALS, GRADES, Structure, source_for

ROOT = Path(__file__).resolve().parents[1]


class CategoryNavigationTests(unittest.TestCase):
    def assert_all_material_destinations(self, source):
        for material in MATERIALS:
            for grade in (None,) + GRADES:
                slug = material.lower() + (f'-{grade}' if grade else '')
                self.assertIn(f"home_url( '/{slug}/' )", source)

    def test_home_and_about_have_static_category_sections(self):
        for page in ('home', 'about'):
            with self.subTest(page=page):
                source = (ROOT / f'page-template/template-{page}.php').read_text()
                category = source.split(f'id="{page}-product-categories"', 1)[1].split('</section>', 1)[0]
                self.assert_all_material_destinations(category)
                self.assertNotIn('foreach', category)
                self.assertNotIn('array(', category)
                self.assertEqual(category.count('class="ab-category-card"'), 4)

    def test_mega_menu_covers_all_material_and_supply_pages(self):
        source = (ROOT / 'template-parts/products-mega-menu.php').read_text()
        self.assert_all_material_destinations(source)
        self.assertEqual(source.count('class="ab-mega-material"'), 7)
        markup = re.sub(r'<\?php.*?\?>', '', source, flags=re.S)
        parser = Structure()
        parser.feed(markup)
        self.assertEqual(parser.errors, [])
        self.assertEqual(parser.stack, [])

    def test_breadcrumbs_and_repeated_supply_note_are_removed(self):
        for material in MATERIALS:
            for grade in (None,) + GRADES:
                with self.subTest(material=material, grade=grade):
                    source = source_for(material, grade)
                    self.assertNotIn('ab-material-breadcrumb', source)
                    self.assertNotIn('ab-supply-route-note', source)
                    self.assertNotIn('Grade, availability, documents and application suitability are confirmed per enquiry. No regulatory approval is implied.', source)

    def test_new_typography_contracts(self):
        source = (ROOT / 'assets/css/material.css').read_text()
        for selector, size in (('.ab-supply-route-card h3', 22), ('.ab-supply-route-card p', 17), ('.ab-supply-route-kicker', 17), ('.ab-supply-route-card .ab-link', 17), ('.ab-grade-brief p', 17)):
            self.assertRegex(source, re.escape(selector) + r'\s*\{[^}]*font-size:\s*' + str(size) + r'px;')
        self.assertIn('.ab-material-grade-page .ab-link', source)


if __name__ == '__main__':
    unittest.main()
