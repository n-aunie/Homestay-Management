<?php
if (!(isset($_SESSION['idpengguna'])))
{
session_destroy();
header ("location:index.php");

}
?>