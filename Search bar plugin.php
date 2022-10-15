<?php 

/**
* Plugin Name:       Search Bar Plugin
* Description:       This will add a Custom Post Type and Metabox at your page.
* Version:           1.0
* Author:            Ukasha Aziz
* Author URI:        https://facebook.com
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

    if ( ! defined( 'CPT_PLUGIN_DIR' ) ) {
    define( 'CPT_PLUGIN_DIR', __DIR__ );
}

    if ( ! defined( 'CPT_PLUGIN_DIR_URL' ) ) {
    define( 'CPT_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

    if ( ! defined( 'CPT_ABSPATH' ) ) {
    define( 'CPT_ABSPATH', dirname( __FILE__ ) );
}

    include_once CPT_ABSPATH . '/includes/class-loader.php';

?>

