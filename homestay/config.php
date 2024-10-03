


<?php
//sambungan MYSQLI dengan nama $samb
$samb = mysqli_connect("localhost","root","","homestay");
// semak sambungan jika gagal
if (mysqli_connect_errno()){
echo "Gagal sambungkan pangkalan data mysqli:".mysqli_connect_errno();
}
//SETUP NAMA HOMESTAY-UBAH DI SINI
$namasistem="AUNI ZANAWANI";
$namarumah="HOMESTAY NI'LOVE SYSTEM";
$moto=" FEEL WELCOME,FEEL THE CLASS";

?>