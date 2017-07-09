<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Lock Screen</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/funciones.js"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<?php include ("control_sesion.php");
include ("datos_usuario.php");


    $consulta="SELECT * FROM locked where id_usuario='$id' and url='deep.php'";
    $resultado=mysqli_query($conexion,$consulta);
    $num=mysqli_num_rows($resultado);
    if ($num==0) {
      header('location: indexreto.php');
    }
?>



<body class="lock-screen" onload="arranque(60,<?php echo $id; ?>)">

    <div class="lock-wrapper">
    <center><h1>te recomiendo espera los 4 minutos porque de lo contrario se reiniciará el temporizador</h1></center>

        <div id="time"></div>


        <div class="lock-box text-center">
            <img src="img/wazzap1.jpg" alt="lock avatar"/>
            <h1><?php echo "Retado:".$usuario; ?></h1>
            <span class="locked">Locked</span>
            <form role="form" class="form-inline" action="index.html">
                <div class="form-group col-lg-12">
                    
                     
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
