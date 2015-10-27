<?php get_header(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<section class="blog-page" class="rounded">
    <h1>Csaholó</h1>
    <h2>Hírek, újdonságok, kedvezmények és versenyek</h2>
    <div class="back"><a href="/"><< Vissza</a></div>
    <div class="blog-page-post">
        <div class="blog-page-post-img">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div> <!--End post img-->
        <div class="blog-page-post-text">
            <h1><?php the_title(); ?></h1>
            <h4 class="date"><?php the_time('Y-m-d'); ?></h4>
            <?php
            global $wpdb;
            $res1 = $wpdb->get_row('SELECT post_author FROM ' . $wpdb->prefix.'posts WHERE ID="' . get_the_ID() . '"', ARRAY_A);
            $res = get_the_author_meta( 'user_nicename', $res1['post_author'] );

            ?>
            <h5 class="posted"><?php echo $res ?></h5>
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
        <div class="smiles">
            <div class="smiles-text">Mit gondolsz a cikkről?</div>
            <div class="smiles-img">
                <ul>
                    <li><img title="Tetszik!" id="rate" data-id="1" data-post_id="<?= get_the_ID(); ?>" style="cursor: pointer" src="<?php echo get_template_directory_uri(); ?>/img/smiles-img1.jpg"  onmouseover="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img1-hover.jpg'" onmouseout="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img1.jpg'"></li>
                    <li><img title="Imádom!" id="rate" data-id="2" data-post_id="<?= get_the_ID(); ?>" style="cursor: pointer" src="<?php echo get_template_directory_uri(); ?>/img/smiles-img2.jpg"  onmouseover="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img2-hover.jpg'" onmouseout="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img2.jpg'" ></li>
                    <li><img title="Nem hiszem el!" id="rate" data-id="3" data-post_id="<?= get_the_ID(); ?>" style="cursor: pointer" src="<?php echo get_template_directory_uri(); ?>/img/smiles-img3.jpg" onmouseover="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img3-hover.jpg'" onmouseout="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img3.jpg'"></li>
                    <li><img title="Nem tetszik!" id="rate" data-id="4" data-post_id="<?= get_the_ID(); ?>" style="cursor: pointer" src="<?php echo get_template_directory_uri(); ?>/img/smiles-img4.jpg" onmouseover="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img4-hover.jpg'" onmouseout="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img4.jpg'"></li>
                    <li><img title="Nemááár!" id="rate" data-id="5" data-post_id="<?= get_the_ID(); ?>" style="cursor: pointer" src="<?php echo get_template_directory_uri(); ?>/img/smiles-img5.jpg" onmouseover="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img5-hover.jpg'" onmouseout="this.src = '<?php echo get_template_directory_uri(); ?>/img/smiles-img5.jpg'"></li>
                </ul>
                <ul style="display:none" id="votes">
                    <li id="rate1" class="votes"></li>
                    <li id="rate2" class="votes"></li>
                    <li id="rate3" class="votes"></li>
                    <li id="rate4" class="votes"></li>
                    <li id="rate5" class="votes"></li>
                </ul>
            </div>
        </div> <!--End smiles-->
        <div class="clear"></div>
		<?php echo isset($WPPostNavigation)?$WPPostNavigation->WP_Custom_Post_Navigation():''; ?>
        <?php comments_template(); ?>
            <div class="clear"></div>
            <div class="opinion-form-text">
                <div class="text-left"></div>
                <div class="text-right"></div>
            </div>
        </div> <!--End opinion send-->
    </div> <!--End opinion-->
</section>

<?php get_footer(); ?>