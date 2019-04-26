<?php 

class MySqlTableWork {
	private $db_config, $dsn;
	public $table, $viewFieldsAll, $editFields;
	public $DB;

	function __construct($table)
	{
        $this->db_config = require_once 'config.php';
        $this->viewFieldsAll = array('id', 'name', 'rgb');
        $this->editFields = array('name', 'rgb');
        $this->table = $table;
        
        $this->dsn = "mysql:host=".$this->db_config['host'].";dbname=".$this->db_config['dbname'].";charset=".$this->db_config['charset'];
		$this->DB = new PDO($this->dsn, $this->db_config['user'], $this->db_config['pass']);

	}

	public function sqlAll(){
		return $this->DB->query('SELECT * FROM '. $this->table);
	}

	public function echoAll(){
		$data = $this->sqlAll();
		include 'view/all.tpl.php';
	}
    public function echoDel(){
        $data['id'] = $_GET['id'];
        $this->DB->query("DELETE FROM " . $this->table . " WHERE id='" . $_GET['id'] . "' ");
        $data['res'] =  $this->DB->errno . " " . $this->DB->error;
        include ("view/del.tpl.php");
    }
    public function  echoEdit(){
        $data['id'] = $_GET['id'];
        $data['res'] = $this->DB->query("SELECT * FROM " . $this->table . " WHERE id='" . $_GET['id'] . "' ");
        $data['row'] = $data['res']->fetch(PDO::FETCH_ASSOC);
        include ("view/edit.tpl.php");
    }
    public function echoSaveEdit (){
        $data['id'] = $_GET['id'];
        $sql = "UPDATE " . $this->table . " SET ";
        for($i = 0; $i < sizeof($this->editFields); $i++) {
            $arrSql[] = $this->editFields[$i] ." = '" . $_GET[$this->editFields[$i]] . "' ";
        }
        $sql.= implode(", " ,$arrSql);
        $sql.= " WHERE id='" . $_GET['id'] . "' ";
        echo $sql;
        $this->DB->query($sql);
        $data['res'] =  $this->DB->errno . " " . $this->DB->error;
        include ("view/save.tpl.php");
    }
}




