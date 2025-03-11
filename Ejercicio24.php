<html> 

<head> 
  <title>Cálculo de Impuestos</title> 
</head> 

<body> 

  <?php 

  $salario = rand(5000, 50000); 
  echo "Salario: $$salario <br>";

  if ($salario < 10000) { 
    echo "Sin impuestos."; 
  } elseif ($salario >= 10000 && $salario <= 20000) { 
    $impuesto = $salario * 0.10;
    echo "Impuesto a pagar: $$impuesto (10%)"; 
  } elseif ($salario >= 20001 && $salario <= 35000) { 
    $impuesto = $salario * 0.20;
    echo "Impuesto a pagar: $$impuesto (20%)"; 
  } else { 
    $impuesto = $salario * 0.30;
    echo "Impuesto a pagar: $$impuesto (30%)"; 
  } 

  ?> 

</body> 

</html>
