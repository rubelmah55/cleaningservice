<?php 
/*
Template Name: Contact
*/

    get_header(); 
$page_id = get_queried_object_id();

?>
               <div class="contaner">
                  <div class="row">
                     <div class="col-md-12 col-sm-12">
                        <div class="page-title">
                           <p class="title"><?php the_title(); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
                     <div class="block main-block">
                        <div class="container">
                           <div class="row">
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
                              <!-- payment-methods-colored-module -->
                              <div class="module payment-methods-colored-module">
                                 <div class="module-inner">
                                    <section>
                                       <div class="module-header">
                                          <p class="heading"><?php the_field('payment_title', $page_id) ?></p>
                                       </div>
                                       <div class="module-body">
                                          <div class="payments-common">
                                             <ul class="payment-icons">
                                                <?php 
                                                  $item = get_field('payment', $page_id);
                                                  foreach ( $item as $p_item ) :
                                                   
                                                ?>
                                                <li class="list-item first"><img class="payment-icon" src="<?php echo $p_item["payment_item"] ?>" alt="Cash" /></li>
                                                <?php endforeach; ?>
                                             </ul>
                                          </div>
                                       </div>
                                       <!-- module-body -->
                                    </section>
                                 </div>
                              </div>
                              <!-- payment-methods-colored-module end -->
                           </div>
                        </div>
                     </div>
            <?php get_footer(); ?>