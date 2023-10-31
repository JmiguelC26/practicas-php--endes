<?php
$primero = $_GET['primero'];
$segundo = $_GET['segundo'];
$tercero = $_GET['tercero'];
if ($primero>$segundo && $segundo>$tercero) {
echo "El mayor es $primero" ;
} elseif ($segundo>$primero && $primero>$tercero) {
echo "El mayor es $segundo";
} else {
echo "El mayor es $tercero";
}
?>