<script defer>
    $(document).ready(function() {
        $("#hamburger").click(function() {
            $("#dropdown").animate({left:0});
            $("body").addClass("oVHid");
        });
    	$("#dropdownX").click(function() {
    		$("#dropdown").animate({left:"-105vw"});
    		$("body").removeClass("oVHid");
    	});
        if(localStorage.canTrack) {
            run();
            $("#privacyPolicy").remove();
        }else {
            $("#privacyPolicy").show();
        }
        $("button").click(function() {
            $("#privacyPolicy").remove();
        });
        $(".optIn").click(function() {
            localStorage.canTrack = true;
            run()
        });
        $(".optOut").click(function() {
            alert("Your choice has been noted");
        });
        function run() {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-101872915-1');
        }
    });
</script>
