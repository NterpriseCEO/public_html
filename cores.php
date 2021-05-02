<!DOCTYPE html>
<html>
    <head>
        <meta name="Description" content="Our Core values at Nuzum Nteprise Technology Inc.">
        <link rel = "stylesheet" href = "css/sitewide.css?v1.310001">
        <link rel = "stylesheet" href = "css/cores.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons " rel="stylesheet">
        <script src = "https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101872915-1"></script>
        <?php require "ga.php" ?>
        <script>
            $.fn.is_on_screen = function() {
                var win = $(window);
                var viewport = {
                    top:win.scrollTop(),
                    left:win.scrollLeft()
                };
                viewport.bottom = viewport.top+win.height;
                var bounds = this.offset();
                bounds.bottom = bounds.top+this.outerHeight();
                return (!(viewport.bottom<bounds.top||viewport.top>bounds.bottom));
            };
            $(document).ready(function() {
                $(".slwmvingImg").each(function() {
                    var _this = $(this);
                    $(window).scroll(function() {
                        if(_this.is_on_screen()) {
                            var yPos = -($(window).scrollTop()/_this.data("speed"));
                            var coords = "50% calc(50% - "+yPos+"px)";
                            _this.css("backgroundPosition",coords);
                        }
                    });
                });
            });
        </script>
        <style>
            @media all and (orientation : portrait) {
                #content {
                    margin-top:calc(9vh + 2vw);
                    font-size:5vw;
                }
                #content p {
                    width:90vw;
                }
            }
        </style>
        <title>Our Core Values</title>
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
            <h1>Our Core Values</h1>
            <h2>Innovation</h2>
            <p>
                At Nuzum Nterprise we strive to innovate, whether
                that be in our software, production speeds or the<br>
                way we do business. We are never afraid to find
                new and better ways to things others wouldn't dare
                change.
                <br><br>
                <div id = "innovation" class = "slwmvingImg" data-speed="10">
                </div>
            </p>
            <h2>Eco Friendliness</h2>
            <p>
                To us, being eco friendly is not a chore, but a
                way of life. Our offices will powered completely
                by renewables, rain water will be collected and
                electric car chargers will installed in the car park
                outside.<br><br>
                <div id = "eco" class = "slwmvingImg" data-speed="10">
                </div>
            </p>
            <h2>Equality</h2>
            <p>
                All employees are valued as people not capital. No
                ones pay will be cut to save the company money.
                <br><br>
                <div id = "equality" class = "slwmvingImg" data-speed="10">
                </div>
            </p>
            <h2>Encouraging Creativity</h2>
            <p>
                Everyone at Nuzum Nterprise is encouraged to be creative.
                Everyone has their own part to play in driving the company
                forward.
                <br><br>
                <div id = "creativity" class = "slwmvingImg" data-speed="10">
                </div>
            </p>
        </div>
        <?php require "footer.php"?>
        <script defer type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-596381975e8c2fe9"></script>
    </body>
</html>
