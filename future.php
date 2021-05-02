<!DOCTYPE html>
<html>
    <head>
        <meta name="Description" content="Future plans from Nuzum Nterprise.">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.310001">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons " rel="stylesheet">
        <script src = "https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101872915-1"></script>
        <?php require "ga.php" ?>
        <style>
            footer {
                position:absolute;
                bottom:0;
            }
            @media all and (orientation : portrait) {
                #content {
                    margin-top:calc(9vh + 2vw);
                    font-size:5vw;
                    padding-bottom:25vh;
                }
            }
        </style>
        <title>A Taste Of The Future</title>
    </head>
    <body>
        <div id = "privacyPolicy">
            At Nuzum Nterprise, we use Google Analytics
            to improve our site. This allows us to
            view daily page views, demographics and
            more. <a href = "privacy.php" target = "_blank">Learn More</a><br><br>
            <div class = "row">
                <div class = "col s6">
                    <button class = "btn-large red optOut">Opt out</button>
                </div>
                <div class = "col s6">
                    <button class = "btn-large green optIn">Opt in</button>
                </div>
            </div>
        </div>
        <?php require "header.php" ?>
        <div id = "content" style = "width:100%;">
            <div id = "jBox" class = "product">
                <h1>Future Plans?</h1>
                That's Confidential.
                Come back later and you might get a peak at the
                world of tomorrow.
            </div>
        </div>
        <?php require "footer.php"?>
        <script defer type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-596381975e8c2fe9"></script>
    </body>
</html>
