<?php 
    $var = "Bill";
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";
    $var = 3.1415;
    $tipo = gettype($var);
    echo  "isso é um gettype da variavel " . "$var ($tipo)<br>";
    $var = true;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>"

?>

 <?php
    $var = "null" ;
    if(is_null($var)) {
        echo "variavel \$var!" . "e nula!<br>";
    } 
    $var = "bill";
      if(is_string($var)){
        echo "variavel \$var e um string!<br>";
      }
    $var = 12;
      if(is_integer($var)){
        echo "variavel \$var e um inteiro!<br>";
      }
    $var = "falso";
      if(is_bool($var)){
        echo "variavel \$var e booleana!";
      }
    
?>

<?php
$nota = array(0, 1, 2, 3)

echo "$nota[0]=" 
$nota[1]=
$nota[2]=
$nota[3]=

?>

