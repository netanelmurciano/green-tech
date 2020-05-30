<?php

function print_btn( $args = '' ) {
	$defaults = array(
		'target'   => '',
		'icon'     => '',
		'class'    => '',
		'href'     => '',
		'type'     => '',
		'button'   => false,
		'text'     => '',
		'modal'    => '',
		'data'     => array(),
		'disabled' => false,
		'value'    => ''
	);
	$r        = wp_parse_args( $args, $defaults );
	include get_stylesheet_directory() . '/templates/component-btn.php';
}


function sogo_print_bg( $args ) {

	$args['url'] = filter_var( $args['url'], FILTER_VALIDATE_URL ) ? $args['url'] : get_stylesheet_directory_uri() . '/' . $args['url'];
	if ( isset( $args['url_2'] ) ) {
		$args['url_2'] = filter_var( $args['url_2'], FILTER_VALIDATE_URL ) ? $args['url_2'] : get_stylesheet_directory_uri() . '/' . $args['url_2'];
	}

	if ( $args ) {
		$defaults = array(
			'url'        => '',
			'url_2'      => '',
			'repeat'     => 'no-repeat',
			'repeat_2'   => 'no-repeat',
			'size'       => 'cover',
			'size_2'     => 'cover',
			'position'   => 'center center',
			'position_2' => 'center center',
			'height'     => '35vh',
		);
		$r        = wp_parse_args( $args, $defaults );
		if ( ! isset( $args['url_2'] ) ) {
			echo sprintf( 'style="background-image:url(\'%s\'); background-repeat: %s ; background-size: %s; background-position: %s; height: %s"',
				$r['url'], $r['repeat'], $r['size'], $r['position'], $r['height'] );
		} else {
			echo sprintf( '
			style="background-image:url(\'%s\'), url(\'%s\');background-repeat: %s, %s;background-size: %s, %s;background-position: %s, %s;"',
				$r['url'], $r['url_2'], $r['repeat'], $r['repeat_2'], $r['size'], $r['size_2'], $r['position'], $r['position_2'] );
		}
	}

	return false;
}