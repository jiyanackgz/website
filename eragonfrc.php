<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa | EragonFRC</title>

    <?php include("includes/extrahead.inc.php"); ?>

    <style>

        #eragon-frc-nav-img {display: block;}

    </style>
</head>
<body>

    <?php include("includes/navbar.inc.php"); ?>
    
    <div class="frc-main-up-background"></div>

    <section class="frc-main-up">
        <img src="images/ekip_fotografi.jpeg">
    </section>
    
    <section class="frc-info-main-up">
            
        <h1>BİZ ERAGON'uz</h1><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laborum. Pariatur veniam quibusdam facilis dicta voluptatum fugit nemo tenetur, nostrum nobis quasi corrupti, possimus eum perspiciatis ducimus aliquam veritatis nesciunt?</p>



    </section>


    
    

    <label id="scrollButtonfrc" style="color: white; text-align: center; position: absolute; left: 50%; transform: translateX(-50%); bottom: 0%; cursor: pointer;" style="position: static;">
        Scroll<br>

        <span class="material-icons">
            expand_more
        </span>
    </label>


    <section class="frc-anasayfa-farkimiz">

        <h1>FARKIMIZ</h1>

        <div class="frc-anasayfa-farkimiz--farklar">

            <div class="frc-anasayfa-farkimiz--farklar-fark">
                <label>
                    <span class="material-icons">
                        verified
                    </span><br>
                    Example
                </label>
            </div>

            <hr>

            <div class="frc-anasayfa-farkimiz--farklar-fark">
                <label>
                    <span class="material-icons">
                        language
                    </span><br>
                    Example
                </label>
            </div>

            <hr>

            <div class="frc-anasayfa-farkimiz--farklar-fark">
                <label>
                    <span class="material-icons">
                        explore
                    </span><br>
                    Example
                </label>
            </div>

        </div>

    </section>



    <section class="frc-anasafa-frc-kampı-nedir-main">
        
        <div class="frc-anasayfa-frc-kampı-nedir">

            
            
            <div class="card mb-3" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Biz Kimiz?</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, perferendis doloremque. Nam fugit magni aperiam consequatur odit necessitatibus ea recusandae, accusantium mollitia molestiae laborum nemo minima laboriosam iste quisquam corrupti!</p>
                            <a href="eragonfrchakkinda.php"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/kopek.jpg" class="card-img">
                    </div>
                </div>
            </div>

        </div>

    </section>

    
    

    

    <?php include("includes/extrabody.inc.php"); ?>
    <script>
        (function() {
        'use strict';

        var btnScrollDown = document.getElementById('scrollButtonfrc');

        function scrollDown() {
            var windowCoords = document.documentElement.clientHeight;
            (function scroll() {
            if (window.pageYOffset < windowCoords) {
                window.scrollBy(0, 10);
                setTimeout(scroll, 0);
            }
            if (window.pageYOffset > windowCoords) {
                window.scrollTo(0, windowCoords);
            }
            })();
        }

        btnScrollDown.addEventListener('click', scrollDown);
        })();

    </script>
</body>
</html>