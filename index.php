<?php 
include_once 'config/Mastercfg.php';
include_once Mastercfg::$homedir.'entities/shipper/Shipper.php';


$data = Shipper::getInstance();
echo $data->Tes();
?>