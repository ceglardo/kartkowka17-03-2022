<html>
    <head>

</head>
<body>

<form action="" method="post" >
      
      Silnia: <input type="text" name="silnia" />  <br>
      Fibonacci: <input  type="text" name="fibo" /> <br />
      
    
      <button type="submit" value="przycisk">Potwierdz</button>
  
    </form>

    <?php
    $n = $_POST['silnia'];
    
    $silnia = 1;
    for ($i=1; $i<=$n; $i++) {
      $silnia *= $i;
    }
    echo ("$n! = $silnia");
    ?>

    <?php

echo "<br> Fibonacci: ";
$nr1=0;
$nr2=1;

$m = $_POST['fibo'];
$j = 0;
while($j<=$m){
  echo $nr1." ";

  $nr3 = $nr2 + $nr1;
  $nr1 = $nr2;
  $nr2 = $nr3;
  $j = $j + 1;
}


  

?>



</body>

</html>