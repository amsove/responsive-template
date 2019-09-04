<!DOCTYPE html>

<!-- Author:   Amber Vejraska 
               Date: 08/07/19
               Purpose: HTML Template -->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Amber Vejraska"> 

    <title>Registration</title>

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
        <h2>Registration Information</h2>
        <p>Use the form below to register for one of our events.</p><br>
    </article>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="register_form.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="name">Full Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" required placeholder="Your Full Name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" required placeholder="Your Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="number">Phone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="number" name="number" required placeholder="Your Phone Number">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="gender">Gender</label>
                </div>
                <div class="col-75">
                    <select id="gender" name="gender" required>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="nonbinary">Non-Binary</option>
        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="age">Age</label>
                </div>
                <div class="col-75">
                    <input type="text" id="age" name="age"  required placeholder="Your Age">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="shirt">Shirt Size</label>
                </div>
                <div class="col-75">
                    <select id="shirt" name="shirt"  required>
          <option value="xsmall">XS</option>
          <option value="small">S</option>
          <option value="medium">M</option>
          <option value="large">L</option>
          <option value="xlarge">XL</option>
          <option value="xxlarge">XXL</option>
          <option value="xxxlarge">XXXL</option>
        </select>
                </div>
            </div>
<div class="row">
                <div class="col-25">
                    <label for="eventsa">Saturday Options</label>
                </div>
                <div class="col-75">
                    <select id="eventsa" name="eventsa"  required>
          <option value="option1">Long Course: Athlete - $240</option>
          <option value="option2">Long Course: Volunteer</option>
          <option value="option3">Olympic Triathlon: Athlete - $110</option>
          <option value="option4">Olympic Triathlon: Volunteer</option>
          <option value="option5">10K Race: Athlete - $50</option>
          <option value="option6">10K Race: Volunteer</option>
          <option value="option7">Half Marathon: Athlete - $75</option>
          <option value="option8">Half Marathon: Volunteer</option>
        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="eventsu">Sunday Options</label>
                </div>
                <div class="col-75">
                    <select id="eventsu" name="eventsu" required>
          <option value="option9">Sprint Triathlon: Athlete - $90</option>
          <option value="option10">Sprint Triathlon: Volunteer</option>
          <option value="option11">Try-A-Tri: Athlete - $65</option>
          <option value="option12">Try-A-Tri: Volunteer</option>
          <option value="option13">Splash n Dash: Athlete - $25</option>
          <option value="option14">Splash n Dash: Volunteer</option>
        </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="emergency">Emergency Contact Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="emergencyname" name="emergencyname" required placeholder="Emergency contact name">
                </div>
            </div>
                        <div class="row">
                <div class="col-25">
                    <label for="emergencynumber">Emergency Contact Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="emergencynumber" name="emergencynumber" required placeholder="Emergency contact phone number">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="special">Special Accommodations</label>
                </div>
                <div class="col-75">
                    <textarea id="special" name="special" required placeholder="List any special accommodations here..." style="height:200px"></textarea>
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