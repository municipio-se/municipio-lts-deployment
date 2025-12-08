<?php

/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

Config::define("SAVEQUERIES", true);
Config::define("WP_DEBUG", true);
Config::define("WP_DEBUG_DISPLAY", false);
$debug_log = env("WP_DEBUG_LOG") ?? "debug.log";
Config::define(
  "WP_DEBUG_LOG",
  $debug_log ? dirname(__FILE__) . "/../../" . $debug_log : false,
);
Config::define("WP_DISABLE_FATAL_ERROR_HANDLER", true);
Config::define("SCRIPT_DEBUG", true);
Config::define("DISALLOW_INDEXING", true);

ini_set("display_errors", "1");

// Enable plugin and theme updates and installation from the admin
Config::define("DISALLOW_FILE_MODS", false);

// Plugins
Config::define("ACF_LITE", env("ACF_LITE") ?? false);
