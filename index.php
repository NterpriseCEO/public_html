<!DOCTYPE html>
<html>
    <head>
        <title>Nuzum Nterprise Tecnology Inc - Tomorrows Technology Today</title>
        <meta name="Description" content="Nuzum Nterprise is an startup that develops the leading web OS, named Nebula and builds other innovative products that push the boundaries of the web.">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.310001">
        <link rel = "stylesheet" href = "css/index.css?v1">
        <link rel="shortcut icon" href ="http://nterprisesoftware.com/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons " rel="stylesheet">
        <script src = "https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <!--<script defer src = "js/jquery-3.3.1.min.js"></script>-->
        <script defer src = "js/withinviewport.js"></script>
        <script defer src = "js/jquery.withinviewport.js"></script>
        <script defer src = "js/jquery.viewport.js"></script>
        <script defer src = "js/index.js?v=1"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101872915-1"></script>
        <?php require "ga.php" ?>
    </head>
    <body>
        <div id = "privacyPolicy">
            At Nuzum Nterprise, we use Google Analytics
            to improve our site. This allows us to
            view daily page views, demographics and
            more. <a href = "privacy.php" target = "_blank">Learn More</a><br><br>
            <div class = "row">
                <div class = "col m6 s12">
                    <button class = "btn-large red optOut" tabindex="0">Opt out</button>
                </div>
                <div class = "col m6 s12">
                    <button class = "btn-large green optIn">Opt in</button>
                </div>
            </div>
        </div>
        <div id = "wrap">
            <?php require "header.php"?>
            <div id = "callTA">
                <!--<div id = "cTAPane">
                    Love technology? Sign <br>up for updates
                    from Nuzum Nteprise.<br>
                    <form action="http://formspree.io/nuzumalex@gmail.com" method = "post">
                        <input type = "text" placeholder="Email" name = "email">
                        <input type = "submit" value = "Sign Up" class = "btn blue">
                    </form>
                </div>-->
                <a href = "http://nterprisesoftware.com/" title = "Home Page"><img src = "images/logo.png?v=4" alt="This is the Nuzum Nterprise logo"></a>
                <h1>Tomorrow's Technology Today</h1>
                <a id = "downArrow"></a>
            </div>
            <div id = "content">
                <div class = "row">
                    <div class = "col m6 s12 p1 offset-m6 para">
                        <h2>Who We Are</h2>
                        Nuzum Nterprise is an upbeat tech startup based in
                        Wexford, Ireland.
                        Founded in 2017, Nuzum Nterprise continually develops
                        the market leading Web OS - named Nebula - and creates
                        experimental projects that push the boundaries of the web.
                        <img class = "paraimg" src = "images/flattech.png" alt = "Round circle with computer">
                    </div>
                    <div class = "col m6 s12 p2 para">
                        <h2>What We Do</h2>
                        By developing Nebula OS, we have enabled people to be
                        more productive. Traditionally, you had to use services
                        like Dropbox or Google drive to share files. If you have
                        multiple computers, you still have to install all your
                        software on each one. With Nebula OS all your
                        files <span style = "text-decoration:underline">and</span>
                        apps are stored in the cloud, allowing your productivity to soar
                        to new heights.
                        <img class = "paraimg pir" src = "images/cloud.png"  alt = "Round circle with clouds and a paper plane">
                    </div>
                    <div class = "col m6 s12 offset-m6 p3 para">
                        <h2>How You Can Help</h2>
                        We may have awesome programmers, but
                        we can't do it without you. If you are looking to join the
                        founding team, donate some money, or just simply looking
                        for more info, you can contact us at nterpriseinfo@gmail.com.
                        For jobs visit <a href = "http://nterprisesoftware.com/careers.html">the careers page</a>.
                        <img class = "paraimg" src = "images/hychcode.png"  alt = "Round circle with chtml closing tag">
                    </div>
                </div>
                <!--
                <div class = "para p3">
                    <div class = "hold">
                        <h2>How You Can Help</h2>
                        <p>
                            We may have awesome programmers, but
                            we can't do it without you. If you are looking to join the
                            founding team, donate some money, or just simply looking
                            for more info, you can contact us at nterpriseinfo@gmail.com.
                            For jobs visit <a href = "http://nterprisesoftware.com/careers.html">the careers page</a>.
                        </p>
                    </div>
                </div>
                <br><br>-->
                <h2>Meet The Team</h2>
                <div id = "ceo">
                    <img src = "images/founder.png" id = "founder" alt = "The founder of Nuzum Nterprise"><br>
                    <span id = "ms">"Changing the world, one line of code at a time."</span>
                    <br><br>
                    <i>Alex Nuzum, CEO, CTO</i><br><br>
                </div>
                <br>
            </div>
            <?php require "footer.php"?>
            <script defer type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-596381975e8c2fe9"></script>
        </div>
    </body>
</html>
