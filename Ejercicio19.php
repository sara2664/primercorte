<html> 

<head> 
  <title>Números Aleatorios</title> 
</head> 

<body> 

  <?php 

  $num1 = rand(1, 50); 
  $num2 = rand(1, 50); 
  $num3 = rand(1, 50); 

  echo "Números: $num1, $num2, $num3 <br>";

  // Determinar el mayor
  $mayor = max($num1, $num2, $num3);
  echo "El número mayor es: $mayor <br>";

  // Determinar el menor
  $menor = min($num1, $num2, $num3);
  echo "El número menor es: $menor <br>";

  // Verificar si hay un empate
  if ($num1 == $num2 && $num2 == $num3) {
    echo "Los tres números son iguales.";
  } elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
    echo "Hay un empate entre dos números.";
  } else {
    echo "No hay empates.";
  }

  ?> 

</body> 

</html>
