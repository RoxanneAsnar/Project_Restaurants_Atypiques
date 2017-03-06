<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Croissant+One|Raleway" rel="stylesheet">
    <title>Restaurants Atypiques</title>
</head>
<body>

    <div class="container">
        <header>
            <?php include "inc/header.php"; ?>
        </header>
        <main>

            <div id="concept" class="row">

                <h2 id="notre-concept">Notre concept</h2>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="img/wood-interior.jpg" alt="Great restaurant with wood interior" id="wood">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <p id="our-concept">
                        Vous rêviez de manger un couscous suspendu à 30 mètres de hauteur? Vous proposez dans votre steakhouse de déguster un bon steak entourés de fauves en plein air? Nous sommes là pour vous. Notre concept est simple: rassembler tous les restaurants qui proposent un cadre original, un menu (d)étonnant et les mettre en relations avec les clients désireux de nouvelles expériences gastronomiques.
                    </p>

                </div>

            </div>

            <div id="creators"><h2>Un mot des créateurs</h2>
                <div class="row " ">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="img/damien.jpg" alt="Damien Dupont">
                        <h2>Damien DUPONT</h2>
                        <p>Un jour j’ai erré dans les rues, et j’ai passé une heure à regarder les devantures des restaurants, essayant de m’imaginer lequel pourrait satisfaire mes papilles. Laissant mon esprit vagabonder, j’ai voyagé, et blabla...</p></br>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="img/julien.jpg" alt="Julien Dupond">
                        <h2>Julien DUPOND</h2>
                    <p>Je me rappelle encore du jour où, étant jeune, mes parents m’ont emmené en voyage en Australie chez les aborigènes. J’y ai goûté des yeux d’autruches, un plat que nous autres Européens trouverions absolument abominable. Et j’ai adoré! Depuis ce jour, je me suis toujours dit que j’amènerais la cuisine originale auprès du grand public.</p></br>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="img/laurent.jpg" alt="Laurent Dupons">
                    <h2>Laurent DUPONS</h2>
                    <p>Issu d’une grande école de commerce, Laurent n’en est pas à son coup d’essai. “Restaurants Atypiques” n’est que le dernier-né d’une série de projets originaux: d’une start-up proposant des activités de plein air à une société qui organise des soirées à thèmes
                    complètement décalées, son maître-mot est “Have fun!”</p></br>
                    </div>
                </div>
            </div>

            <div id="top">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="center-block" src="img/ilvino.jpg" alt="Il Vino">
                        </div>
                        <div class="item">
                            <img class="center-block" src="img/cafe_des_chats.jpg" alt="Le Coin Des Chats">
                        </div>
                        <div class="item">
                            <img class="center-block" src="img/dans_le%20_noir.jpg" alt="Dans Le Noir">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div id="find-us">

                <div id="list">
                    <?php include "inc/list.php"; ?>
                </div>

                <div id="map">

                </div>

            </div>

            <?php include "inc/contact.php"; ?>

        </main>

        <footer>
            <?php include "inc/footer.php"; ?>
        </footer>

        <script src="https://code.jquery.com/jquery-3.1.1.js"
                integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
                crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous">
        </script>

        <script src="scripts/scripts-jquery.js">
        </script>
    </div>
</body>
</html>