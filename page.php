<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php $myTitle = get_the_title() ?>
            <?php $myTitle ?>
            <?php if($myTitle == 'Studios') : ?>
                <div class="container-fluid g-0">
                    <div class="studioHeader d-flex justify-content-center">
                        <div class="align-self-end studioTitle">Our studios</div>
                    </div>
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
            <?php else :?>
                <?php echo get_the_content() ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('No Page Found'); ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata();?>
<?php get_footer(); ?>