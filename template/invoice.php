<div class="evw_invoice_content_container_wrapper" style="position:absolute; top: -99999px">
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
                    <div class="grid-item pos_title">
                        <span><strong>Pos.</strong></span>
                    </div>
                    <div class="grid-item qtn_title">
                        <span><strong>Quantity</strong></span>
                    </div>
                    <div class="grid-item description_title">
                        <span><strong>Description</strong></span>
                    </div>
                    <div class="grid-item price_per_unit_title">
                        <span><strong>Price per unit</strong></span>
                    </div>
                    <div class="grid-item discount_title">
                        <span><strong>Discount</strong></span>
                    </div>
                    <div class="grid-item total_price_title">
                        <span><strong>Total price</strong></span>
                    </div>
                    <!-- cls -->
                    <!-- Product data -->
                    <?php 
                    $product_pos = 1;
                    foreach($order->get_items() as $item){
                        $product = $item->get_product();
                        ?> 
                        <div class="grid-item item_product_pos">  
                            <span> <?php echo $product_pos ; $product_pos += 1 ;?></span>
                        </div>
                        <div class="grid-item item_product_qtn">  
                            <span><?php echo  $item->get_quantity(); ?></span>
                        </div>
                        <div class="grid-item item_product_description">  
                            <span><?php echo substr($product->description,0,75) ?></span>
                        </div>
                        <div class="grid-item item_product_price_per_unit">  
                            <span><?php echo $product->sale_price ? $product->sale_price : $product->regular_price ?></span>
                        </div>
                        <div class="grid-item item_product_discount">  
                            <span><?php ?></span>
                        </div>
                        <div class="grid-item item_product_total_price">  
                            <span><?php echo $item->get_total();?></span>
                        </div>
                        <?php
                    }
                    ?>
                    <!-- product data cls  -->
                    <!-- Total net -->
                    <div class="grid-item item_em">  
                        <span></span>
                    </div>
                    <div class="grid-item item_total_net">  
                        <span>Total (net)</span>
                    </div>
                    <div class="grid-item item_total_net_eur">  
                        <span>EUR</span>
                    </div>
                    <div class="grid-item item_total_net_amount">  
                        <span><?php echo $order->get_subtotal() ?></span>
                    </div>
                    <!-- cls -->
                    <!-- VAT -->
                    <div class="grid-item item_em">  
                        <span></span>
                    </div>
                    <div class="grid-item item_vat_text">  
                        <span>0.00% VAT</span>
                    </div>
                    <div class="grid-item item_vat_eur">  
                        <span>EUR</span>
                    </div>
                    <div class="grid-item item_vat_amount">  
                        <span><?php echo $order->get_total_tax() ?></span>
                    </div>
                    <!-- cls -->
                    <!-- shipping cost -->
                    <div class="grid-item item_em">  
                        <span></span>
                    </div>
                    <div class="grid-item bottom_underline item_shipping_text">  
                        <span>Shipping</span>
                    </div>
                    <div class="grid-item bottom_underline item_shipping_eur">  
                        <span>EUR</span>
                    </div>
                    <div class="grid-item bottom_underline item_shipping_amount">  
                        <span><?php echo $order->get_shipping_total() ?></span>
                    </div>
                    <!-- cls -->
                    <div class="grid-item item_em">  
                        <span>Delivery from stock Handewitt</span>
                    </div>
                    <!-- Total gross -->
                    <div class="grid-item item_total_gross_text">  
                        <span>Total (gross)</span>
                    </div>
                    <div class="grid-item item_total_gross_eur">  
                        <span>EUR</span>
                    </div>
                    <div class="grid-item item_total_gross_amount">  
                        <span><?php echo $order->get_total() ?></span>
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
                <span class="payment_advance">Payment in advance, 0% discount EUR  00 / Amount payable EUR <?php echo $order->get_total() ?></span>
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
</div>