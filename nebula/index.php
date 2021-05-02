<html>
    <head>
        <title>NebulaOS</title>
        <meta name="Description" content="NebulaOS is an Online operating system designed to run on any computer and any mobile device.">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&text=Desktop,Redefined" rel="stylesheet">
        <link rel = "stylesheet" href = "css/index.css?v1.150044">
        <link rel="shortcut icon" href ="http://nterprisesoftware.com/favicon.ico" type="image/x-icon" />
        <script src = "https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101872915-1"></script>
        <script defer>
            $(document).ready(function() {
                $(".appIcon").click(function() {
                    $("#appsPopup").fadeIn();
                    $("body").css("overflow","hidden");
                    var scroll = $("body").width()*$(this).index();
                    $("#appsPopup").animate({scrollLeft:scroll},2000);
                });
                $("#xButton").click(function() {
                    $("#appsPopup").fadeOut();
                    $("body").css("overflow","scroll");
                });
                var canScroll = true;
                $("#rightSwitch").click(function() {
                    var scroll = $("#appsPopup").scrollLeft()+$("body").width();
                    if(canScroll) {
                        canScroll = false;
                        if($("#appsPopup")[0].scrollWidth - $("#appsPopup").scrollLeft() == $("#appsPopup").outerWidth()) {
                            $("#appsPopup").animate({scrollLeft:0},2000,function() {
                                canScroll = true;
                            });
                        }else {
                            $("#appsPopup").animate({scrollLeft:scroll},function() {
                                canScroll = true;
                            });
                        }
                    }
                });
                $("#leftSwitch").click(function() {
                    var scroll = $("#appsPopup").scrollLeft()-$("body").width();
                    if(canScroll) {
                        canScroll = false;
                        if($("#appsPopup").scrollLeft() == 0) {
                            $("#appsPopup").animate({scrollLeft:$("#appsPopup")[0].scrollWidth - $("#appsPopup").scrollLeft()},2000,function() {
                                canScroll = true;
                            });
                        }else {
                            $("#appsPopup").animate({scrollLeft:scroll},function() {
                                canScroll = true;
                            });
                        }
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id = "wrap">
            <div id = "header">
                <div id = "firstTitle"><h1>NebulaOS</h1></div>
                <iframe src='https://www.youtube.com/embed/eKtHCVCp4u0?rel=0' frameborder='0' allowfullscreen></iframe>
                <div class = "rightSlide">
                    <span id = "mainTitle" class = "title">
                        <span>Desktop</span>
                        <br><span>Redefined</span>
                    </span>
                    <div id = "downArrow"></div>
                </div>
            </div>
            <div class = "slideWrap">
                <div id = "floatContent">
                    NebulaOS is a web based operating system and cloud
                    storage solution designed to be run as a standalone
                    web app on your desktop, tablet and mobile phone.
                </div>
                <div id = "content1" class = "leftSlide">
                    <p class = "moveDown">
                        With the ever increasing amount of devices we own,
                        comes an ever increasing need for for cross-platform
                        computing.<br>
                        With NebulaOS, all your data will saved on a decentralised
                        network named <a href = "https://storj.io">Storj</a>,
                        bringing you peace of mind that you files are available
                        when, and where you need them.
                    </p>
                </div>
                <div id = "benefits">
                    <h1>Benefits</h1>
                    <img class = "benefitImage" src = "images/reliable.png">
                    <div class = "rightPara">
                        <h2>Multiplatform</h2>
                        <p>
                            Have you ever used a chromebook and wished that there was a mobile version?
                            <b>Nebula has this.</b><br>
                            Have you wished that you files and data were available cross-platofrm without
                            using the likes of Dropbox? <br><b>Nebula does this.</b>
                        </p>
                    </div>
                    <br><br><br><br>
                    <img class = "benefitImage" src = "images/speed.png">
                    <div class = "rightPara">
                        <br>
                        <h2>Speed</h2>
                        <p>
                            NebulaOS is blazingly fast. From pageload to login
                            in less than 10 seconds, NebulaOS is the fastest
                            Operating System in the world<sup>1</sup>!<br><br>

                            With one tap of a button, your files available no
                            matter where you are.
                        </p>
                    </div>
                    <br><br><br><br>
                    <img class = "benefitImage" src = "images/reliable.png">
                    <div class = "rightPara">
                        <h2>Reliability</h2>
                        <p>
                            If your're tired of the constant, random errors that
                            most Operating Systems create, then Nebula is for you.
                            <br><br>
                            Nebula is the <u>most</u> reliable OS on the market, meaning
                            you never have to worry about losing your data.
                        </p>
                    </div>
                </div>
                <div id = "apps">
                    <h1>Apps</h1>
                    <div id = "appsList">
                        <img class = "appIcon" data-link = "#appStpre" src = "images/storeIcon.png">
                        <img class = "appIcon" src = "images/messengerIcon.png">
                        <img class = "appIcon" src = "images/cameraIcon.png">
                        <img class = "appIcon" src = "images/columbusIcon.png">
                        <img class = "appIcon" src = "images/playerIcon.png">
                        <img class = "appIcon" src = "images/calendarIcon.png">
                        <img class = "appIcon" src = "images/paintIcon.png">
                        <img class = "appIcon" src = "images/imagesIcon.png">
                        <img class = "appIcon" src = "images/commandIcon.png">
                        <img class = "appIcon" src = "images/codeIcon.png">
                        <img class = "appIcon" src = "images/editorIcon.png">
                    </div>
                </div>
                <div id = "appsPopup">
                    <div id = "xButton">&times;</div>
                    <div id = "leftSwitch" class = "switch">&lsaquo;</div>
                    <div id = "firstPopup" class = "popup">
                        <h1>Continuum Webstore</h1>
                        <img class = "popImage" src = "images/continuum1.png" width = "20%">
                        <h3>Apps - Simplified</h3>
                        Have you ever been worried about storage space?<br>
                        Have you ever downloaded too many apps and ran
                        out of space? <br>With Continuum every app is stored
                        on our servers so you never have to download them!
                        <br>With Continuum you can upload apps for free.
                        <br>
                        <h3>Features</h3><br>
                        Contiuum has many great features.
                        Since nothing is
                        ever downloaded, all your apps are up to date.
                        Always.<br>
                        Upload apps from the Developer Center and update apps
                        with two clicks. It's that simple.
                        Visit <a href = "https://nterprisesoftware.com/developers">Developer Centre</a>
                    </div>
                    <div class = "popup">
                        <h1>Marathon Messenger</h1>
                        <span class = "popRight">
                            When it comes to messaging apps,Marathon is the best!
                            With Marathon, you can send texts, images and emojis.
                        </span>
                    </div>
                    <div class = "popup">
                        <h1>Camera</h1>
                        Take stunning pictures with the camera and record that
                        funny video all while using 0gb of space on your device.
                    </div>
                    <div class = "popup">
                        <h1>Columbus</h1>
                        Create, open and delete all your files with Columbus.
                        Never have to worry about storage space again because
                        no files are stored on your device. Access all your files
                        from any desktop, tablet or mobile phone - from anywhere
                        in the world!
                    </div>
                    <div class = "popup">
                        <h1>Media Player</h1>
                        Open and view any images and videos stored on your Nebula
                        account.
                    </div>
                    <div class = "popup">
                        <h1>Calendar</h1>
                        Create, delete and edit events.
                    </div>
                    <div class = "popup">
                        <h1>Leonardo</h1>
                        With a stroke of a finger you can become an artist.
                        Design simple yet stunny artwork using Leonardo.
                    </div>
                    <div class = "popup">
                        <h1>Photos</h1>
                        View all your photos.
                    </div>
                    <div class = "popup">
                        <h1>The Commander</h1>
                        Open apps and navigate file directories using The Commander.
                        For the inner nerd in all of us.
                    </div>
                    <div class = "popup">
                        <h1>Nebula Code</h1>
                        Write beautiful apps with Nebula Code before
                        publishing then to Continuum.
                    </div>
                    <div id = "lastPopup" class = "popup">
                        <h1>Nebula Editor</h1>
                        Write up important documents for work.
                    </div>
                    <div id = "rightSwitch" class = "switch">&rsaquo;</div>
                </div>
            </div>
        </div>
        <!--<div id = "wrap">
                <fieldset id = "noSlide2"class = "noSlide">
                    <legend><h1>The OS</h1></legend>
                    <iframe width="660" height="415" src="https://www.youtube.com/embed/eKtHCVCp4u0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!--<div id = "infoPane" class = "withSideImages coreOSI">
                        <div id = "arrow4" class = "arrow"></div>
                        <div id = "desc4" class = "description">
                            Click to search.
                            <a href = "#search">Learn More</a>
                        </div>
                        <div id = "arrow5" class = "arrow"></div>
                        <div id = "desc5" class = "description">
                            View all you notifcations with one click.<br>
                            <a href = "#notifcations">Learn More</a>
                        </div>
                        <div id = "arrow6" class = "arrow"></div>
                        <div id = "desc6" class = "description">
                            View all you notifcations with one click.<br>
                            <a href = "#notifcations">Learn More</a>
                        </div>
                        <img id = "middle" src = "images/infoPane.png">
                    </div>
                    <div id = "search" class = "withSideImages coreOSI">
                        <div id = "arrow1" class = "arrow"></div>
                        <div id = "desc1" class = "description">
                            Information about apps and files.
                        </div>
                        <div id = "arrow2" class = "arrow"></div>
                        <div id = "desc2" class = "description">
                            Search and open apps and files.
                        </div>
                        <div id = "arrow3" class = "arrow"></div>
                        <div id = "desc3" class = "description">
                            View app and file search results here.
                        </div>
                        <img id = "middle" src = "images/search.png">
                    </div>
                    <div id = "notifcations" class = "withSideImages coreOSI">
                        <img id = "middle" src = "images/messageCenter.png">
                    </div>-->
                <!--</fieldset>
                <fieldset class = "noSlide">
                    <legend><h1>Apps</h1></legend>
                    <br>
                    <p>
                        Here are some of the many apps available out of the box
                        on NebulaOS
                    </p>
                    <br>
                    <div class = "withSideImages">
                        <h1>Continuum</h1>
                        <img src = "images/continuum.png">
                        <p>
                            Continuum is to Nebula what App Store
                            is to iOS. Contiuum is the one stop shop
                            for installing<sup>2</sup> apps on Nebula.
                            <br><br>
                            <a href = "continuum.php">Learn More</a>
                        </p>
                    </div><br><br><br><br><br><br><br><br>
                    <div class = "withSideImages">
                        <h1>Marathon Messenger</h1>
                        <p class = "marathon">
                            Marathon is a top of the line messenger app for
                            all your texting needs!<br><br>
                            Whether your texing you friends or setting up that
                            all important meeting, Marathon reliably gets your
                            messages where they need to be.
                        </p>
                        <img class = "marathon" src = "images/marathon.png">
                    </div><br><br><br><br><br><br><br><br><br>
                    <div class = "withSideImages">
                        <h1>Nebula Editor/TextPad</h1>
                        <img class = "marathon" src = "images/textpad.png">
                        <p class = "marathon">
                            Nebula Editor and TextPad are there to handle
                            all your text editing need. Write sophisticated
                            reports with Nebula Editor or write up that important
                            to-do list. The possibilities are endless.
                        </p>
                    </div><br><br><br><br><br><br><br><br><br>
                    <div class = "withSideImages">
                        <h1>Nebula Code</h1>
                        <p class = "marathon">
                            Create beautiful web apps with Nebula Code.
                            Nebula Code is a versatile web based IDE that
                            amoung other things allows you to launch your app
                            directly from the editor.
                        </p>
                        <img class = "marathon" src = "images/nebulacode.png">
                    </div>
                </fieldset>
            </div>
        </div>-->
        <!--<div id = "wrap">
            <footer id = "footer">
                &copy; Nuzum Nterprise Technology Inc. <?php echo date("Y"); ?>
                <a href = "../sitemap.xml">Sitemap</a>&nbsp;&nbsp;<a href = "../terms.txt">Terms</a>
                <div class="addthis_inline_follow_toolbox"></div>
                <form id = "bottom" action="http://formspree.io/nuzumalex@gmail.com" method = "post">
                    <span>Sign up</span>
                    <input type = "text" placeholder="Email" name = "email">
                    <input type = "submit" value = "Sign Up" class = "btn blue">
                </form>
            </footer>
            <script defer type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-596381975e8c2fe9"></script>
        </div>-->
    </body>
</html>
