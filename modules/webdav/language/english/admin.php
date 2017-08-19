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

define("LANGS_MA_INDEX_H1","Languages Supported");
define("LANGS_MA_INDEX_P1","This is a browsable list of the languages that are supported on the system, if you have a log in once your logged in you can place a request for any other languages you want to define and tabulate!");
define("LANGS_MA_TD_NAME","Language");
define("LANGS_MA_TD_FOLDER","Storage Folder/Path");
define("LANGS_MA_TD_CODE","utf8 Code");
define("LANGS_MA_TD_SPOKEN","Users with Spoken");
define("LANGS_MA_TD_WRITTEN","Users with Written");
define("LANGS_MA_TD_ACTION","Maintenance Actions");
define("LANGS_AM_HTACCESS_H1", "Apache2 ModRewrite .htaccess");
define("LANGS_AM_HTACCESS_P1", "This is the apache2 module for URL rewriting this goes in your <strong>".XOOPS_ROOT_PATH.DIRECTORY_SEPARATOR.".htaccess</strong> file");
define("LANGS_MA_ERROR_NOLANGUAGEFOUND", "Language not found under the identity number!");
define("LANGS_MA_LANGUAGES_DELETE", "Are you sure you wish to delete the language %s?");
define("LANGS_MA_DELETE_DONE","No trouble deleting the language %s!");
define("LANGS_MA_DELETE_ERROR","There was an error deleting the language %s!");
define("LANGS_MA_LANGUAGE_EDIT_H1", "Edit Language Resource");
define("LANGS_MA_LANGUAGE_EDIT_P1", "With the form below you will be able to edit the language resource as well as define and image or flag for the language!");
define("LANGS_MA_MISSINGNAMEORCODE","You must specify fields: <strong>name + code</strong> ~ intially the other fields are supplimentary!");
define("LANGS_MA_SAVE_DONE","No trouble saving the language %s!");
define("LANGS_MA_SAVE_ERROR","There was an error saving the language %s!");
define("LANGS_MA_REQUESTS_H1","Requests Waiting for Action");
define("LANGS_MA_REQUESTS_P1","These are the languages that are being requested to be added or declined on being supported by this portal!");
define("LANGS_MA_ACTION_DECLINE", "Decline Request");
define("LANGS_MA_ACTION_APPROVE", "Approve Request");
define("LANGS_MA_REQUEST_DECLINED_SUBJECT", "%s been declined for language type resource!");
define("LANGS_MA_REQUEST_APPROVED_SUBJECT", "%s been approved for language type resource!");
define("LANGS_MA_ERROR_NOREQUESTSWAITING", "No Languages are currently waiting for approval or declination on the Language Request queue!");
?>