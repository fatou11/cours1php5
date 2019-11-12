<?php
   define('AFFICHE', 'fr');
   $langue = array(
       'en'=>'<p style="color:bleue">I like PHP !</p>', 
       'fr'=> '<p style="color:bleue">J\'aime PHP!</p>'
    );
    $retour = '<br/>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document php</title>
</head>
<body>
    <p>hello world</p>
    <?php
      echo $langue[AFFICHE];
      echo $retour;
     
        $a = true;
        $b = false;
        if(!$b){
            echo 'condition verifiee';
        }
        else{
            echo 'condition non verifier';
        }
       
        
    ?>
    
</body>
</html>