<?php

include ('../inc/config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$aksi = $_POST['aksi'];
$id = $_POST['id'];

$sql = null;
if($aksi == 'tambah') {
	$sql = "INSERT INTO admin(username,password)
		VALUES('$username', '$password')";
}else if($aksi == 'edit') {
	$sql = "update admin set username='$username',
			password='$password' where idadmin='$id'";

}

$result = mysql_query($sql) or die(mysql_error());


if($result) {
	header('location:../index.php?mod=admin&pg=admin_view&level=0');
} else {
	header('location:../index.php?mod=admin&pg=admin_view&level=1');
}

?>
