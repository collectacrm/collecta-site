<?php

/**** Temporary store for hardcoded stuff to make CMS backwards compatible *****/
error_reporting(247);
if(!defined("ENV")) 					define("ENV", $env);
if(!defined("WAX_ROOT")) 			define('WAX_ROOT', dirname(__DIR__)."/" );
if(!defined("APP_DIR")) 			define('APP_DIR', WAX_ROOT . "app/");
if(!defined("MODEL_DIR")) 		define('MODEL_DIR' , WAX_ROOT.'app/model/');
if(!defined("CONTROLLER_DIR"))define('CONTROLLER_DIR', WAX_ROOT.'app/controller/');
if(!defined("FORMS_DIR")) 		define('FORMS_DIR', WAX_ROOT.'app/forms/');
if(!defined("CONFIG_DIR")) 		define('CONFIG_DIR' , WAX_ROOT.'app/config/');
if(!defined("VIEW_DIR")) 			define('VIEW_DIR', WAX_ROOT.'app/view/');
if(!defined("APP_LIB_DIR")) 	define('APP_LIB_DIR', WAX_ROOT.'app/lib/');
if(!defined("CACHE_DIR")) 		define('CACHE_DIR', WAX_ROOT.'tmp/cache/');
if(!defined("LOG_DIR")) 			define('LOG_DIR', WAX_ROOT.'tmp/log/');
if(!defined("SESSION_DIR")) 	define('SESSION_DIR', WAX_ROOT.'tmp/session/');
if(!defined("PUBLIC_DIR")) 		define('PUBLIC_DIR', WAX_ROOT.'public/');
if(!defined("SCRIPT_DIR")) 		define('SCRIPT_DIR', PUBLIC_DIR.'javascripts/');
if(!defined("STYLE_DIR")) 		define('STYLE_DIR', PUBLIC_DIR.'stylesheets/');
if(!defined("PLUGIN_DIR")) 		define('PLUGIN_DIR', WAX_ROOT.'plugins/');
if(!defined("FRAMEWORK_DIR")) define("FRAMEWORK_DIR", dirname(__FILE__));
if(!defined("CONTENT_MODEL")) define("CONTENT_MODEL","CContent");
