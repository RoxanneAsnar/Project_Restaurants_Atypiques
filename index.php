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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Restaurants Atypiques</title>
</head>
<body>

<div class="container-fluid">
        <header>
            <?php include "inc/header.php"; ?>
        </header>
        <main>

            <?php include "inc/concept.php"; ?>

            <?php include "inc/creators.php"; ?>

            <div id="find-us">
                <h2>Où nous trouver?</h2>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <?php include "inc/map.php"; ?>
                        <?php include "inc/list.php"; ?>
                    </div>
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

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBKs7XZ5tqp9RXFJi0TU9psEZecCkw-z4Y "></script>
        <script type="text/javascript" src="scripts/jquery.googlemap.js"></script>
        <script type="text/javascript" src="scripts/script-gmap.js"</script>
        <script type="text/javascript" src="scripts/scripts-jquery.js"></script>


        <script src="scripts/scripts-jquery.js"></script>

        <script src="scripts/smooth-scroll.js"></script>

    </div>
</body>
</html>