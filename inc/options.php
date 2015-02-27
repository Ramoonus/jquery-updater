<?php
/**
 * Options Page
 * @since 2.1.4
 */

/**
 * Enable Localisation
 * @since 2.1.1
 * @return void
 */
function jqu_init_localization()
{
    load_plugin_textdomain('jquery_updater', false, basename(dirname(__FILE__)) . '/languages');
}

add_action('plugins_loaded', 'jqu_init_localization');

/* generated using http://wpsettingsapi.jeroensormani.com/ WP Settings API Generator */
add_action('admin_menu', 'jqu_add_admin_menu');
add_action('admin_init', 'jqu_settings_init');

/**
 * Create Admin Menu (link to options page )
 * @since 2.1.4
 * @return void
 */
function jqu_add_admin_menu()
{

    add_menu_page('jQuery-Updater', 'jQuery-Updater', 'manage_options', 'jquery-updater', 'jquery-updater_options_page');

}

/**
 * Create options page using WP Settings API
 * @since 2.1.4
 * @return void
 */
function jqu_settings_init()
{

    register_setting('pluginPage', 'jqu_settings');

    add_settings_section(
        'jqu_pluginPage_section',
        __('Your section description', 'jquery-updater'),
        'jqu_settings_section_callback',
        'pluginPage'
    );

    add_settings_field(
        'jqu_checkbox_field_0',
        __('Settings field description', 'jquery-updater'),
        'jqu_checkbox_field_0_render',
        'pluginPage',
        'jqu_pluginPage_section'
    );

    add_settings_field(
        'jqu_select_field_1',
        __('Settings field description', 'jquery-updater'),
        'jqu_select_field_1_render',
        'pluginPage',
        'jqu_pluginPage_section'
    );

    add_settings_field(
        'jqu_checkbox_field_2',
        __('Settings field description', 'jquery-updater'),
        'jqu_checkbox_field_2_render',
        'pluginPage',
        'jqu_pluginPage_section'
    );

    add_settings_field(
        'jqu_select_field_3',
        __('Settings field description', 'jquery-updater'),
        'jqu_select_field_3_render',
        'pluginPage',
        'jqu_pluginPage_section'
    );

    add_settings_field(
        'jqu_checkbox_field_4',
        __('Settings field description', 'jquery-updater'),
        'jqu_checkbox_field_4_render',
        'pluginPage',
        'jqu_pluginPage_section'
    );


}


function jqu_checkbox_field_0_render()
{

    $options = get_option('jqu_settings');
    ?>
    <input type='checkbox'
           name='jqu_settings[jqu_checkbox_field_0]' <?php checked($options['jqu_checkbox_field_0'], 1); ?> value='1'>
<?php

}


function jqu_select_field_1_render()
{

    $options = get_option('jqu_settings');
    ?>
    <select name='jqu_settings[jqu_select_field_1]'>
        <option value='1' <?php selected($options['jqu_select_field_1'], 1); ?>>Option 1</option>
        <option value='2' <?php selected($options['jqu_select_field_1'], 2); ?>>Option 2</option>
    </select>

<?php

}


function jqu_checkbox_field_2_render()
{

    $options = get_option('jqu_settings');
    ?>
    <input type='checkbox'
           name='jqu_settings[jqu_checkbox_field_2]' <?php checked($options['jqu_checkbox_field_2'], 1); ?> value='1'>
<?php

}


function jqu_select_field_3_render()
{

    $options = get_option('jqu_settings');
    ?>
    <select name='jqu_settings[jqu_select_field_3]'>
        <option value='1' <?php selected($options['jqu_select_field_3'], 1); ?>>Option 1</option>
        <option value='2' <?php selected($options['jqu_select_field_3'], 2); ?>>Option 2</option>
    </select>

<?php

}


function jqu_checkbox_field_4_render()
{

    $options = get_option('jqu_settings');
    ?>
    <input type='checkbox'
           name='jqu_settings[jqu_checkbox_field_4]' <?php checked($options['jqu_checkbox_field_4'], 1); ?> value='1'>
<?php

}


function jqu_settings_section_callback()
{

    echo __('This section description', 'jquery-updater');

}

/**
 * Save options
 * @since 2.1.4
 */
function jqu_options_page()
{

    ?>
    <form action='options.php' method='post'>

        <h2>jQuery-Updater</h2>

        <?php
        settings_fields('pluginPage');
        do_settings_sections('pluginPage');
        submit_button();
        ?>

    </form>
<?php

}

?>
