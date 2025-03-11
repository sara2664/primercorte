<html> 

<head> 
  <title>Año Bisiesto</title> 
</head> 

<body> 

  <?php 

  $anio = rand(1900, 2100); 
  echo "Año: $anio <br>";

  if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) { 
    echo "El año $anio es bisiesto."; 
  } else { 
    echo "El año $anio no es bisiesto."; 
  } 

  ?> 

</body> 

</html>
