<html> 

<head> 
  <title>Clasificación de Temperatura</title> 
</head> 

<body> 

  <?php 

  $temperatura = rand(-10, 40); 
  echo "Temperatura: $temperatura <br>";

  if ($temperatura >= -10 && $temperatura <= 0) { 
    echo "Clasificación: Frío extremo"; 
  } elseif ($temperatura >= 1 && $temperatura <= 10) { 
    echo "Clasificación: Frío"; 
  } elseif ($temperatura >= 11 && $temperatura <= 20) { 
    echo "Clasificación: Templado"; 
  } elseif ($temperatura >= 21 && $temperatura <= 30) { 
    echo "Clasificación: Cálido"; 
  } else { 
    echo "Clasificación: Calor extremo"; 
  } 

  ?> 

</body> 

</html>
