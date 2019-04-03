<?php 
                        
    $bdd = new PDO('mysql:host=localhost;dbname=wishlist', 'root', 'root');
         


                                 
    /* Récupération du select "Type" */

    $arrayType = $_POST['type'];
    $arrayPrix = $_POST['prix'];
    /*echo $_POST['type'];*/


/* Recupère le Min */
    $firstMin = $_POST['prix'][0];
    $secondMin = $_POST['prix'][1];

/* Recupère le Max */
    $preMax = $_POST['prix'][5];
    $firstMax = $_POST['prix'][6];
    $secondMax = $_POST['prix'][7];
    


/* On check le second chiffre du tableau */

    if ($_POST['prix'][1] == " "){
        $min = $firstMin;
        $max = $preMax.''.$firstMax;
    }
    else {
        $min = $firstMin.''.$secondMin;
        $max = $firstMax.''.$secondMax;
    };

/* On reinitialise les valeur proprement */
    $prixMax = $max;
    $prixMin = $min;




    if ($_POST['type'][0] == 'acolytes') {
        $distinction = '0';
        $distinctionMax = '500';
        } 

    if ($_POST['type'][0] == 'parents') {
        $distinction = '70';
        $distinctionMax = '500';

        } 

    if ($_POST['type'][0] == 'frères ou pour une de vos soeurs') {
        $distinction = '10';
        $distinctionMax = '70';

        } 

    if ($_POST['type'][0] == 'enfants') {
        
        $distinction = '0';
        $distinctionMax = '30';

        } 

    if ($_POST['type'][0] == 'ami(e)s') {
        $distinction = '10';
        $distinctionMax = '80';

        } 

    if ($_POST['type'][0] == 'dates') {
        $distinction = '70';
        $distinctionMax = '90';

        }



/* -------------------------------------------------------------- */

/* Chercher à changer distinction */

/*$distinction = 0;*/

/*    foreach ($arrayType as $selectedType) {*/




        /* Si Logo Femme check */

        if (!empty($_POST['femme']) && empty($_POST['homme'])) {

         $reponse = $bdd->query('SELECT * FROM cadeaux WHERE gift_sexe = 2 AND gift_price <= "'.$prixMax.'" AND gift_price >= "'.$prixMin.'"  AND gift_type >"'.$distinction.'" AND gift_type <"'.$distinctionMax.'" order by RAND() LIMIT 1');   

            while ($donnees = $reponse->fetch()) {
                echo '<div id="nom">'.$donnees['gift_name'].'</div>';
                echo '<div id="imageid"><img src="'.$donnees['gift_link'].'" style="height: 220px; margin: auto; display: flex;"></div>';
                echo '<div id="prix">'.$donnees['gift_price'].' €</div>';
                
                $lien = $donnees['gift_buy'];
                echo '<a id="extraLink" target="_blank"
                href="'.$lien.$donnees['gift_name'].'"></a>';
                

            }
        }

        /* Si Logo homme check */

        if (empty($_POST['femme']) && !empty($_POST['homme'])) {

         $reponse = $bdd->query('SELECT * FROM cadeaux WHERE gift_sexe = 1 AND gift_price <= "'.$prixMax.'" AND gift_price >= "'.$prixMin.'" AND gift_type > "'.$distinction.'" AND gift_type <"'.$distinctionMax.'" order by RAND() LIMIT 1');   

            while ($donnees = $reponse->fetch()) {
                echo '<div id="nom">'.$donnees['gift_name'].'</div>';
                echo '<div id="imageid"><img src="'.$donnees['gift_link'].'" style="height: 220px; margin: auto; display: flex;"></div>';
                echo '<div id="prix">'.$donnees['gift_price'].' €</div>';

                $lien = $donnees['gift_buy'];
                echo '<a id="extraLink" target="_blank"
                href="'.$lien.$donnees['gift_name'].'"></a>';
             
            }
        }


        /* Si Logo homme + femme check AND Logo homme + femme uncheck */

        if ((!empty($_POST['femme']) && !empty($_POST['homme'])) ||(empty($_POST['femme']) && empty($_POST['homme']))) {

         $reponse = $bdd->query('SELECT * FROM cadeaux WHERE gift_price <= "'.$prixMax.'" AND gift_price >= "'.$prixMin.'" AND gift_type > "'.$distinction.'" AND gift_type <"'.$distinctionMax.'" order by RAND() LIMIT 1');   

            while ($donnees = $reponse->fetch()) {
                echo '<div id="nom">'.$donnees['gift_name'].'</div>';
                echo '<div id="imageid"><img src="'.$donnees['gift_link'].'" style="height: 220px; margin: auto; display: flex;"></div>';
                echo '<div id="prix">'.$donnees['gift_price'].' €</div>';
                
             $lien = $donnees['gift_buy'];
                echo '<a id="extraLink" target="_blank"
                href="'.$lien.$donnees['gift_name'].'"></a>';

            }
        }
  /*  }*/


/* -------------------------------------------------------------- */
    
    
?>
