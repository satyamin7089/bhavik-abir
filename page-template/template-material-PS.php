<?php
/**
 * Template Name: Material Information — PS
 * Template Post Type: page
 * Static Polystyrene material guide. Grade content is authored directly below.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<main id="main-content">
    <!-- Static supply-type guide: all four panels remain readable without JavaScript. -->
    <section class="ab-supply" id="supply-types" aria-labelledby="supply-title" data-supply-guide>
        <div class="ab-wrap">
            <nav class="ab-supply-breadcrumb" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">/</span><a href="<?php echo esc_url( home_url( '/product-range/' ) ); ?>">Products</a><span aria-hidden="true">/</span><span aria-current="page">PS</span></nav>
            <div class="ab-supply-heading"><div><span class="ab-eyebrow">One material. Four supply routes.</span><h1 id="supply-title">Polystyrene <span>(PS)</span></h1></div><p>Start with your supply type. Then match the grade, processing route and specification to your application.</p></div>
            <nav class="ab-supply-tabs" aria-label="PS supply types">
                <a id="supply-tab-prime" href="#prime"><span class="ab-supply-number">01</span><span>Prime / Virgin<small>Fresh polymer resin</small></span></a>
                <a id="supply-tab-off-grade" href="#off-grade"><span class="ab-supply-number">02</span><span>Off-grade<small>Batch-specific value</small></span></a>
                <a id="supply-tab-recycled" href="#recycled"><span class="ab-supply-number">03</span><span>Recycled<small>Reprocessed material</small></span></a>
                <a id="supply-tab-scrap-regrind" href="#scrap-regrind"><span class="ab-supply-number">04</span><span>Scrap / Regrind<small>Feedstock for recovery</small></span></a>
            </nav>
            <div class="ab-supply-panels">
                <section class="ab-supply-panel" id="prime" aria-labelledby="supply-heading-prime" data-grade="Prime / Virgin">
                    <div class="ab-supply-copy"><span class="ab-supply-kicker">Fresh resin · specification-led</span><h2 id="supply-heading-prime">Prime / Virgin PS</h2><p>Fresh PS resin for requirements that call for a defined manufacturer grade and documented properties. Select by the exact datasheet rather than assuming all virgin resin performs alike.</p><a class="ab-btn" href="#primary-enquiry" data-grade-choice="Prime / Virgin">Enquire about prime / virgin PS <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg></a></div>
                    <div class="ab-supply-spec"><span class="ab-supply-kicker">Your enquiry checklist</span><h3>GPPS clarity or HIPS toughness</h3><ul><li>Manufacturer grade and datasheet</li><li>Confirm GPPS or HIPS type, melt flow, clarity and impact targets.</li><li>Check batch identification and any required compliance documents.</li></ul><p>Keep GPPS, HIPS and expanded PS streams identified. Match clarity or impact needs to the formulation.</p></div>
                </section>
                <section class="ab-supply-panel" id="off-grade" aria-labelledby="supply-heading-off-grade" data-grade="Off-grade">
                    <div class="ab-supply-copy"><span class="ab-supply-kicker">Value route · batch reviewed</span><h2 id="supply-heading-off-grade">Off-grade PS</h2><p>PS sold outside its original prime specification, or as a declared off-grade lot. The deviation may relate to flow, colour or another property. Off-grade is not automatically recycled material.</p><a class="ab-btn" href="#primary-enquiry" data-grade-choice="Off-grade">Enquire about off-grade PS <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg></a></div>
                    <div class="ab-supply-spec"><span class="ab-supply-kicker">Your enquiry checklist</span><h3>GPPS clarity or HIPS toughness</h3><ul><li>Declared deviation and lot test results</li><li>Compare actual batch results with your GPPS or HIPS type, melt flow, clarity and impact targets.</li><li>Agree a representative sample or trial before accepting the lot.</li></ul><p>Keep GPPS, HIPS and expanded PS streams identified. Match clarity or impact needs to the formulation.</p></div>
                </section>
                <section class="ab-supply-panel" id="recycled" aria-labelledby="supply-heading-recycled" data-grade="Recycled">
                    <div class="ab-supply-copy"><span class="ab-supply-kicker">Circular supply · source matters</span><h2 id="supply-heading-recycled">Recycled PS</h2><p>Recovered PS that has been reprocessed for use as material again. Review source, segregation and batch consistency against the needs of your finished product.</p><a class="ab-btn" href="#primary-enquiry" data-grade-choice="Recycled">Enquire about recycled PS <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg></a></div>
                    <div class="ab-supply-spec"><span class="ab-supply-kicker">Your enquiry checklist</span><h3>GPPS clarity or HIPS toughness</h3><ul><li>Source stream and reprocessing history</li><li>Check GPPS or HIPS type, melt flow, clarity and impact targets, contamination, odour and colour.</li><li>Confirm whether post-industrial or post-consumer feedstock is acceptable.</li></ul><p>Keep GPPS, HIPS and expanded PS streams identified. Match clarity or impact needs to the formulation.</p></div>
                </section>
                <section class="ab-supply-panel" id="scrap-regrind" aria-labelledby="supply-heading-scrap-regrind" data-grade="Scrap / Regrind">
                    <div class="ab-supply-copy"><span class="ab-supply-kicker">Recovery feedstock · inspect first</span><h2 id="supply-heading-scrap-regrind">PS Scrap / Regrind</h2><p>Sorted PS production scrap or size-reduced regrind for a suitable recovery or conversion process. This is feedstock, not a promise of ready-to-use prime-equivalent resin.</p><a class="ab-btn" href="#primary-enquiry" data-grade-choice="Scrap / Regrind">Enquire about scrap / regrind PS <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg></a></div>
                    <div class="ab-supply-spec"><span class="ab-supply-kicker">Your enquiry checklist</span><h3>GPPS clarity or HIPS toughness</h3><ul><li>Polymer identification and source segregation</li><li>Confirm particle size, moisture, fines and contamination limits.</li><li>Share photos, form, packing and any required washing or filtration steps.</li></ul><p>Keep GPPS, HIPS and expanded PS streams identified. Match clarity or impact needs to the formulation.</p></div>
                </section>
            </div>
            <p class="ab-supply-note"><svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-shield" /></svg>Availability, test results and application suitability are confirmed per enquiry. No grade or regulatory approval is implied.</p>
        </div>
    </section>

        <!-- 1. Hero section -->
        <section class="ab-prod-hero" aria-labelledby="hdpe-title">
            <div class="ab-wrap ab-prod-hero-grid">
                <div class="ab-prod-copy ab-reveal is-visible">
                  <span
                        class="ab-eyebrow">Styrenic polymers · GPPS &amp; HIPS</span>
                    <h2 id="hdpe-title">PS material guide &amp; applications</h2>
                    <p>Polystyrene is a rigid thermoplastic used in moulded consumer products, protective packaging and extruded sheet. GPPS is generally chosen for clarity and rigidity; HIPS is rubber-modified for improved impact resistance.</p>
                    <p>Compare prime, off-grade, recycled and scrap / regrind supply routes. Specify GPPS or HIPS, the processing method, colour and end-use requirements before confirming a batch.</p>
                    <div class="ab-prod-actions"><a class="ab-btn" href="<?php echo home_url('/contact-us/'); ?>">REQUEST AN PS QUOTE <svg
                                class="ab-icon" aria-hidden="true">
                                <use href="#ab-icon-arrow" />
                            </svg></a><a class="ab-btn ab-btn--outline" href="#datasheet-upload">UPLOAD A DATASHEET</a>
                    </div>


                </div>
                <div class="ab-product-gallery ab-reveal ab-reveal-delay-1" data-hdpe-gallery role="region"
                    aria-roledescription="carousel" aria-label="PS product image gallery">
                    <div class="ab-prod-art">
                        <div class="ab-gallery-stage">
                            <div class="ab-gallery-slide is-active" id="hdpe-gallery-slide-1" role="group"
                                aria-roledescription="slide" aria-label="1 of 4: PS polymer pellets"
                                aria-hidden="false"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="" width="1536"
                                    height="1024" decoding="async" loading="eager" fetchpriority="high"></div>
                            <div class="ab-gallery-slide" id="hdpe-gallery-slide-2" role="group"
                                aria-roledescription="slide" aria-label="2 of 4: virgin and recycled polymer material"
                                aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="" width="1536"
                                    height="1024" decoding="async" loading="eager"></div>
                            <div class="ab-gallery-slide ab-gallery-slide--pellets-detail" id="hdpe-gallery-slide-3"
                                role="group" aria-roledescription="slide"
                                aria-label="3 of 4: close detail of PS polymer pellets" aria-hidden="true"><img
                                    src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="" width="1536" height="1024"
                                    decoding="async" loading="eager"></div>
                            <div class="ab-gallery-slide ab-gallery-slide--recycled-detail" id="hdpe-gallery-slide-4"
                                role="group" aria-roledescription="slide"
                                aria-label="4 of 4: close detail of recycled polymer material" aria-hidden="true"><img
                                    src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="" width="1536" height="1024"
                                    decoding="async" loading="eager"></div>
                        </div><button class="ab-gallery-arrow ab-gallery-arrow--prev" type="button"
                            aria-label="Previous product image"><svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="m15 18-6-6 6-6" />
                            </svg></button><button class="ab-gallery-arrow ab-gallery-arrow--next" type="button"
                            aria-label="Next product image"><svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="m9 18 6-6-6-6" />
                            </svg></button>
                    </div>
                    <div class="ab-gallery-thumbs" role="group" aria-label="Choose a product image"><button
                            class="ab-gallery-thumb is-active" type="button"
                            aria-label="Show image 1 of 4: PS polymer pellets" aria-controls="hdpe-gallery-slide-1"
                            aria-pressed="true"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="" width="1536"
                                height="1024" loading="eager" decoding="async"></button><button class="ab-gallery-thumb"
                            type="button" aria-label="Show image 2 of 4: virgin and recycled polymer material"
                            aria-controls="hdpe-gallery-slide-2" aria-pressed="false"><img
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="" width="1536" height="1024"
                                loading="eager" decoding="async"></button><button
                            class="ab-gallery-thumb ab-gallery-thumb--crop" type="button"
                            aria-label="Show image 3 of 4: close detail of PS polymer pellets"
                            aria-controls="hdpe-gallery-slide-3" aria-pressed="false"><img
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="" width="1536" height="1024" loading="eager"
                                decoding="async"></button><button class="ab-gallery-thumb ab-gallery-thumb--crop"
                            type="button" aria-label="Show image 4 of 4: close detail of recycled polymer material"
                            aria-controls="hdpe-gallery-slide-4" aria-pressed="false"><img
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/img/virgin-vs-recycled.jpg' ) ); ?>" alt="" width="1536" height="1024"
                                loading="eager" decoding="async"></button></div>
                </div>
            </div>
        </section>

    <nav class="ab-prod-sticky-wrap" aria-label="Polystyrene page sections">
        <div class="ab-prod-sticky" id="product-section-nav"><span class="ab-prod-sticky-label">On this page</span><a href="#supply-types">Supply types</a><a href="#overview">Overview</a><a href="#grades-processing">GPPS &amp; HIPS</a><a href="#applications">Applications</a><a href="#selection-guide">Selection guide</a><a href="#primary-enquiry">Enquiry</a><a href="#faqs">FAQs</a></div>
    </nav>
    <section class="ab-section" id="overview" aria-labelledby="overview-title">
        <div class="ab-wrap ab-overview-layout">
            <div class="ab-overview-copy"><span class="ab-eyebrow">Material overview</span><h2 id="overview-title">What is Polystyrene?</h2><p>Polystyrene (PS) is a styrenic thermoplastic. General-purpose polystyrene (GPPS) offers clarity, rigidity and good surface finish, while high-impact polystyrene (HIPS) is modified to improve toughness and is usually opaque.</p><p>PS is not polyethylene. Do not mix GPPS, HIPS or expanded PS streams without confirming compatibility. Properties, heat limits and suitability for the finished product depend on the specific formulation and batch.</p></div>
            <div class="ab-overview-visual"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/img/pellets-macro.jpg' ) ); ?>" alt="Close-up of polymer pellets illustrating resin supply" width="900" height="600" loading="lazy"></div>
        </div>
    </section>
    <section class="ab-section ab-section--white" id="grades-processing" aria-labelledby="grades-title">
        <div class="ab-wrap">
            <div class="ab-section-head"><span class="ab-eyebrow">Select the formulation</span><h2 id="grades-title">GPPS or HIPS? Start with the end use.</h2><p>The polymer formulation and its supply type are different decisions. Both GPPS and HIPS must be assessed against your processing and product specifications.</p></div>
            <div class="ab-grade-cards">
                <article class="ab-grade-card"><h3>GPPS · General purpose</h3><p>Consider where clarity, rigidity and surface finish matter. Share transparency, colour and brittleness limits along with the intended moulding or extrusion route.</p></article>
                <article class="ab-grade-card"><h3>HIPS · High impact</h3><p>Consider where impact resistance and opaque appearance are important. Confirm impact targets, melt flow, colour and sheet or moulded-part requirements.</p></article>
                <article class="ab-grade-card"><h3>Processing &amp; documentation</h3><p>Request a relevant datasheet or batch test report. Compare melt flow only under matching test conditions and confirm processing settings with the grade supplier.</p></article>
            </div>
        </div>
    </section>
    <section class="ab-section" id="applications" aria-labelledby="applications-title">
        <div class="ab-wrap">
            <div class="ab-section-head"><span class="ab-eyebrow">Application fit</span><h2 id="applications-title">Polystyrene in everyday manufacturing</h2><p>These are application examples, not a claim of regulatory approval or suitability for every PS grade.</p></div>
            <div class="ab-grade-cards">
                <article class="ab-grade-card"><h3>Moulded consumer goods</h3><p>Household articles, display items and stationery components. Match impact, appearance and dimensional needs to the selected GPPS or HIPS grade.</p></article>
                <article class="ab-grade-card"><h3>Sheet &amp; thermoforming</h3><p>Trays, liners and formed packaging. Confirm sheet thickness, draw requirements and toughness. Food-contact uses require specific supporting documentation.</p></article>
                <article class="ab-grade-card"><h3>Housings &amp; technical parts</h3><p>Selected appliance and equipment components. Verify heat, electrical and flammability requirements; these are not guaranteed by the PS name alone.</p></article>
            </div>
        </div>
    </section>
    <section class="ab-section ab-section--white" id="selection-guide" aria-labelledby="selection-title">
        <div class="ab-wrap"><div class="ab-section-head"><span class="ab-eyebrow">Before you order</span><h2 id="selection-title">Build a clear PS material brief</h2><p>Specify GPPS or HIPS, supply type, melt flow and test method, colour, contamination limits, required quantity and delivery location. For recycled material or regrind, confirm source segregation, moisture, fines and trial acceptance. For regulated applications, request evidence for the exact grade and intended use.</p></div><a class="ab-btn" href="#primary-enquiry">Discuss your PS requirement <svg class="ab-icon" aria-hidden="true"><use href="#ab-icon-arrow" /></svg></a></div>
    </section>
        <section class="ab-primary-enquiry" id="primary-enquiry" aria-labelledby="primary-enquiry-title">
            <div class="ab-wrap ab-primary-layout">
                <div class="ab-primary-copy ab-reveal"><span class="ab-eyebrow">PS enquiry</span>
                    <h2 id="primary-enquiry-title">Request an PS quote</h2>
                    <p>Provide the available technical and commercial details so the product team can review your
                        requirement
                        efficiently. Share the application, processing method, grade or specification, required form,
                        quantity, pack
                        size, destination, and required documents.</p>
                    <div class="ab-primary-prompt"><span>Grade / specification</span><span>Application &amp;
                            process</span><span>Form &amp; quantity</span><span>Pack size &amp;
                            destination</span><span>Datasheet
                            &amp; documents</span></div>
                </div>
                <form class="ab-product-form ab-reveal ab-reveal-delay-1" id="hdpe-enquiry-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="action" value="ab_material_enquiry"><input type="hidden" name="enquiry_kind" value="ps"><?php wp_nonce_field( 'ab_material_enquiry', 'ab_material_enquiry_nonce' ); ?><label class="ab-honeypot" aria-hidden="true">Leave this field empty<input type="text" name="ab_website" tabindex="-1" autocomplete="off"></label>
                    <h3>Submit an PS requirement</h3>
                    <p>Complete what you know. Your enquiry is emailed to the site administrator address configured in WordPress. Optional attachments are checked before sending.</p>
                    <div class="ab-product-form-grid">
                        <div class="ab-product-field"><label for="hdpe-name">Name *</label><input id="hdpe-name"
                                name="name" autocomplete="name" required placeholder="Your name"></div>
                        <div class="ab-product-field"><label for="hdpe-email">Business email *</label><input
                                id="hdpe-email" name="email" type="email" autocomplete="email" required
                                placeholder="name@company.com"></div>
                        <div class="ab-product-field"><label for="hdpe-material-type">Supply type</label><select
                                id="hdpe-material-type" name="material_type">
                                <option value="">Select supply type</option>
                                <option>Prime / Virgin</option>
                                <option>Off-grade</option>
                                <option>Recycled</option>
                                <option>Scrap / Regrind</option>
                                <option>Not sure</option>
                            </select></div>
                        <div class="ab-product-field"><label for="hdpe-process">Processing method</label><select
                                id="hdpe-process" name="processing_method">
                                <option value="">Select if known</option>
                                <option>Sheet extrusion</option>
                                <option>Extrusion</option>
                                <option>Thermoforming</option>
                                <option>Injection molding</option>
                                <option>Other</option>
                                <option>Not sure</option>
                            </select></div>
                        <div class="ab-product-field"><label for="hdpe-manufacturer">Manufacturer (if
                                known)</label><input id="hdpe-manufacturer" name="manufacturer"
                                placeholder="Manufacturer or source"></div>
                        <div class="ab-product-field"><label for="hdpe-grade">Grade or specification</label><input
                                id="hdpe-grade" name="grade" placeholder="Grade name or target specification"></div>
                        <div class="ab-product-field"><label for="hdpe-form">Required form</label><select id="hdpe-form"
                                name="form">
                                <option value="">Select if known</option>
                                <option>Granules</option>
                                <option>Powder</option>
                                <option>Compound</option>
                                <option>Film-grade</option>
                                <option>Extrusion-grade</option>
                                <option>Other</option>
                                <option>Not sure</option>
                            </select></div>
                        <div class="ab-product-field"><label for="hdpe-color">Color</label><input id="hdpe-color"
                                name="color" placeholder="Color requirement"></div>
                        <div class="ab-product-field"><label for="hdpe-quantity">Quantity and unit</label><input
                                id="hdpe-quantity" name="quantity" placeholder="e.g. 5 metric tonnes"></div>
                        <div class="ab-product-field"><label for="hdpe-destination">Destination</label><input
                                id="hdpe-destination" name="destination" autocomplete="shipping country"
                                placeholder="Country and port / city"></div>
                        <div class="ab-product-field ab-product-field--full"><label for="hdpe-requirement">Application
                                and required
                                properties</label><textarea id="hdpe-requirement" name="requirement" required
                                placeholder="Describe the end application, technical requirements, and performance needs"></textarea>
                        </div>
                        <div class="ab-product-field ab-product-field--full" id="datasheet-upload"><label
                                for="hdpe-datasheet">Upload a technical datasheet (optional)</label><input
                                id="hdpe-datasheet" name="datasheet" type="file"
                                accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.jpeg,.png"><span
                                class="ab-field-help">Choose a current datasheet or target specification. It is attached to the enquiry email after file-type and size checks.</span></div>
                    </div>
                    <details class="ab-enquiry-details">
                        <summary>More technical &amp; commercial details (optional)</summary>
                        <div class="ab-product-form-grid ab-details-grid">
                            <div class="ab-product-field"><label for="hdpe-pack-size">Pack size /
                                    packaging</label><input id="hdpe-pack-size" name="pack_size"
                                    placeholder="e.g. bag or bulk requirement"></div>
                            <div class="ab-product-field"><label for="hdpe-frequency">Requirement
                                    frequency</label><select id="hdpe-frequency" name="frequency">
                                    <option value="">Select if known</option>
                                    <option>One-time</option>
                                    <option>Monthly</option>
                                    <option>Regular</option>
                                </select></div>
                            <div class="ab-product-field"><label for="hdpe-delivery-date">Required delivery
                                    date</label><input id="hdpe-delivery-date" name="delivery_date" type="date"></div>
                            <div class="ab-product-field"><label for="hdpe-documents">Required
                                    documentation</label><input id="hdpe-documents" name="documents"
                                    placeholder="List any required documents"></div>
                            <div class="ab-product-field ab-product-field--full"><label for="hdpe-notes">Additional
                                    notes</label><textarea id="hdpe-notes" name="notes"
                                    placeholder="Anything else to help review the requirement"></textarea></div>
                        </div>
                    </details>
                    <div class="ab-product-form-foot"><button class="ab-btn ab-btn--blue" type="submit">Review PS
                            requirement
                            <svg class="ab-icon" aria-hidden="true">
                                <use href="#ab-icon-arrow" />
                            </svg></button><span class="ab-product-status" id="hdpe-form-status" role="status"
                            aria-live="polite"></span></div>
                    <p class="ab-form-small">Required fields are checked before submission. Confirm source, grade, documentation, pack size, minimum order quantity, current availability and delivery timing for each request.</p>
                </form>
            </div>
        </section>

    <section class="ab-section" id="faqs" aria-labelledby="faqs-title">
        <div class="ab-wrap"><div class="ab-section-head"><span class="ab-eyebrow">Common questions</span><h2 id="faqs-title">Polystyrene supply, explained</h2></div>
            <details class="ab-enquiry-details"><summary>What is the difference between GPPS and HIPS?</summary><p>GPPS typically provides clarity and rigidity. HIPS is impact-modified for better toughness and is generally opaque. Choose against the specific datasheet and end-use tests.</p></details>
            <details class="ab-enquiry-details"><summary>Can I enquire about PS scrap and regrind?</summary><p>Yes. Share GPPS or HIPS identification, source, colour, form, particle size and contamination limits. Expanded PS requires a separate handling and processing discussion; it is not interchangeable with dense PS regrind.</p></details>
            <details class="ab-enquiry-details"><summary>Is every PS grade approved for food contact?</summary><p>No. Food-contact suitability must be established for the exact material, application and applicable regulations. Request the relevant declaration before purchase.</p></details>
        </div>
    </section>
</main>
<?php get_footer(); ?>
