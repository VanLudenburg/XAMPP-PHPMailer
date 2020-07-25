<?php
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailTo = 'vludenburg@gmail.com';
    $headers = 'From: '.$email;
    $newMsg = 'New Message from: '.$name. '<br>Message: '.$message;
    mail($emailTo, $subject, $newMsg, $headers); // this will send it to you
    // optionally you can redirect users after submit do this
}
?>



<!-- Simple HTML Contact Form -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- Important -->
        <form action="" method="POST">

            <!-- Visitor's Name,input field -->
            <label for="name">Name</label>
                <input name="name" type="text" minlength="3" maxlength="43" required patter="[a-zA-Z0-9]+"><br>

            <!-- Visitor's Email, input field -->
            <label for="email">Email</label>
                <input name="email" type="email" minlength="5" maxlength="43" required=""><br>

            <!-- Visitor's Subject, input field -->
            <label for="subject">Subject</label>
                <input name="subject" type="text" minlength="3" maxlength="43" required patter="[a-zA-Z]+"><br>

            <!-- Visitor's Subject, input field -->
            <label for="message">Message</label><br>
            <textarea name="message" required rows="5" placeholder="Enter your message here..." maxlength="250"></textarea><br>

            <!-- Submit Button -->
            <input type="submit" name="submit" value="Submit">
        </form>
    </body> 
</html>