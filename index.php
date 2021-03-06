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
    <title>Restaurants Atypiques</title>
</head>
<body>

    <div class="container">
        <header>
            <?php include "inc/header.php"; ?>
        </header>
        <main>

            <div id="concept" class="row">

                <h2>Notre concept</h2>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="img/wood-interior.jpg" alt="Great restaurant with wood interior" id="wood">
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                    <p id="our-concept">
                        Vous rêviez de manger un couscous suspendu à 30 mètres de hauteur? Vous proposez dans votre steakhouse de déguster un bon steak entourés de fauves en plein air? Nous sommes là pour vous. Notre concept est simple: rassembler tous les restaurants qui proposent un cadre original, un menu (d)étonnant et les mettre en relations avec les clients désireux de nouvelles expériences gastronomiques.
                    </p>

                </div>

            </div>

            <div id="creators">

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
                            <img class="center-block" src="img/il_vino.jpg" alt="Il Vino">
                        </div>
                        <div class="item">
                            <img class="center-block" src="img/café_des_chats.jpg" alt="Le Coin Des Chats">
                        </div>
                        <div class="item">
                            <img class="center-block" src="img/dans_le_noir.jpg" alt="Dans Le Noir">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <img src="/img/slider_icons.png">
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div id="find-us">

                <div id="list">

                </div>

                <div id="map">

                </div>

            </div>

            <div id="contact">

                <div id="form">

                </div>

            </div>

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
    </div>
</body>
</html>