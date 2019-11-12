<?php 
class Shipper{
	private static $instance = null;
    private function __construct(){
        
    }

    public static function getInstance(){
    	if(self::$instance==null){
    		self::$instance=new Shipper();
    	}

    	return self::$instance;
    }

    public function Tes(){
    	return "hello!";
    }

}