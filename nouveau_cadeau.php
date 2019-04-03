<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wish List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <link rel="stylesheet" href="css/styleRange.css">
    <link rel="stylesheet" href="css/styleMain.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>





</head>

<body>
    <div class="backgroundFlocon">
        <div class="background">

            <div class="xxxcontainer">

                <div class="contest">

                    <div class="container">




                        <!-- Logo -->
                        <h1 onclick="window.location.href='title.php'">Wish List</h1>

                        <?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=wishlist;charset=utf8', 'root', 'root');
    	/*$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');*/

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/* Initialisation des variables du formaulaire */

$name = $_POST['uname'];
$prix = $_POST['uprix'];
$type = $_POST['utype'][0];
                        
 if (!empty($_POST['usexe'])) {
     $sexe = 2;
 } else {
     $sexe = 1;
 }

$img = $_POST['uimg'];




$reponse = $bdd->prepare('INSERT INTO cadeaux(gift_name, gift_price, gift_sexe, gift_type, gift_link, gift_buy) VALUES(:nom, :prix, :sexe, :type, :lien, \'https://www.google.fr/search?q=\')');
$reponse->execute(array(
	'nom' => $name,
    'prix' => $prix,
	'type' => $type,
	'sexe' => $sexe,
    'lien'=> $img,
	));


echo '<p>Félicitation, le cadeau a bien été ajouté !</p>';

?>


                            <!-- Bouton de validation Général-->
                            <button id="extra" type="button" onclick="window.location.href='formulaire.php'">Trouver le cadeau
                                <br />parfait pour un proche !</button>
                            <button id="extra" type="button" onclick="window.location.href='ajouter.php'">Ajouter un nouveau
                                <br />cadeau à la base de donnée</button>



                    </div>
                </div>
            </div>
        </div>
        <div class="bottomground"></div>
    </div>
</body>

</html>
