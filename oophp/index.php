<?php
$value = DB::table("users")->get();
echo $value;
class DB extends PDO {
    private static $_instance;
    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        } 
        return self::$_instance;  
    }
    public function __construct() {
        $engine = "mysql"; 
		$host = "localhost"; 
		$port = "3306";
		$database = "wpa32db"; 
		$user = "root"; 
		$pass = ""; 
		$dsn =  $engine . ":host=" . $host . ";port=" 
			. $port . ";dbname=" . $database;
		parent::__construct($dsn, $user, $pass);
		echo "DB Construct! <br>";
    }
    public function get() {
        return "GET ALL!";
    }
}