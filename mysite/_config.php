<?php

global $project;
$project = 'mysite';

global $database;
if(defined('SS_DATABASE_NAME') && SS_DATABASE_NAME) {
	$database = SS_DATABASE_NAME;
} else {
	$database = 'SS_ss3demo';
}

require_once('conf/ConfigureFromEnv.php');

MySQLDatabase::set_connection_charset('utf8');

// Set the current theme. More themes can be downloaded from
// http://www.silverstripe.org/themes/
SSViewer::set_theme('simple');

// Disable BasicAuth by default
BasicAuth::protect_entire_site(false);

// Set the site locale
i18n::set_locale('en_US');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();


LeftAndMain::require_javascript('mysite/javascript/usabilla.js');
