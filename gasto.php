<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php

$costo=0;

$horas=$_REQUEST['horas'];

IF ($horas <=2)
   {$monto= $horas*300;}

else if ($horas>2 && $horas <=5)  
      {$monto= 600+($horas -2)*200;}
else
      {$monto= 600+600+($horas-5)*150;}  

echo"<div id='centro'>
 <br><br><br><br><br><br><br><br><br><br><br><br>
 <h2> Usted debe abonar $$monto </h2> </div>"

?>      
</body>
</html>