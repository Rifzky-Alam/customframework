<?php 
include_once 'config/Mastercfg.php';
include_once Mastercfg::$homedir.'controller/homepage.controller.php';
$homepage = Homepagectr::getInstanceOfHomepagectr();

$homepage->IndexHomepage();