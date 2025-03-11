<html> 

<head> 
  <title>Calificación en Letras</title> 
</head> 

<body> 

  <?php 

  $calificacion = rand(1, 5); 

  echo "Calificación: $calificacion <br>";

  if ($calificacion == 1) { 
    echo "Muy Deficiente"; 
  } elseif ($calificacion == 2) { 
    echo "Insuficiente"; 
  } elseif ($calificacion == 3) { 
    echo "Suficiente"; 
  } elseif ($calificacion == 4) { 
    echo "Notable"; 
  } else { 
    echo "Sobresaliente"; 
  } 

  ?> 

</body> 

</html>
