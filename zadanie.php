<html>
    <head>

</head>
<body>

<form action="" method="post" >
      
      Imie: <input type="text" name="imie" />  <br>
      Nazwisko: <input  type="text" name="nazwisko" /> <br />
      Numer: <input  type="text" name=numer />
    
      <button type="submit" value="przycisk">Potwierdz</button>
  
    </form>

    <?php
    if(isset($_POST['imie'])){

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$nr = $_POST['numer'];


for($i=0; $i<$nr; $i++){
    echo $imie." ".$nazwisko." ";
}
}


?>



</body>

</html>
