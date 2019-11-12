<?php
   define('AFFICHE', 'en');
   $langue = array(
       'en'=>'<p style="color:bleue">I like PHP !</p>', 
       'fr'=> '<p style="color:bleue">J\'aime PHP!</p>',
       'es'=> '<p style="color:bleue">Amore Hola!</p>',
       'de'=> '<p style="color:bleue">hola welt</p>'
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
     // echo $langue[AFFICHE];
    if(AFFICHE == 'en'):
        echo $langue['en'];
   
    elseif(AFFICHE == 'fr' || AFFICHE == 'ca'):
        echo $langue['fr'];
   
    elseif(AFFICHE == 'es'):
        echo $langue['es'];
    
    elseif(AFFICHE == 'de'):
        echo $langue['de'];
    
    else:
        echo 'votre langue n\'est pas connu';
    
      echo $retour;
    endif; 
        
    ?>
    
</body>
</html>