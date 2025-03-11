<html> 

<head> 
  <title>Tipo de Triángulo</title> 
</head> 

<body> 

  <?php 

  $lado1 = rand(1, 10); 
  $lado2 = rand(1, 10); 
  $lado3 = rand(1, 10); 

  echo "Lados del triángulo: $lado1, $lado2, $lado3 <br>";

  if ($lado1 == $lado2 && $lado2 == $lado3) { 
    echo "Tipo: Equilátero"; 
  } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) { 
    echo "Tipo: Isósceles"; 
  } else { 
    echo "Tipo: Escaleno"; 
  } 

  ?> 

</body> 

</html>
