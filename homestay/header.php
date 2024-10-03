<?php include "config.php";  ?>
<html>
<head>
<!-- tukar nama sistem yang sesuai-->
<title><?php echo $namasistem; ?></title>
</head>
<body><center>
<TABLE BORDER="0" cellpadding = "0" CELLSPADDING="0">
<TR>
<!--nama fail header adalah header.jpg -->
<TD WIDTH="778" HEIGTH= "403" BACKGROUND="<?php echo $logo;?>"
VALIGN="center"stlye="background-repeat :no-repeat;">
<!--tukar nama sistem yang sesuai-->
<FONT SIZE="+6" COLOR="black"font face="Bradley Hand ITC">
<?php echo $namasistem; ?><br><?php echo $namarumah; ?></FONT></br>
<FONT SIZE="+6" COLOR="black"font face="Bradley Hand ITC"><i>
<?php echo $moto; ?></i></FONT>

</TD>
</P>
</TR>
</center>
</TABLE>
</body></center>
<!--panggil fail utk besarkan huruf-->
<?php include "besar.php"; ?>
<!--panggil fail untuk tukar warna font-->
<?php include "tukar.php" ;?>
</html>