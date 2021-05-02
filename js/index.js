$(document).ready(function() {
    $("#callTA").height($(window).height())
    window.addEventListener("orientationchange", function() {
	    $("#callTA").height($(window).height())
    }, false);
    "static" == $(".paraimg").css("position") ? $(".p1").find(".paraimg").animate({
        marginLeft: "25%"
    }) : $(".p1").find(".paraimg").animate({
        left: "-75%"
    });
    var path = window.location.pathname;
    var page = path.split("/").pop();
    var i = setInterval(function() {
            if(page != "cores.php") {
                $(".p2").withinviewport({
                    bottom: 100
                }).is(":within-viewport") && (clearInterval(i), "static" == $(".paraimg").css("position") ? $(".p2").find(".paraimg").animate({
                    marginLeft: "25%"
                }) : $(".p2").find(".paraimg").animate({
                    left: "62vw"
                }));
            }
        }),
        t = setInterval(function() {
            if(page != "cores.php") {
                $(".p3").withinviewport({
                    bottom:100
                }).is(":within-viewport") && (clearInterval(t), "static" == $(".paraimg").css("position") ? $(".p3").find(".paraimg").animate({
                    marginLeft: "25%"
                }) : $(".p3").find(".paraimg").animate({
                    left: "-75%"
                }));
            }
        });
    $(window).on("load scroll",function() {
        var can = $(window).scrollTop() >= $(window).height()-50?true:false;
        /*if($(window).scrollTop() >= $(window).height()-50) {
            $("#navbar").addClass("colorChange");
            $("a[title = 'Home']").fadeIn();
        }else {
            $("#navbar").removeClass("colorChange");
            $("a[title = 'Home']").fadeOut();
        }*/
        $("a[title = 'Home'] img").toggleClass("logoFade",can);
        $("#navbar").toggleClass("colorChange",can);
    });
    $("#downArrow").click(function() {
        $("html,body").animate({scrollTop:$(window).height()-30},600);
    });
});
