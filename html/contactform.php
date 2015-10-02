<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        
        $from = 'Demo Contact Form'; 
        $to = 'syamil@u.nus.edu'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Tel:\n $tel";
 
        // // Check if name has been entered
        // if (!$_POST['name']) {
        //     $errName = 'Please enter your name';
        // }
        
        // // Check if email has been entered and is valid
        // if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //     $errEmail = 'Please enter a valid email address';
        // }
        
        // //Check if message has been entered
        // if (!$_POST['message']) {
        //     $errMessage = 'Please enter your message';
        // }
        // //Check if simple anti-bot test is correct
        // if ($human !== 5) {
        //     $errHuman = 'Your anti-spam is incorrect';
        // }
 
// If there are no errors, send the email
// if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    
        if(mail($to, $subject, $body, $from))
        echo "<p>Thank You! I will be in touch</p>";
        else 
        echo '<p>Something went wrong, go back and try again!</p>';
        
   
}
    // }
?>