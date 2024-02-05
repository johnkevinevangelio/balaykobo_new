<div class="pa-none partnerships-parent-cont main-page">
                            
    <div class="container-fluid partnerships" id="partnerships-header">
        <!-- <div class="container-film"></div> -->
        <div class="partnerships-container">
            <div class="header-text partnership-content-padding">Partnerships</div>
            <div class="service-content-padding"><hr class="hr"></div>

            <div class="d-flex flex-row flex-wrap justify-content-between partnership-content-padding">
                <div class="partnership-image-container">

                    <?php
                        $args = array(
                            'tag' => 'partnership',
                        );
                        $my_post = get_posts($args);
                        if ( $my_post ) {
                            foreach ( $my_post as $post ) : 
                                setup_postdata( $post ); 
                    ?>
                        <div class="grid-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()) : ?>
                                    <img
                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>"
                                    />
                                <?php else :?>
                                    <img
                                        src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg"
                                    />
                                <?php endif; ?>
                            </a>
                            <div class="img-desc"><?php the_title(); ?></div>
                        </div>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                        }
                    ?>
                    <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-2">
                        <div class="grid-item">
                            <img src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg" alt="Image 1" class="img-fluid">
                            <div class="img-desc">Alberto</div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-2">
                        <div class="grid-item">
                            <img src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg" alt="Image 2" class="img-fluid">
                            <div class="img-desc">Sine Pop</div>
                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-2">
                        <div class="grid-item">
                            <img src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg" alt="Image 3" class="img-fluid">
                            <div class="img-desc">Penny Pairs</div>
                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-2">
                        <div class="grid-item">
                            <img src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg" alt="Image 3" class="img-fluid">
                            <div class="img-desc">Nike</div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-2">
                        <div class="grid-item">
                            <img src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg" alt="Image 3" class="img-fluid">
                            <div class="img-desc">Renegade Folk</div>
                        </div>
                    </div> -->
                
                
                
                </div>
            </div>
        </div>
    </div>
</div>