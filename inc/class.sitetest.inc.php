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


class SiteTest {

  protected $conf       = NULL;
  protected $user_agent = NULL;
  protected $checks     = NULL;
  public $interval      = NULL;

  public function __construct($aConf = NULL) {
    if($aConf === NULL) {
      throw new Exception('Configuration not loaded!');
    }
    $this->conf       = $aConf;
    $this->interval   = $this->conf['INTERVAL'];
    $this->user_agent = $this->conf['USER_AGENT'];
    $this->checks     = $this->conf['CHECK'];
  }
  
  

}
?>
