<html> 

<head> 
  <title>Clasificación de Notas</title> 
</head> 

<body> 

  <?php 

  $nota = rand(0, 100); 
  echo "Nota: $nota <br>";

  if ($nota <= 59) { 
    echo "Clasificación: Reprobado"; 
  } elseif ($nota <= 79) { 
    echo "Clasificación: Aprobado"; 
  } elseif ($nota <= 89) { 
    echo "Clasificación: Notable"; 
  } else { 
    echo "Clasificación: Sobresaliente"; 
  } 

  ?> 

</body> 

</html>
