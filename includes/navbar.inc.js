const oneHeader = "HAKKIMIZDA";
const oneOne = "Hakkımızda";
const oneTwo = "Takımımız";

const twoHeader = "FRC";
const twoOne = "FRC Nedir";
const twoTwo = "FIRST Vakfı";

const threeHeader = "PROJELER";
const threeOne = "Sosyal Sorumluluk";
const threeTwo = "Genel Projeler";

const fourHeader = "SPONSORLUK";
const fourOne = "Sponsorluk";
const fourTwo = "Sponsorlarımız";

document.getElementById("navRoot").innerHTML = `

<header class="navbar-header">

    <section class="navbar-header-section-up">

        <span class="material-icons">
            email
        </span>
        <button onclick="navigator.clipboard.writeText('callisterfrc@gmail.com');" style="background: none; border: none; color: #F25D9C; font-size: medium; cursor: pointer;">callisterfrc@gmail.com</button>
        <a class="navbar-up-responsive-willberemoved" href="https://www.instagram.com/callisterfrc/" style="margin-left: 20px;">Instagram</a>
        <!-- <a class="navbar-up-responsive-willberemoved" href="#">YouTube</a> -->
        <a class="navbar-up-responsive-willberemoved" href="https://www.linkedin.com/company/callisterfrc/" style="margin-right: 0px;">LinkedIn</a>

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

            <a href="index.html" style="text-decoration: none;" class="navbar-dropdown-button navbar-content-extra-margin navbar-up-responsive-willberemoved">
                <span class="material-icons">
                    home
                </span>
            </a>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">` + oneHeader + `</button>
                <div class="navbar-dropdown-content">
                    <a href="hakkimizda.html">` + oneOne + `</a>
                    <a href="takim.html">` + oneTwo + `</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">` + twoHeader +`</button>
                <div class="navbar-dropdown-content">
                    <a href="frcnedir.html">` + twoOne +`</a>
                    <a href="firstvakfi.html">` + twoTwo + `</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">` + threeHeader + `</button>
                <div class="navbar-dropdown-content">
                    <a href="sosyalsorumluluk.html">` + threeOne + `</a>
                    <a href="genelprojeler.html">` + threeTwo + `</a>
                </div>
            </div>

            <div id="navbar-dropdown" class="navbar-dropdown navbar-content-extra-margin">
                <button class="navbar-dropdown-button">` + fourHeader + `</button>
                <div class="navbar-dropdown-content">
                    <!-- <a href="inovasyon.html">İnovasyon</a> -->
                    <a href="sponsorluk.html">` + fourOne + `</a>
                    <a href="sponsorlarımız.html">` + fourTwo + `</a>
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
            <a class="responsive-open-menu-title" href="index.html">Ana Sayfa</a>
        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#">` + oneHeader + `</a>

            <a class="responsive-open-menu-title-open" href="hakkimizda.html">` + oneOne + `</a>
            <a class="responsive-open-menu-title-open" href="takim.html">` + oneTwo + `</a>

        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#">` + twoHeader + `</a>

            <a class="responsive-open-menu-title-open" href="frcnedir.html">` + twoOne + `</a>
            <a class="responsive-open-menu-title-open" href="firstvakfi.html"><` + twoTwo + `</a>
            
        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#">` + threeHeader + `</a>

            <a class="responsive-open-menu-title-open" href="sosyalsorumluluk.html">` + threeOne + `</a>
            <a class="responsive-open-menu-title-open" href="genelprojeler.html">` + threeTwo + `</a>
        </div>

        <div class="responsive-open-menu-main">

            <a class="responsive-open-menu-title" href="#">` + fourHeader + `</a>
            <a class="responsive-open-menu-title-open" href="sponsorluk.html">` + fourOne + `</a>
            <a class="responsive-open-menu-title-open" href="sponsorlarımız.html">` + fourTwo + `</a>


        </div>
    
    </section>

</section>


<script>


     Çalışmayan eski sistem (menü açma butonuna tıkladığım zaman menüyü ortaya alıyordu açılan bölümde)*/
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


`;