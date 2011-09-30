<?php

/*
	Plugin Name: Navigation Menu IDs & Classes
	Plugin URI: http://aarontgrogg.com/2011/09/28/wordpress-plug-in-navigation-menu-ids-classes/
	Description: Removes extraneous WP classes, and adds page name slug as LI's ID.
	Version: 1.0
	Author: Aaron T. Grogg
	Author URI: http://aarontgrogg.com/
	License: GPLv2 or later
*/

//	"Slugify" string
	function nmic_slugify_string( $v ) {
        $v = preg_replace('/[^a-zA-Z0-9\s]/', '', $v);
        $v = str_replace(' ', '-', $v);
        $v = strtolower($v);
        return $v;
    }

//	Add page->slug as id attributes
    function nmic_add_id_attribute( $id, $item ) {
        return 'nav-'.nmic_slugify_string($item->title);
    }
    add_filter( 'nav_menu_item_id', 'nmic_add_id_attribute', 10, 2 );

//	Limit the nav classes to only the "current_page_item"
    function nmic_limit_classes( $v ) {
        return is_array($v) ? array_intersect($v, array('current_page_item')) : '';
    }
	add_filter( 'page_css_class', 'nmic_limit_classes', 10, 2 ); // standard menus
    add_filter( 'nav_menu_css_class', 'nmic_limit_classes', 10, 2 ); // custom menus

//	Remove empty class attributes, custom menus
    function nmic_remove_empty_classes( $v ) {
        return  preg_replace('/ class=(["\'])(?!current_page_item).*?\1/','',$v);
    }
    add_filter( 'wp_list_pages', 'nmic_remove_empty_classes', 10, 2 ); // standard menus
    add_filter( 'wp_nav_menu_items', 'nmic_remove_empty_classes', 10, 2 ); // custom menus

?>
