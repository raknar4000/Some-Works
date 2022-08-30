<?php
        $title = "SwitchStatements";
        include 'includes/header.php'    
     
     ?>

    <h1>Switch statements</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A';
                echo '<h2 style = "color: green">you are star!<h2>';
                break;
            case 'B':
                echo '<h2 style = "color: blue">you did well!</h2>';
                break;
            default:
                echo '<h2 = style="color: red">You have failed!<?</h2>';   
                break;  
        }
    ?>
    
    <?php require 'includes/footer.php' ?>