<?php
   include('config.php');
   session_start();
   $hoy = date("Y-m-d");
   $mañana = date('Y-m-d', strtotime('+1 day'));
   $user_check = $_SESSION['login_user'];
   $sql = "select * from tbl_empledos where username = '$user_check'";

   $result = mysqli_query($con,$sql);
   
   $row = mysqli_fetch_array($result);

   $login_session = $row['username'];
   $tu = $row['tipo_usuario'];
   $PageID = $row['id_page'];
   $PageNM = $row['nombre_pag'];
   $UserName = $row['nombre'];
   $UserAPe = $row['apellido'];
   $token = $row['token'];
   $idusuario = $row['id'];
   
   $ma = '0';
   $ad = '1';
   $cm = '2';
   $gc = '3';
   $gi = '4';
   
   if ($tu == $ma) {$TipoUser = 'Maestro';}
   if ($tu == $ad) {$TipoUser = 'Administrador';}
   if ($tu == $cm) {$TipoUser = 'Community Manager';}
   if ($tu == $gc) {$TipoUser = 'Generador de Contenido';}
   if ($tu == $gi) {$TipoUser = 'Generador de Imagenes';}
   
   if(!isset($user_check)){
      header("location:index.php");
   }
   $appid = "153733368721991";
   $appsecret = "556244ee6a42cfeac4913d9c33bb31dc";
   
?>