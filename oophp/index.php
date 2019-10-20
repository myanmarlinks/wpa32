<?php
$value = DB::table("users")->get();
$count = DB::table("users")->count();
var_dump($value);
var_dump($count);

class DB extends PDO {
    private static $_instance;
    private $table_name;
    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        } 
        self::$_instance->table_name = $table_name;
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
		echo "DB Connected! <br>";
    }
    public function count() {
        $sql = "SELECT COUNT(*) from " . $this->table_name;
        $result = $this->query($sql);
        
        return $result->fetchColumn();
    }
    public function get() {
        $sql = "SELECT * FROM " . $this->table_name;
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS); // PDO::FETCH_ASSOC -> array
    }
}