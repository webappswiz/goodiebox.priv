<?php

/**
 * @package Rating
 */
/*
  Plugin Name: GoodieboxRating
  Plugin URI: http://goodiebox.hu/
  Description: Rating plugin
  Version: 1.0
  Author: karam@karam.org.ua
  Author URI: http://goodiebox.hu/
  License: GPLv2 or later
  Text Domain: akismet
 */



function rating_init()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "rating";
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $sql = "CREATE TABLE " . $table_name . " (
              id mediumint(9) NOT NULL AUTO_INCREMENT,
              post_id int(11) NOT NULL,
              type int(1) NOT NULL,
	      votes int(11) NOT NULL,
              UNIQUE KEY id (id)
            );";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}

register_activation_hook(__FILE__, 'rating_init');

function rating_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('myscript', plugins_url('/js/common.js', __FILE__));
}

add_action('wp_enqueue_scripts', 'rating_scripts');

function karam()
{
    global $wpdb;
	//print_r($_COOKIE);
    $table_name = $wpdb->prefix . "rating";
    if (isset($_POST) && !empty($_POST['rate_id']) && !empty($_POST['post_id']) && !isset($_COOKIE['votedcookies'])) {
        $res1 = $wpdb->get_row('SELECT * FROM ' . $table_name . ' WHERE post_id="' . (int) $_POST['post_id'] . '" AND type="' . (int) $_POST['rate_id'] . '"', ARRAY_A);
        if (count($res1) > 0) {
            $votes = $res1['votes'] + 1;
            $wpdb->update($table_name, array('votes' => $votes), array('id' => $res1['id']));
        } else {
            $rows_affected = $wpdb->insert($table_name, array('type' => (int) $_POST['rate_id'], 'post_id' => (int) $_POST['post_id'], 'votes' => 1));
        }
        $res2 = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE post_id="' . (int) $_POST['post_id'] . '"', ARRAY_A);
        echo json_encode($res2);
        die();
    }
}

function get_ratings()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "rating";
    $res2 = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE post_id="' . (int) $_POST['post_id'] . '"', ARRAY_A);
    echo json_encode($res2);
    die();
}

add_action("wp_ajax_karam", "karam");
add_action('wp_ajax_nopriv_karam', 'karam');

add_action("wp_ajax_get_ratings", "get_ratings");
add_action('wp_ajax_nopriv_get_ratings', 'get_ratings');