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

            <div id="creators">

            </div>

            <div id="top">

            </div>

            <div id="find-us">

                <div id="list">

                </div>

                <div id="map">

                </div>

            </div>

            <div id="contact">

                <div class="row" id="large-buttons">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="info-button">Besoin d'informations ?</button>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="joinus-button" >Envie de rejoindre la franchise ?</button>
                    </div>
                </div>

                <div id="form1">

                        <form action="" method="post" role="form" id="message-form" class="row">
                            <h2 class="form">Un message ?</h2>

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="" placeholder="Nom" required> <br/>
                                <input type="text" class="form-control" name="firstname" id="" placeholder="Prénom" required> <br/>
                                <input type="text" class="form-control" name="email" id="" placeholder="mail@email.fr"required><br/>

                                <textarea name="textarea" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12" name="message" id="" type="text" required>
                                Votre message
                                </textarea>

                                <button type="submit" class="btn btn-primary send">Envoyer</button>
                            </div>

                        </form>

                </div>


                <div id="form2">

                    <form action="" method="post" role="form" id="join-us-form" class="row">
                        <h2 class="form">Nous rejoindre</h2>

                        <div class="form-group">
                            <input type="text" class="form-control" name="" id="name" placeholder="Nom" required> <br/>
                            <input type="text" class="form-control" name="" id="firstname" placeholder="Prénom" required> <br/>
                            <input type="text" class="form-control" name="" id="name-restaurant" placeholder="Le nom de votre super restaurant" required> <br/>
                            <input type="text" class="form-control" name="" id="email" placeholder="mail@email.fr"required > <br/>

                            <textarea name="textarea" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12" name="message" id="" type="text" placeholder="Votre message" required>
                                Votre message
                            </textarea><br/>

                            <button type="submit" class="btn btn-primary send">Envoyer</button>
                         </div>


                     </form>

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

        <script src="scripts/scripts-jquery.js">
        </script>
    </div>
</body>
</html>