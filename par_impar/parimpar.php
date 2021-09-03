<?php 
    require_once('var_const/variaveis-constantes.php');
    require_once('functions/pares_impares.php');

    if(isset($_POST['btnCalcular'])){
        
        $nInicial = $_POST['valorInicial'];
        $nFinal = $_POST['valorFinal'];
        
        if($nInicial == "0" || $nFinal == "0" ){
            echo(CAIXA_VAZIA);
        }
        else{
            if($nInicial >= $nFinal){
                echo(DIGITOS_INVALIDOS);
            }
            else{
                $nPares = numerosPares($nInicial, $nFinal);
                $totPar = quantidadePares($nInicial, $nFinal);
                
                $totImpar = quantidadeImpares($nInicial, $nFinal);
                $nImpar = numerosImpares($nInicial, $nFinal);
                } 
            }
            
        }
        
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Par ou Impar</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="sidebar">
                <div class="logo_content">
                    <div class="logo">
                        <i class='bx bxs-calculator'></i>
                        <div class="logo_name">Calc Bruno Olly</div>
                    </div>
                    <div id="home">
                        <a href="../index.html" id="formatHome">
                            <i class='bx bxs-home' id="casa"></i>
                            <div id="homeText">Home</div>
                        </a>
                    </div>
                    <i class='bx bx-menu' id="btn">
                        <div id="submenu">
                            <div id="seta"></div>
                            <div id="dropdown">
                                <ul id="list-dropdown">
                                    <a href="../media/index.php">
                                        <li class="dropdown-items">Média
                                            <div id="mediaImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                    
                                    <a href="../calculadora_simples_switch/index.php">
                                        <li class="dropdown-items">Calculadora Simples
                                            <div id="calculadoraImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                    
                                    <a href="../tabuada/calculadora.php">
                                        <li class="dropdown-items">Tabuada
                                            <div id="tabuadaImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                    
                                    <a href="parimpar.php">
                                        <li class="dropdown-items">Par ou Ímpar
                                        <div id="parimparImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </i>
                </div>
            </div>
        </header>
        <main>
            <div id="banner">
                <form method="post" name="tabuadaForm">
                    <div id="flexColumn">
                        <div class="formatInput">
                            <label>N Inicial:</label>
                            <select name="valorInicial">
                                <option value="0" selected>
                                    Por Favor Selecione Um Numero
                                </option>
                                <?php 
                                    for ($cont = 1; $cont<=500; $cont++){
                                        echo("<option value='".$cont."'>".$cont."</option>");
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="formatInput">
                            <label>N Final:</label>
                            <select name="valorFinal">
                                <option value="0">
                                    Por Favor Selecione Um Numero
                                </option>
                                <?php 
                                    for ($cont = 100; $cont<=1000; $cont++){
                                        echo("<option value='".$cont."'>".$cont."</option>");
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="formatInput">
                            <input id="btn" type="submit" value="Calcular" name="btnCalcular">
                        </div>
                    </div>
                    <div class="flexRow">
                        <div class="labelFmt">
                            <label>N Par</label>
                            <div class="caixaResult">
                                <?=$nPares?>
                            </div>
                            <label>Qtd de Pares: <?=$totPar?></label>
                        </div>
                        <div class="labelFmt">
                            <label>N Impar</label>
                            <div class="caixaResult">
                                <?=$nImpar?>
                            </div>
                            <label>Qtd de Impares <?=$totImpar?></label>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>