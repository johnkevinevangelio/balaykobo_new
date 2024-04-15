<div class="col-md-6">
    <div class="position-relative">
        <?php if(has_post_thumbnail()) : ?>
            <img 
                id="img-<?php the_ID(); ?>"
                src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>"
                class="img-fluid clickable-image portfolio-image"
                alt="Image 1"
            >
        <?php endif; ?>
        <div 
            class="overlay-portfolio"
            onclick="<?php if(has_excerpt()) : ?>changeImage('<?php echo get_the_excerpt(); ?>', 'img-<?php the_ID(); ?>')<?php endif; ?>"
        >
            <a href="<?php the_permalink(); ?>">
                <div class="postText"><?php the_title(); ?></div>
            </a>
        </div>
    </div>
</div>