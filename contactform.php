<?php
    require('dotenv').config(); 

    if (isset($_POST['submit'])) {
        $mailTo = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "munchkinlover2000@hotmail.com";
        $headers = "From:" . $mailFrom;
        $txt = "You have recieved an email from " . $name . "\n\n" . $message;

        $secretKey = process.env.SECRET_KEY;
        $responseKey = $_POST['g-recaptcha-response'];
        $UserIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

        $response = file_get_contents($url);
        $response = json_decode($response);

        if ($response->success) {
            mail($mailTo, $subject, $txt, $headers);
            header("Location: thank_you.php?mailsend");
        } else {
            echo "invalid Captcha, please try again";
        }


        
        
    }

?>