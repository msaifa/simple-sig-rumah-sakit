<?php

	require_once ('inc/config.php');

	if(isset($_GET['act'])) {
					$id = $_GET['id'];
					$sql = "delete from admin where idadmin='$id' ";
					mysql_query($sql) or die(mysql_error());
				}

?>

	<h2 id="headings"> Data Admin</h2>
	<table  class="table table-condensed table-striped table-hover">
		<thead>
		<th class='info'><td><b>Nama </b></td><td><b>password</b></td><td><b>Aksi</b></td></th>
		</thead>
		<tbody>
		<?php
$query="SELECT * from admin ";
$result=mysql_query($query) or die(mysql_error());
$no=1;

while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td><?php echo  $no
			?></td>
			<td><b><?php		echo $rows -> username;?><b></td>

						<td><?php		echo base64_encode($rows ->password);?></td>
			<td><a href="index.php?mod=admin&pg=admin_form&id=<?php echo 	$rows -> idadmin;?>" class='btn'><i class="icon-pencil"></i></a><a href="index.php?mod=admin&pg=admin_view&act=del&id=<?php echo 	$rows -> idadmin;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'> <i class="icon-trash"></i></a></td>
		</tr>
		<?php
	$no++;
	}?>

		<tr>
			<td colspan=3 ></td><td><a href="index.php?mod=admin&pg=admin_form"
			class='btn'	><i class="icon-plus"></i></a></td>
		</tr>
		</tbody>
	</table>
	<?php

if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}


?>
