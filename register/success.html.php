<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Amber Vejraska">

    <title>Registration Verification</title>

    <meta name="Contact Verification" content="Ace in the Hole Multisport Event Registration Verification">

    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Mukta|Roboto&display=swap" rel="stylesheet">
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="styles/helper.css" rel="stylesheet" type="text/css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
    <body>
        <div id="wrapper">
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Success!</h1>
                <p>Our records show you emailed the following:<br>
                  Name: <?php echo htmlspecialchars($Name, ENT_QUOTES, 'UTF-8');?><br>
                  Email: <?php echo htmlspecialchars($Email, ENT_QUOTES, 'UTF-8');?><br>
                  Number: <?php echo htmlspecialchars($Number, ENT_QUOTES, 'UTF-8');?><br>
                  Gender: <?php echo htmlspecialchars($Gender, ENT_QUOTES, 'UTF-8');?><br>
                  Age: <?php echo htmlspecialchars($Age, ENT_QUOTES, 'UTF-8');?><br>
                  Shirt: <?php echo htmlspecialchars($Shirt, ENT_QUOTES, 'UTF-8');?><br>
                  Saturday Options: <?php echo htmlspecialchars($Eventsa, ENT_QUOTES, 'UTF-8');?><br>
                  Sunday Options: <?php echo htmlspecialchars($Eventsu, ENT_QUOTES, 'UTF-8');?><br>
                  Emergency Contact: <?php echo htmlspecialchars($Emergency, ENT_QUOTES, 'UTF-8');?><br>
                  Special Accomodations: <?php echo htmlspecialchars($Special, ENT_QUOTES, 'UTF-8');?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>