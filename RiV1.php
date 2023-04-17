<?php 
$num1 = $_POST['valor1'];
$num2 = $_POST['valor2'];
$num3 = $_POST['caractere'];

switch ($num3){
    case 1:
        echo "Resposta : ",$num1 * $num2 ;
        break ;

    case 2:    
        echo "Resposta : ",$num1 / $num2 ;
        break ; 
     
    case 3 : 
        echo "Resposta : ",$num1 + $num2 ;    
        break ;
    case 4 :
        echo  "Resposta : ",$num1 - $num2 ;   
        break ;  
    case 5 :
        echo "A soma é : ", $num1 + $num2, "<br>"; 
        echo " A subtração é :"  , $num1 - $num2, "<br>";
        echo "A divisão é: ",$num1 / $num2 , "<br>";    
        echo " A multiplicação é :" ,$num1 * $num2;
    }
        
?>

