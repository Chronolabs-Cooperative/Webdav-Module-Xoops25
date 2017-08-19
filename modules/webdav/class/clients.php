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

class WebdavClients extends XoopsObject
{
	
	/**
	 * This is determined in assignVar() & setVar()
	 */
	var $_staging_file_exists = false;
	
    /**
     * Constructor
     *
     * @param int $id ID of the tag, deprecated
     */
	function __construct($id = null)
	{
		$this->initVar("clientid",        	XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("webdavid",        	XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("uid",        		XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("api-url",        	XOBJ_DTYPE_TXTBOX,     	null, false, 255);
		$this->initVar("api-calls",        	XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("api-response",      XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("api-result",        XOBJ_DTYPE_OTHER,    	'', false);
		$this->initVar("api-errors",        XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("api-errored",       XOBJ_DTYPE_INT,    		null, false);
		$this->initVar("username",        	XOBJ_DTYPE_TXTBOX,     	null, false, 64);
		$this->initVar("password",        	XOBJ_DTYPE_TXTBOX,     	null, false, 32);
		$this->initVar("email",        		XOBJ_DTYPE_TXTBOX,     	null, false, 196);
		$this->initVar("name",        		XOBJ_DTYPE_TXTBOX,     	null, false, 128);
		$this->initVar("staging-file",      XOBJ_DTYPE_TXTBOX,     	null, false, 64);
		$this->initVar("created",        	XOBJ_DTYPE_INT,     	null, false);
		$this->initVar("staged",        	XOBJ_DTYPE_INT,     	null, false);
    }
    
    
    
    /**
     * Assigns Variable to Object
     * 
     * {@inheritDoc}
     * @see XoopsObject::assignVar()
     */
    function assignVar($key, $value)
    {
    	
 		static $staged = false;
    	global $webdavModule, $webdavConfigsList, $webdavConfigs, $webdavConfigsOptions;
    	switch ($key)
    	{
    		case 'staging-file';
	    		if (!empty($value) && !file_exists(XOOPS_VAR_PATH . DIRECTORY_SEPARATOR . $webdavConfigsList['folder_data'] . DIRECTORY_SEPARATOR . 'staging' . DIRECTORY_SEPARATOR . $value))
	    		{
	    			$staged = true;
	   				$value = '';
	   				$this->_staging_file_exists = false;
	   				parent::assignVar($key, $value);
	   				return $this->setVar($key, $value);
	    		} elseif (!empty($value) && file_exists(XOOPS_VAR_PATH . DIRECTORY_SEPARATOR . $webdavConfigsList['folder_data'] . DIRECTORY_SEPARATOR . 'staging' . DIRECTORY_SEPARATOR . $value))
	    		{
	    			$staged = false;
	    			$this->_staging_file_exists = true;
	    		}
    			break;
    		case 'staged';
    			if ($staged == true)
    			{
    				$value = time();
    				return $this->setVar($key, $value);
    			}
    			break;
    	}
    	parent::assignVar($key, $value);
    }
    
    /**
     *  Sets Variable to Object
     *  
     * {@inheritDoc}
     * @see XoopsObject::setVar()
     */
    function setVar($key, $value)
    {
    	static $staged = false;
    	global $webdavModule, $webdavConfigsList, $webdavConfigs, $webdavConfigsOptions;
    	switch ($key)
    	{
    		case 'staging-file';
	    		if (!empty($value) && !file_exists(XOOPS_VAR_PATH . DIRECTORY_SEPARATOR . $webdavConfigsList['folder_data'] . DIRECTORY_SEPARATOR . 'staging' . DIRECTORY_SEPARATOR . $value))
	    		{
	    			$staged = true;
	    			$this->_staging_file_exists = false;
	    		} elseif (!empty($value) && file_exists(XOOPS_VAR_PATH . DIRECTORY_SEPARATOR . $webdavConfigsList['folder_data'] . DIRECTORY_SEPARATOR . 'staging' . DIRECTORY_SEPARATOR . $value))
	    		{
	    			$staged = false;
	    			$this->_staging_file_exists = true;
	    		}
	    		break;
    		case 'staged';
	    		if ($staged == true)
	    		{
	    			$value = time();
	    		}
	    		break;
    	}
    	parent::setVar($key, $value);
    }
    
    /**
     * For When Object Shuts Down in Memory
     */
    function __destruct()
    {
    	if ($this->vars['staging-file']['changed']==true && $this->vars['staged']['changed']==true )
    	{
    		xoops_getModuleHandler('clients', 'webdav')->insert($this, true);
    	}
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

class WebdavClientsHandler extends XoopsPersistableObjectHandler
{

    
    /**
     * Constructor
     *
     * @param object $db reference to the {@link XoopsDatabase} object     
     **/
    function __construct(&$db)
    {
    	parent::__construct($db, "webdav_clients", "WebdavClients", "clientid", "username");
    }
  
 
}
?>