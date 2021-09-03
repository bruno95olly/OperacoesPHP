<?php
    function tabuadaResult($tabuadaFunction, $contadorFunction){
        $tabuada1 = (int) 0;
        $contador1 = (int) 0;
        $cont1 = (int) 0;
        $result = (int) 0;
        $caixaTabuada1 = (string) null;
        
        $tabuada1 = $tabuadaFunction;
        $contador1 = $contadorFunction;
    
        for($cont1 = 1; $cont1 <= $contador1; $cont1 ++){
            $result = $tabuada1 * $cont1;
            $caixaTabuada1 = $caixaTabuada1 . $tabuada1 ." x ". $cont1 . " = " . $result . "<br>";
        } 
        return $caixaTabuada1;
    }
?>