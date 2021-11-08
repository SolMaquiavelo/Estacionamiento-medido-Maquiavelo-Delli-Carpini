
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<?php

$variable=0;

$ID= $_REQUEST['usuario'];

$clave= $_REQUEST['clave'];

if ($ID== "3DEFEBRERO" && $clave== "estacionoAQUI")
{echo "<form action='gasto.php' method='post'>
    <div id='centro'> <br><br><br><br><br><br><br><br><br><br>
    <h1> Ingrese la cantidad de horas </h1>
    <br>
    <input type='text' name='horas'>
    <br><br>
    <input type='submit' value='Aceptar'> 
    </div>";
    
}    

else {echo "los datos son incorrectos <a href= 'index.html'> volver </a>";
}
?>

</body>
</html>


