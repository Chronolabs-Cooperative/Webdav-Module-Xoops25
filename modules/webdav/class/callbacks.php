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

class WebdavCallbacks extends XoopsObject
{
    /**
     * Constructor
     *
     * @param int $id ID of the tag, deprecated
     */
	function __construct($id = null)
	{
		$this->initVar("callbackid",        XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("webdavid",        	XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("uid",	        	XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("clientid",        	XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("url",        		XOBJ_DTYPE_TXTBOX,     	null, false, 255);
		$this->initVar("fields",        	XOBJ_DTYPE_ARRAY,     	array(), false);
		$this->initVar("created",        	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("called",        	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("deleted",       	XOBJ_DTYPE_INT,     	null, false);
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

class WebdavCallbacksHandler extends XoopsPersistableObjectHandler
{

    
    /**
     * Constructor
     *
     * @param object $db reference to the {@link XoopsDatabase} object     
     **/
    function __construct(&$db)
    {
    	parent::__construct($db, "webdav_callbacks", "WebdavCallbacks", "callbackid", "url");
    }
  
 
}
?>