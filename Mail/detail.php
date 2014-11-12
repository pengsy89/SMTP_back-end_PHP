<?php
require ("model/sql_util.php");

$sql = new sql_util ();
$id = $_GET ['id'];
$result = $sql->detail ($id);

$row = mysql_fetch_array ( $result );

echo ("<table border='1' cellpadding='3'>
		<tr>
		<td>To:</td>
		<td>$row[1]</td>
		</tr>
		<tr>
		<td>CC:</td>
		<td>$row[2]</td>
		</tr>
		<tr>
		<td>BCC:</td>
		<td>$row[3]</td>
		</tr>
		<tr>
		<td>Subject:</td>
		<td>$row[4]</td>
		</tr>
		<tr>
		<tr>
		<td>Body:</td>
		<td>$row[5]</textarea>
		</tr>
		</table>
		<a href=controller/controller.php?status=delete&id=$id>Delete</a><input type='hidden' name='status' value='delete' />
")
;

?>