<?php // a. abrindo php
/* 
include - 
include_once -
require -
require_once - 
*/

// import do arquivo de funcoes para realizar calculos
require_once('var_const/variaveis.php');
require_once('function/calculo.php');

    if(isset ($_POST['btnCalc'])) // isset() = "serve para ver se uma variavel ou um valor existe
        
    { // 1. validação para verificar se o botao calcular foi acionado
        
        
        // empty = ($var == "") exemplo: if ($_POST['txtN1'] =="" || $_POST['txtN2'] =="")  
        if (empty ($_POST['txtN1']) || empty ($_POST['txtN2']))
            echo("<span class='msgEcho'>".ERRO_PREENCHER_CAMPOS."</span>");
        else{ // 2. else para fazer as operações
            
        //Resgatando valores do formulário no html
        $valor1 = $_POST['txtN1'];
        $valor2 = $_POST['txtN2'];

            
        //Resgata o valor do radio e converte a escrita para maisucula ou minusculo
        //strtoupper() - maiusculo
        //strtolower() - minusculo
            
            if(isset ($_POST['rdoCalc'])){// 3. IF escolha de operacao
            $operacao = strtoupper($_POST['rdoCalc']);

                
            //Validação para identificar os tipos de calculos
                if(is_numeric($valor1) && is_numeric($valor1)){ // VALIDAR SE OS DADOS SAO NUMERICOS
                    
                    //chamada da funcao calcular, enviando os argumentos de valores e operação
                    $resultado = calcular($valor1, $valor2, $operacao);
                    
                }// VALIDAR SE OS DADOS SAO NUMERICOS
                else
                    echo("<span class='msgEcho'>".ERRO_DIGITO_NUMERICO."</span>");
                
            }// 3. IF escolha de operacao
            else
                echo("<span class='msgEcho'>".ERRO_CLICK_OPERACAO."</span>");
        } // 2. else para fazer as operações
        
    } // 1. validação para verificar se o botao calcular foi acionado
// a. fechando php ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Calculadora Simples</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
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
                                    
                                    <a href="calculadora_simples_switch/index.php">
                                        <li class="dropdown-items">Calculadora Simples
                                            <div id="calculadoraImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                    
                                    <a href="../tabuada/calculadora.php">
                                        <li class="dropdown-items">Tabuada
                                            <div id="tabuadaImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                    
                                    <a href="../par_impar/parimpar.php">
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
                <section id="calcSimples">
                    <div id="cabecalho">
                        <h1>Calculadora Simples</h1>
                    </div>
                    <form method="post" name="clcSimples" action="">
                        <div id="conteudo">
                            <div class="vlres">
                                <label>Valor 1</label>
                                <input type="text" name="txtN1" value="<?=$valor1?>">
                            </div>
                            <div class="vlres">
                                <label>Valor 2</label>
                                <input type="text" name="txtN2" value="<?=$valor2?>">
                            </div>
                            <div id="radios">
                                <div class="inputDec">
                                    <input type="radio" name="rdoCalc" value="soma" <?php 
                                           if($operacao == 'SOMA')
                                            echo('checked')?>> Somar
                                </div>
                                <div class="inputDec">
                                    <input type="radio" name="rdoCalc" value="subtracao" <?= $operacao == 'SUBTRACAO' ? 'checked' : ''; ?>>Subtrair
                                </div>
                                <div class="inputDec">
                                    <input type="radio" name="rdoCalc" value="multiplicacao" <?= $operacao == 'MULTIPLICACAO' ? 'checked' : ''; ?>>Multiplicar
                                </div>
                                <div class="inputDec">
                                    <input type="radio" name="rdoCalc" value="divisao" <?= $operacao == 'DIVISAO' ? 'checked' : ''; ?>>Dividir
                                </div>
                                <input type="submit" name="btnCalc" value="Calcular" id="botaoCalcula">
                            </div>
                            <div id="resultado">
                                <?php echo("<span>".$resultado."</span>")?>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </main>
    </body>
</html>