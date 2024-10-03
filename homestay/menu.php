<?php
if ($_SESSION['level']=="ADMIN")
{
?>
<!-- papar menu untuk admin-->
 <P>MENU UTAMA ADMIN</P>
<table  width='100%' border='0'>
    <tr align='center'>
        <td width='10%'><a href="bilik.php"><img src='images/bilik.png'></a></td>
        <td width='10%'><a href="pekerja.php"><img src='images/addperson.png'></a></td>
        <td width='10%'><a href="import_pekerja.php"><img src='images/importpekerja.png'></a></td>
        <td width='10%'><a href="tempah.php"><img src='images/addbooking.png'></a></td>
        <td width='10%'><a href="semak.php"><img src='images/semaktempahan.png'></a></td>
        <td width='10%'><a href="laporan.php"><img src='images/laporan.png'></a></td>
		<td width='10%'><a href="keluar.php"><img src='images/keluar.png'></a></td>
    </tr>
    <tr align='center'>
        <td>Setup Bilik</td>
        <td>Tambah Pekerja</td>
        <td>Import Pekerja</td>
        <td>Masuk Tempahan</td>
        <td>Semak Tempahan</td>
        <td>Laporan</td>
		 <td>Keluar</td>
    </tr>
</table>
<?php
}
else
{
?>
<!--Papar menu untuk pekerja-->
MENU UTAMA PEKERJA
<table  width='100%' border='0'>
    <tr align='center'>
	 <td width='20%'><a href="tempah.php"><img src='images/addbooking.png'></a></td>
        <td width='20%'><a href="semak.php"><img src='images/semaktempahan.png'></a></td>
        <td width='20%'><a href="laporan.php"><img src='images/laporan.png'></a></td>
		<td width='20%'><a href="keluar.php"><img src='images/keluar.png'></a></td>
    </tr>
	<tr align='center'>
	 <td>Masuk Tempahan</td>
        <td>Semak Tempahan</td>
        <td>Laporan</td>
		 <td>Keluar</td>
    </tr>

<?php
}
?>



