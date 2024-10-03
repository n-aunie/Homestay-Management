<?php date_default_timezone_set ("Asia/Kuala_Lumpur");
?>

<?php
//sambung ke pangkalan data
require('config.php');

?>
<html>
<head>
<title>LAPORAN BULANAN BILIK</title>
</head>
<body>
<table width="711" border="0">
    <td><p><strong>LAPORAN BULANAN KEUNTUNGAN BILIK </strong></p>		
<table width="1000" border="1" align="center">
  <tr>
  <td colspan="9">
REKOD TEMPAHAN BULANAN: <?php echo $namarumah; ?><br>
<div align="right" class="style15">Tarikh Cetakan: <?php echo date("d/m/Y"); ?></div>
  </td>
  </tr>
  <tr>
    <td width="30"><b>Bil.</b></td>
    <td width="150"><b>Nama Bilik</b></td>
    <td width="140"><b>Tarikh Masuk</b></td>
    <td width="140"><b>Tarikh Keluar</b></td>
    <td width="100"><b>Bil Hari</b></td>
    <td width="100"><b>Nama Pelanggan</b></td>
    <td width="100"><b>Nom HP</b></td>
    <td width="140"><b>Harga</b></td>
    <td width="140"><b>Jumlah</b></td>
  </tr>

 <?php	
	$no=1;
	$bilik=$_POST["bilik"];
	$bulan=$_POST["bulan"];
	$tahun=$_POST["tahun"];
   
   if ($bilik=="-"&&$bulan=="-"&&$tahun=="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah 
	 order by idbilik,tarikh_masuk");   
   }
   elseif ($bilik!="-"&&$bulan=="-"&&$tahun=="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah where idbilik='$bilik' 
	 order by idbilik,tarikh_masuk");   
   }
	elseif ($bilik!="-"&&$bulan!="-"&&$tahun=="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah 
	 where idbilik='$bilik' and (MONTH(tarikh_masuk)='$bulan' or MONTH(tarikh_keluar)='$bulan') 
	 order by idbilik,tarikh_masuk");   
   }
	elseif ($bilik!="-"&&$bulan!="-"&&$tahun!="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah 
	 where idbilik='$bilik' and ((MONTH(tarikh_masuk)='$bulan' AND YEAR(tarikh_masuk)='$tahun') 
	 or (MONTH(tarikh_keluar)='$bulan' AND YEAR(tarikh_keluar)='$tahun')) order by idbilik,tarikh_masuk");   
   }
	 elseif ($bilik=="-"&&$bulan!="-"&&$tahun=="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah 
	 where MONTH(tarikh_masuk)='$bulan' or MONTH(tarikh_keluar)='$bulan' 
	 order by idbilik,tarikh_masuk");   
   }
	elseif ($bilik=="-"&&$bulan=="-"&&$tahun!="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah 
	 where YEAR(tarikh_masuk)='$tahun' or YEAR(tarikh_keluar)='$tahun' 
	 order by idbilik,tarikh_masuk");   
   }
	elseif ($bilik!="-"&&$bulan=="-"&&$tahun!="-")
   {
	 $data1=mysqli_query($samb,"select * from tempah 
	 where idbilik='$bilik' and (YEAR(tarikh_masuk)='$tahun' or YEAR(tarikh_keluar)='$tahun') 
	 order by idbilik,tarikh_masuk");   
   }
	
	$jumBesar=0;
	$bil_rekod=mysqli_num_rows($data1);
	while ($info1=mysqli_fetch_array($data1))
		{
			//SAMBUNG REKOD YANG BERKAITAN
			$databilik=mysqli_query($samb,"select * from bilik 
			where idbilik='$info1[idbilik]'");
			$infobilik=mysqli_fetch_array($databilik);
	
			//DAPATKAN NAMA PELANGGAN
			$datapelanggan=mysqli_query($samb,"select * from pelanggan 
			where icpelanggan='$info1[idpelanggan]'");
			$infopelanggan=mysqli_fetch_array($datapelanggan);
			
			//KIRA PERBEZAAN HARI MENGINAP
			$date1=date_create($info1['tarikh_masuk']);
			$date2=date_create($info1['tarikh_keluar']);
			$diff=date_diff($date1,$date2);
			$jumHari=$diff->format("%a");
			
			
			//susun semula tarikh	
			$masuk = date("d-m-Y", strtotime($info1['tarikh_masuk']));
			$keluar = date("d-m-Y", strtotime($info1['tarikh_keluar']));

    ?>
 <!–– PAPAR REKOD DALAM JADUAL ––>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $infobilik['nama']; ?></td>
    <td><?php echo $masuk; ?></td>
    <td><?php echo $keluar; ?></td> 
    <td><?php echo $diff->format("%a hari"); ?></td>
    <td><?php echo $infopelanggan['nama']; ?></td>
	<td><?php echo $infopelanggan['nomhp']; ?></td>
	<td>RM <?php echo number_format($info1['bayaran'],2); ?></td>
	<td>RM <?php echo number_format($info1['bayaran']*$jumHari,2); 
  
    $jumBesar+=($info1['bayaran']*$jumHari);
  ?></td>
	</tr>
  <?php $no++; } ?>
	<tr>
  <td colspan="8" align="right">
	JUMLAH KESELURUHAN
  </td>
  <td>RM <?php echo number_format($jumBesar,2);?></td>
  </tr>	  
</table>
<hr /><div align="center" class="style15">* Laporan Tamat *<br />Jumlah Rekod:<?php echo $bil_rekod; ?></div>
<center><br><br>
<a href="index2.php">Ke Menu Utama</a><br>
<a href="javascript:window.print()">Cetak Laporan</a> 
</center>
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