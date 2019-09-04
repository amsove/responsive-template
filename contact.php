<!DOCTYPE html>

<!-- Author:   Amber Vejraska 
               Date: 08/07/19
               Purpose: HTML Template -->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Amber Vejraska">

    <title>Contact</title>

    <meta name="Contact" content="description">



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
        <h2>Send Us A Message</h2>
        <p>Have questions or concerns? Use the form below to contact us!</p><br>
    </article>

    <div class="container">
        <h2>Contact Form</h2>
        <?php if (!empty($msg)) {
    echo "<h2>$msg</h2>";
} ?>
        <form action="action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="name">Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Your Name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="Your Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="role">Role</label>
                </div>
                <div class="col-75">
                    <select id="role" name="role">
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
          <option value="other">Interested Party</option>
        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="message">Question or Comment</label>
                </div>
                <div class="col-75">
                    <textarea id="message" name="message" placeholder="Write something here..." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <?php include 'includes/footer.inc.html.php'; ?>

    <script src="scripts/script.js"></script>

</body>

</html>