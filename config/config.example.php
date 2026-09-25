<?php
/**
 * DVSwitch Universal Reflector Dashboard Configuration (EXAMPLE)
 *
 * This is the tracked template. Copy it to config/config.php (or any
 * config/<ProfileName>.php) and edit the values, or simply run:
 *
 *   php setup.php /opt
 *
 * Every config/*.php file becomes a switchable profile in the dashboard.
 */

date_default_timezone_set('UTC');

// --- 1. Branding & Identity ---
define("DASHBOARD_TITLE", "P25 Reflector");
define("DASHBOARD_SUBTITLE", "Real-time P25 Monitoring");
define("LOGO", "DVSwitch.png");

// --- 2. Reflector Connection ---
define("REFLECTOR_LOG_PREFIX", "P25Reflector");
define("REFLECTOR_LOG_PATH", "/var/log/mmdvm");
define("REFLECTOR_INI_PATH", "/opt/P25Reflector/");
define("REFLECTOR_INI_FILE", "P25Reflector.ini");
define("REFLECTOR_BIN_PATH", "/opt/P25Reflector/");

// --- 3. UI Features ---
define("SHOWQRZ", "1");
define("SHOW_SYSTEM_STATS", "1");
define("SHOW_NETWORK_PULSE", "1");
define("GDPR_MODE", "0");  // Set to "1" to anonymize callsigns for GDPR compliance

// --- 4. Advanced Settings ---
define("API_REFRESH_INTERVAL", "2000");
define("LAST_HEARD_COUNT", "50");
define("TEMPERATUREHIGHLEVEL", "60");
?>