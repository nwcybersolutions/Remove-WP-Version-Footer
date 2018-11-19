<?php

/*
Plugin Name: Remove WP Version Footer
Plugin URI: https://github.com/nwcybersolutions/Remove-WP-Version-Footer
Description: Removes Version from the Footer in the Admin Dashboard
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.2
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove WP Version Footer
Domain Path: /languages
*/
/*
 * Removes Version from the Footer in the Admin Dashboard
 */
function remove_versionfooter() {
        remove_filter( 'update_footer', 'core_update_footer' ); 
    }
add_action( 'admin_menu', 'remove_versionfooter' );

