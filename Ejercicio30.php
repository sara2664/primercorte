<html> 

<head> 
  <title>Días del Mes</title> 
</head> 

<body> 

  <?php 

  // Generar un número aleatorio entre 1 y 12
  $mes = rand(1, 12); 

  // Generar un año aleatorio entre 1900 y 2100 para determinar si es bisiesto
  $año = rand(1900, 2100);

  // Determinar si el año es bisiesto
  $esBisiesto = ($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0);

  // Definir los días del mes
  switch ($mes) { 
    case 1: case 3: case 5: case 7: case 8: case 10: case 12: 
      $dias = 31; 
      break; 
    case 4: case 6: case 9: case 11: 
      $dias = 30; 
      break; 
    case 2: 
      $dias = $esBisiesto ? 29 : 28; 
      break; 
  } 

  // Nombres de los meses
  $nombresMeses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril",
    5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto",
    9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
  ];

  echo "Mes: $nombresMeses[$mes] ($mes) <br>"; 
  echo "Año: $año <br>";
  echo "Días en el mes: $dias"; 

  ?> 

</body> 

</html>
