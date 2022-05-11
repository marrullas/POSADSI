<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POS | ADSI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSS -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


    <?php

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

            if($_GET["path"]=="home")
                include 'modules/home.php';
        }


        include 'modules/footer.php';

    ?>

  
  <!-- ====================HEADER=========================== -->

 
  <!-- ==================ASIDE============================= -->

 
</div>
<!-- ./wrapper -->
        <!-- JS -->
<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>

<script src="./views/js/plantilla.js"></script>

</body>
</html>
