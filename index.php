<!DOCTYPE html>

<!-- Author:   Amber Vejraska 
               Date: 07/16/19
               Purpose: HTML Template -->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Amber Vejraska"> 

    <title>Ace in the Hole</title>

    <meta name="description" content="description">

    <!-- LESS Compliler -->
    <link rel="stylesheet/less" type="text/css" href="styles/style.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Mukta|Roboto&display=swap" rel="stylesheet">
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/helper.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php include 'includes/nav.inc.html.php'; ?>


    <!-- Static image -->
    
    <div class="static-image">
            <img src="images/placeholder2.png" style="width:100%">
    </div>
    

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">

            <img src="images/placeholder2.png" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">

            <img src="images/placeholder2.png" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">

            <img src="images/placeholder2.png" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>



    <article class=article>
        <h2>H2</h2>
        <p>Lorem ipsum.</p>
    </article>

    <article class=article>
        <h2>H2</h2>
        <p>Lorem ipsum.</p>
    </article>

    <article class=article>
        <h2>H2</h2>
        <p>Lorem ipsum.</p>
    </article>

    <?php include 'includes/footer.inc.html.php'; ?>

    <script src="scripts/script.js"></script>

</body>

</html>
