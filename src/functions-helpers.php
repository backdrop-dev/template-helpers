<?php
/**
 * Template functions
 * 
 * @package   Backdrop
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Template;

/**
 * Return the relative path to where templates are held in the theme
 * 
 * @since  3.0.0
 * @access public
 * @param  string $file 
 * @return string
 */
function path( $file = '' ) {
	$file = ltrim( $file, '/' );
	$path = apply_filters( 'backdrop/template/path', 'resources/views' );

	return $file ? trailingslashit( $path ) . $file : trailingslashit( $path );
}

/**
 * A better `locate_template()` function than what core WP provides. 
 *
 * @since  3.0.0
 * @access public
 * @param  array|string  $templates
 * @return string
 */
function locate( $templates ) {
	$located = '';

	foreach ( ( array ) $templates as $template ) {

		foreach ( locations() as $location ) {

			$file = trailingslashit( $location ) . $template;

			if ( file_exists( $file ) ) {
				$located = $file;
				break 2;
			}
		}
	}

	return $located;
}

/**
 * Returns an array of locations to look for templates.
 *
 * @since  3.0.0
 * @access public
 * @return array
 */
function locations() {

	$path = ltrim( path(), '/' );

	// Add active theme path.
	$locations = [ get_stylesheet_directory() . "/{$path}" ];

	// If child theme, add parent theme path second.
	if ( is_child_theme() ) {
		$locations[] = get_template_directory() . "/{$path}";
	}

	return ( array) apply_filters( 'backdrop/template/locations', $locations );
}