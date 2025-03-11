<html> 

<head> 
  <title>Semáforo</title> 
</head> 

<body> 

  <?php 

  $semaforo = rand(1, 3); 

  if ($semaforo == 1) { 
    echo "Color: Rojo - Alto"; 
  } elseif ($semaforo == 2) { 
    echo "Color: Amarillo - Precaución"; 
  } else { 
    echo "Color: Verde - Siga"; 
  } 

  ?> 

</body> 

</html>
