<?php
//sambung ke pangkalan data
require('config.php');
//sambung ke fail header
require ('header.php');
// mulakan sesi login untuk kekalkan login
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar
if (isset($_POST['idpengguna'])){
    //pembolehubah untuk memengang data yamg dihantar
    $user=$_POST['idpengguna'];
    $pass=$_POST['katalaluan'];
    //arahan sql akan dilaksanakan
    $query = mysqli_query($samb,
    "SELECT * FROM pengguna
    WHERE nama_pengguna='$user'
    AND kata_laluan='$pass'");
    $row = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) == 0||$row['kata_laluan']!=$pass)
    {
    //paper mesej gagal login
    echo "<script>alert('ID pengguna atau Katalaluan yang salah');
    window.location='index.php'</script>";
    }
    else
    {
    $_SESSION['idpengguna']=$row['nama_pengguna'];
    $_SESSION['level'] = $row['status'];

    //buka laman utama berdasarkan level login
           header("Location:index2.php");
    }
}
?>
<html>
<body>
<FIELDSET>
        <!--Papar jadual-->
         <CENTER><table width= '50%' border=5>
        <tr>
            <td width="744"><FONT SIZE="+2"><U>PENGGUNA</U></td>
        </tr>
     <td>
     <form method="POST">
          <p>Login masuk untuk pengguna </p>
          <laber for="inputID">ID Pengunna</label><br>
     <input type="text"name="idpengguna"
     placeholder="ID Pengguna"required><br>
     <laber for="inputPassword">Katalaluan</label><br>
     <input type="password"name="katalaluan"
     id="inputPassword"placeholder="katalaluan"required><br>
     <button type="submit">Login</button><br>
     </td>
     </tr>
     </from>
     </table></center>
     </FIELDSET> 
     </body><br><br>
     <?php require('footer.php'); ?>
     </html>
	 
	 <html>

<html>
<head>
<style>
body {
  background-image: url('planet.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>