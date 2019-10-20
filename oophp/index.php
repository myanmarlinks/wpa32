<?php
$value = DB::table("users")->get();
$count = DB::table("users")->count();
$user = DB::table("users")->find(2);
$user = [
    'username' => "thiha soe naung",
    'password'  => password_hash("123456", PASSWORD_DEFAULT)
];
DB::table("users")->insert($user);
DB::table("users")->insert(['username' => 'Aung Aung', 'password' => password_hash("123456", PASSWORD_DEFAULT)]);
var_dump($value);
var_dump($count);
var_dump($user);


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
    public function insert(array $data) {
        $key_string = "";
        $question_string = "";
        foreach ($data as $key => $value) {
            $key_string .= $key . ", ";
            $question_string .= "?, ";
        }
        $sub_keys = substr($key_string, 0, -2);
        $sub_questions = substr($question_string, 0, -2);
        var_dump($sub_keys);
        
        $sql = "INSERT INTO " . $this->table_name 
                    . "(" . $sub_keys . ") VALUES (" . $sub_questions . ")";
        $prep = $this->prepare($sql);
        $prep->execute(array_values($data));
        return true;

    }
    public function find(int $id) {
        $sql = "SELECT * FROM " . $this->table_name . 
            " WHERE id=:id";
        $prep = $this->prepare($sql);
        $prep->execute(["id" => $id]);
        return $prep->fetchAll(PDO::FETCH_CLASS);
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