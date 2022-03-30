<!-- Download the plugin and paste the activation.php file to the inc folder.

Then create your action file to the inc folder -->

<?php

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function halim_activation(){

    $plugins = array(
        array(
            'name' => __('Advanced Custom Fields', 'halim'),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => __('Codestar Framework', 'halim'),
            'slug' => 'codestar-framework',
            'source' => 'https://github.com/Codestar/codestar-framework/archive/master.zip',
            'required' => true
        ),

        array(
          'name' => 'Custom Post',
          'slug' => 'custompost',
          'source' => get_template_directory().'/plugins/custompost.zip',
          'required' => true,
        ),

        array(
            'name' => __('Contact Form 7', 'halim'),
            'slug' => 'contact-form-7',
            'required' => true
        )
    );

    $config = array(
        'id' => 'halim_plugins_activation',
        'menu' => 'halim-plugins-activation',
        'parent_slug'  => 'themes.php',
        'has_notices'  => true

    );

    tgmpa($plugins, $config);
 
}
add_action('tgmpa_register', 'halim_activation');
require_once(get_template_directory().'/inc/meactivation.php');



// If you have local plugin then create folder plugin to the theme location and keep the plugin file in zip format. No specific plugin folder required.