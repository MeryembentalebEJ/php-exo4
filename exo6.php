<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// htmlspecialchars: method
$serve = strip_tags($_GET['serveur']);
$language = strip_tags($_GET['langage']);
if(isset($_GET['langage']) && isset($_GET['serveur'])){ 
    echo 'langage : '. $language. ' serveur : '. $serve;
    }else{
        echo 'erreur';
    }
?>
</body>
</html>
