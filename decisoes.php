<?php

$idade = 16;

$Acompanhantes = 2;

echo  "Se tiver a partir de 18 anos, pode entrar. Ou ";
echo "Se estiver acompanhado de 1 adulto" .PHP_EOL;

if ($idade >= 18 ){

echo "Você tem $idade anos, ";

echo "pode então adentrar a esse local sozinho";

}
else if ($idade >= 16 && $Acompanhantes > 1 ){
        echo "Você tem $idade anos, está acompanhado. Pode entrar";
    
    
} else {
    echo "BANIDO";
}

echo PHP_EOL;

echo 'Adeus';