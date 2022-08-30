<?php
        $title = "IFStatements";
        include 'includes/header.php'    
     
     ?>

    <h3 style="color: red"></h3>

<?php

    // An if statement that will carry out an action based on the value of the variable.
    echo '<h2>If Statement</h2>';

    $grade = 30;

    if($grade >= 50){
        echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
    }
    $grade = "A";
    // IF-Else If-else
    if($grade == 'A'){
        echo '<h2>YOU ARE A STAR!</h2>';
    }
    elseif ($garde == 'B'){
        echo '<h2>YOU DID WELL!';
    }
    else{
        echo "YOU HAVE FAILED!";
    }
   


?>
    
    <?php require 'includes/footer.php' ?>