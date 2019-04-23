<?php 

class MySqlTableWork {
	public $db_config;
	public $table;
	public $DB;

	function __construct($table)
	{
		$this->db_config = require_once 'config.php';

		$this->table = $table;
		$this->DB = new mysqli($this->db_config['host'], $this->db_config['user'], $this->db_config['pass'], $this->db_config['dbname']);
		$this->DB->set_charset("UTF8");
	}

	public function sqlAll(){
		return $this->DB->query('SELECT * FROM '. $this->table);
	}

	public function echoAll(){
		echo '<pre>';
		print_r($this->sqlAll());
		echo '</pre>';
		include 'view/all.tpl.php';
	}
}
/*

$new_db = new MySqlTableWork();
echo '<pre>';
var_dump($new_db);
echo '</pre>';
*/

