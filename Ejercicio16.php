<html> 

<head> 
  <title>Juego: Piedra, Papel o Tijera</title> 
</head> 

<body> 

  <?php 

  $eleccion = rand(1, 3); 

  echo "Número: $eleccion <br>";

  if ($eleccion == 1) { 
    echo "Opción: Piedra"; 
  } elseif ($eleccion == 2) { 
    echo "Opción: Papel"; 
  } else { 
    echo "Opción: Tijera"; 
  } 

  ?> 

</body> 

</html>
