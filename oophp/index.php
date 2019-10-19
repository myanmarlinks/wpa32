<?php
$value = DB::table("users")->get();
var_dump($value);

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
        var_dump($dsn);
		parent::__construct($dsn, $user, $pass);
		echo "DB Connected! <br>";
    }
    public function get() {
        $sql = "SELECT * FROM " . $this->table_name;
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS); // PDO::FETCH_ASSOC -> array
    }
}