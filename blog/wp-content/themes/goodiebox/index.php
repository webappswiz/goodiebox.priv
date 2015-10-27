<?php get_header(); ?>
<section class="blog" class="rounded">
    <h1>Csaholó</h1>
    <h2>Hírek, újdonságok, kedvezmények és versenyek</h2>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Top Sidebar')) : ?>
<p></p>
<?php endif; ?>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <div class="post">
                <div class="post-img">
                    <?php
                    if (has_post_thumbnail()) {
                        ?>
                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail('medium')?></a>
                        <?php
                    }
                    ?>
                    <div class="ribbon"><p><?php the_time('m.d');?></p></div>

                </div> <!--End post img-->
                <div class="post-text">
                    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
                </div> <!--End post text-->
            </div> <!--End post-->
            <div class="clear"></div>
            <?php
        endwhile;
    else :
        echo wpautop('Sorry, no posts were found');
    endif;
    ?>
    <div class="clear"></div>
    <div class="pager"><?php goodiebox_paging_nav(); ?></div>
</section>
</div> <!--End container-->
<div class="clear"></div>
<?php get_footer(); ?>