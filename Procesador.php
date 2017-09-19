<?php

class Procesador {
    
    
    function procesar(){
        
        echo"La Latitud es igual a= ";
        echo $_REQUEST["Latitud"];
        echo"La Longitud es igual a= ";
        echo $_REQUEST["Longitud"];
    }
  
}
$miobjeto=new Procesador();
echo $miobjeto->procesar();
?>

