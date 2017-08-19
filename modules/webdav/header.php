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


require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'mainfile.php';
require_once __DIR__ . "/include/functions.php";

$myts =& MyTextSanitizer::getInstance();

global $webdavModule, $webdavConfigsList, $webdavConfigs, $webdavConfigsOptions;

if (empty($webdavModule))
{
	if (is_a($webdavModule = xoops_getHandler('module')->getByDirname(basename(__DIR__)), "XoopsModule"))
	{
		if (empty($webdavConfigsList))
		{
			$webdavConfigsList = webdav_load_config();
		}
		if (empty($webdavConfigs))
		{
			$webdavConfigs = xoops_getHandler('config')->getConfigs(new Criteria('conf_modid', $webdavModule->getVar('mid')));
		}
		if (empty($webdavConfigsOptions) && !empty($webdavConfigs))
		{
			foreach($webdavConfigs as $key => $config)
				$webdavConfigsOptions[$config->getVar('conf_name')] = $config->getConfOptions();
		}
	}
}

global $start, $limit, $op;

$op  		=  empty($_REQUEST["op"]) || !in_array($_REQUEST['op'], array('default', 'save')) ? 'default' : $_REQUEST["op"] ;
$start  	= intval( empty($_REQUEST["start"]) ? 0 : $_REQUEST["start"] );
$limit 		= intval( empty($_REQUEST["limit"]) ? $webdavConfigsList['items_perpage']: $_REQUEST["limit"] );
