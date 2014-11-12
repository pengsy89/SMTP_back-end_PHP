<html>
<head>
<title>Add an email</title>
</head>
<body>
	<form action="controller/controller.php" method="post" id="add_form" name="add_form">
		<input type="hidden" name="status" value="add">
		<table>
			<tr>
				<td>To:</td>
				<td><input type="text" name="to" id="to"></td>
			</tr>
			<tr>
				<td>CC:</td>
				<td><input type="text" name="cc" id="cc"></td>
			</tr>
			<tr>
				<td>BCC:</td>
				<td><input type="text" name="bcc" id="bcc"></td>
			</tr>
			<tr>
				<td>Subject:</td>
				<td><input type="text" name="subject" id="subject"></td>
			</tr>
			<tr>
				<td>Body:</td>
				<td><textarea name="body" id="body"></textarea>
			</tr>
		</table>
		<input type="submit" value="Send">
	</form>
</body>
</html>