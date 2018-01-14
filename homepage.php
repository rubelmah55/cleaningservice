<?php 
/*
Template Name: Homepage
*/

    get_header(); 
$page_id = get_queried_object_id();

?>
              
                <div class="block stock-block " style="background-image: url(<?php the_field('banner_images'); ?>); background-position: 17% 17%;">
                    <div class="container">
                        <div class="row hero-wrapper">
                            <div class="col-md-5 col-sm-8 tagline-wrapper">
                                <div class="tagline"><?php the_field('banner_text',$page_id) ?></div>
                            </div>
                            <div class="col-md-3 col-sm-8 request-estimate-wrapper">
                                <div class="cta-wrapper">
                                    <p class="heading"><?php the_field('appointment_title', '') ?></p>
                                    <p class="phone-number">Call <a href="tel:704-274-2085"><span id="loc:5939695492"><?php the_field('phone_number', 'options') ?></span></a></p>
                                    <p class="separator">or</p>
                                    <a href="<?php the_field('button_url', '') ?>" class="smoothScroll">
                                        <div class="message-btn"><?php the_field('button_text', '') ?><span class="caret"></span></div>
                                    </a>
                                    <p class="description"><?php the_field('form_description', '') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reviews-services-wrapper" style="background:#00b6fd url(<?php the_field('service_bg_image', '') ?>) top center repeat;">
                    <div class="block reviews-block">
                        <div class="container">
                            <div class="reviews-wrapper ">
                                <div class="block-header">
                                    <p class="heading">REVIEWS</p>
                                </div>

                                <div class="block-body row">
                                    <div class="col-md-12">
                                        <!-- responsive-reviews-module -->
                                        <div class="module responsive-reviews-module">
                                            <div class="module-inner">
                                                <section>
                                                    <div class="module-header">
                                                        <p class="heading">Reviews</p>
                                                    </div>
                                                    <div class="module-body ">

                                                        <div class="reviews">
                                                            <?php 
                                                            $review = get_field('reviews', $page_id);
                                                            foreach ( $review as $rev ) :

                                                            ?>

                                                            <div class="review_item">
                                                                <div class="star-ratings-sprite"><span style="width:<?php echo $rev["star"] ?>%" class="star-ratings-sprite-rating"></span>
                                                                </div>

                                                                <div class="review-text">
                                                                    <p class="title"><?php echo $rev["title"] ?></p>
                                                                    <div class="readmore" data-height="100">
                                                                        <p class="text m-reviews-copy"><?php echo $rev["content"] ?></p>
                                                                    </div>
                                                                </div>

                                                                <div class="reviewer">
                                                                    - <span class="reviewer-name"><?php echo $rev["reviewer_name"] ?></span>
                                                                    <span class="review-date"><?php echo $rev["review_date"] ?></span>
                                                                </div>
                                                            </div>
                                                            <?php endforeach; ?> 
                                                        </div>
                                                        <div class="rateabiz">
                                                            <div class="rateabiz-item logo">
                                                                <!-- Disable hyperlink if it's preview mode -->
                                                                <a href="https://www.rateabiz.com/reviews/elemental-cleaning-charlotte-nc/4d5407a065ef654dfc85dd43e20b6042/summary?source=website" target="_blank" rel="nofollow">
                                                                    <!-- Endif -->
                                                                    <div class="image"></div>
                                                                </a>
                                                            </div>
                                                            <div class="rateabiz-item rating">
                                                                <div class="rating-group">
                                                                    <div class="rating-list rating-empty">
                                                                        <span class="rating-item glyphicon"></span>
                                                                    </div>
                                                                    <div class="rating-list rating-fill" style="width: 100.0%">
                                                                        <span class="rating-item glyphicon"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="reviews-count">9 Reviews</div>
                                                            </div>
                                                            <div class="rateabiz-item recommendation">
                                                                100% Would Recommend
                                                            </div>
                                                            <div class="rateabiz-item rateabiz-link">
                                                                <!-- Disable hyperlink if it's preview mode -->
                                                                <a href="https://www.rateabiz.com/reviews/elemental-cleaning-charlotte-nc/4d5407a065ef654dfc85dd43e20b6042/summary?source=website" class="link" target="_blank" rel="nofollow">
                                                                    <!-- Endif -->
                                                                    Read More Reviews <span class="icon-offpage">t</span></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="block services-block">
                        <div class="container">
                            <div class="block-header">
                                <p class="heading"><?php the_field('service_title') ?></p>
                            </div>
                            <div class="block-body row">
                                <div class="rslides col-md-12" id="services-slider">
                                    <div class="serv col-md-12">

                                        <?php 
                                                $args = array( 
                                                    'post_type' => 'service', 
                                                    'posts_per_page' => -1 
                                                );
                                                $loop = new WP_Query( $args );
                                                
                                                while($loop->have_posts()) : $loop->the_post();
                                        ?>


                                            <div class="service-item col-md-3 col-sm-6 col-xs-12">
                                                <a href="general_cleaning.html" class="mobile-services-link"></a>
                                                <div class="service-body">
                                                    <div class="service-cutoff-container">
                                                        <div class="service-title"><?php the_title(); ?></div>
                                                        <div class="service-summary">
                                                            <div class="summary">
                                                                <p><?php the_excerpt(); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="<?php the_field('service_link_url', '') ?>" class="link"><?php the_field('service_link_text', '') ?></a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block content-block">
                    <div class="container">
                        <div class="block-body row">
                            <div class="col-md-6  col-sm-12">
                                <div class="readmore" data-height="400" data-desktop-height="700">
                                    <!-- content-module -->
                                    <div class="module content-module">
                                        <div class="module-inner">
                                            <section>
                                                <div class="module-body">
                                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                      <?php the_content(); ?>
                                                   <?php endwhile; endif; ?>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 video-section">
                              <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CrrnNVnlvc8"></iframe>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block contact-form-block" id="homepage-contact-form">
                    <div class="container">
                        <div class="businessinfo-contact-group">
                                    <div class="group-body row">
                                      <div class="col-md-3 sidebar-info">
                                          <div class="business-info-container">

                                              <!-- Business hours -->
                                              <div class="info-item">
                                                  <div class="heading"><?php the_field( 'hours_title','options' ) ?></div>
                                                  <div class="content">
                                                      <table class="hours-content hours-table">
                                                          <p><?php the_field( 'open_day_and_time', 'options' ) ?></p>

                                                          <p><?php the_field( 'weekends', 'options' ) ?></p>

                                                      </table>

                                                  </div>
                                              </div>
                                              <?php $header_right = get_field('header_right', 'options'); ?>
                                              <!-- Phone Number -->
                                              <div class="info-item">
                                                  <div class="heading"><?php the_field( 'phone_title','options' ) ?></div>
                                                  <div class="content business-phone" itemprop="telephone">
                                                      <span id="loc:5939695492"><?php echo $header_right['phone']; ?></span>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="col-md-8 contact">
                                          <div class="heading">
                                              <p><?php the_field( 'form_title', 'options' ) ?></p>
                                          </div>
                                          <div class="contact-form-container">
                                              <!-- simple-contact-form-module -->
                                              <div class="module simple-contact-form-module">
                                                  <div class="module-inner">
                                                      <section>
                                                          <div class="module-body">
                                                              <div class="contact-form">
                                                                  <?php echo do_shortcode('[gravityform id="1" title="false" description="false" tabindex="10" ajax="true"]'); ?>
                                                              </div>
                                                          </div>
                                                      </section>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                    </div>
                </div>

<?php get_footer(); ?>