<?php

require_once dirname(dirname(__FILE__)) . '/phpunit/includes/functions.php';

function _manually_load_environment() {

    // Add your theme …
    switch_theme('erictheme');

    // Update array with plugins to include ...
    $plugins_to_active = array(
        // path to plugins to activate
        'your-plugin/your-plugin.php'
    );

    update_option( 'active_plugins', $plugins_to_active );

}
tests_add_filter( 'muplugins_loaded', '_manually_load_environment' );

require dirname(dirname(__FILE__)) . '/phpunit/includes/bootstrap.php';