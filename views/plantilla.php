<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/dist/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="views/dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini login-page">
<!-- Site wrapper -->
<!-- Navbar -->
<?php 
  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=='ok'){
      echo '<div class="wrapper">';
  
    include 'modules/header.php'; 

   include 'modules/sideBar.php'; 

   if(isset($_GET["path"])){

    switch ($_GET["path"]) {
        case 'home':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'usuarios':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'categorias':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'productos':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'clientes':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'ventas':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'crear-venta':
            include 'modules/'.$_GET["path"].'.php';
            break;
        case 'reportes':
            include 'modules/'.$_GET["path"].'.php';
            break;        
        default:
            include 'modules/404.php';
            break;
    }

    //if($_GET["path"]=="")
      

  }else{
    include 'modules/home.php';
  }

   include 'modules/footer.php';

   echo '</div>'; //fin wrapper

}else{
  include 'modules/login.php';
}
   ?>

 



  <!-- Control Sidebar MENU DE CONFIRACIONES DEL TEMA--> 
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="views/dist/js/adminlte.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="views/dist/js/demo.js"></script> -->
<script src="./views/js/plantilla.js"></script>
</body>
</html>
