<html> 
 
<head> 
  <title>Problema</title> 
</head> 
 
<body> 
 
  <?php 
 
  $num = rand(1, 100); 
  echo "numero: $num <br>";

  if ($num % 2 == 0) { 
    echo "El numero es par"; 
  } else { 
      echo "El numero es impar"; 
    } 

 
  ?> 
 
</body> 
 
</html>