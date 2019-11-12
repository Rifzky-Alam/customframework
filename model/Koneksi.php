<?php 
class Koneksi{
	
	private $user='root';//rumahisk_rifzky 
	private $pass='';//r0em@h!sk4
	private $db='cszeke';
	private static $instance = null;

	private function __construct(){
		
	}

	public static function getInstance(){
		if (self::$instance==null) {
			$conn = new Koneksi();
			self::$instance = $conn->bukaKoneksi();
		}
		return self::$instance;
	}

	private function bukaKoneksi(){
		try {
			@$dbHost= new PDO('mysql:host=localhost;dbname='.$this->db,$this->user,$this->pass);
			$dbHost->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
			return $dbHost;	
		} catch (PDOException $e) {
			die ('Database Connection Error..');
			return null;
		}
	}

}