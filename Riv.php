<?php
    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    
    if($num1>$num2)
    {
        echo "O maior é $num1";
    }
    else{
        if ($num1<$num2)
        {
            echo "O maior é :",$num2;
        }
        else
        {
            echo "Os valores são iguais";
        }
    }
// var_dump[$_POST];

?>