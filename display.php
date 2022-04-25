<?php
    //ini_set('display_errors', 1);
$name = $_POST['name'];
$email = $_POST['email'];


$to = "ahu987300@gmail.com";

$subject = "NEW ENQUIRY"; 
$txt = "Name = ". $name . "\r\n Email = " . $email;

$headers = "From: noreply@company.com";

        
        if(mail($to,$subject,$txt,$headers)){
            // echo 'processing';
            // echo '<script>alert("processing");</script>';
            echo '<script>window.location.href ="https://jeetdigital.in/packer/shiftor/thankyou/";</script>';
        }
?>



