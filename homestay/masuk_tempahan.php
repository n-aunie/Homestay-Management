<?php
//sambung ke pangkalan data
require('config.php');
//semak sama data telah dihantar
if (isset($_POST['idpelanggan'])){
	//pembolehubah untuk memegang data yang dihantar
	$ic = $_POST['idpelanggan'];
	$masuk = $_POST['tarikh_masuk'];
	$bilik = $_POST['idbilik'];
	$keluar= $_POST['tarikh_keluar'];
	//dapatkan jumlah bayaran bilik
	$duit=mysqli_query($samb,"SELECT * from bilik where idbilik='$bilik'");
	$tunjukDuit=mysqli_fetch_array($duit);
	
	//Periksa Bilik kosong atau tidak
	$wujud=mysqli_query($samb,
	"SELECT * from tempah
	WHERE idbilik='$bilik' AND (
	(tarikh_masuk <= '$masuk' AND tarikh_keluar > '$masuk')
	OR (tarikh_masuk < '$keluar' AND tarikh_keluar > '$keluar')
	OR (tarikh_masuk < '$masuk' AND tarikh_keluar > '$keluar')
	)");
	$bil_rekod=mysqli_num_rows ($wujud);
	if ($bil_rekod==0&&$masuk!=$keluar)
	{
	//tambah rekod baru ke dalam table
	$rekod = "INSERT INTO tempah
	(idtempah,tarikh_masuk,idbilik,idpelanggan,tarikh_keluar,bayaran)
	VALUES (NULL,'$masuk','$bilik','$ic','$keluar','$tunjukDuit[harga]')";
	// Melaksanakan pertanyaan rekod dengan sambungan ke p.data
	$hasil = mysqli_query($samb, $rekod);
	// papar mesej berjaya atau gagal simpan rekod baru
	echo "<script>alert('TEMPAHAN BILIK BERJAYA');
	window.location='semak.php'</script>";
	}
	else{
	echo "<script>alert('TEMPAHAN BILIK GAGAL! Bilik telah ditempah');
	window.location='tempah.php'</script>";
	}
}
?>