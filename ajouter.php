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


    <script>
        /* Slider jQuery UI */

        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 1,
                max: 99,
                step: 1,
                values: [5, 95],
                slide: function(event, ui) {
                    $("#amount").val(ui.values[0] + " et " + ui.values[1] + "€");
                    console.log(ui.values[0]);
                    console.log(ui.values[1]);
                }
            });
            $("#amount").val($("#slider-range").slider("values", 0) +
                " et " + $("#slider-range").slider("values", 1) + "€");
        });

    </script>






</head>

<body>
    <div class="backgroundFlocon">
        <div class="background">

            <div class="xxxcontainer">
                <div class="contest">

                    <div class="container">




                        <!-- Logo -->
                        <h1 onclick="window.location.href='title.php'">Wish List</h1>



                        <p class="jusity">A <em>votre tour de jouer</em> : Remplissez les champs pour ajouter un cadeau à la base de données !
                        </p>
                        <form action="nouveau_cadeau.php" method="POST">
                            <div id="champ">
                                <input type="text" class="champ" id="uname" name="uname" minlength="5" placeholder="Nom" required/>

                                <p class="titleajout">Sélectionnez les informations relatives au nouveau cadeau</p>
                                <br />

                                <div id="optiondiv">
                                    <input type="number" id="uprix" name="uprix" minlength="1" min="1" max="99" placeholder="Prix" required/>

                                    <select name="utype[]" id="utype">
                                        <option value="100">Parents</option>
                                        <option value="60">Frères ou Soeurs</option>
                                        <option value="5">Enfants</option>
                                        <option value="30">Ami(e)s</option>
                                        <option value="80">Crush's</option>
                                    </select>

                                    <div class="checkSexe">
                                        <input class="sexecheck" id="sexecheck" type="checkbox" name="usexe[]" value="1" checked>
                                        <label class="labelSexeajout" id="labelSexeajout" for="sexecheck"></label>

                                    </div>


                                </div>
                                <input type="text" class="champ" id="uimg" name="uimg" minlength="5" placeholder="Entrer un lien vers une image" />
                            </div>




                            <!-- Bouton de validation Général-->
                            <p class="flexy2">
                                <a id="backTitle" onclick="window.location.href='title.php'"></a>
                                <input id="boutonGeneralAjout" type="submit" name="Send" />
                            </p>

                        </form>

                    </div>
                </div>
                <div class="bottomground"></div>
            </div>
        </div>
    </div>
</body>

</html>
