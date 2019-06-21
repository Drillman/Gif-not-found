<?php
/*
Plugin Name: Database
Plugin URI: https://google.com/
Description: Create a new table on activation
Author: Bruuuuuh
Version: 1.0
Author URI: http://google.com/
*/

function createTable()
{
    global $wpdb;
    $table_name = 'Bruh';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    name tinytext NOT NULL,
    text text NOT NULL,
    url varchar(55) DEFAULT '' NOT NULL,
    PRIMARY KEY  (id)
  ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'createTable');
