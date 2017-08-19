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

// Module definition headers for xoops_version.php
define('WEBDAV_MI_NAME','Webdav Control');
define('WEBDAV_MI_VERSION','1.01');
define('WEBDAV_MI_RELEASEDATE','30-07-2017');
define('WEBDAV_MI_STATUS','release');
define('WEBDAV_MI_DESCRIPTION','User Webdav Controller');
define('WEBDAV_MI_CREDITS','Mynamesnot, Wishcraft');
define('WEBDAV_MI_AUTHORALIAS','wishcraft');
define('WEBDAV_MI_HELP','page=help');
define('WEBDAV_MI_LICENCE','gpl3+academic');
define('WEBDAV_MI_OFFICAL','1');
define('WEBDAV_MI_ICON','images/mlogo.png');
define('WEBDAV_MI_WEBSITE','http://au.syd.snails.email');
define('WEBDAV_MI_ADMINMODDIR','/Frameworks/moduleclasses/moduleadmin');
define('WEBDAV_MI_ADMINICON16','../../Frameworks/moduleclasses/icons/16');
define('WEBDAV_MI_ADMINICON32','../../Frameworks/moduleclasses/icons/32');
define('WEBDAV_MI_RELEASEINFO',__DIR__ . DIRECTORY_SEPARATOR . 'release.nfo');
define('WEBDAV_MI_RELEASEXCODE',__DIR__ . DIRECTORY_SEPARATOR . 'release.xcode');
define('WEBDAV_MI_RELEASEFILE','https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/webdav/xoops2.5_webdav_1.03.7z/download');
define('WEBDAV_MI_AUTHORREALNAME','Simon Antony Roberts');
define('WEBDAV_MI_AUTHORWEBSITE','http://internetfounder.wordpress.com');
define('WEBDAV_MI_AUTHORSITENAME','Exhumations from the desks of Chronographics');
define('WEBDAV_MI_AUTHOREMAIL','simon@snails.email');
define('WEBDAV_MI_AUTHORWORD','');
define('WEBDAV_MI_WARNINGS','');
define('WEBDAV_MI_DEMO_SITEURL','');
define('WEBDAV_MI_DEMO_SITENAME','');
define('WEBDAV_MI_SUPPORT_SITEURL','');
define('WEBDAV_MI_SUPPORT_SITENAME','');
define('WEBDAV_MI_SUPPORT_FEATUREREQUEST','');
define('WEBDAV_MI_SUPPORT_BUGREPORTING','');
define('WEBDAV_MI_DEVELOPERS','Simon Roberts (Wishcraft)'); // Sperated by a Pipe (|)
define('WEBDAV_MI_TESTERS',''); // Sperated by a Pipe (|)
define('WEBDAV_MI_TRANSLATERS',''); // Sperated by a Pipe (|)
define('WEBDAV_MI_DOCUMENTERS',''); // Sperated by a Pipe (|)
define('WEBDAV_MI_HASSEARCH',false);
define('WEBDAV_MI_HASMAIN',true);
define('WEBDAV_MI_HASADMIN',true);
define('WEBDAV_MI_HASCOMMENTS',false);

// Admin Menu
define("WEBDAV_MI_ADMENU_INDEX","Admin Homepage");
define("WEBDAV_MI_ADMENU_LANGUAGES","Languages Admin");
define("WEBDAV_MI_ADMENU_REQUESTS","Language Requests");
define("WEBDAV_MI_ADMENU_HTACCESS", ".htaccess Config");
define("WEBDAV_MI_ADMENU_ABOUT", "About Languages");

//Main Menu
define("WEBDAV_MI_MENU_REQUESTS", "Request New Language");

// Configguration Categories
define('WEBDAV_MI_CONFCAT_SEO','Search Engine Optimization');
define('WEBDAV_MI_CONFCAT_SEO_DESC','');

// Configuration Descriptions and Titles
define('WEBDAV_MI_HTACCESS','.htaccess SEO URL');
define('WEBDAV_MI_HTACCESS_DESC','');
define('WEBDAV_MI_BASE','Base .htaccess path');
define('WEBDAV_MI_BASE_DESC','');
define('WEBDAV_MI_HTML','Extension for HTML output with SEO URL');
define('WEBDAV_MI_HTML_DESC','');
define("WEBDAV_MI_ITEMSPERPAGE","Items per page");
define("WEBDAV_MI_ITEMSPERPAGE_DESC","");

?>