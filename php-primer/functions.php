<?php
        $title = "Functions";
        include 'includes/header.php'    
     
     ?>

    <h1>functions</h1>

    <?php

    /* Defining a function */

        function writeMessage(){
            echo "YOu are a really great person <br/>";
        }

        /* Calling a function */

        writeMessage();
        echo "<hr/>";
        writeMessage();

        /* functions with parameters */

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        /* Pass by Reference - use ampersand in  parameter */    
        function changeNum( &$num){
            $num = $num + 10;
            // $num+= 10;

        }

         function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
         }

        $num = 500;
        addFunction(10,20);
        addFunction(10, $num);
        addFunction('10', "50");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200); 
        echo $return_value . '<br/>';

     ?>
    
    <?php require 'includes/footer.php' ?>