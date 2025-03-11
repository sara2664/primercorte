<html> 

<head> 
  <title>Saludo según la Hora</title> 
</head> 

<body> 

  <?php 

  $hora = rand(0, 23); 
  echo "Hora: $hora:00 <br>";

  if ($hora >= 5 && $hora <= 11) { 
    echo "¡Buenos días!"; 
  } elseif ($hora >= 12 && $hora <= 18) { 
    echo "¡Buenas tardes!"; 
  } else { 
    echo "¡Buenas noches!"; 
  } 

  ?> 

</body> 

</html>
