<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require ('header.php');
//semak sama ada data dengan IC pelanggan telah dihantar
if (isset($_POST['icpelanggan'])) {
    //pembolehubah untuk memegang data yang dihantar 
	$ic = $_POST['icpelanggan'];
	$nama = $_POST['nama'];
	$hp = $_POST['nomhp'];
	$alamat1 = $_POST['alamat1'];
	$alamat2 = $_POST['alamat2'];
	$poskod = $_POST['poskod'];
	$bandar = $_POST['bandar'];
	$negeri = $_POST['negeri'];
//Tambah rekod baru ke dalam table pelanggan
$sql = "INSERT INTO pelanggan (icpelanggan,nama,nomhp)
VALUES ('$ic','$nama','$hp')";
$hasil=mysqli_query($samb,$sql);
//Tambah rekod baru ke dalam table alamat1
$sql1 = "INSERT INTO alamat (idalamat,alamat1,alamat2,bandar,poskod,
negeri,icpelanggan)
VALUES (NULL,'$alamat1','$alamat2','$poskod','$bandar','$negeri','$ic')";
$hasil=mysqli_query($samb,$sql1);
      // papar mesej berjaya atau gagal simpan rekod baru 
      if($hasil) {
      echo "<script>alert('PENDAFTRAN PELANGGAN BARU BERJAYA');
	  window.location='index2.php'</script>";
     }else{
         echo "<script>alert('PENDAFTRAN PELANGGAN BARU GAGAL');
	  window.location='daftar_pelanggan.php'</script>";
	      }
}
?> 

<html>
<h2>PENDAFTARAN PELANGGAN BARU</h2>
<body>
<fieldset>
<!--Papar Borang Pendaftaran-->
<form method="POST">
    <label>Nombor Kad Pengenalan</label><br>
	<font size="1" color="#ff0000">*Tanpa tanda -</font><br>
    <input type="text" name="icpelanggan"
	placeholder="09080701234" minlength='12' maxlength='12' size="15"
	onkeypress='return event.charCode >=48 && event.charCode <=57' required autofocus><br>
	<label>Nama anda </label><br>
	<font size="1" color="#fb00ff">*Huruf besar </font><br>
	<input type="text" name="nama" id="nama"
	placeholder="nama pelanggan" size="60" required><br>
	
	<label>Nombor Telefon</label><br>
	 <input type="text" name="nomhp"placeholder="0187654321"
	maxlength='12' size="15"
	onkeypress='return event.charCode>=48 && event.charCode <=57'
	required autofocus><br>
	
	<label><u>Alamat</u>:</label><br>
	<label>Alamat1</label><br>
<input type="text" name="alamat1" id="alamat"
placeholder="Alamat1" size="60" require> <br>
<label>Alamat1</label><br>
<input type="text" name="alamat2" id="alamat2"
placeholder="Alamat2" size="60" require> <br>
<label>Bandar</label><br>
<input type="text" name="bandar" id="bandar"
placeholder="Bandar" size="40" require> <br>
<label>Poskod</label><br>
<input type="text" name="poskod"placeholder=18000
maxlength='5' size="7"
onkeypress='return event.charCode>=48 && event.charCode <=57'
required autofocus><br>
<label>Negeri</label><br>
<input type="text" name="negeri" id="negeri"
placeholder="Negeri" size="60" require> <br><br>
<button type ="sumbit">Daftar</button>
<button type ="reset">Reset</button><br><br>
*Pastikan semua maklumat ditaip dengan teliti.
</form>
<form action="index2.php"><button type="sumbit">Home</button><br><br>
</fieldset>
</body>
</html>

<html>
<head>
<style>
body {
  background-image: url('gimini.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>