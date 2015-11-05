<?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['myemail'];
    $subject = $_POST['subject'];
    $message = $_POST['comments'];

    echo "Thank you $fname $lname. Your feedback is greatly appreciated and we will work to incorporate suggestions. <br />";
// send mail
    mail($email,$subject,$message);
?>
