<html>

<head></head>

<body>

 <?php

 $dia = date("d");

 if ($dia <= 20) {

 echo "puede pagar";

 } else {

 echo "factura vencida";

 }

 ?>

</body>

</html>