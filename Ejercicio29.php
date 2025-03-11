<html> 

<head> 
  <title>Cálculo de IMC</title> 
</head> 

<body> 

  <?php 

  // Generar peso entre 40 y 120 kg
  $peso = rand(40, 120); 

  // Generar altura entre 1.4 y 2.0 m con un decimal
  $altura = rand(140, 200) / 100; 

  // Calcular IMC
  $imc = $peso / ($altura * $altura); 

  echo "Peso: $peso kg <br>"; 
  echo "Altura: $altura m <br>"; 
  echo "IMC: " . number_format($imc, 2) . "<br>"; 

  // Clasificación del IMC
  if ($imc < 18.5) { 
    echo "Clasificación: Bajo peso"; 
  } elseif ($imc >= 18.5 && $imc <= 24.9) { 
    echo "Clasificación: Peso normal"; 
  } elseif ($imc >= 25 && $imc <= 29.9) { 
    echo "Clasificación: Sobrepeso"; 
  } else { 
    echo "Clasificación: Obesidad"; 
  } 

  ?> 

</body> 

</html>
