<?php
$numero = $_GET['numero'];
		
if($numero==1) {

    echo "Lunes";
    
}else if($numero==2) {

    echo "Martes";
}else if($numero==3) {

    echo "Miércoles";
}else if($numero==4) {

    echo "Jueves";
}else if($numero==5) {

    echo "Viernes";
}else if($numero==6) {

    echo "Sábado";
}else if($numero==7){

    echo "Domingo";
}else if($numero<1 || $numero>7){

    echo "Error!";
}
?>