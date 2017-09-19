<?php

class Procesador {
    
    
    function procesar(){
        
        echo $_REQUEST["Latitud"];
        echo $_REQUEST["Longitud"];
    }
  
}
$miobjeto=new Procesador();
echo $miobjeto->procesar();
?>

