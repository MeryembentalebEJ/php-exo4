<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 PARTIE 5</title>
</head>
<body>
<?php 
if($_GET['age'] > 18 && $_GET['age'] < 130){
    echo $_GET['nom'] . ' '. $_GET['prenom']. ' '. intval($_GET['age']);
}else{
    echo 'l\'age n\'est pas correcte ';
}

?>
    
</body>
</html>