<?php

if (isset($_POST['submit'])) {

        function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }

        $name = test_input($_POST['name']);
        $subject = test_input($_POST['subject']);
        $mailFrom = test_input($_POST['mail']);
        if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
                die;
                header("Location: index.php?mail=invalidFormat");
              }
        $message = test_input($_POST['message']);

        $mailTo = "contact@isolaja.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;

                    mail($mailTo, $subject, $txt, $headers);
                    header("Location: index.php?mail=Sent#toMe");
}