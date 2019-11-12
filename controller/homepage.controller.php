<?php 
include_once Mastercfg::$homedir.'entities/shipper/Shipper.php';
class Homepagectr {
	private static $instance = null;
    private function __construct(){
        
    }

    public static function getInstanceOfHomepagectr(){
    	if (self::$instance==null) {
			self::$instance = new Homepagectr();
		}
		return self::$instance;
    }

    public function IndexHomepage(){
    	$data = Shipper::getInstance();
    	echo $data->tes();
    }
}