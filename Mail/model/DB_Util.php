<?php
class DB_Util {
	static function getInstance() {
		$db = new DB_Util ();
		return $db;
	}
	
	private $conn = "";
	
	function db_conn() {
		$this->conn = mysql_connect ( "localhost:3306", "root", "" );
		mysql_select_db ( "mail" );
		if (! ($this->conn))
			die ( 'Could not connect: ' . mysql_error () );
		// echo ("connected");
	}
	function db_close() {
		mysql_close ( $this->conn );
		$this->conn = "";
	}
}
?>