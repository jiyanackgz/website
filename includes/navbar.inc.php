<?php

    $oneHeader = "HAKKIMIZDA";
    $oneOne = "Hakkımızda";
    $oneTwo = "Takımımız";

    $twoHeader = "FRC";
    $twoOne = "FRC Nedir";
    $twoTwo = "FIRST Vakfı";

    $threeHeader = "PROJELER";
    $threeOne = "Sosyal Sorumluluk";
    $threeTwo = "Genel Projeler";
    
    $fourHeader = "SPONSORLUK";
    $fourOne = "Sponsorluk";
    $fourTwo = "Sponsorluğun Katkıları";


?>

<header class="navbar-header">

    <section class="navbar-header-section-up">

        <span class="material-icons">
            email
        </span>
        <button onclick="navigator.clipboard.writeText('callisterfrc@gmail.com');" style="background: none; border: none; color: #F25D9C; font-size: medium; cursor: pointer;">callisterfrc@gmail.com</button>
        <a class="navbar-up-responsive-willberemoved" href="#" style="margin-left: 20px;">Instagram</a>
        <a class="navbar-up-responsive-willberemoved" href="#">YouTube</a>
        <a class="navbar-up-responsive-willberemoved" href="#">Twitter</a>
        <a class="navbar-up-responsive-willberemoved" href="#" style="margin-right: 0px;">LinkedIn</a>

    </section>

    <section id="navbar-header-section-down" class="navbar-header-section-down">

        <div class="navbar-header-section-down-img">
            <img id="eragon-main-nav-img" src="images/callister_logo.png" alt="">
        </div>

        <div class="navbar-header-section-down-nav">

        
            <button id="navbarResponsiveOpen" style="text-decoration: none;" class="navbar-dropdown-button navbar-content-extra-margin navbar-responsive-open">
                <span class="material-icons">
                    menu
                </span>
            </button>

            <a href="index.php" style="text-decoration: none;" class="navbar-dropdown-button navbar-content-extra-margin navbar-up-responsive-willberemoved">
                <span class="material-icons">
                    home
                </span>
            </a>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button"><?php echo $oneHeader; ?></button>
                <div class="navbar-dropdown-content">
                    <a href="hakkimizda.php"><?php echo $oneOne ?></a>
                    <a href="takim.php"><?php echo $oneTwo; ?></a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button"><?php echo $twoHeader; ?></button>
                <div class="navbar-dropdown-content">
                    <a href="frcnedir.php"><?php echo $twoOne; ?></a>
                    <a href="firstvakfi.php"><?php echo $twoTwo; ?></a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button"><?php echo $threeHeader; ?></button>
                <div class="navbar-dropdown-content">
                    <a href="#"><?php echo $threeOne; ?></a>
                    <a href="#"><?php echo $threeTwo; ?></a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button"><?php echo $fourHeader; ?></button>
                <div class="navbar-dropdown-content">
                    <!-- <a href="inovasyon.php">İnovasyon</a> -->
                    <a href="sponsorluk.php"><?php echo $fourOne; ?></a>
                    <a href="#"><?php echo $fourTwo; ?></a>
                </div>
            </div>

        </div>


    </section>


</header>

<section id="responsive-menu" style="display: none;">

    <section id="responsive-open-menu" class="responsive-open-menu">
    
        <button id="responsiveMenuCloseButton" style="background: none; color: black; background-color: white; border: none; border-radius: 0px 0px 10px 0px; top: 0; left: 0; position: fixed; font-size: xx-large;">
            <span class="material-icons">
                close
            </span>
        </button>
    
        <img src="images/eragon_mor_logo_transparent.png" alt="Eragon Logo" width="100px" height="auto">
    
        
        <div class="responsive-open-menu-main">
            <a class="responsive-open-menu-title" href="index.php">Ana Sayfa</a>
        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#"><?php echo $oneHeader; ?></a>

            <a class="responsive-open-menu-title-open" href="hakkimizda.php"><?php echo $oneOne ?></a>
            <a class="responsive-open-menu-title-open" href="takim.php"><?php echo $oneTwo; ?></a>

        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#"><?php echo $twoHeader; ?></a>

            <a class="responsive-open-menu-title-open" href="frcnedir.php"><?php echo $twoOne; ?></a>
            <a class="responsive-open-menu-title-open" href="firstvakfi.php"><?php echo $twoTwo; ?></a>
            
        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#"><?php echo $threeHeader; ?></a>

            <a class="responsive-open-menu-title-open" href="#"><?php echo $threeOne; ?></a>
            <a class="responsive-open-menu-title-open" href="#"><?php echo $threeTwo; ?></a>
        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#"><?php echo $fourHeader; ?></a>
            <a class="responsive-open-menu-title-open" href="sponsorluk.php"><?php echo $fourOne; ?></a>
            <a class="responsive-open-menu-title-open" href="#"><?php echo $fourTwo; ?></a>


        </div>
    
    </section>

</section>


<script>


    /* Çalışmayan eski sistem (menü açma butonuna tıkladığım zaman menüyü ortaya alıyordu açılan bölümde)*/
    /*
    document.getElementById('navbarResponsiveOpen').addEventListener("click", () => {
        if (document.getElementById('navbar-header-section-down').style.bottom != "0px") {
            document.getElementById('navbar-header-section-down').style.bottom = "0px";
            document.querySelectorAll('.navbar-dropdown').forEach(function(element) {
                element.style.display = "block";
            });
        } else if (document.getElementById('navbar-header-section-down').style.bottom == "0px") {
            document.querySelectorAll('.navbar-dropdown').forEach(function(element) {
                element.style.display = "none";
            });
            document.getElementById('navbar-header-section-down').style.bottom = "auto";
        }
    });
    */

   document.getElementById('navbarResponsiveOpen').addEventListener("click", () => {
       document.getElementById('responsive-menu').style.display = "block";
   });

    document.getElementById('responsiveMenuCloseButton').addEventListener("click", () => {
        document.getElementById('responsive-menu').style.display = "none";
    });

</script>