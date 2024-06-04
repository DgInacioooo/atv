<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
    $numero = floatval($_POST["num"]);
    $numero2 = floatval($_POST["numero2"]);
    $op = htmlspecialchars($_POST["op"]);
        switch(op){
            case '+';
                $resultado = $numero + $numero2;
                echo "$numero + $numero2 = $resultado <br>";
            break;

            case '-';
                $resultado = $numero - $numero2;
                echo "$numero - $numero2 = $resultado <br>";
            break;

            case 'x ';
                $resultado = $numero * $numero2;
                echo "$numero * $numero2 = $resultado <br>";
            break;

            case '/';
                if($numero != 0 && $numero2 != 0){
                    $resultado = $numero / $numero2;
                    echo "$numero / $numero2 = $resultado <br> ";
                } else{
                    echo "Não é possivel dividir por zero <br>";
                }

            break;    

        }

?>