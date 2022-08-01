<?php
    if (isset($_POST['submit'])) {
        $mailTo = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "munchkinlover2000@hotmail.com";
        $headers = "From:" . $mailFrom;
        $txt = "You have recieved an email from " . $name . "\n\n" . $message;

        
        mail($mailTo, $subject, $txt, $headers);
        header("Location: thank_you.php?mailsend");
    


        
        
    }

?>