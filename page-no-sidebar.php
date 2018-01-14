<?php 
/*
Template Name: Page No Sidebar
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
                        <div class="col-md-12">
                           <!-- content-module -->
                           <div class="module content-module">
                              <div class="module-inner">
                                 <section>
                                    <div class="module-body">
                                       <h2><?php the_field('content_title', $page_id); ?></h2>
                                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                          <?php the_content(); ?>
                                       <?php endwhile; endif; ?>
                                    </div>
                                    <!-- module-body -->
                                 </section>
                              </div>
                           </div>
                           <!-- content-module end -->
                        </div>
                     </div>
                  </div>
               </div>
   <?php get_footer(); ?>