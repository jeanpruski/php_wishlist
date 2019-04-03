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
                        <div class="cadre">

                            <div id="gift_name">

                                <?php 
                        include 'algo_cadeau.php';
                        ?>
                            </div>
                        </div>

                        <div class="center">
                            <?php
                    include 'algo_info.php';
                    ?>
                        </div>

                        <div id="option">
                            <a class="option_rond" href="formulaire.php"><img src="img/back.svg"></a>
                            <a class="option_rond" id="refresh"><img src="img/again.svg"></a>
                        </div>

                        <script>
                            $('#refresh').on('click', function() {
                                location.reload();
                            });

                        </script>

                    </div>
                </div>
                <div class="bottomground"></div>
            </div>
        </div>
    </div>
</body>

</html>
