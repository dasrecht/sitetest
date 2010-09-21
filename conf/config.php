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

// Interval in Seconds (Default: 60)
$CONF['INTERVAL'] = '60';

// Configure User Agent
$CONF['USER_AGENT'] = 'SITETEST (ver.: 0.9.8 / http://projects.m83.ch/sitetest/';

// Active Template
$CONF['TEMPLATE'] = 'default.tpl.php';


// Configure Site Checks
$CONF['CHECK']['drs.ch'] = array('adress' => 'http://www.drs.ch/',
                                 'type'   => 'text/html');

$CONF['CHECK']['drs1.ch'] = array('adress' => 'http://www.drs1.ch/',
                                  'type'   => 'text/html');

$CONF['CHECK']['drs2.ch'] = array('adress' => 'http://www.drs2.ch/',
                                  'type'   => 'text/html');

$CONF['CHECK']['drs3.ch'] = array('adress' => 'http://www.drs3.ch/',
                                  'type'   => 'text/html');




?>
