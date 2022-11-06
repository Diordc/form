<?php

    if(isset($_POST['submit'])){
        // getting iformation

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lasttName'];
        $fromEmail = $_POST['email'];
        $Phone= $_POST['tel'];

        // recepiant email

        $mailTo = 'diorddcc4@gmail.com'

        // Email subject

        $subject = 'New User Submition' .$firstName;

        // Email message body

        $htmlcontent = '<h2>Email request received </h2>
        <p> <b>Client Name: <b/> '.$firstName . " " . $lastName . '</p>
        <p> <b>Email: <b/> '.$fromEmail . '</p>
        <p> <b>Phone: <b/> '.$Phone . '</p>';

        // Header info

        $headers = " From: " .$firstName . "<" . $fromEmail . ">" .;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


        // PHP MAILER

        $result = mail($mailTo, $subject,$htmlcontent,$headers)

        // Error Checking

        if($result){
            $sucess = "The message was sent sucessfully!"
        }else{
            $failed = "Error: Message was not sent, try again later"
        }

    }

?>