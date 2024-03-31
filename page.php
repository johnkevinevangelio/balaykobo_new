<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php $myTitle = get_the_title() ?>
            <?php $myTitle ?>
            <?php if($myTitle == 'Studios') : ?>
                <div class="container-fluid g-0">
                    <div class="studioHeader1 d-flex justify-content-center">
                        <div class="align-self-end studioTitle">Our Studios</div>
                    </div>
                    <div class="container-fluid g-0">
                        <div class="row g-0">
                            <?php
                                $args = array(
                                    'tag' => 'gallery',
                                    'nopaging' => true
                                );
                                $my_post = get_posts($args);
                                if ( $my_post ) {
                                    foreach ( $my_post as $post ) : 
                                        setup_postdata( $post ); 
                            ?>
                            <?php get_template_part('content'); ?>
                            <?php
                                endforeach;
                                wp_reset_postdata();
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php elseif($myTitle == 'Services') : ?>
                <div class="container-fluid g-0">
                    <?php get_template_part('services'); ?>
                </div>
            
            <?php elseif($myTitle == 'Partnership') : ?>
                <div class="container-fluid g-0">
                    <?php get_template_part('partnership'); ?>
                </div>
            <?php elseif($myTitle == 'Book a Studio') : ?>
                <style>
                    .bookStudio {
                        background-image: url('https://balaykobo.com/wp-content/uploads/2024/01/studio_header_bg-scaled.jpg');
                        background-position: center;
                        background-size: cover;
                        /* height: 75vh; */
                    } 
                    .bookStudioBox {
                        background-color: rgba(255, 255, 255, 0.80);
                        /* height: 85%; */
                        width: 40%;
                        padding: 30px 50px 50px 50px;
                    }
                    .bookStudioTitle {
                        color: #222;
                        font-family: Spectral;
                        font-size: 36px;
                        font-style: normal;
                        font-weight: 400;
                    }
                    .bookStudioDesc {
                        color: #3E352C;
                        font-family: Oxygen Mono;
                        font-size: 16px;
                        font-style: normal;
                        font-weight: 400;
                    }
                    .bookStudioBox2 {
                        /* padding: 30px; */
                        margin-top: 30px;
                        background: #FFF;
                    }
                    .bookStudioBox2Content {
                        font-family: Oxygen Mono;
                        font-size: 14px;
                        font-style: normal;
                        font-weight: 400;
                    }
                    @media screen and (max-width:1200px) {
                            
                        .bookStudioBox {
                            background-color: rgba(255, 255, 255, 0.80);
                            height: 90%;
                            width: calc(100% - 30%);
                        }
                        .bookStudioTitle {
                            color: #222;
                            font-family: Spectral;
                            font-size: 28px;
                            font-style: normal;
                            font-weight: 400;
                        }
                        .bookStudioDesc {
                            color: #3E352C;
                            font-family: Oxygen Mono;
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 400;
                        }
                    }
                    @media screen and (max-width:800px) {
                            
                        .bookStudioBox {
                            background-color: rgba(255, 255, 255, 0.80);
                            height: 90%;
                            padding: 30px;
                            width: calc(100% - 30%);
                        }
                        .bookStudioTitle {
                            color: #222;
                            font-family: Spectral;
                            font-size: 18px;
                            font-style: normal;
                            font-weight: 400;
                        }
                        .bookStudioDesc {
                            color: #3E352C;
                            font-family: Oxygen Mono;
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 400;
                        }
                        .bookStudioBox2Content {
                            font-family: Oxygen Mono;
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 400;
                        }
                    }
                    @media screen and (max-width:400px) {
                            
                        .bookStudioBox {
                            background-color: rgba(255, 255, 255, 0.80);
                            height: 70%;
                            padding: 30px;
                            width: calc(100% - 20%);
                        }
                        .bookStudioBox2Content {
                            font-family: Oxygen Mono;
                            font-size: 12px;
                            font-style: normal;
                            font-weight: 400;
                        }
                    }
                </style>
                <div class="bookStudio container-fluid g-0 d-flex justify-content-center">
                    <?php 
                        // echo get_the_content()
                        get_template_part('bookStudio');
                    ?>
                </div>
            <?php else :?>
                <style>
                    /* .other-content {
                        margin-top: 8%;
                        margin-bottom: 8%;
                    } */
                </style>
                <div class="container-fluid g-0 other-content">
                <?php
                    function sup($text){

                        $true = preg_replace('#(\d+)(st|th|nd|rd)#', '$1<sup class="super">$2</sup>', $text);
                        return $true;

                    }
                    echo sup(get_the_content());
                ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('No Page Found'); ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata();?>

<?php get_footer(); ?>
