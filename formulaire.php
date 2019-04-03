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
                        <form action="cadeau.php" method="POST">




                            <!-- Logo -->
                            <h1 onclick="window.location.href='title.php'">Wish List</h1>
                            <p class="jusity">N'hésitez plus pour vos proches, <em>notre algorithme vous présélectionne les cadeux parfaits !</em>
                            </p>

                            <!-- Fourchette de "Prix -->

                            <p>
                                <label for="amount">Fourchette de prix entre </label>
                                <input type="text" id="amount" name="prix">
                            </p>

                            <div id="slider-range"></div>
                            <br />
                            <p class="title">Sélectionnez le destinataire du cadeau</p>

                            <div class="bottom_info">

                                <!-- Select "Type" -->
                                <p>
                                    <select name="type[]" id="type">
                                        <option value="acolytes">Sans distinction</option>
                                        <option value="parents">Parents</option>
                                        <option value="frères ou pour une de vos soeurs">Frères ou Soeurs</option>
                                        <option value="enfants">Enfants</option>
                                        <option value="ami(e)s">Ami(e)s</option>
                                        <option value="dates">Crush's</option>

                                    </select>
                                </p>

                                <!-- Select "Sexe" -->

                                <div class="checkSexe">
                                    <input class="sexecheck" id="sexe1" type="checkbox" name="femme[]" value="femme" checked>
                                    <label class="labelSexe" id="labelSexe1" for="sexe1"></label>

                                    <input class="sexecheck" id="sexe2" type="checkbox" name="homme[]" value="homme" checked>
                                    <label class="labelSexe" id="labelSexe2" for="sexe2"></label>

                                </div>





                            </div>

                            <!-- Bouton de validation Général-->
                            <p class="flexy">
                                <a id="backTitle" onclick="window.location.href='title.php'"></a>
                                <input id="boutonGeneral" type="submit" name="Send" />
                            </p>

                        </form>
                    </div>
                    <div class="bottomground"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
