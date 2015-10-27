<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required())
    return;
?>

<ol class="commentlist">
    <?php
    $comments = get_comments('post_id=' . get_the_ID());
    foreach ($comments as $comment){
    ?>
    <li class="comment even thread-even depth-1" id="comment-<?=$comment->comment_ID;?>">
        <div id="div-comment-<?=$comment->comment_ID;?>" class="comment-body">
            <div class="comment-author vcard">
                <cite class="fn"><?=$comment->comment_author?></cite>
                <span style="float: right"><?=comment_date('F j, Y H:i')?></span>
            </div>
            <p><?=$comment->comment_content?></p>
            <div class="reply">
                <a class="comment-reply-link" href="<?=get_permalink().'?replytocom='.$comment->comment_ID.'#respond';?>">Reply to this comment</a>
                </div>
        </div>
    </li><!-- #comment-## -->
    <br/>

    <?php }//wp_list_comments(array('style' => 'ol')); ?>
</ol><!-- .commentlist -->
<div class="clear"></div>
<div class="opinion-send">
    <div class="opinion-form">

        <?php
        $comments_args = array(
            'comment_notes_before' => '',
            'title_reply' => '',
            'label_submit' => 'ELKÜLDÖM',
            'comment_field' => '<textarea name="comment" class="rounded" placeholder="Véleményed..."></textarea>',
            'fields' => apply_filters('comment_form_default_fields', array(
                'author' => '<input type="text" name="author" class="name rounded" placeholder="Keresztneved">',
                'email' => '<input type="text" name="email" class="e-mail rounded" placeholder="E-mail címed">',
                'url' => ''
            )),
            'comment_notes_after' => '',
        );
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                $('input#submit').addClass('submit-btn rounded');
            });
        </script>
        <?php comment_form($comments_args); ?>
    </div> <!--End opinion form-->