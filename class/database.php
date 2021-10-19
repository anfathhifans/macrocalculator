<?php
// MySQL Database Credentials
 
namespace App;

if(!in_array('PDO', get_loaded_extensions())){
	die('PDO extension not loaded!');
}

class DBConnect extends \PDO
{

	protected $dsn = "mysql:host=".HOSTNAME.";dbname=".DATABASE.";charset=".CHARSET;

	public function __construct(){
		try {	        
			parent::__construct($this->dsn, USERNAME, PASSWORD, [
		   		\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			]);
			$this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			$this->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
			//$this->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

	    } catch (\PDOException $e) {
	        die('Connection failed: ' . $e->getMessage());
	    }
	}

	public function get_user($data = [], $json_output = false){
		extract($data);
		$user = $this->query("SELECT * FROM `users` WHERE `id` = '$user_id'")->fetch(\PDO::FETCH_OBJ);
		return ($json_output) ? json_encode($user, JSON_PRETTY_PRINT) : $user;
	}

	public function get_users($json_output = false){
	 	$users = [];
        $data = $this->prepare("SELECT * FROM users ORDER BY id");
        $data->execute();
        while($OutputData = $data->fetch(\PDO::FETCH_ASSOC)){
        	$users[$OutputData['id']] = $OutputData;
        }
        return ($json_output) ? json_encode($users, JSON_PRETTY_PRINT) : $users;
	}
}