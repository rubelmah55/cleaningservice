<?php 
/*
Template Name: Photo Gallery
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
                    <!-- photo-thumbnails-module -->
                    <div class="module photo-thumbnails-module">
                        <div class="module-inner">
                            <section>
                                <div class="module-body">

                                <?php  
                                $gallery = get_field('gallery'); 
                                foreach ($gallery as $gal): 
                                ?>

                                    <a class="project venobox" data-gall="myGallery" href="<?php echo $gal["url"] ?>">
                                    <div class="project-image">
                                        <div class="intrinsic" >
                                            <div class="content-fill focuspoint" data-focus-x="0" data-focus-y="0">
                                                <img src="<?php echo $gal["url"] ?>">
                                            </div>
                                        </div>

                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <p class="photo-caption"><?php echo $gal["title"] ?></p>
                                                <div class="view-image-button">View Image</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                    <?php endforeach; ?>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- photo-thumbnails-module end -->

                </div>
            </div>
<?php get_footer(); ?>