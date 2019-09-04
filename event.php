<!DOCTYPE html>

<!-- Author:   Amber Vejraska 
               Date: 08/07/19
               Purpose: HTML Template -->

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Amber Vejraska"> 

    <title>Event Information</title>

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
        <h2>Course Details</h2>
        <p>Whether you are looking to make your debut in the popular multi-sporting Triathlon events arena, or are a seasoned pro who can't wait to get out on the course, we have something for everyone.</p><br>
                <p>The cost of the event includes food & beer, access to the weekend's live entertainment & Fitness Expo, a Commemorative Finisher medal, accurate Chip Timing for competitive races, Ace in the Hole Multisport Weekend Tech Shirt (Tech shirts guaranteed to pre-registered participants only), and access to the post-event party & entertainment.</p><br>
        <p>Review the course details below for specific course information and pricing details.</p><br>

        <div class="section group">
	<div class="col span_1_of_3">
	<center><p>Long Course: $240</p></center><br>
        <button class="accordion">Long Course Swim</button>
<div class="panel"><br>
  <p>1.2 Miles: Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p><br>
</div>

<button class="accordion">Long Course Bike</button>
<div class="panel"><br>
  <p>58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p><br>
</div>

<button class="accordion">Long Course Run</button>
<div class="panel"><br>
  <p>13.1 Miles: A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p><br>
</div>
	</div>
	<div class="col span_1_of_3">
	<center><p>Olympic: $110</p></center><br>
                <button class="accordion">Olympic Swim</button>
<div class="panel"><br>
  <p>1,500 meters: Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p><br>
</div>

<button class="accordion">Olympic Bike</button>
<div class="panel"><br>
  <p>28 Miles: A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p><br>
</div>

<button class="accordion">Olympic Run</button>
<div class="panel"><br>
  <p>10K: A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p><br>
</div>
	</div>
	<div class="col span_1_of_3">
	<center><p>Other Options: Priced as Marked</p></center><br>
                <button class="accordion">Sprint: $90</button>
<div class="panel"><br>
  <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p><br>
</div>

<button class="accordion">Tri-A-Tri: $65</button>
<div class="panel"><br>
  <p>Try-A-Tri: This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p><br>
</div>

<button class="accordion">Half Marathon: $75</button>
<div class="panel"><br>
  <p>13.1 miles: Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</p><br>
</div>
        
        <button class="accordion">10K: $50</button>
<div class="panel"><br>
  <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p><br>
</div>

<button class="accordion">Splash n' Dash: Free with adult registration; otherwise $25</button>
<div class="panel"><br>
  <p>Splash n' Dash: Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash.</p><br>
</div>
	</div>
</div>

        <p>Note: Water temperature the weekend of the event is expected to be between 62 - 66 degrees. The temperature will be taken on Friday and the morning of the race for accuracy. Wetsuits are recommended.</p><br>
    </article>

    <article class=article>
        <h2>Packet Pick Up</h2>
        <p>All packet pick ups will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours are Thursday 8-5, Friday 9-noon. Packet pick up is not available the day of the event.</p><br>
    </article>
    
        <article class=article>
        <h2>Starting Times</h2>
        <p>Saturday</p><br>
                        <ul class="a">
  <li>Long Course Triathlon - 7:00 AM</li><br>
  <li>Olympic Triathlon - 7:30 AM</li><br>
  <li>10K - 7:15 AM</li><br>
  <li>Half Marathon- 7:15 AM</li><br>
</ul>	
<p>Sunday </p><br>
            <ul class="a">
              <li>Sprint Triathlon - 8:00 AM</li><br>
            <li>Try-a-Tri - 8:20 AM</li><br>
            <li>Splash n Dash - 12:00 PM</li><br>
                </ul>
    </article>
    
        <article class=article>
        <h2>What To Bring</h2>
<p>You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p><br>
                        <p>Watch the weather closely!  The show goes on no matter what the weather is doing.</p><br>

            <ul class="a">
    <li>Swim:  Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</li><br>

<li>Bike:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</li><br>

<li>Run:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</li><br>
            </ul>

<p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p><br>
    </article>
    
        <article class=article>
        <h2>FAQs</h2>
                        <ul class="a">
  <li>What are the Rules? We currently adhere to the USAT Rules for Triathlon & Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</li><br>
  <li>Can I use a personal music device while cycling? Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</li><br>
  <li>Can I use a personal music device while running? During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment, and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive, environment, here is the arrangement that we can accommodate:</li><br>
                                <p>- If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music, or awards/points/rankings.</p><br>
    <p>- If you are using a personal music device with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes this is a very important rule.</p><br>
    <p>- We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p><br>
  <li>Do I need to wear a wetsuit?  No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</li><br>
  <li>Do I have to use a road or racing bike?  No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</li><br>
</ul>

    </article>
    
            <article class=article>
        <h2>Local Weather</h2>

<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="dark" >PORTLAND WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                <br>
    </article>

    <?php include 'includes/footer.inc.html.php'; ?>

    <script src="scripts/script.js"></script>

</body>

</html>