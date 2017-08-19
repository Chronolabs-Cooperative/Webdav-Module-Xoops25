<?php
/**
 * XOOPS Webdav Propogating + Management module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     	General Public License version 3
 * @author      	Simon Roberts <wishcraft@users.sourceforge.net>
 * @subpackage  	webdav
 * @description 	Module for controlling and propogating webdav resources for XOOPS Users
 * @version			1.0.1
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/webdav
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/webdav
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/webdav
 * @link			http://internetfounder.wordpress.com
 */


if (!defined('XOOPS_ROOT_PATH')) { exit(); }

$modversion = array();
$modversion["name"]         			= WEBDAV_MI_NAME;
$modversion["version"]      			= WEBDAV_MI_VERSION;
$modversion["description"]  			= WEBDAV_MI_DESC;
$modversion["dirname"]      			= basename(__DIR__);
$modversion['releasedate'] 				= WEBDAV_MI_RELEASEDATE;
$modversion['status']      				= WEBDAV_MI_STATUS;
$modversion['description'] 				= WEBDAV_MI_DESCRIPTION;
$modversion['credits']     				= WEBDAV_MI_CREDITS;
$modversion['author']      				= WEBDAV_MI_AUTHORALIAS;
$modversion['help']        				= WEBDAV_MI_HELP;
$modversion['license']     				= WEBDAV_MI_LICENCE;
$modversion['official']    				= WEBDAV_MI_OFFICAL;
$modversion['image']       				= WEBDAV_MI_ICON;
$modversion['module_status'] 			= WEBDAV_MI_STATUS;
$modversion['website'] 					= WEBDAV_MI_WEBSITE;
$modversion['dirmoduleadmin'] 			= WEBDAV_MI_ADMINMODDIR;
$modversion['icons16'] 					= WEBDAV_MI_ADMINICON16;
$modversion['icons32'] 					= WEBDAV_MI_ADMINICON32;
$modversion['release_info'] 			= WEBDAV_MI_RELEASEINFO;
$modversion['release_file'] 			= WEBDAV_MI_RELEASEFILE;
$modversion['release_date'] 			= WEBDAV_MI_RELEASEDATE;
$modversion['author_realname'] 			= WEBDAV_MI_AUTHORREALNAME;
$modversion['author_website_url'] 		= WEBDAV_MI_AUTHORWEBSITE;
$modversion['author_website_name'] 		= WEBDAV_MI_AUTHORSITENAME;
$modversion['author_email'] 			= WEBDAV_MI_AUTHOREMAIL;
$modversion['author_word'] 				= WEBDAV_MI_AUTHORWORD;
$modversion['status_version'] 			= WEBDAV_MI_VERSION;
$modversion['warning'] 					= WEBDAV_MI_WARNINGS;
$modversion['demo_site_url'] 			= WEBDAV_MI_DEMO_SITEURL;
$modversion['demo_site_name'] 			= WEBDAV_MI_DEMO_SITENAME;
$modversion['support_site_url'] 		= WEBDAV_MI_SUPPORT_SITEURL;
$modversion['support_site_name'] 		= WEBDAV_MI_SUPPORT_SITENAME;
$modversion['submit_feature'] 			= WEBDAV_MI_SUPPORT_FEATUREREQUEST;
$modversion['submit_bug'] 				= WEBDAV_MI_SUPPORT_BUGREPORTING;
$modversion['people']['developers'] 	= explode("|", WEBDAV_MI_DEVELOPERS);
$modversion['people']['testers']		= explode("|", WEBDAV_MI_TESTERS);
$modversion['people']['translaters']	= explode("|", WEBDAV_MI_TRANSLATERS);
$modversion['people']['documenters']	= explode("|", WEBDAV_MI_DOCUMENTERS);

// Requirements
$modversion['min_php']        			= '7.0';
$modversion['min_xoops']      			= '2.5.8';
$modversion['min_db']         			= array('mysql' => '5.0.7', 'mysqli' => '5.0.7');
$modversion['min_admin']      			= '1.1';

// database tables
$modversion["sqlfile"]["mysql"] 		= "sql/mysql.sql";
$modversion["tables"] 					= array(
												"webdav_callbacks",
												"webdav_clients",
												"webdav_files",
												"webdav_folders",
												"webdav_webdavs"
											);

// Main
$modversion['hasMain'] 					= WEBDAV_MI_HASMAIN;

// Admin
$modversion['hasAdmin'] 				= WEBDAV_MI_HASADMIN;
$modversion['adminindex']  				= "admin/index.php";
$modversion['adminmenu']   				= "admin/menu.php";
$modversion['system_menu'] 				= 1;

// Search
$modversion["hasSearch"] 				= WEBDAV_MI_HASSEARCH;
$modversion['search']['file'] 			= "include/search.inc.php";
$modversion['search']['func'] 			= "webdav_search";

// Comments
$modversion["hasComments"] 				= WEBDAV_MI_HASCOMMENTS;

//$modversion["onInstall"] 				= "include/action.module.php";
//$modversion["onUpdate"] 				= "include/action.module.php";
//$modversion["onUninstall"] 				= "include/action.module.php";

// Use smarty
$modversion["use_smarty"] 				= true;

// Add extra menu items
if (is_object($GLOBALS['xoopsUser']))
{
	$modversion['sub'][1]['name'] = WEBDAV_MI_MENU_CLIENTS;
	$modversion['sub'][1]['url']  = "clients.php";
}

/**
* Templates
*/
$modversion['templates']    			= array();
$modversion['templates'][1]    			= array(
													'file'          => 'webdav_index.html',
													'description'   => 'Index page of webdav module'
											);

$modversion['templates'][1]    			= array(
													'file'          => 'webdav_clients.html',
													'description'   => 'Client Management of a Webdav with Form'
											);
// Blocks
$modversion['blocks']    				= array();

// Config categories
$modversion['configcat']['seo']['name']        			= WEBDAV_MI_CONFCAT_SEO;
$modversion['configcat']['seo']['description'] 			= WEBDAV_MI_CONFCAT_SEO_DESC;
$modversion['configcat']['users']['name']        		= WEBDAV_MI_CONFCAT_USERS;
$modversion['configcat']['users']['description'] 		= WEBDAV_MI_CONFCAT_USERS_DESC;
$modversion['configcat']['paths']['name']        		= WEBDAV_MI_CONFCAT_PATHS;
$modversion['configcat']['paths']['description'] 		= WEBDAV_MI_CONFCAT_PATHS_DESC;

// Configs
$modversion["config"] 					= array();
$modversion["config"][] 				= array(
													"name"          => "htaccess",
													"title"         => "WEBDAV_MI_HTACCESS",
													"description"   => "WEBDAV_MI_HTACCESS_DESC",
													"formtype"      => "yesno",
													"valuetype"     => "int",
													"default"       => false,
													"category"		=> "seo"
											);

$modversion["config"][] 				= array(
													"name"          => "base",
													"title"         => "WEBDAV_MI_BASE",
													"description"   => "WEBDAV_MI_BASE_DESC",
													"formtype"      => "text",
													"valuetype"     => "text",
													"default"       => "webdav",
													"category"		=> "seo"
											);

$modversion["config"][] 				= array(
													"name"          => "html",
													"title"         => "WEBDAV_MI_HTML",
													"description"   => "WEBDAV_MI_HTML_DESC",
													"formtype"      => "text",
													"valuetype"     => "text",
													"default"       => ".html",
													"category"		=> "seo"
											);

$modversion["config"][] 				= array(
													"name"          => "items_perpage",
													"title"         => "WEBDAV_MI_ITEMSPERPAGE",
													"description"   => "WEBDAV_MI_ITEMSPERPAGE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "int",
													"default"       => 25,
													"category"		=> "seo"
											);

$modversion["config"][] 				= array(
													"name"          => "awstats",
													"title"         => "WEBDAV_MI_AWSTATS",
													"description"   => "WEBDAV_MI_AWSTATS_DESC",
													"formtype"      => "yesno",
													"valuetype"     => "int",
													"default"       => false,
													"category"		=> "seo"
											);

$modversion["config"][] 				= array(
													"name"          => "ssl_support",
													"title"         => "WEBDAV_MI_SSL_SUPPORT",
													"description"   => "WEBDAV_MI_SSL_SUPPORT_DESC",
													"formtype"      => "yesno",
													"valuetype"     => "int",
													"default"       => false,
													"category"		=> "seo"
											);

$modversion["config"][] 				= array(
													"name"          => "root_hostname",
													"title"         => "WEBDAV_MI_ROOT_HOSTNAME",
													"description"   => "WEBDAV_MI_ROOT_HOSTNAME_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => strtolower(basename(__DIR__) . '.' . parse_url(XOOPS_URL, PHP_URL_HOST)),
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "root_path",
													"title"         => "WEBDAV_MI_ROOT_PATH",
													"description"   => "WEBDAV_MI_ROOT_PATH_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => strtolower('/var/www/' . basename(__DIR__) . '.' . parse_url(XOOPS_URL, PHP_URL_HOST)),
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "apache2_config_path",
													"title"         => "WEBDAV_MI_APACHE2_CONFIG_PATH",
													"description"   => "WEBDAV_MI_APACHE2_CONFIG_PATH_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => '/etc/apache2/sites-available',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "awstats_config_path",
													"title"         => "WEBDAV_MI_AWSTATS_CONFIG_PATH",
													"description"   => "WEBDAV_MI_AWSTATS_CONFIG_PATH_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => '/etc/awstats',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "htpasswd_path",
													"title"         => "WEBDAV_MI_HTPASSWD_PATH",
													"description"   => "WEBDAV_MI_HTPASSWD_PATH_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => strtolower('/var/www/' . basename(__DIR__) . '.' . parse_url(XOOPS_URL, PHP_URL_HOST) . DIRECTORY_SEPARATOR . '.htpasswd'),
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "temporary_path",
													"title"         => "WEBDAV_MI_TEMPORARY_PATH",
													"description"   => "WEBDAV_MI_TEMPORARY_PATH_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => '/tmp',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_data",
													"title"         => "WEBDAV_MI_FOLDER_DATA",
													"description"   => "WEBDAV_MI_FOLDER_DATA_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => basename(__DIR__),
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_core",
													"title"         => "WEBDAV_MI_FOLDER_CORE",
													"description"   => "WEBDAV_MI_FOLDER_CORE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'core',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_modules",
													"title"         => "WEBDAV_MI_FOLDER_MODULES",
													"description"   => "WEBDAV_MI_FOLDER_MODULES_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'modules',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_themes",
													"title"         => "WEBDAV_MI_FOLDER_THEMES",
													"description"   => "WEBDAV_MI_FOLDER_THEMES_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'themes',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_documentation",
													"title"         => "WEBDAV_MI_FOLDER_DOCUMENTATION",
													"description"   => "WEBDAV_MI_FOLDER_DOCUMENTATION_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'documents',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_languages",
													"title"         => "WEBDAV_MI_FOLDER_LANGUAGES",
													"description"   => "WEBDAV_MI_FOLDER_LANGUAGES_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'translating',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_testing",
													"title"         => "WEBDAV_MI_FOLDER_TESTING",
													"description"   => "WEBDAV_MI_FOLDER_TESTING_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'testing',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_core_verion",
													"title"         => "WEBDAV_MI_FOLDER_CORE_VERSION",
													"description"   => "WEBDAV_MI_FOLDER_CORE_VERSION_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'XOOPS %version%',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_module_verion",
													"title"         => "WEBDAV_MI_FOLDER_MODULE_VERSION",
													"description"   => "WEBDAV_MI_FOLDER_MODULE_VERSION_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => '%name% %version%',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_theme_verion",
													"title"         => "WEBDAV_MI_FOLDER_THEME_VERSION",
													"description"   => "WEBDAV_MI_FOLDER_THEME_VERSION_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => '%name% %version%',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "folder_staging",
													"title"         => "WEBDAV_MI_FOLDER_STAGING",
													"description"   => "WEBDAV_MI_FOLDER_STAGING_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'staging',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "pause_scan_file",
													"title"         => "WEBDAV_MI_PAUSE_SCAN_FILE",
													"description"   => "WEBDAV_MI_PAUSE_SCAN_FILE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => '.offline',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "license_file",
													"title"         => "WEBDAV_MI_LICENSE_FILE",
													"description"   => "WEBDAV_MI_LICENSE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'LICENSE',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "academic_license_file",
													"title"         => "WEBDAV_MI_ACADEMIC_LICENSE_FILE",
													"description"   => "WEBDAV_MI_ACADEMIC_LICENSE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'ACADEMIC',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "readme_file",
													"title"         => "WEBDAV_MI_README_FILE",
													"description"   => "WEBDAV_MI_README_FILE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'README.md',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "releases_project_file",
													"title"         => "WEBDAV_MI_RELEASES_PROJECT_FILE",
													"description"   => "WEBDAV_MI_RELEASES_PROJECT_FILE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'xoops-releases.json',
													"category"		=> "paths"
											);

$modversion["config"][] 				= array(
													"name"          => "api_url_profile_field",
													"title"         => "WEBDAV_MI_API_URL_PROFILE_FIELD",
													"description"   => "WEBDAV_MI_API_URL_PROFILE_FIELD_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => "callback_api_url",
													"category"		=> "users"
											);
$modversion["config"][] 				= array(
													"name"          => "populate_groups",
													"title"         => "WEBDAV_MI_POPULATEGROUPS",
													"description"   => "WEBDAV_MI_POPULATEGROUPS_DESC",
													"formtype"      => "group_multi",
													"valuetype"     => "array",
													"default"       => explode(",", XOOPS_GROUPS_EXTRA),
													"category"		=> "users"
											);
/**
 * Have to enable on ubuntu/debian the following shell command
 *
 * $ sudo a2enmod ssl
 *
 */
$modversion["config"][] 				= array(
													"name"          => "ssl_cert_file",
													"title"         => "WEBDAV_MI_SSL_CERTIFICATE_FILE",
													"description"   => "WEBDAV_MI_SSL_CERTIFICATE_FILE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => "/path/to/" . basename(__DIR__) . '.' . parse_url(XOOPS_URL, PHP_URL_HOST) . ".crt",
													"category"		=> "users"
);

$modversion["config"][] 				= array(
													"name"          => "ssl_cert_key",
													"title"         => "WEBDAV_MI_SSL_CERTIFICATE_KEY",
													"description"   => "WEBDAV_MI_SSL_CERTIFICATE_KEY_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => "/path/to/" . basename(__DIR__) . '.' . parse_url(XOOPS_URL, PHP_URL_HOST) . ".key",
													"category"		=> "users"
);
											
$modversion["config"][] 				= array(
													"name"          => "ssl_cert_chain",
													"title"         => "WEBDAV_MI_SSL_CERTIFICATE_CHAIN",
													"description"   => "WEBDAV_MI_SSL_CERTIFICATE_CHAIN_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => "/path/to/" . parse_url(XOOPS_URL, PHP_URL_HOST) . ".crt",
													"category"		=> "users" 
);
/**
 * Have to install on ubuntu/debian the following shell command
 * 
 * $ sudo apt-get install apache2-utils
 * 
 */
$modversion["config"][] 				= array(
													"name"          => "webdav_htpasswd",
													"title"         => "WEBDAV_MI_WEBDAV_HTPASSWD",
													"description"   => "WEBDAV_MI_WEBDAV_HTPASSWD_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => "htpasswd -c %s %s %s",
													"category"		=> "users"
											);

$modversion["config"][] 				= array(
													"name"          => "webdav_htpasswd_title",
													"title"         => "WEBDAV_MI_WEBDAV_HTPASSWD_TITLE",
													"description"   => "WEBDAV_MI_WEBDAV_HTPASSWD_TITLE_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => "Username+Password set by '%s' on " . $GLOBALS['xoopsConfig']['sitename'],
													"category"		=> "users"
											);

$modversion["config"][] 				= array(
													"name"          => "hostname_element",
													"title"         => "WEBDAV_MI_HOSTNAME_ELEMENT",
													"description"   => "WEBDAV_MI_HOSTNAME_ELEMENT_DESC",
													"formtype"      => "radio",
													"valuetype"     => "text",
													"default"       => "hashinfo",
													"options"       => array(	"hashinfo" => WEBDAV_MI_HOSTNAME_ELEMENT_HASHINFO,
																				"username" => WEBDAV_MI_HOSTNAME_ELEMENT_USERNAME	),
													"category"		=> "users"
											);

$modversion["config"][] 				= array(
													"name"          => "permissiables_files",
													"title"         => "WEBDAV_MI_PERMISSIABLES_FILES",
													"description"   => "WEBDAV_MI_PERMISSIABLES_FILES_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'chmod -Rf 0777 %s',
													"category"		=> "users"
											);
		
$modversion["config"][] 				= array(
													"name"          => "permissiables_apache2",
													"title"         => "WEBDAV_MI_PERMISSIABLES_APACHE2",
													"description"   => "WEBDAV_MI_PERMISSIABLES_APACHE2_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'chown -Rf www-data:www-data %s',
													"category"		=> "users"
											);

$modversion["config"][] 				= array(
													"name"          => "permit_site_enabled",
													"title"         => "WEBDAV_MI_PERMIT_SITE_ENABLED",
													"description"   => "WEBDAV_MI_PERMIT_SITE_ENABLED_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'a2ensite %s',
													"category"		=> "users"
											);

$modversion["config"][] 				= array(
													"name"          => "permit_site_disabled",
													"title"         => "WEBDAV_MI_PERMIT_SITE_DISABLED",
													"description"   => "WEBDAV_MI_PERMIT_SITE_DISABLED_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'a2dissite %s',
													"category"		=> "users"
											);

$modversion["config"][] 				= array(
													"name"          => "reload_apache2",
													"title"         => "WEBDAV_MI_RELOAD_APACHE2",
													"description"   => "WEBDAV_MI_RELOAD_APACHE2_DESC",
													"formtype"      => "textbox",
													"valuetype"     => "text",
													"default"       => 'service apache2 reload',
													"category"		=> "users"
											);
// Notification

$modversion["hasNotification"] 			= 0;
$modversion["notification"] 			= array();
?>