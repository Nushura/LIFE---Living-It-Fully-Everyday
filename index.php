<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage </title>
    <meta name="keywords" content= "Layout">
    <meta http-equiv="Content-Type" content="text/html; charset = UTF-8">
  
    <link rel = 'stylesheet' href='stylesheet/layout.css' type='text/css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
        #carousel_img{
            width: 1100px;
            /* height: 500px */
            margin: auto;
        }

        #carousel_img img{
            width: 100%;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
        // Initialise slick on the element.
        $(document).ready(function () {
            $("#carousel_img").slick({
                autoplay: true,
                dots: true
            });
        });
    </script>

</head>
<body>
    <div class= "wrapper">

        <!-- require_once used to connect this php code with the header fragment inside includes -->
        <?php require_once("includes/header.php"); ?>
        
        <!-- require_once used to connect this php code with the navbar fragment inside includes -->
        <?php require_once("includes/navbar.php"); ?>
        
        <div class="box content">
            <!-- The image is taken from pexel and further edited and converted to gif with canva -->
            <!-- <div><p class = "welcomeimg"><img src = "image/welcome.gif" height="500" alt= "Life logo"></p></div> -->


            <!-- The images below are created and converted to gif on canva-->
            <div id="carousel_img">

                <div>
                    <img src="assets/carouselPictures/welcome.gif" alt="Welcoming banner" height="500">
                </div>
            
                <div>
                    <img src="assets/carouselPictures/yoga.gif" alt="Yoga banner" height="500">
                </div>
            
                <div>
                    <img src="assets/carouselPictures/meditation.gif" alt="Meditation banner" height="500">
                </div>

                <div>
                    <img src="assets/carouselPictures/stretching.gif" alt="Stretching banner" height="500">
                </div>

                <div>
                    <img src="assets/carouselPictures/meal.gif" alt="Meal planning banner" height="500">
                </div>

                <div>
                    <img src="assets/carouselPictures/registerNow!.gif" alt="Register now banner" height="500">
                </div>

            </div>



            <div class = "welcomeheader"><h3>Mental Health Is Important</h3></div>

            <div class = "statistics"><p>1 out of 5 Australians are being affected due to emotional illness every 12 months 
                with COVID19 making it worse. With continuous lockdowns, people are having to 
                isolate themselves every once in a while. This further has a harsher impact 
                on individuals living alone. Hence, wellness industry is here to assist people 
                which can be accessed right from the comfort of peoples own home. LIFE cares 
                about its people and offers ways to unwind and concentrate on spiritual welfare.</p>
            </div>

            <div class ="service"><h3>Our Services</h3></div>

            <!-- All the pictures used inside this dic is taken from pexels -->
            <div class = "fourservices">

                <span class  ="yoga">
                    <img class = 'pic' src="assets/images/yogahomepage.jpg" alt="Person doing yoga" style="width: 650px;height: 500px;">
                    <div class>
                        <h4>Yoga</h4>
                        <p>Yoga helps to ease stress, reduce unease and depression, improve sleep quality</p>
                    </div>
                </span>
                    
                <span class ="meditation">
                    <img class = 'pic' src="assets/images/meditationhomepage.jpg" alt="Person meditating" style="width: 650px;height: 500px;">
                    <div>
                        <h4>Meditation</h4>
                        <p>Enhances focus, increase self-consciousness and self-esteem, reduces stress and unease</p>
                    </div>
                </span>
                    
                <br> 
                <br>

                <span class ="stretching">
                    <img class = 'pic' src="assets/images/stretchinghomepage.jpg" alt="Person stretching" style="width: 650px;height: 500px;">
                    <div>
                        <h4>Stretching</h4>
                        <p>Relieves tension in muscles, lowers stress level and plasma movement</p>
                    </div>
                </span>
                    
                <span class ="healthyhabits">
                    <a href="healthyhabits.php"><img class = 'pic' src="assets/images/healthyhabitshomepage.jpg" alt="healthyhabits" style="width: 650px;height: 500px;"></a>
                    <div>
                        <h4>Healthy Habits</h4>
                        <p>Forming healthy habits will lead you to live a healthy life, making you feel better.</p>
                    </div>
                </span>

                <br>
                <br>
               
            </div>

        </div>
        
        <!-- require_once used to connect this php code with the footer fragment inside includes -->
        <?php require_once("includes/footer.php"); ?>
        
    </div>
    
</body>
</html>