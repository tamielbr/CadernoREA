<?php
/**
 * Pico configuration
 *
 * This is the configuration file for {@link Pico}. It comes loaded with the
 * default values, which can be found in {@link Pico::getConfig()} (see
 * {@path "lib/Pico.php"}).
 *
 * To override any of the default settings below, copy this file to
 * {@path "config/config.php"}, uncomment the line, then make and
 * save your changes.
 *
 * @author  Gilbert Pellegrom
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */

/*
 * BASIC
 */
 $config['site_title'] = 'Caderno REA';              // Site title
// $config['base_url'] = '';                    // Override base URL (e.g. http://example.com)
// $config['rewrite_url'] = null;               // A boolean indicating forced URL rewriting

/*
 * THEME
 */
 $config['theme'] = 'simpletwo';                // Set the theme (defaults to "default")

// $config['twig_config'] = array(              // Twig settings
//     'cache' => false,                        // To enable Twig caching change this to a path to a writable directory
//     'autoescape' => false,                   // Auto-escape Twig vars
//     'debug' => false                         // Enable Twig debug
// );

/*
 * CONTENT
 */
$config['date_format'] = '%Y-%m-%d';            // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
$config['pages_order_by'] = 'date';         // Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';              // Order pages "asc" or "desc"
$config['content_dir'] = 'content/';  // Content directory
$config['content_ext'] = '.md';              // File extension of content files to serve

/*
 * TIMEZONE
 */
// $config['timezone'] = 'UTC';                 // Timezone may be required by your php install

/*
 * PLUGINS
 */
// $config['DummyPlugin.enabled'] = false;      // Force DummyPlugin to be disabled

// $config['pages_order_by'] = 'position';             // Needed by PicoCategorizedPages
// $config['pages_order'] = 'asc';                 // Order pages "asc" or "desc"
// $config['categories_order'] = 'asc';              // Order categories "asc" or "desc"
// $config['PicoCategorizedPages.enabled'] = true;    // Force PicoCategorizedPages to be enabled

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';         // Can be accessed by {{ config.custom_setting }} in a theme
