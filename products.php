<!DOCTYPE html>
<html>
    <head>
        <meta name="Description" content="Products that we currently have to offer.">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.310001">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <!--<link rel = "stylesheet" href = "css/buttonAnimations.css">-->
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
            .product {
                width:48vw;
                height:10vw;
                margin:2vh auto 0;
                background-color:#fff;
                text-align:left;
                border:1px solid grey;
                border-radius:5px;
                box-sizing:border-box;
                box-shadow:0 5px 10px 0 rgba(0, 0, 0, .2)
            }
            .product img,.productInfo {
                float:left;
                height:100%;
            }
            .product img {
                padding:1vw;
                box-sizing:border-box;
            }
            .productInfo {
                width:74%;
                margin-left:1%;
                padding-right:0.1vw;
                box-sizing:border-box;
            }
            .productInfo p {
                font-size:1.4vw;
                width:100%;
            }
            .productInfo h7 {
                width:100%;
            }
            @media all and (orientation : portrait) {
                #content {
                    margin-top:calc(9vh + 2vw);
                    padding-bottom:3vh;
                }
                footer {
                    position:static;
                }
                .product {
                    width:90vw;
                    height:55vh;
                    font-size:8vw;
                }
                .product img {
                    padding:3%;
                    width:45vw;
                    height:45vw;
                }
                .productInfo {
                    width:94%;
                    height:auto;
                    margin-left:3%;
                }
                .productInfo p {
                    font-size:6vw;
                }
            }
        </style>
        <title>Our Current Products</title>
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
        <div id = "content">
            <br>
            <h1 id = "productsTitle">Products From Nuzum Nterprise</h1>
            <div class = "product">
                <img src = "images/nebula.png" title = "placeholder" alt = "placeholder">
                <div class = "productInfo">
                    <h7>Nebula OS</h7>
                    <p>
                        Nebula OS is the leading Web OS
                        designed for use on any laptop/desktop.
                    </p>
                    <a class = "bRed" href = "nebula/">Learn More</a>
                </div>
            </div>
        </div>
        <?php require "footer.php"?>
        <script defer type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-596381975e8c2fe9"></script>
    </body>
</html>
