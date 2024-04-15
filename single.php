<?php get_header(); ?>
<?php
$postid = $post->ID; 
$test = get_the_tags($postid);
?>
<?php if ($test[0]->name == 'gallery') : ?>
<style type="text/css">
    body {
        background: #EBE9DA;
    }
</style>
<?php endif; ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php if ($test[0]->name == 'gallery') : ?>
                <div class="container-fluid text-center g-0 singleMainContent">
                    <?php echo get_the_content() ?>
                </div>
            <?php else : ?>
                <?php echo get_the_content() ?>
            <?php endif ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata();?>
    <?php if ($test[0]->name == 'gallery') : ?>
    <footer>
        <style>
            .bookStudio {
                background: url(https://balaykobo.com/wp-content/uploads/2024/01/singlebookstudiobackground.jpg);
                background-size: cover;
                background-position: center;
                padding-top: 8%;
                padding-bottom: 8%;

            }
            .bookStudioTitleHeader {
                color: #3E352C;
                font-family: 'Spectral';
                font-size: 28px;
                font-style: normal;
                font-weight: 400;
                line-height: 103.2%;
            }
            .bookStudioSubheader {
                color: #000;
                font-family: 'Oxygen Mono';
                font-size: 12px;
                font-style: normal;
                font-weight: 400;
                line-height: 150.2%; /* 24.032px */
            }
            .singleBookBtn1Style {
                width: 228px;
                height: 35px;
                padding: 8px, 33.6px, 8px, 33.6px;
                border: 1px;
                gap: 83.2px;
                border-radius: 6px;
                border: 0.8px solid #496575;
                background-color: #557689;
                text-align: center;
                color: #FFF;
                font-family: 'Oxygen Mono';
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 115.2%; /* 16.128px */
            }
            .singleBookBtn2Style {
                width: 228px;
                height: 35px;
                padding: 8px, 33.6px, 8px, 33.6px;
                border-radius: 6px;
                border: 1px solid #DADADA;
                gap: 83.2px;
                background-color: #F4F4F4;
                text-align: center;
                color: 3E352C;
                font-family: 'Oxygen Mono';
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 115.2%; /* 16.128px */
            }
            .btnText {
                font-family: Oxygen Mono;
                font-size: 14px;
            }
        </style>
        <div class="bookStudio text-center mt-5" id="bookStudioId">
            <div>
                <div class="row">
                    <div class="col align-self-center bookStudioTitleHeader">
                        Book studio
                    </div>
                </div>
                <div class="row">
                    <div class="col align-self-center bookStudioSubheader">
                        You have two options below.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center align-self-center singleBookContent">
                        <div class="mt-4">
                            <a class="btn btn-outline-secondary me-2 singleBookBtn1Style" style="">
                                <div class="btnText"> Call our booking manager </div>
                            </a>
                            <a class="btn btn-outline-secondary singleBookBtn2Style" style="">
                                <div class="btnText"> Reserve through form </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </footer>
    <?php endif ;?>
<?php get_footer(); ?>