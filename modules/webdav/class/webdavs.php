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



 
if (!defined("XOOPS_ROOT_PATH")) {
    exit();
}

class WebdavWebdavs extends XoopsObject
{
    /**
     * Constructor
     *
     * @param int $id ID of the tag, deprecated
     */
	function __construct($id = null)
	{
		$this->initVar("webdavid",        			XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("uid",        				XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("key",        				XOBJ_DTYPE_TXTBOX,     	null, false, 32);
		$this->initVar("clients",        			XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("client-apis",        		XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("username",        			XOBJ_DTYPE_TXTBOX,     	null, false, 45);
		$this->initVar("hashinfo",        			XOBJ_DTYPE_TXTBOX,     	null, false, 15);
		$this->initVar("hostname",        			XOBJ_DTYPE_TXTBOX,     	null, false, 255);
		$this->initVar("path",        				XOBJ_DTYPE_TXTBOX,     	null, false, 255);
		$this->initVar("htpasswd-file",     		XOBJ_DTYPE_TXTBOX,     	null, false, 128);
		$this->initVar("apache2-config",    		XOBJ_DTYPE_TXTBOX,     	null, false, 128);
		$this->initVar("awstats-config",    		XOBJ_DTYPE_TXTBOX,     	null, false, 128);
		$this->initVar("apache2-config-updated",    XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("awstats-config-updated",    XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("support-ssl",      			XOBJ_DTYPE_ENUM,     	'No', false, 255, false, array('Yes','No'));
		$this->initVar("apache2-ssl-updated",    	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("awstats-ssl-updated",    	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("online",           			XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("staging-cron",    			XOBJ_DTYPE_TXTBOX,     	null, false, 128);
		$this->initVar("salt",    					XOBJ_DTYPE_TXTBOX,     	null, false, 64);
		$this->initVar("created",           		XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("staged",           			XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("folders-created",           XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("folders-exist",           	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("folders-deleted",           XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("files-created",           	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("files-exist",           	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("files-deleted",           	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("bytes-files-created",       XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("bytes-files-exist",         XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("bytes-files-deleted",       XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("renegade-created",          XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("renegade-exist",            XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("renegade-deleted",          XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("bytes-renegade-created",    XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("bytes-renegade-exist",      XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("bytes-renegade-deleted",    XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("root-folders",           	XOBJ_DTYPE_ARRAY,     	array(), false);
		$this->initVar("folders-hunted",            XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("files-hunted",           	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("renegade-hunted",           XOBJ_DTYPE_INT,     	null, false);
		
    }
}

/**
 * Tag object handler class.  
 *
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright   copyright &copy; The XOOPS Project
 *
 * {@link XoopsPersistableObjectHandler} 
 *
 */

class WebdavWebdavsHandler extends XoopsPersistableObjectHandler
{

    
    /**
     * Constructor
     *
     * @param object $db reference to the {@link XoopsDatabase} object     
     **/
    function __construct(&$db)
    {
    	parent::__construct($db, "webdav_webdavs", "WebdavWebdavs", "webdavid", "hostname");
    }
  
 
}
?>