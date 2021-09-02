<?php
    $tabuada = (int) 0;
    $cont = (int) 0;
    $resultado = (int) 0;
    $caixaTabuada = null;
    
    const CAIXA_VAZIA = "<div class='alertaCaixa'><div class='alerta-Content'><div class='alertaAviso'>Preencha todos os campos!</div><div class='buttonAlert'><a href='calculadora.php'><i id='btnReload' class='bx bx-undo'></i></a></div></div></div>";

    const DIGITOS_INVALIDOS = "<div class='alertaCaixa'><div class='alerta-Content'><div class='alertaAviso'>Digite apenas caracteres numéricos!</div><div class='buttonAlert'><a href='calculadora.php'><i id='btnReload' class='bx bx-undo'></i></a></div></div></div>";

    const DIGITO_ZERO = "<div class='alertaCaixa'><div class='alerta-Content'><div class='alertaAviso'>O numero 0 não é valido nesta situação</div><div class='buttonAlert'><a href='calculadora.php'><i id='btnReload' class='bx bx-undo'></i></a></div></div></div>";

    if(isset($_POST['btnCalcular'])){
        
    $tabuada = $_POST['valorTabuada'];
    $contador = $_POST['fimTabuada'];
        
        if($tabuada == "" || $contador == ""){
            echo(CAIXA_VAZIA);
        }
        else{
            if($tabuada == 0 || $contador == 0){
                echo(DIGITO_ZERO);
            }
            elseif(is_numeric ($tabuada) && is_numeric ($contador)){
                for($cont = 1; $cont <= $contador; $cont ++){
                    $resultado = $tabuada * $cont;
                    $caixaTabuada = $caixaTabuada . $tabuada ." x ". $cont . " = " . $resultado . "<br>";
                } 
            }
            else{
                echo(DIGITOS_INVALIDOS);
            }
        }
    }

        
        
        

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Tabuada</title>
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
                                    
                                    <a href="../calculadora_simples_switch/index.php">
                                        <li class="dropdown-items">Calculadora Simples
                                            <div id="calculadoraImg" class="imgPgn"></div>
                                        </li>
                                    </a>
                                    
                                    <a href="calculadora.php">
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
                <form method="post" name="tabuadaForm">
                    <div class="formatInput">
                        <label>Tabuada:</label>
                        <input type="text" name="valorTabuada" value="">
                    </div>
                    <div class="formatInput">
                        <label>Contador:</label>
                        <input type="text" name="fimTabuada" value="">
                    </div>
                    <div class="formatInput">
                        <input id="btn" type="submit" value="Calcular" name="btnCalcular">
                    </div>
                    <div class="formatInput" id="caixaTab">
                        <?=$caixaTabuada?>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>