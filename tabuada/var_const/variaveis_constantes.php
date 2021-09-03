<?php
    $tabuada = null;
    $cont = null;
    $resultado = (int) 0;
    $caixaTabuada = null;
    
    const CAIXA_VAZIA = "<div class='alertaCaixa'><div class='alerta-Content'><div class='alertaAviso'>Preencha todos os campos!</div><div class='buttonAlert'><a href='calculadora.php'><i id='btnReload' class='bx bx-undo'></i></a></div></div></div>";

    const DIGITOS_INVALIDOS = "<div class='alertaCaixa'><div class='alerta-Content'><div class='alertaAviso'>Digite apenas caracteres numéricos!</div><div class='buttonAlert'><a href='calculadora.php'><i id='btnReload' class='bx bx-undo'></i></a></div></div></div>";

    const DIGITO_ZERO = "<div class='alertaCaixa'><div class='alerta-Content'><div class='alertaAviso'>O numero 0 não é valido nesta situação</div><div class='buttonAlert'><a href='calculadora.php'><i id='btnReload' class='bx bx-undo'></i></a></div></div></div>";


?>