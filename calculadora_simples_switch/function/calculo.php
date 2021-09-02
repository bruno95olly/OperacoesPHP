<?php
    function calcular($n1, $n2, $tipoCalculo)
    {
        //criando variaveis locais dentro da funcao
        $numero1 = (double) 0;
        $numero2 = (double) 0;
        $total = (double) 0;
        $opcaoCalculo = (string) null;

        //guardando os valores dos argumentos nas variaveis locais na funcao
        $numero1 = $n1;
        $numero2 = $n2;
        $opcaoCalculo = $tipoCalculo;

        //verificacao para qual tipo de calculo sera realizado
        switch ($opcaoCalculo)
        {
            case ('SOMA'):
                $total = $numero1 + $numero2;
                break;

            case ('SUBTRACAO'):
                $total = $numero1 - $numero2;
                break;

            case ('MULTIPLICACAO'):
                $total = $numero1 * $numero2;
                break;

            case ('DIVISAO'):
                if ($numero1 == 0 || $numero2 == 0)
                    echo(ERRO_DIVISAO_ZERO);
                else
                    $total = round($numero1 / $numero2, 3);
                break;
            // ESSA OPCAO SOMENTE SERA EXECUTADA CASO NENHUMA DAS OPCOES DO CASE SEJA VALIDADA   
            default: 
                echo(ERRO_CLICK_OPERACAO);
        }
        return $total;
    }
?>