<?php 
class Companybean{
    private static $instance = null;
    private function __construct(){
        
    }

    public static function getInstanceOfCompanybean(){
		if (self::$instance==null) {
			self::$instance = new Companybean();
		}
		return self::$instance;
	}

	public function getCompanyName(){
		return 'MyCompany';
	}

	public function getCompanyAddr(){
		return 'Somewhere';
	}
}