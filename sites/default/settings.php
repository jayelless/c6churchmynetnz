<?php

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * IMPORTANT NOTE:
 * This file may have been set to read-only by the Drupal installation program.
 * If you make changes to this file, be sure to protect it again after making
 * your modifications. Failure to remove write permissions to this file is a
 * security risk.
 *
 * In order to use the selection rules below the multisite aliasing file named
 * sites/sites.php must be present. Its optional settings will be loaded, and
 * the aliases in the array $sites will override the default directory rules
 * below. See sites/example.sites.php for more information about aliases.
 *
 * The configuration directory will be discovered by stripping the website's
 * hostname from left to right and pathname from right to left. The first
 * configuration file found will be used and any others will be ignored. If no
 * other configuration file is found then the default configuration file at
 * 'sites/default' will be used.
 *
 * For example, for a fictitious site installed at
 * https://www.drupal.org:8080/mysite/test/, the 'settings.php' file is searched
 * for in the following directories:
 *
 * - sites/8080.www.drupal.org.mysite.test
 * - sites/www.drupal.org.mysite.test
 * - sites/drupal.org.mysite.test
 * - sites/org.mysite.test
 *
 * - sites/8080.www.drupal.org.mysite
 * - sites/www.drupal.org.mysite
 * - sites/drupal.org.mysite
 * - sites/org.mysite
 *
 * - sites/8080.www.drupal.org
 * - sites/www.drupal.org
 * - sites/drupal.org
 * - sites/org
 *
 * - sites/default
 *
 * Note that if you are installing on a non-standard port number, prefix the
 * hostname with that number. For example,
 * https://www.drupal.org:8080/mysite/test/ could be loaded from
 * sites/8080.www.drupal.org.mysite.test/.
 *
 * @see example.sites.php
 * @see \Drupal\Core\DrupalKernel::getSitePath()
 *
 * In addition to customizing application settings through variables in
 * settings.php, you can create a services.yml file in the same directory to
 * register custom, site-specific service definitions and/or swap out default
 * implementations with custom ones.
 */

/**
 * Database settings:
 */
$databases['default']['default'] = array (
  'database' => 'c6churchmynetnz',
  'username' => 'c6churchmynetnz',
  'password' => 'tUkc!7CUp',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);


/**
 * Location of the site configuration files.
 */
$config_directories['sync'] = 'sites/default/config/sync/d6AdfQwfnI3DFVlV';

/**
 * Settings:
 */

/**
 * The active installation profile.
 */
$settings['install_profile'] = 'openchurch';

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '2pjIluG2rx_nzCIjGFEfmCArvEgINJ0LzHMobPgEkH-i-aBm2-63cn9wgMrkpWmwXE_DT-jx0Q';

/**
 * Deployment identifier.
 */
# $settings['deployment_identifier'] = \Drupal::VERSION;

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * External access proxy settings:
 */
# $settings['http_client_config']['proxy']['http'] = 'http://proxy_user:proxy_pass@example.com:8080';
# $settings['http_client_config']['proxy']['https'] = 'http://proxy_user:proxy_pass@example.com:8080';
# $settings['http_client_config']['proxy']['no'] = ['127.0.0.1', 'localhost'];

/**
 * Reverse Proxy Configuration:
 */
# $settings['reverse_proxy'] = TRUE;
# $settings['reverse_proxy_addresses'] = array('a.b.c.d', ...);

# $settings['reverse_proxy_header'] = 'X_CLUSTER_CLIENT_IP';
# $settings['reverse_proxy_proto_header'] = 'X_FORWARDED_PROTO';
# $settings['reverse_proxy_host_header'] = 'X_FORWARDED_HOST';
# $settings['reverse_proxy_port_header'] = 'X_FORWARDED_PORT';
# $settings['reverse_proxy_forwarded_header'] = 'FORWARDED';

/**
 * Page caching:
 */
# $settings['omit_vary_cookie'] = TRUE;


/**
 * Cache TTL for client error (4xx) responses.
 */
# $settings['cache_ttl_4xx'] = 3600;


/**
 * Class Loader.
 */
# $settings['class_loader_auto_detect'] = FALSE;

/**
  if ($settings['hash_salt']) {
  $prefix = 'drupal.' . hash('sha256', 'drupal.' . $settings['hash_salt']);
  $apc_loader = new \Symfony\Component\ClassLoader\ApcClassLoader($prefix, $class_loader);
  unset($prefix);
  $class_loader->unregister();
  $apc_loader->register();
  $class_loader = $apc_loader;
}
*/

/**
 * Authorized file system operations:
 */
# $settings['allow_authorize_operations'] = FALSE;

/**
 * Default mode for directories and files written by Drupal.
 */
# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;

/**
 * Public file base URL:
 */
# $settings['file_public_base_url'] = 'http://downloads.example.com/files';

/**
 * Public file path:
 */
# $settings['file_public_path'] = 'sites/default/files';

/**
 * Private file path:
 */
# $settings['file_private_path'] = '';

/**
 * Session write interval:
 */
# $settings['session_write_interval'] = 180;

/**
 * String overrides:
 */
# $settings['locale_custom_strings_en'][''] = array(
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# );

/**
 * A custom theme for the offline page:
 */
# $settings['maintenance_theme'] = 'bartik';

/**
 * PHP settings:
 */
# ini_set('pcre.backtrack_limit', 200000);
# ini_set('pcre.recursion_limit', 200000);

/**
 * Active configuration settings.
 */
# $settings['bootstrap_config_storage'] = array('Drupal\Core\Config\BootstrapConfigStorageFactory', 'getFileStorage');

/**
 * Configuration overrides.
 */
# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';

/**
 * Fast 404 pages:
 */
# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * Override the default service container class.
 */
# $settings['container_base_class'] = '\Drupal\Core\DependencyInjection\Container';

/**
 * Override the default yaml parser class.
 */
# $settings['yaml_parser_class'] = NULL;

/**
 * Trusted host configuration.
 */
$settings['trusted_host_patterns'] = array(
  '^churchmynetnz(\.pallene\.lan)?$',
  '^(www\.)?church\.my\.net\.nz$',
);

/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * Load local development override configuration, if available.
 */

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
