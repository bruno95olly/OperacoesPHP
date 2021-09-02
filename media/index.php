<?php
    $media = 0;
    $nota1 = null;
    $nota2 = null;
    $nota3 = null;
    $nota4 = null;
//Valida se o botao calcular foi acionado
    if(isset($_POST['btnCalcular'])){
        
        //Resgatando dados das caixas de texto
        $nota1 = $_POST['txtNota1'];
        $nota2 = $_POST['txtNota2'];
        $nota3 = $_POST['txtNota3'];
        $nota4 = $_POST['txtNota4'];
        
        //is_numeric
        if ($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "") {
            echo("<script> alert('PARABENS BURRO'); </script>");
        }
        else{
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
            // !is_numeric($nota1) = não é numerico
            {
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            }
            else{
                echo("<script> alert('PARABENS BURRO'); </script>"); 
            }
        }
        
        /*
        Operadores de comparação
             <
             >
             <=
             >=
             !=
             ==
             === valor e tipo de dados iguais, exemplo: 10 / "10" - igual a falso v/f

             ==! valor igual e tipo de dados diferente, exemplo: 10 / "10" - igual a verdadeiro v/v
        */
        
        //gettype () permite verificar o tipo de dados de uma variavel ou objeto
//        echo(gettype($media));
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Media</title>
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
                                    <a href="index.php">
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
                <div id="formCalculo">
                <div id="caixa1">
                    <h1>Calculo de Médias</h1>
                </div>
                <form name="frmCalculo" action="" method="post">
                <div id="conteudo">
                    <div>
                        <label>Nota 1</label>
                        <input type="text" name="txtNota1" size="30" maxlength="5" placeholder="insira a nota 1" value="<?=$nota1?>">
    <!--                    
    <input type="text" name="txtNota1" size="30" maxlength="5" placeholder="insira a nota 1" required>
    required = 
    -->
                    </div>

                    <div>
                        <label>Nota 2</label>
                        <input type="text" name="txtNota2" size="30" maxlength="5" placeholder="insira a nota 2" value="<?=$nota2?>">
                    </div>

                    <div>
                        <label>Nota 3</label>
                        <input type="text" name="txtNota3" size="30" maxlength="5" placeholder="insira a nota 3" value="<?=$nota3?>">
                    </div>

                    <div>
                        <label>Nota 4</label>
                        <input type="text" name="txtNota4" size="30" maxlength="5" placeholder="insira a nota 4" value="<?=$nota4?>">
                    </div>
                    <div>
                        <input id="botaoCalcular" type="submit" name="btnCalcular" value="Calcular">
                        <div id="botaoReset">
                            <a href="index.php">
                                Novo Calculo
                            </a>
                        </div>
                    </div>
                </div>
                </form>
                <footer id="media">
                    A média é:
                    <?php echo($media); ?>
    <!--                <?=$media?>-->
                </footer>
                </div>
            </div>
        </main>
    </body>
</html>