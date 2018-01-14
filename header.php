<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php if (get_field('favicon', 'options')): ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class('page-home'); ?>>
        <div class="main-container">
            <div class="sidebar-menu">
                <div class="navbar navbar-default navigation sidebar-navigation">
                    <?php wp_nav_menu( 
                          array(
                          'menu'               => 'Primary Menu',
                          'theme_location'     => 'menu-1',
                          'depth'              => 2,
                          'container'          => 'false',
                          'menu_class'         => 'nav navbar-nav',
                          'menu_id'            => '',
                          //'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                          'walker'             => new wp_bootstrap_navwalker()
                          ) 
                        ); 
                    ?>
                </div>
            </div>
            <div class="sidebar-content home-content">
                <div class="protective-glass"></div>
                <div class="block header-block">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="sidebar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="row header-container">
                            <div class="stupid-firefox">
                              <?php $header_right = get_field('header_right', 'options'); if ($header_right): ?>
                                <div class="col-sm-4 col-sm-push-8 business-info-wrapper">
                                    <div class="business-info">
                                        <?php if ($header_right['title']): ?>
                                          <div class="open-status" id="open-status"><?php echo $header_right['title']; ?></div>
                                        <?php endif; ?>
                                        
                                        <?php if ($header_right['phone']): ?>
                                          <div class="phone" itemprop="telephone">
                                              <a href="tel:<?php echo $header_right['phone']; ?>"><?php echo $header_right['phone']; ?></a>
                                          </div>
                                        <?php endif; ?>

                                        <?php if ($header_right['address']): ?>
                                          <div class="serving-area">
                                              <p class="serving-area-text"><?php echo $header_right['address']; ?></p>
                                          </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                              <?php endif; ?>

                                <div class="col-sm-8 col-sm-pull-4 business-branding-wrapper">
                                    <div class="business-branding">
                                        <div class=" hidden-logo-container">
                                            <!-- Disable hyperlink if it's preview mode -->
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <!-- Endif -->
                                                <div class="more-wrappers">
                                                    <div class="logo-container">
                                                    </div>
                                                    <div class="business-name-container">
                                                        <h2 class="business-name"><?php the_field('logo_text', 'options') ?></h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar navbar-default navigation">
                    <div class="collapse navbar-collapse">
                        <?php wp_nav_menu( 
                          array(
                          'menu'               => 'Primary Menu',
                          'theme_location'     => 'menu-1',
                          'depth'              => 2,
                          'container'          => 'false',
                          'menu_class'         => 'nav navbar-nav',
                          'menu_id'            => '',
                          //'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                          'walker'             => new wp_bootstrap_navwalker()
                          ) 
                        ); 
                    ?>
                    </div>
                </div>