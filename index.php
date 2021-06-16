<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php part 5</title>
    <style>
    form{
      color: coral;
      font-size: 2rem;
    }
    button{
        background-color: teal;
        padding: 5px;
        border-radius: 4px;
    }
    </style>
</head>
<body>
<h1>PHP PART 1</h1>
<h2> Exo 1 partie 5</h2>
<h3> Créez un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres.</h3>

    <form action="index.php" method="get">
    name: <input type="text" name="name">
    <button type="submit">Submit</button>
    </form>

    <p><?php echo $_GET['name'];?></p>

<!-- ================================================ -->

<h2> Exo 2 partie 5</h2>
<h3>Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page et affichez ces paramètres.</h3>

<a href="index.php?nom=Bentaleb&amp;prenom=Meryem&amp;age=31">Submit</a>
<p><?php echo 'Je m\'appelle'. ' ' . $_GET['nom'] . ' '. $_GET['prenom'] . ' '. 'et j\'ai '. ' '. $_GET['age'] . ' '. ' ans';   ?></p> 



<!-- =========================================================== -->
<h2> Exo 2 partie 5</h2>
<h3>Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page et affichez ces paramètres.</h3>

<a href="targetExo2.php?nom=Bentaleb&amp;prenom=Meryem&amp;age=31">Submit</a>

<!-- ======================================================================= -->

<h2> Exo 3 partie 5</h2>
<h3>Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page. Si l'âge est supérieur à 18 et inférieur à 130 affichez ces paramètres. L'âge ne peut être qu'un entier.</h3>

<a href="exo3.php?nom=Bentaleb&amp;prenom=Meryem&amp;age=31">AFFICHER</a>


<!-- ============================================================================= -->

<h2> Exo 4 partie 5</h2>
<h3> Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si le paramètre serveur existe, si oui affichez le sinon affichez une un message d'erreur.</h3>
<a href="lienExo4.php?langage=php&amp;serveur=phpServeur">Lien</a>




<!-- =============================================================================== -->
<h2> Exo 5 partie 5</h2>
<h3> Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si les paramètres existent, si oui affichez les sinon affichez une un message d'erreur.</h3>
<a href="lienExo5.php?langage=php&amp;serveur=Meryem">Lien</a>

<!-- =============================================================================== -->
<h2> Exo 6 partie 5</h2>
<h3>Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si les paramètres existent, si oui affichez les sinon affichez une un message d'erreur. Vous devez empêchez l'inclusion de balises html dans les paramètres.</h3>
<a href="exo6.php?langage=php&amp;serveur=Meryem">Link</a>
</body>
</html>

