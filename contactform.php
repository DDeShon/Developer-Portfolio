<?php 

if(isset($_POST['email'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $emailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $emailTo = "codemonkeystudios@outlook.com";
    $headers = "From: ".$emailFrom;
    $subject = "New Request";
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($emailTo, $subject, $txt);
    // console.log($emailTo, $subject, $txt);
    header("Location: index.php");
}

?>