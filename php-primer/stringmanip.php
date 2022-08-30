<?php
        $title = "String";
        include 'includes/header.php'    
     
     ?>

    <h1>PHP String Manipulation</h1>

    <?php
        //Concatenation of string
        $phrase1 = "student who came late";
        $phrase2 = "in class stand with Rock";
        $name = "Trevor Williams";
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' .ucwords($name).'<br/>';
        echo 'Upper case: '.strtoupper($name). '<br/>';
        echo 'Repeat String: '. str_repeat('a', 10) . '<br/>';
        echo 'Repeat String - ?Nested Function: ' .strtoupper(str_repeat('a',10)) . '<br/>'; 
        echo 'Get a position of string: ' .strpos($name,'w').'<br/>';
        //returns null
        echo 'Find lenght of String: ' .strlen($name) .'<br/>';

        echo 'Find character "e": ' . strchr($name, 'e').'<br/>';
        echo 'Replace string with another: '.str_replace("stand", "sit", 
        $phrase2 ) . '<br/>';
    ?>

    
<?php require 'includes/footer.php' ?>