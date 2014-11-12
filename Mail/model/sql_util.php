<?php
require ("DB_Util.php");

class sql_util {
	function add(emailBean $bean) {
		$db = DB_Util::getInstance ();
		$db->db_conn ();
		// "to" is a key word in mysql, so change to "receiver"
		mysql_query ( "INSERT INTO mails(receiver, cc, bcc, subject, body) VALUES 
			('$bean->to', '$bean->cc', '$bean->bcc', '$bean->subject', '$bean->body')" );
		$db->db_close ();
	}
	function listing() {
		$db = DB_Util::getInstance ();
		$db->db_conn ();
		$result = mysql_query ( "select id, receiver, subject FROM mails" );
		$db->db_close ();
		
		return $result;
	}
	function detail($id) {
		$db = DB_Util::getInstance ();
		$db->db_conn ();
		$result = mysql_query ( "select * FROM mails where id=$id" );
		$db->db_close ();
		
		return $result;
	}
	function delete($id) {
		$db = DB_Util::getInstance ();
		$db->db_conn ();
		$result = mysql_query ( "delete FROM mails where id=$id" );
		$db->db_close ();
	}
}
?>