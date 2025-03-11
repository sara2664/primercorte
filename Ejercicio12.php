<html> 

<head> 
  <title>Clasificación por Edad</title> 
</head> 

<body> 

  <?php 

  $edad = rand(1, 100); 
  echo "Edad: $edad <br>";

  if ($edad <= 12) { 
    echo "Clasificación: Niño"; 
  } elseif ($edad <= 17) { 
    echo "Clasificación: Adolescente"; 
  } elseif ($edad <= 64) { 
    echo "Clasificación: Adulto"; 
  } else { 
    echo "Clasificación: Adulto mayor"; 
  } 

  ?> 

</body> 

</html>
