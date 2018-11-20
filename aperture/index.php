<?php
include "header.php";
?>

<body>
<div class="bg">
    <div class="bgtext">
        <img  class="zoom"   style="alignment: center; height: 17em"  src="aperture2.png">
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        $("a").on('click', function(event) {

            if (this.hash !== "") {

                event.preventDefault();


                var hash = this.hash;


                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){


                    window.location.hash = hash;
                });
            }
        });
    });



    //////////////////

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }



    </script>



<div class="container">
    <div class="section" id="section1">
        <h1 class="kopje"  id="TexDec2">OVER ONS</h1>
        <p class="overons" >
            Het begon allemaal met een groep studenten die samen werden gesteld.
            Samen hebben we Apeture Design opgericht,
            een bedrijf dat zich richt op het vinden van geavanceerde oplossingen en het leveren van geweldige services.
            <br><br>
            Onze producten en diensten zijn ontworpen om al onze klanten altijd en overal tevreden te stellen.
            We zijn toegewijd aan klanttevredenheid als onze topprioriteit. Als je meer wilt weten over hoe we zaken doen
            , bel ons dan vandaag nog.
        </p>

        <img src="image/teamleden/groepfoto.jpg" id="groepfoto">
        <p class="overons">
            Het begon allemaal met een groep studenten die samen werden gesteld.
            Samen hebben we Apeture Design opgericht,
            een bedrijf dat zich richt op het vinden van geavanceerde oplossingen en het leveren van geweldige services.
            <br><br>
            Onze producten en diensten zijn ontworpen om al onze klanten altijd en overal tevreden te stellen.
            We zijn toegewijd aan klanttevredenheid als onze topprioriteit. Als je meer wilt weten over hoe we zaken doen
            , bel ons dan vandaag nog.
        </p>

    </div>
</div>

<!-- OVER ONS STOPT-->

<!--ONZE SERVICE-->

<div class="container">
    <div class="section"  id="section2">
        <h1 class="kopje" >ONZE SERVICE</h1>
        <div class="SecGrid">
            <div class="featurewrap">
                <div class="feature">
                    <img class="featureicon" src="image/icons/feature1.png">
                    <p class="featurename">CONCEPT & DESIGN</p>
                    <p class="featuredisc">We have a team of specialized front-end programmers that will work hard to remake your visions</p>
                </div>
            </div>
            <div class="featurewrap">
                <div class="feature">
                    <img class="featureicon" src="image/icons/feature2.png">
                    <p class="featurename">FRONT-END DEVELOPING</p>
                    <p class="featuredisc">We have a team of specialized front-end programmers that will work hard to remake your visions</p>
                </div>
            </div>
            <div class="featurewrap">
                <div class="feature">
                    <img class="featureicon" src="image/icons/feature3.png">
                    <p class="featurename">BACK-END DEVELOPING</p>
                    <p class="featuredisc">We also have a talented team of back-end programmers that will satisfy all your database related  needs</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OVER ONS STOPT -->

<!-- ONS TEAM -->

<div class="container">
    <div class="section" id="section3">
        <h1 class="kopje">HET TEAM</h1>
        <div class="SecGrid2">
            <div class="teamlid">
                <img class="teamlidfoto" src="image/teamleden/teamlid5.jpg">
                <p class="teamlidnaam">Quinten Rodrigues</p>
                <p class="teamlidrol">Team Leider</p>
            </div>
            <div class="teamlid">
                <img class="teamlidfoto" src="image/teamleden/teamlid6.jpg">
                <p class="teamlidnaam">Fabio van der broek</p>
                <p class="teamlidrol">Project leider</p>
            </div>
            <div class="teamlid">
                <img class="teamlidfoto" src="image/teamleden/teamlid2.jpg">
                <p class="teamlidnaam">Morrison Lek</p>
                <p class="teamlidrol">Front-End Developer</p>
            </div>
            <div class="teamlid">
                <img class="teamlidfoto" src="image/teamleden/teamlid7.jpg">
                <p class="teamlidnaam">Mathijs van Zunderen</p>
                <p class="teamlidrol">Frond-End Developer</p>
            </div>
            <div class="teamlid">
                <img class="teamlidfoto" src="image/teamleden/teamlid4.jpg">
                <p class="teamlidnaam">Oliver Scargo</p>
                <p class="teamlidrol">Back-EndDeveloper</p>
            </div>
            <div class="teamlid">
                <img class="teamlidfoto" src="image/teamleden/teamlid3.jpg">
                <p class="teamlidnaam">Pawel Dokodo</p>
                <p class="teamlidrol">Back-End Developer</p>
            </div>
        </div>
    </div>
</div>












<?php
include "footer.php";
?>

