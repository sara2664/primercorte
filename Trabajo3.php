echo $num;

<html>

<head>

 <title>Problema</title>

</head>

<body>

 <?php

 $num = rand(1, 100);

 echo $num;

 echo "<br>";

 if ($num <= 17) {

 echo "La persona es menor de edad.";

 } else {

 echo "La persona es mayor de edad.";

 }

 ?>

</body>

</html>