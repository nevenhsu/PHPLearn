


<h1>Get in touch!</h1>

<?php

if($_POST) {

    $error = "";
    $emailTo = "space.man0318@gmail.com";
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $isVaildEmail = false;
    $isVaildSubject = false;
    $isVaildMessage = false;


    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if ($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $isVaildEmail = true;
        } else {
            $isVaildEmail = false;
            $error = $error."<p>$email is not a valid email address.</p>";
        }
    } else {
        $isVaildEmail = false;
        $error = $error."<p>Email is required.</p>";

    }

    if ($subject) {
        $isVaildSubject = true;
    } else {
        $isVaildSubject = false;
        $error = $error."<p>Subject is required.</p>";
    }

    if ($message) {
        $isVaildMessage = true;
    } else {
        $isVaildMessage = false;
        $error = $error."<p>Message is required.</p>";
    }


    if ($isVaildEmail && $isVaildSubject && $isVaildMessage) {

        $headers = "From: $email";
        if (mail($emailTo,$subject,$message,$headers)) {
            echo "<div>We will get back you soon!</div>";
        } else {
            echo "<div>Service has some problem. Try again later.</div>";
        }

    } else {
        echo "<div>$error</div>";
    }

}



?>

<form method="post">

    <label for="email">Email address</label>
    <p><input name="email" type="text" placeholder="Enter email"></p>



    <label for="subject">Subject</label>
    <p><input name="subject" type="text"></p>



    <label for="message">What would you like to ask us?</label></p>
    <p><input name="message" type="text">


    <p><input type="submit" value="Submit"></p>
</form>
