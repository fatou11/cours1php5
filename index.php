<?php
   define('AFFICHE', 'me');
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
    switch(AFFICHE){ 
        case 'en':
        case 'us':
        echo $langue['en'];
        break;
        case 'fr':
        case 'be':
        case 'ca':
        echo $langue['fr'];
        break;
        case 'es':
        case 'me':
        echo $langue['es'];
        break;
        case 'de':
        echo $langue['de'];
        break;
        default:
        echo 'votre langue n\'est pas connu';
    }
    
    for ($i=0;$i<=10;$i++){
        if($i == 5){
        break;
        }
        echo $i.$retour;
    }
    echo 'Valeur de $i : '.$i;
        
    ?>
    
</body>
</html>