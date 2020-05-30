<?php

function sogo_acf_init() {
	if ( function_exists( 'acf_add_options_page' ) ) {

		acf_add_options_page(
			array(
				'page_title' =>  'Extra Settings',
				'menu_title' =>  'Extra Settings',
				'menu_slug'  => 'theme-general-settings',
			)
		);

		acf_add_options_sub_page(
			array(
				'menu_title'  => 'General',
				'page_title'  => 'General',
				'parent_slug' => 'theme-general-settings',
			)
		);
		acf_add_options_sub_page(
			array(
				'menu_title'  => 'Shop',
				'page_title'  => 'Shop',
				'parent_slug' => 'theme-general-settings',
			)
		);
		acf_add_options_sub_page(
			array(
				'menu_title'  => 'My-Account',
				'page_title'  => 'My Account',
				'parent_slug' => 'theme-general-settings',
			)
		);
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Archive',
				'menu_title'  => 'Archive',
				'parent_slug' => 'theme-general-settings',
			)
		);
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Contact',
				'menu_title'  => 'Contact',
				'parent_slug' => 'theme-general-settings',
			)
		);

		acf_add_options_sub_page(
			array(
				'page_title'  => 'Single',
				'menu_title'  => 'Single',
				'parent_slug' => 'theme-general-settings',
			)
		);

		acf_add_options_sub_page(
			array(
				'page_title'  => 'Banners',
				'menu_title'  => 'Banners',
				'parent_slug' => 'theme-general-settings',
			)
		);

	}


}

add_action( 'acf/init', 'sogo_acf_init' );


