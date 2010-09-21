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

// THE ENGINE ACCESS CHECK
//if(!isset($_POST['q'])) { die('not allowed');}
$sQuery = htmlspecialchars(stripslashes($_GET['q']));

// THE ENGINE HEADER
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

// THE ENGINE INCLUDES
$sDir = dirname(__FILE__).'/';
$CONF['HTDOCS_PATH'] = $sDir;

if (file_exists(realpath($CONF['HTDOCS_PATH'].'conf/config.php'))) {
  include_once(realpath($CONF['HTDOCS_PATH'].'conf/config.php'));
  include_once(realpath($CONF['HTDOCS_PATH'].'inc/class.sitetest.inc.php'));
  $st = new SiteTest($CONF);
  unset($CONF);
} else {
        die('Configuration file not found!');
}


// THE ENGINE DEFAULTS
$aOutput = array();
$aOutput['result'] = 'lookupfailure';
$aOutput['query']  = $sQuery;
$aOutput['time']   = time();
$aOutput['next']   = (time() + $st->interval);
$aOutput['status'] = NULL;


// THE ENGINE HIMSELF
$json_errors = array(
    JSON_ERROR_NONE      => 'Es ist kein Fehler aufgetreten',
    JSON_ERROR_DEPTH     => 'Die maximale Stacktiefe wurde erreicht',
    JSON_ERROR_CTRL_CHAR => 'Steuerzeichenfehler, moeglicherweise fehlerhaft kodiert',
    JSON_ERROR_SYNTAX    => 'Syntaxfehler'
);

print json_encode($aOutput);
?>
