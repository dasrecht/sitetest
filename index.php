<?php
/**
 * sitest
 * Copyright (C) 2010, Marcel Hauri
 * http://blog.m83.ch/ - hello@m83.ch
 * 
 * Licensed under the new BSD License
 * See the License file for details
 * 
 * Version: 0.9.8 
 */

// init
$sDir = dirname(__FILE__).'/';

unset($CONF);
$CONF['HTDOCS_PATH'] = $sDir;

if (file_exists(realpath($CONF['HTDOCS_PATH'].'conf/config.php'))) {
  include_once(realpath($CONF['HTDOCS_PATH'].'conf/config.php'));
  include_once(realpath($CONF['HTDOCS_PATH'].'inc/class.sitetest.inc.php'));
  $st = new SiteTest($CONF);
} else {
	die('Configuration file not found!');
}

if(file_exists(realpath($CONF['HTDOCS_PATH'].'tpl/'.$CONF['TEMPLATE'].'/index.tpl.php'))) {
  include_once(realpath($CONF['HTDOCS_PATH'].'tpl/'.$CONF['TEMPLATE'].'/index.tpl.php'));
} else {
  die('Could not load Template!');
}
unset($CONF);
?>
