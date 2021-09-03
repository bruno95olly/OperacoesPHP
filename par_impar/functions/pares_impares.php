<?php


//TODOS NUMEROS PARES
    function numerosPares($numeroInicial, $numeroFinal){
        $valorInicial = (int) 0;
        $valorFinal = (int) 0;
        $totalPar = (int) 0;
        $contador = (int) 0;
        $numerosPares = (string) null;
        $valorInicial = $numeroInicial;
        $valorFinal = $numeroFinal;
        
        for($contador = $valorInicial; $contador <= $valorFinal; $contador++){
            if($contador%2==0){
                $numerosPares = $numerosPares.$contador."<br>";
            }   
        }
        return $numerosPares;
    }

//QUANTIDADE NUMEROS PARES
    function quantidadePares($numeroInicial, $numeroFinal){
        $valorInicial = (int) 0;
        $valorFinal = (int) 0;
        $contador = (int) 0;
        $numerosPares = (string) null;
        $valorInicial = $numeroInicial;
        $valorFinal = $numeroFinal;
        $totalPares = (int) 0;
        
        for($contador = $valorInicial; $contador <= $valorFinal; $contador++){
            if($contador%2==0){
                $totalPares = $totalPares + 1;
                $numerosPares = $numerosPares.$contador."<br>";
            }
        }
        return $totalPares;
    }


//TODOS NUMEROS IMPARES
    function numerosImpares($numeroInicial, $numeroFinal){
        $valorInicial = (int) 0;
        $valorFinal = (int) 0;
        $totalImpar = (int) 0;
        $contador = (int) 0;
        $numerosImpares = (string) null;
        $valorInicial = $numeroInicial;
        $valorFinal = $numeroFinal;
        
        for($contador = $valorInicial; $contador <= $valorFinal; $contador++){
            if($contador%2!==0){
                $numerosImpares = $numerosImpares.$contador."<br>";
            }   
        }
        return $numerosImpares;
    }


//QUANTIDADE DE NUMEROS IMPARES
    function quantidadeImpares($numeroInicial, $numeroFinal){
        $valorInicial = (int) 0;
        $valorFinal = (int) 0;
        $contador = (int) 0;
        $numerosImpares = (string) null;
        $valorInicial = $numeroInicial;
        $valorFinal = $numeroFinal;
        $totalImpares = (int) 0;
        
        for($contador = $valorInicial; $contador <= $valorFinal; $contador++){
            if($contador%2!==0){
                $totalImpares = $totalImpares + 1;
                $numerosImpares = $numerosImpares.$contador."<br>";
            }
        }
        return $totalImpares;
    }

?>