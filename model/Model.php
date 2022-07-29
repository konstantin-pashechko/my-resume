<?php
class Model
{
	private $db;

	function __construct($conf = 'db_config'){
		$this->db = Db::Connection($conf);
	}

	public function selectAll($table, $fields='*')
	{
		$sql = 'SELECT '.$fields.' FROM `'.$table.'`'; 

		$result = $this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result = $result->fetchAll();

		return $result;
	}

	public function update($data){
		$sql = "UPDATE `$data->table` SET `$data->column` = '".$data->textContent."' WHERE id = $data->id";
		$sql2 = "SELECT `$data->column` FROM `$data->table` WHERE id = $data->id";
		$result = $this->db->exec($sql);
		if(!$result){ return; }
		$result = $this->db->query($sql2);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result = $result->fetchAll();
		return $result[0][$data->column];
	}
}