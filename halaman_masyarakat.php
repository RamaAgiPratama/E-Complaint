<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';
		break;

		case 'lihat_pengaduan';
		include 'lihat_pengaduan.php';
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;

		case 'lihat_tanggapan';
		include 'lihat_tanggapan.php';
		break;

	}
}
else
{
	?>
	<body id="page-top">

<div class="card shadow">
  <div class="card-header">
    Tulis Pengaduan
  </div>
  <div class="card-body">
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>Tanggal Pengaduan</label>
        <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis Laporan</label>
        <textarea class="form-control" rows="7" name="isi_laporan"></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Unggah Foto</label>
        <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif"><font color="red"> *tipe yang bisa di upload adalah : .jpg, .jpeg, .png, .gif</font>
      </div>

      <div class="form-group cols-sm-6">
        <input type="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" value="Kosongkan" class="btn btn-warning">
      </div>
    </form>

	<?php
	}
?>