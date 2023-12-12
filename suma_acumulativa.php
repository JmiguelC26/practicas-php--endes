<?php
$numero = $_GET['numero'];
$suma=0;

for ($i = 1; $i <= $numero; $i++){
 
    $suma= $suma + $i;
}
echo "La suma de los valores entre 1 y $numero es: $suma";

?>