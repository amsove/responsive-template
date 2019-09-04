<?php
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['Name'])) {.
/*Since the form has been submitted, let's capture the submission values so we can display them to the user on the Success page*/

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $Shirt = $_POST['Shirt'];
    $Eventsa = $_POST['Eventsa'];
    $Eventsu = $_POST['Eventsu'];
    $Emergency = $_POST['Emergency'];
    $Special = $_POST['Special'];

    require '../PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    //Set the hostname of the mail server
    $mail->Host = 'mail.vejraska.webhostingforstudents.com';
    //Set the SMTP port number - likely to be 25, 465 or 587                                 
    $mail->Port = 587;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = "phpmailer@vejraska.webhostingforstudents.com";
    //Password to use for SMTP authentication
    $mail->Password = "MyP4ssw0rd";                                 
                                     
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@vejraska.webhostingforstudents.com', 'Amber Vejraska');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('amber.vejraska@pcc.edu', 'Amber Vejraska');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($email, $name);
        $mail->Subject = 'Registration form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['email']}
Number: {$_POST['number']}
Gender: {$_POST['gender']}
Age: {$_POST['age']}
Shirt: {$_POST['shirt']}
Eventsa: {$_POST['eventsa']}
Eventsu: {$_POST['eventsu']}
Emergency: {$_POST['emergency']}
Special: {$_POST['special']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            
            echo "Mailer Error" . $mail->ErrorInfo;
        } else {
            include 'success.html.php';
        }
    } else {
        include 'register.html.php';
    }
}
?>