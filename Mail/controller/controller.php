<?php
require ("../model/sql_util.php");
require ("../bean/emailBean.php");
require ("../model/phpMailer_util.php");

if ($_POST != null) {
	if ($_POST ['status'] == 'add') {
		
		$bean = new emailBean ();
		
		$bean->to = $_POST ['to'];
		$bean->cc = $_POST ['cc'];
		$bean->cc = $_POST ['bcc'];
		$bean->subject = $_POST ['subject'];
		$bean->body = $_POST ['body'];
		
		$mail = phpMailerUtil::getInstance ();
		$message= $mail->send ( $bean->to, $bean->cc, $bean->bcc, $bean->subject, $bean->body );
		if ($message=='Message has been sent') {
			$sql = new sql_util ();
			$sql->add ( $bean );
			echo ('Message has been sent.<br><a href=../index.php>Home page</a>');
		} else {
			echo $message;
			echo ('<a href=../index.php>Home page</a>');
		}
	}
} elseif ($_GET ['status'] == 'list') {
	$sql = new sql_util ();
	$result = $sql->listing ();
	echo ("<table border='1' cellpadding='3'>
			<tr>
				<td>To</td>
				<td>Subject</td>
				</tr>");
	while ( $row = mysql_fetch_array ( $result ) ) {
		$l_id = $row ['id'];
		$l_receiver = $row ['receiver'];
		$l_subject = $row ['subject'];
		
		echo ("<tr>
				<td>$l_receiver</td>
				<td>$l_subject</td>
				<td><a href=../detail.php?id=$l_id>Detail</a></td>
				<td><a href=controller.php?status=delete&id=$l_id>Delete</a><input type='hidden' name='status' value='delete' /></td>
				</tr>");
	}
	echo ("</table>");
	echo ('<a href=../index.php>Home page</a>');
} elseif ($_GET ['status'] == 'delete') {
	$sql = new sql_util ();
	$sql->delete ( $_GET ['id'] );
	echo "<script>location.href='controller.php?status=list';</script>";
}

?>