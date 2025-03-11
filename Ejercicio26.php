<html> 

<head> 
  <title>Clasificación de Número</title> 
</head> 

<body> 

  <?php 

  $numero = rand(1, 1000); 
  echo "Número: $numero <br>";

  // Par o impar
  if ($numero % 2 == 0) { 
    echo "Es par. <br>"; 
  } else { 
    echo "Es impar. <br>"; 
  } 

  // Múltiplo de 5
  if ($numero % 5 == 0) { 
    echo "Es múltiplo de 5. <br>"; 
  } else { 
    echo "No es múltiplo de 5. <br>"; 
  } 

  // Verificar si es primo
  $esPrimo = true; 
  if ($numero < 2) { 
    $esPrimo = false; 
  } else { 
    for ($i = 2; $i <= sqrt($numero); $i++) { 
      if ($numero % $i == 0) { 
        $esPrimo = false; 
        break; 
      } 
    } 
  } 

  if ($esPrimo) { 
    echo "Es primo."; 
  } else { 
    echo "No es primo."; 
  } 

  ?> 

</body> 

</html>
