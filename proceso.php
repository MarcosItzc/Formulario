<?php

$sErr="";
$sNom="";

        if (isset($_POST ["txtNombre"]) && !empty($_POST["txtNombre"]))
            $sNom = $_POST["txtNombre"];

        else 
            $sErr = "Faltan Datos";


        if ($sErr != "")
            header("Location: error.php?sError=".$sErr)

?>

<html>
    <head>
        <title>
           CAFETERIA
           <link rel="stylesheet" href="estilo.css" />
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <h4>
            Datos capturados
        </h4>
        Nombre:
        <?php echo $_POST["txtNombre"];?><br/>
        Correo:
        <?php echo $_REQUEST["txtCorreo"];?><br/>
        Edad:
        <?php echo $_POST["txtEdad"];?><br/>
        Producto:
        <?php echo $_REQUEST["txtopc"];?><br/>
        Calificacion:
        <?php echo $_POST["rating"];?><br/>
        Comentario:
        <?php echo $_POST["txtCom"];?><br/>
        <a href="index%20.html">Regresar</a>
    </body>
</html>