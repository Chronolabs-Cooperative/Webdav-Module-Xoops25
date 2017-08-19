<?php
/**
 * XOOPS Languages management module
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
 * @subpackage  	languages
 * @description 	Module for fitting languages on xoops
 * @version			1.0.1
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.5/Modules/languages
 * @link        	https://sourceforge.net/projects/chronolabs/files/XOOPS%202.6/Modules/languages
 * @link			https://sourceforge.net/p/xoops/svn/HEAD/tree/XoopsModules/languages
 * @link			http://internetfounder.wordpress.com
 */



global $languagesModule, $languagesConfigsList, $languagesConfigs, $languagesConfigsOptions;
global $start, $limit;

include dirname(__FILE__) . "/header.php";

if ($languagesConfigsList['htaccess'])
{
	$url = XOOPS_URL . "/" . $languagesConfigsList['base'] . "/$start/$limit/index" . $languagesConfigsList['html'];
	if (!strpos($url, $_SERVER["REQUEST_URI"]))
	{
		redirect_header($url, 0, "");
		exit(0);
	}
}

include XOOPS_ROOT_PATH . "/header.php";
// Adds Stylesheet
$GLOBALS['xoTheme']->addStylesheet(XOOPS_URL."/modules/languages/language/".$GLOBALS['xoopsConfig']['language'].'/style.css');

$languages_handler = xoops_getmodulehandler("languages", "languages");
$langsusers_handler = xoops_getmodulehandler("users", "languages");

$criteria = new CriteriaCompo(new Criteria('1','1'));
$total = $languages_handler->getCount($criteria);
$criteria->setSort("`name`, `code`");
$criteria->setOrder("ASC");
$criteria->setLimit($limit);
$criteria->setStart($start);
$lang = array();
foreach($languages_handler->getObjects($criteria) as $language)
{
	$lang[$language->getVar('lang_id')]['name'] = $language->getVar('name');
	$lang[$language->getVar('lang_id')]['code'] = $language->getVar('code');
	$lang[$language->getVar('lang_id')]['folder'] = (strlen($language->getVar('folder'))==0?strtolower($language->getVar('name')):$language->getVar('folder'));
	$lang[$language->getVar('lang_id')]['folder'] = explode(',',$lang[$language->getVar('lang_id')]['folder']);
	$lang[$language->getVar('lang_id')]['spoken'] = $langsusers_handler->getLanguageUsersArray('spoken', $language->getVar('lang_id'));
	$lang[$language->getVar('lang_id')]['written'] = $langsusers_handler->getLanguageUsersArray('written', $language->getVar('lang_id'));
}
$GLOBALS['xoopsTpl']->assign("languages",      $lang);

xoops_load('XoopsPageNav');
$pagenav = new XoopsPageNav($total, $limit, $start, 'start', 'limit='.$limit);
$GLOBALS['xoopsTpl']->assign("pagenav",          $pagenav->renderNav(5));

$GLOBALS['xoopsTpl']->assign("xoops_pagetitle",  sprintf(LANGS_MN_INDEX_TITLE, count($lang), $total));
$GLOBALS['xoopsTpl']->display(__DIR__ . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . "languages_index.html");
include_once "footer.php";
?>