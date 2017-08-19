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

define("LANGS_MN_INDEX_TITLE", "Supported Languages: %s of %s");
define("LANGS_MN_INDEX_H1","Languages Supported");
define("LANGS_MN_INDEX_P1","This is a browsable list of the languages that are supported on the system, if you have a log in once your logged in you can place a request for any other languages you want to define and tabulate!");
define("LANGS_MN_REQUESTS_H1","Request Additional Language");
define("LANGS_MN_REQUESTS_P1","Fill out the form below to request a new language to be supported by this portal, you will have to wait till they are approved before it becomes available!");
define("LANGS_MN_TD_NAME","Language");
define("LANGS_MN_TD_FOLDER","Storage Folder/Path");
define("LANGS_MN_TD_CODE","utf8 Code");
define("LANGS_MN_TD_SPOKEN", "Users with Spoken");
define("LANGS_MN_TD_WRITTEN", "Users with Written");
define("LANGS_MN_NEEDTOLOGIN", "You need to be logged in to use this feature!");
define("LANGS_MN_MISSINGNAMEORCODE","You must specify fields: <strong>name + code</strong> ~ intially the other fields are supplimentary!");

// Email Subjects
define("LANGS_MN_REQUEST_SUBJECT", "%s ~ Addition Languge Requested added to Portal");
?>