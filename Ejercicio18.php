<html> 

<head> 
  <title>Vocal Aleatoria</title> 
</head> 

<body> 

  <?php 

  $vocales = ['a', 'e', 'i', 'o', 'u']; 
  $letra = $vocales[rand(0, 4)]; 

  echo "Letra: $letra <br>";
  echo "Es una vocal"; 

  ?> 

</body> 

</html>
