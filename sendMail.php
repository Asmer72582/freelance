<?php 


// refference 
$userName = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];


// mail direction
$to = "rtcgraphics73@gmail.com";
$body = "";
$title = "Mail from Raymond TenX Era & Habitat";


// mail format
$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Phone: ".$phone. "\r\n";
$body .= "Message: ".$message. "\r\n";

// mailing section
mail($to, $title, $body);


// redirect the page
echo "<script>window.location.href = 'index.html';</script>";


?>