<div class="pa-none services-parent-cont main-page">
    <div class="container-fluid services" id="services-header">
        <div class="container-film"></div>
        <div class="services-container">
            <div class="header-text service-content-padding">Services</div>
            <div class="service-content-padding"><hr class="hr"></div>

                <?php
                    $categories = get_categories(array(
                        'orderby' => 'description',
                        'order'   => 'ASC'
                    ));
                    $categoriesList = array();
                    foreach($categories as $category) {
                        $getService = explode('-', $category->name);
                        $servicePart = trim($getService[0]);
                        $isService = $servicePart == 'service';
                        // print_r($serviceCat);
                        if ($isService && !in_array($getService[1], $categoriesList, true)) {
                            array_push($categoriesList, $getService[1]);
                            
                        }
                    }
                ?>
                <?php
                    foreach ( $categoriesList as $class ) : 
                ?>
                    <?php if ($class == 'Portrait Photography') : ?>
                        <div class="sub-text mb-1 service-content-padding"><?php echo $class ?></div>
                    <?php else : ?>
                        <div class="sub-text mb-1 service-content-padding mt-4"><?php echo $class ?></div>
                    <?php endif; ?>
                    <div class="container pt-1">
                        <div class="row">
                            <?php
                                $args = array(
                                    'tag' => 'service',
                                    'category_name' => 'service-'.''.$class
                                );
                                $my_post = get_posts($args);
                                if ( $my_post ) {
                                    foreach ( $my_post as $post ) : 
                                        setup_postdata( $post ); 
                            ?>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 py-2">
                                    <div class="grid-item">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <img
                                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>"
                                                />
                                            </a>
                                        <?php else :?>
                                            <img
                                                src="https://ayacabauatan.com/wp-content/uploads/2022/02/FL-E100-000004-753x1024.jpg"
                                            />
                                        <?php endif; ?>
                                        <div class="img-desc"><?php the_title(); ?></div>
                                    </div>
                                </div>
                            <?php
                                endforeach;
                                wp_reset_postdata();
                                }
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>