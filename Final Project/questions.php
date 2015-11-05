<?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['myemail'];
    $subject = $_POST['subject'];
    $message = $_POST['comments'];
    $submitteremail = $_POST['email'];
    
    echo "Thank you $fname $lname for submitting a question. A response will be sent to your email: $submitteremail as soon as possible <br />";
// send mail;
    mail($email,$subject,$message);
?>