<?php
require_once 'class.Config.php';		
require_once 'class.Database.php';	
require_once 'class.MySQLDAO.php';	
require_once 'class.User.php';
require_once 'class.Owner.php';
require_once 'class.Post.php';
require_once 'class.Link.php';
require_once 'class.Instance.php';
require_once 'class.OwnerInstance.php';
require_once 'class.LongUrlAPIAccessor.php';
require_once 'class.FlickrAPIAccessor.php';	
require_once 'class.PluginHook.php';
require_once 'class.Crawler.php';		
require_once 'class.Utils.php';	

# crawler only
require_once 'class.Logger.php';		

# webapp only
require_once 'class.Follow.php';

require_once 'config.inc.php';
require_once($THINKTANK_CFG['smarty_path'].'Smarty.class.php');
require_once 'class.SmartyThinkTank.php';



?>