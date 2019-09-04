<!DOCTYPE html>

<!-- Author:   Amber Vejraska 
               Date: 08/07/19
               Purpose: HTML Template -->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Amber Vejraska"> 

    <title>Ace in the Hole Multisport Event</title>

    <meta name="description" content="description">


    
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Mukta|Roboto&display=swap" rel="stylesheet">
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/helper.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    <?php include 'includes/nav.inc.html.php'; ?>


    <!-- Static image -->
    
    <div class="static-image">
            <img src="images/bike4.jpg" style="width:100%">
    </div>
    

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">

            <img src="images/participant3_editss.jpeg" style="width:100%">
            <div class="text">Swim Complete!</div>
        </div>
        
        <div class="mySlides fade">

            <img src="images/bike5_editss.png" style="width:100%">
            <div class="text">Biking for the Win</div>
        </div>

        <div class="mySlides fade">

            <img src="images/participant2_editss.jpg" style="width:100%">
            <div class="text">Eagerly Awaiting the Event</div>
        </div>

        <div class="mySlides fade">

            <img src="images/run4_editss.jpg" style="width:100%">
            <div class="text">The Finish Line is in Sight!</div>
        </div>
        
                <div class="mySlides fade">
        
                    <img src="images/swim2_editss.jpg" style="width:100%">
            <div class="text">Ready, Set, Go</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <article class=article>
        <h2>About Us</h2>
        <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</p><br>
    </article>

    <article class=article>
        <h2>About the Event</h2>
        <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p><br>
                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic and Half-Iron triathlons, and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p><br>
    </article>

    <article class=article>
        <h2>What People Are Saying</h2>
        <div class="section group">
            <div class="col span_1_of_3">
                <h3>Twitter</h3>
                <blockquote class="twitter-tweet" tw-align-center data-lang="en"><p lang="en" dir="ltr">Come on out June 22 and 23, 2019 for an Event for Every Body!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/1133483152414896128?ref_src=twsrc%5Etfw">May 28, 2019</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>
            <div class="col span_1_of_3">
                <h3> </h3><br>
                <img src="images/participant1.jpg" style="width:100%">
            </div>
            <div class="col span_1_of_3">
                <h3>Facebook</h3><br>
                <div class="fb-post" data-href="https://www.facebook.com/cas222cascade/posts/632993133831078" data-width="425" data-show-text="true"><blockquote cite="https://developers.facebook.com/cas222cascade/posts/632993133831078" class="fb-xfbml-parse-ignore"><p>Events for Every Body!</p>Posted by <a href="https://www.facebook.com/cas222cascade/">CAS 222</a> on&nbsp;<a href="https://developers.facebook.com/cas222cascade/posts/632993133831078">Tuesday, May 28, 2019</a></blockquote></div></div>
        </div>
    </article>

    <?php include 'includes/footer.inc.html.php'; ?>

    <script src="scripts/script.js"></script>

</body>

</html>
