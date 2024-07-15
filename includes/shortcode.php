<?php
add_shortcode('invoice', 'evw_invoice_callback');
function evw_invoice_callback(){
    ob_start();
    ?>
    <div class="evw_container">
        <div class="evw_invoice_content_container">
            <div class="evw_invoice_address">
                <div class="evw_address_and_delivery_add">  
                    <div class="evw_ews_title">
                        <span>EWS GmbH & Co. KG - Am  Bahnhol 20 - 24983 Handewitt</span>
                    </div>
                    <div class="evw_address">
                        <span>EvoWatt AG</span>
                        <span>Tim Saciri</span>
                        <span>SchinerstraBe 12</span>
                        <span>3900 Brig</span>
                        <span>SCHWEIZ</span>
                    </div>
                    <div class="evw_address_delivery">
                        <div class="address_delivery_title">
                            <span>Delivery address:</span>
                        </div>
                        <span>EvoWatt AG</span>
                        <span>Tim Saciri</span>
                        <span>SchinerstraBe 12</span>
                        <span>3900 Brig</span>
                        <span>SCHWEIZ</span>
                    </div>
                </div>
                <div class="evw_logo_ref_number">
                    <div class="evw_logo">
                        <img src="<?php echo EVW_DIR .'assets/images/evw-logo.png' ?>" alt="EVW Logo">
                    </div>
                    <div class="evw_reference_number">
                        <div class="reference_number_title">
                            <span>Reference Number</span>
                        </div>
                        <div class="order_reference">
                            <span>
                                <span>Order reference</span>
                                <span>Delivery</span>
                                <span>Weight in kg</span>
                                <span>Customer ID</span>
                                <span>VAT-ID:</span>
                            </span>
                            <span>
                                <span>936 x Jinko FB August</span>
                                <span>Probablity from week 34</span>
                                <span>21.060,0</span>
                                <span><strong>87286</strong></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="evw_comment_note">
                <span>Please note the comments on the current price development / delivery situation in the supplement  to this document.**</span>
            </div>
            <section>
                <div class="evw_invoice_content">
                    <div class="invoice_details_grid">
                        <!-- heading info -->
                        <div class="grid-item item1">
                            <span><strong>Pos.</strong></span>
                        </div>
                        <div class="grid-item item2">
                            <span><strong>Quantity</strong></span>
                        </div>
                        <div class="grid-item item3">
                            <span><strong>Description</strong></span>
                        </div>
                        <div class="grid-item item4">
                            <span><strong>Price per unit</strong></span>
                        </div>
                        <div class="grid-item item5">
                            <span><strong>Discount</strong></span>
                        </div>
                        <div class="grid-item item6">
                            <span><strong>Total price</strong></span>
                        </div>
                        <!-- cls -->
                        <!-- Product data -->
                        <div class="grid-item item7">  
                            <span>1</span>
                        </div>
                        <div class="grid-item item8">  
                            <span>936</span>
                        </div>
                        <div class="grid-item item9">  
                            <span>Jinko Tiger Neo 54HL4R-B N-Type Fullblack 440Wp, mono</span>
                        </div>
                        <div class="grid-item item10">  
                            <span>101,80</span>
                        </div>
                        <div class="grid-item item11">  
                            <span>36.00%</span>
                        </div>
                        <div class="grid-item item12">  
                            <span>60.982,27</span>
                        </div>
                        <div class="grid-item item13">  
                            <span>2</span>
                        </div>
                        <div class="grid-item item14">  
                            <span>1</span>
                        </div>
                        <div class="grid-item item15">  
                            <span>Freight and packaging costs will be calculated</span>
                        </div>
                        <div class="grid-item item16">  
                            <span>2.845,00</span>
                        </div>
                        <div class="grid-item item17">  
                            <span>36.00%</span>
                        </div>
                        <div class="grid-item item18">  
                            <span>2.845,00*</span>
                        </div>
                        <!-- <div class="grid-item item13">  
                            <span>2</span>
                        </div>
                        <div class="grid-item item14">  
                            <span>1</span>
                        </div>
                        <div class="grid-item item15">  
                            <span>Freight and packaging costs will be calculated</span>
                        </div>
                        <div class="grid-item item16">  
                            <span>2.845,00</span>
                        </div>
                        <div class="grid-item item17">  
                            <span>36.00%</span>
                        </div>
                        <div class="grid-item item18">  
                            <span>2.845,00*</span>
                        </div> -->
                        <!-- product data cls  -->
                        <div class="grid-item item19">  
                            <span></span>
                        </div>
                        <!-- Total net -->
                        <div class="grid-item item20">  
                            <span>Total (net)</span>
                        </div>
                        <div class="grid-item item21">  
                            <span>EUR</span>
                        </div>
                        <div class="grid-item item22">  
                            <span>63.827,27</span>
                        </div>
                        <!-- cls -->
                        <div class="grid-item item23">  
                            <span></span>
                        </div>
                        <!-- VAT -->
                        <div class="grid-item item24">  
                            <span>0.00% VAT</span>
                        </div>
                        <div class="grid-item item25">  
                            <span>EUR</span>
                        </div>
                        <div class="grid-item item26">  
                            <span>0.00</span>
                        </div>
                        <!-- cls -->
                        <div class="grid-item item27">  
                            <span>Delivery from stock Handewitt</span>
                        </div>
                        <!-- Total gross -->
                        <div class="grid-item item28">  
                            <span>Total (gross)</span>
                        </div>
                        <div class="grid-item item29">  
                            <span>EUR</span>
                        </div>
                        <div class="grid-item item30">  
                            <span>63.827,27</span>
                        </div>
                        <!-- cls -->
                    </div>
                </div>
            </section>
            <section>
                <div class="evw_terms_payment_section">
                    <div class="terms_of_payment_title">
                        <span><strong>Terms of payment:</strong></span>
                    </div>
                    <span class="payment_advance">Payment in advance, 2.00% discount EUR 1.219,65 / Amount payable EUR 62.607,62</span>
                    <span class="position_marked">(Positions marked with * are not eligible for a cash discount.)</span>
                    <span>Dear Tim Saciri,</span>
                    <span class="thank_you">Thank you very much for your interest in our produdcts.</span>
                </div>
            </section>
            <div class="evw_currentprice_deliverysituation">
                <div class="evw_currentprice_deliverysituation_title">
                    <span><strong>**Current price development and delivery situation**</strong></span>
                </div>
                <div class="deliverysituation_text">
                    <span>In the context of rapidly rising raw material costs and tightening bottlenecks in delivery logistics, short-term price increases</span>
                </div>
            </div>
            <footer class="evw_footer_data">
                <div class="footer_data_item">
                    <span>HypoVereinsbank</span>
                    <span>BLZ 200 300 00</span>
                    <span>Kto.-Nr.: 8045270</span>
                    <span>IBAN:DE88200300000008045270</span>
                    <span>SWIFT: HYVEDEMM300</span>
                </div>
                <div class="footer_data_item">
                    <span>Nord-Ostsee Sparkasse</span>
                    <span>BLZ 217 500 00</span>
                    <span>Kto.-Nr.: 17117232</span>
                    <span>IBAN: DE16217500000017117232</span>
                    <span>SWIFT: NOLADE21NOS</span>
                </div>
                <div class="footer_data_item">
                    <span>Sydbank Flensburg</span>
                    <span>BLZ 215 106 00</span>
                    <span>Kto.-Nr.: 1911810004</span>
                    <span>IBAN: DE96215106001911810004</span>
                    <span>SWIFT: SYBKDE22</span>
                </div>
                <div class="footer_data_item footer_last_item">
                    <span>Kommanditges.: Sitz Handewitt</span>
                    <span>Handelsregister Flensburg · HRA 3881</span>
                    <span>p.h.G.: EWS Holding GmbH · Sitz</span>
                    <span>Handewitt</span>
                    <span>Geschäftsführer Kai Lippert ·</span>
                    <span>Handelsregister Flensburg HRB 6724</span>
                    <span>Ust-IdNr. DE191691979 · St.-Nr. 15 288</span>
                    <span>10957 · Finanzamt Flensburg</span>
                </div>
            </footer>
        </div>
        <div class="evw_download_print_btns">
            <div class="evw_fields">
                <button class="evw_btn evw_download_btn">
                <span>Download</span>
                </button>
            </div>
            <div class="evw_fields">
                <button class="evw_btn evw_print_btn">
                    <span>Print</span>
                </button>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}