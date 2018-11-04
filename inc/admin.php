<?php
// If this file is called directly, abort.
defined('ABSPATH') or exit();

/**
 * Generate the admin page
 * 
 * version 1.0.0
 */
function jqu_plugin_settings()
{
    ?>
<div class="wrap">
	<h1><?php echo __('WP jQuery Updater', "jquery-updater");?></h1>
        
        <?php
    // On settings changed, display
    if (isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true') :
        echo '<div id="setting-error-settings_updated" class="updated settings-error">
            <p><strong>' . __("Settings saved", "jquery-updater") . '</strong></p>
         </div>';
        endif;

    ?>
        <p><?php echo __('WP jQuery Updater settings, you are able to enter your own version of jQuery or enter a CDN.', "jquery-updater");?></p>


	<form method="post" action="options.php">
            <?php settings_fields('jqu_plugin_settings'); ?>
            <?php do_settings_sections('jqu_plugin_settings'); ?>
            <table id="jqu_plugin_settings"
			class="form-table form-settings">
			<tr valign="top">
				<th scope="row"><?php echo __('jQuery URL', "jquery-updater");?></th>
				<td><input type="text" name="wpj_updater_jquery_url"
					value="<?php echo get_option('wpj_updater_jquery_url'); ?>"
					placeholder="<?php echo WPJ_UPDATER_PLUGIN_JQUERY; ?>" disabled></td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php echo __('jQuery Migrate URL', "jquery-updater");?></th>
				<td><input type="text" name="wpj_updater_jquery_migrate_url"
					value="<?php echo get_option('wpj_updater_jquery_migrate_url'); ?>"
					placeholder="<?php echo WPJ_UPDATER_PLUGIN_JQUERY_MIGRATE; ?>" disabled></td>
			</tr>
		</table>
            <?php submit_button(); ?>

        </form>
</div>
<?php
}

?>