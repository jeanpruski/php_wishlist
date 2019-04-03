<?php
    

    /* Récupération du select "Type" */
    $arrayType = $_POST['type'];
    
    foreach ($arrayType as $selectedType) {
                
            }    
    
    /* Récupération de la fourchette de "Prix" */
    
    $arrayPrix = $_POST['prix'];
    /*echo "Valeur du cadeau : entre ".$arrayPrix."<br />"; */ 
    
    /* Récupération de la Checkbox "Sexe" */
        if ((!empty($_POST['femme']) && !empty($_POST['homme'])) || (empty($_POST['femme']) && empty($_POST['homme']))) {
            echo "Vous cherchez un cadeau pour un de vos <em>".$selectedType."</em>, <em>ne prenant pas compte du genre</em> et d'une valeur se situant entre <em>".$arrayPrix."</em>";
        }
        if (!empty($_POST['femme']) && empty($_POST['homme'])) {
            echo "Vous cherchez un cadeau pour un de vos <em>".$selectedType."</em>, plutôt <em>féminin</em> et d'une valeur se situant entre <em>".$arrayPrix."</em>";
        }
        if (empty($_POST['femme']) && !empty($_POST['homme'])) {
            echo "Vous cherchez un cadeau pour un de vos <em>".$selectedType."</em>, plutôt <em>masculin</em> et d'une valeur se situant entre <em>".$arrayPrix."</em>";
        }
    
    ?>
