<html> 

<head> 
  <title>Clasificación de Velocidad</title> 
</head> 

<body> 

  <?php 

  $velocidad = rand(10, 180); 
  echo "Velocidad: $velocidad km/h <br>";

  if ($velocidad < 30) { 
    echo "Vehículo muy lento."; 
  } elseif ($velocidad >= 30 && $velocidad <= 80) { 
    echo "Velocidad normal."; 
  } elseif ($velocidad >= 81 && $velocidad <= 120) { 
    echo "Velocidad rápida."; 
  } else { 
    echo "¡Exceso de velocidad!"; 
  } 

  ?> 

</body> 

</html>
