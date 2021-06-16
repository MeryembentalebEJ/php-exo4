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
// isset in order to verify the language exists if not 'error' 
// !empty if it is empty display the error message if not display the results 
// if(!empty($_GET['langage']) && !empty($_GET['serveur'])){ //
//     echo 'langage : '. $_GET['langage']. ' serveur : '. $_GET['serveur'];
// }else{
//     echo 'erreur';
// }
if(isset($_GET['langage']) && isset($_GET['serveur'])){ //
    echo 'langage : '. $_GET['langage']. ' serveur : '. $_GET['serveur'];
    }else{
        echo 'erreur';
     }
?>
    
</body>
</html>