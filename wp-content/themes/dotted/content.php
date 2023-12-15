<div class="item-blog blog-single-feature-img">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="blog-feature-warp">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive" alt="">
        </a>
    </div>
    <?php } ?>
    <div class="blog-feature-content">
        <div class="blog-feature-content-inner">
            <div class="blog-data">
                <div class="date-time bg-theme">
                    <span class="date"><?php the_time('d') ?></span>
                    <span class="month"><?php the_time('M') ?></span>
                </div>
                <div class="blog-type">
                    <i class="fa fa-pencil"></i>
                </div>
            </div>
            <div class="blog-text">
                <h4><a class="hover-text-theme" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p class="post-text-style"><?php echo dotted_excerpt_length(); ?></p>
                <a href="<?php the_permalink(); ?>" class="ot-btn btn-rounded btn-main-color hover-text-theme" style="color:#ffff;"><?php esc_html_e(' Details ', 'dotted'); ?></a>
            </div>
        </div>
        <div class="blog-footer-2 border-color-theme">
            <ul>
                <li class="blog-list-style-2"><?php echo esc_html__('Posté par ', 'dotted'); ?><?php the_author_posts_link(); ?></li>
                <li class="blog-list-style-2"><?php echo esc_html__('Catégorie ', 'dotted'); ?> <?php the_category( ', ' ); ?></li>
            </ul>
        </div>
    </div>
</div>
