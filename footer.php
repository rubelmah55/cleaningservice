                <div class="block fatty-footer-block">
                    <div class="container">
                        <div class="module-body row">
                            <div class="col-sm-4 footer-col">
                                <!-- Contact -->
                                <div class="info-item">
                                    <div class="heading">
                                        <?php the_field('contact_title', 'options') ?>
                                    </div>
                                    <div class="content">
                                        <div class="business-name" itemprop="name">
                                            <?php the_field('business_name', 'options') ?>
                                        </div>
                                        <div class="business-address">
                                            <span class="business-city" itemprop="addressLocality"><?php the_field('city_address', 'options') ?></span>
                                        </div>
                                        <div class="content business-phone" itemprop="telephone">
                                            <span id="loc:5939695492"><?php the_field('footer_phone_number', 'options') ?></span>
                                        </div>
                                        <div class="content business-phone" itemprop="telephone">
                                            <span id="loc:5939695492"><?php the_field('business_email', 'options') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 footer-col">
                            </div>

                            <div class="col-sm-4 footer-col">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block footer-block">
                    <div class="container">
                        <div class="border-wrapper">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 legal-info">
                                    <ul class="footer-link">
                                        <li class="link-item copyright"><span>&copy; <?php the_field('business_name', 'options') ?></span> <span><?php the_field('copy_right_text', 'options') ?></span></li>
                                        <li class="link-item">
                                            <!-- Disable hyperlink if it's preview mode -->
                                            <?php 
                                            $item = get_field('footer_menu', 'options');
                                            foreach ( $item as $menu ) :

                                            ?>
                                            <a href="<?php echo $menu["menu_url"] ?>"><?php echo $menu["menu_text"] ?></a>
                                        <?php endforeach; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php wp_footer(); ?>
    </body>
</html>