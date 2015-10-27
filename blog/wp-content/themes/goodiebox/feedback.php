<?php
/**
 * Template Name: Feedback Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
<?php get_header(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<section class="blog-page" class="rounded">
    <!--<h1>Csaholó</h1>
    <h2>Hírek, újdonságok, kedvezmények és versenyek</h2>-->
    <div class="blog-page-post">
        <div class="blog-page-post-img">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div> <!--End post img-->
        <div class="blog-page-post-text">
            <!-- h1><?php the_title(); ?></h1 -->
            <!--h4 class="date"><?php the_time('Y-m-d'); ?></h4 -->
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                }
            }
            ?>
            <?php the_content(); ?>
        </div> <!--End post text-->
    </div> <!--End post-->
    <div class="clear"></div>
    <div class="opinion">
        <script type="text/javascript">
            var post_id = <?=get_the_ID();?>
            </script>
       
            <div class="clear"></div>
            <div class="opinion-form-text">
                <div class="text-left"></div>
                <div class="text-right"></div>
            </div>
        </div> <!--End opinion send-->
    </div> <!--End opinion-->
</section>

<?php get_footer(); ?>