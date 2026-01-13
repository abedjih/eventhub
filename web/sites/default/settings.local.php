<?php

/**
 * @file
 * File settings.local.php.
 */

// Set $settings['config_sync_directory'] if not set in settings.php.
$settings['config_sync_directory'] = '../config/sync';

// Enable local development services.
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
// Disable caching for local development.
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
// Show all error messages on the site.
$config['system.logging']['error_level'] = 'verbose';
