<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require('header.php');
?>
<html>
<center>
<h3>SENARAI BILIK</h3><br>
<fieldset>
<table width="811" border="1" align="center">  
  <tr>
    <td colspan="4" valign="middle" align="right"><b>
	<a href="tambah_bilik.php">[+] Tambah Bilik</a></b></td>    
  </tr>  
  <tr>
    <td width="40"><b>Bil.</b></td>
    <td width="243"><b>Nama Bilik</b></td>
    <td width="150"><b>Harga Semalaman</b></td>
	<td width="150"><b>Tindakan</b></td>
  </tr>

 <?php
  $data1=mysqli_query($samb,"SELECT * FROM bilik ORDER BY harga DESC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['nama']; ?></td>
    <td>RM <?php echo $info1['harga']; ?></td>
    <td><a href="kemaskini_bilik.php?idbilik=
	<?php echo $info1['idbilik'];?>">Kemaskini</a> |
		<a href="hapus_bilik.php?idbilik=
		<?php echo $info1['idbilik'];?>">Hapus</a>
	</td>
  </tr>
  <?php $no++; } ?>
</table>
</fieldset>
<a href="index2.php">Ke Menu Utama</a><br>       
        </center>
    
    
    
    
</body>
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