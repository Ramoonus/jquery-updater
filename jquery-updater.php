<?php
/**
* Plugin Name: jQuery Updater
* Plugin URI: http://www.ramoonus.nl/wordpress/jquery-updater/
* Description: This plugin updates jQuery to the latest  stable version.
* Version: 3.7.1.3
* Author: Ramoonus
* Author URI: http://www.ramoonus.nl/
* License: GPL3
* Text Domain: jquery-updater
* Domain Path: /languages
*/

/**
* Replace jQuery with a newer version, load jQuery Migrate
*
* @version 3.7.1
* @since 1.0.0
* @return void
*/
function rw_jquery_updater()
 {
    $ver = '3.7.1';
    $ver_core = $ver;
    $ver_migrate = '3.5.2';
    $slim = false;
    $min = true;
    $cdn = false; // google, microsoft, cdnjs, jsdelivr
    $migrate = true;
    $enqueue_admin = false;

    // jQuery Core
    // Deregister jQuery core
    wp_deregister_script( 'jquery-core' );
    // Re-register jQuery core
    // @todo make dynamic
    wp_register_script( 'jquery-core', plugins_url( '/js/jquery-3.7.1.min.js', __FILE__ ), [], $ver_core );

    // jQuery Migrate
    // Deregister jQuery Migrate
    wp_deregister_script( 'jquery-migrate' );
    // Re-register jQuery Migrate
    wp_register_script( 'jquery-migrate', plugins_url( '/js/jquery-migrate-3.5.2.min.js', __FILE__ ), ['jquery-core'], $ver_migrate );

    // jQuery
    // Deregister jQuery ( Meta )
    wp_deregister_script( 'jquery' );
    // Re-register jQuery ( Meta )
    wp_register_script( 'jquery', false, ['jquery-core', 'jquery-migrate'], $ver );
}

/**
* Front-End

* @version 2.1
*/
add_action( 'wp_enqueue_scripts', 'rw_jquery_updater' );
add_action( 'login_enqueue_scripts', 'rw_jquery_updater' );
// since 3.4.0.1

/**
* Load translation
*
* @since 2.2.0
* @version 1.0.0
*
*/
function rw_load_plugin_textdomain()
 {
    load_plugin_textdomain( 'jquery-updater', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'rw_load_plugin_textdomain' );

/**
 * Activation Message
 */
function jqu_admin_notice_activation_hook() {
    // does things upon activation
    set_transient( 'jqu_admin_notice', true, 5 );

    // @todo flush cache
}
register_activation_hook( __FILE__, 'jqu_admin_notice_activation_hook' );

function jqu_admin_notice_message(){

    /* Check transient, if available display notice */
    if( get_transient( 'jqu_admin_notice' ) ){
        ?>
        <div class="updated notice is-dismissible">
            <p>jQuery Updater has been <strong>enabled</strong>.
        <br>Please flush your browser and server cache</p>
        </div>
        <?php
        /* Delete transient, only display this notice once. */
        delete_transient( 'jqu_admin_notice' );
    }
}
add_action( 'admin_notices', 'jqu_admin_notice_message' );

/**
 * Options Page
 *
 * @version 1.0.0
 * @since 3.5.0
 * @return void
 */

// Draws page
function jqu_render_plugin_settings_page() {
    ?>
    <h2>jQuery Updater Options</h2>
    <form action="options.php" method="post">
        <?php 
        settings_fields( 'jqu_options' );
        do_settings_sections( 'dbi_example_plugin' ); ?>

        <p>jQuery Updated is successfully installed and activated.
        <br>Now running jQuery 3.6.1</p>
    
        <hr> 

        <label for="jquery-version">Select jQuery version</label>
        <select id="jquery-version" name="jquery-version" disabled>
            <option value="3" selected>3.x</option>
            <option value="2">2.x</option>
            <option value="1">1.x</option>
            <option value="disabled">Disabled</option>
        </select>

        <label for="jquery-migrate">jQuery Migrate enabled: </label>
        <input type="checkbox" id="jquery-migrate" name="jquery-migrate" checked>

        <label for="jquery-slim">Slim: </label>
        <input type="checkbox" id="jquery-slim" name="jquery-slim">

        <label for="jquery-cdn">CDN: </label>
        <input type="checkbox" id="jquery-cdn" name="jquery-cdn">

        <label for="jquery-admin">Enqueue in Dashboard: </label>
        <input type="checkbox" id="jquery-admin" name="jquery-admin">

        <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( 'Save' ); ?>" disabled />
    </form>
    <?php
}

// Calls Menu
function jqu_add_settings_page() {
    add_options_page( 'jQuery Updater Options', 'jQuery Updater', 'manage_options', 'jquery-updater', 'jqu_render_plugin_settings_page' );
}
//add_action( 'admin_menu', 'jqu_add_settings_page' );