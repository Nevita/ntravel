<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo base_url()."index.php/user/do_insert"; ?>">
	<tabel>
		<tr>
		<td>ID</td>
		<td><input type="text" name="id"/></td>
		</tr><br />
		<tr>
		<td>Username</td>
		<td><input type="text" name="username"/></td>
		</tr><br/>
		<tr>
		<td>Password</td>
		<td><input type="password" name="password"/></td>
		</tr><br/>
		<tr>
		<td>Fullname</td>
		<td><input type="text" name="fullname"/></td>
		</tr><br/>
		<tr>
		<td>Level</td>
		<td><input type="text" name="level"/></td>
		</tr><br/>
		<tr>
		<td></td>
		<td><input type="submit" name="btnsubmit" value="simpan"/></td>
		</tr>
		</tabel>
		</form>
</body>
</html>