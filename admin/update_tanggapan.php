<?php
require '../koneksi.php';
$tanggapan=$_POST['tanggapan'];

$sql=mysql_query("update tanggapan set tanggapan='$tanggapan' ");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Diubah');
	window.location='admin.php?url=lihat_tanggapan';
</script>
<?php
}
?>