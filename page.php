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
                                    'tag' => 'gallery'
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
                        background-image: url('https://balaykobo-dev.me/wp-content/uploads/2024/01/studio_header_bg-scaled.jpg');
                        background-position: center;
                        background-size: cover;
                        height: 75vh;
                    } 
                    .bookStudioBox {
                        background-color: rgba(255, 255, 255, 0.80);
                        height: 85%;
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
                        padding: 30px;
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
                            height: 85%;
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
                    <?php echo get_the_content() ?>
                </div>    
            <?php else :?>
                <div class="container-fluid g-0">
                    <div class="pa-none bookForm-parent-cont main-page">
                        <div class="container-fluid bookForm">
                            <div class="bookForm-container">
                                <div class="mb-4 pb-1 px-0 container-fluid">
                                  <div class="form-title mb-2">Book a studio</div>
                                  <div class="form-title-desc">Please fill in all the details to ensure a smooth booking process</div>  
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="fullName">
                                            <span class="form-label">What's your Full Name?*</span><br/>
                                            <span class="form-sub-label">This will act as your reservation</span>
                                        </label>
                                        <input type="text" class="form-control border-0 border-bottom mt-3" id="fullName">
                                    </div>
                                    <div class="d-flex align-items-baseline">
                                        <a class="btn btn-outline-secondary bookFormbtn me-2 mt-3">
                                            <div class="btnText">OK <i class="bi bi-check2 mt-2"></i></div>
                                        </a>
                                        <span class="press-enter-font ms-4 pa-2">Press enter <i class="bi bi-arrow-return-left ms-1 px-1 mb-2 small-icon"></i></span>
                                    </div>

                                    <div class="form-group pt-5 mt-5">
                                        <label for="shootDay">
                                            <span class="form-label">When will your shoot be?*</span><br/>
                                            <span class="form-sub-label">Please pick from the dates provided</span>
                                        </label>
                                        <input type="text" class="form-control border-0 border-bottom mt-3" id="shootDay">
                                    </div>
                                    <div class="d-flex align-items-baseline">
                                        <a class="btn btn-outline-secondary bookFormbtn me-2 mt-3">
                                            <div class="btnText">OK <i class="bi bi-check2 mt-2"></i></div>
                                        </a>
                                        <span class="press-enter-font ms-4 pa-2">Press enter <i class="bi bi-arrow-return-left ms-1 px-1 mb-2 small-icon"></i></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('No Page Found'); ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata();?>

<?php get_footer(); ?>
