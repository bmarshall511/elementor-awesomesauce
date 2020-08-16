<?php
/**
 * Elementor Awesomesauce WordPress Plugin
 *
 * @package ElementorAwesomesauce
 *
 * Plugin Name: Elementor Awesomesauce
 * Description: Simple Elementor plugin example
 * Plugin URI:  https://www.benmarshall.me/build-custom-elementor-widgets/
 * Version:     1.0.0
 * Author:      Ben Marshall
 * Author URI:  https://www.benmarshall.me
 * Text Domain: elementor-awesomesauce
 */

define( 'ELEMENTOR_AWESOMESAUCE', __FILE__ );

/**
 * Include the Elementor_Awesomesauce class.
 */
require plugin_dir_path( ELEMENTOR_AWESOMESAUCE ) . 'class-elementor-awesomesauce.php';
