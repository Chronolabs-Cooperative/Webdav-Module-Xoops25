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


function webdav_load_config()
{
	global $xoopsModuleConfig;
	static $moduleConfig;
	
	if (isset($moduleConfig)) {
		return $moduleConfig;
	}
	
	if (isset($GLOBALS["xoopsModule"]) && is_object($GLOBALS["xoopsModule"]) && $GLOBALS["xoopsModule"]->getVar("dirname", "n") == basename(dirname(__DIR__))) {
		if (!empty($GLOBALS["xoopsModuleConfig"])) {
			$moduleConfig = $GLOBALS["xoopsModuleConfig"];
		} else {
			return null;
		}
	} else {
		$module = xoops_gethandler('module')->getByDirname(basename(dirname(__DIR__)));
		
		$config_handler =& xoops_gethandler('config');
		$criteria = new CriteriaCompo(new Criteria('conf_modid', $module->getVar('mid')));
		$configs = $config_handler->getConfigs($criteria);
		foreach (array_keys($configs) as $i) {
			$moduleConfig[$configs[$i]->getVar('conf_name')] = $configs[$i]->getConfValueForOutput();
		}
		unset($configs);
	}
	if (file_exists($cfile = XOOPS_ROOT_PATH . "/modules/" . basename(dirname(__DIR__)) . "/include/configs.php"))
		if ($customConfig = @include $cfile)
			$moduleConfig = array_merge($moduleConfig, $customConfig);
	
	return $moduleConfig;
}