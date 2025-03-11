<html> 

<head> 
  <title>Clasificación de Número</title> 
</head> 

<body> 

  <?php 

  $numero = rand(-50, 50); 
  echo "Número: $numero <br>";

  if ($numero > 0) { 
    echo "El número es positivo."; 
  } elseif ($numero < 0) { 
    echo "El número es negativo."; 
  } else { 
    echo "El número es cero."; 
  } 

  ?> 

</body> 

</html>
