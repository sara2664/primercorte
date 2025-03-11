<html> 

<head> 
  <title>Estación del Año</title> 
</head> 

<body> 

  <?php 

  $mes = rand(1, 12); 
  echo "Mes generado: $mes <br>";

  if ($mes == 12 || $mes == 1 || $mes == 2) { 
    echo "Estación: Invierno"; 
  } elseif ($mes >= 3 && $mes <= 5) { 
    echo "Estación: Primavera"; 
  } elseif ($mes >= 6 && $mes <= 8) { 
    echo "Estación: Verano"; 
  } else { 
    echo "Estación: Otoño"; 
  } 

  ?> 

</body> 

</html>
