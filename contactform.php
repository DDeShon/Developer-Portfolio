<?php 

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('8ce1f2a8a56e4c6020f6cb5bd8b7b09e-6ae2ecad-0baba944');
$domain = "sandboxebf9383626af4e5e96c9334f4b302943.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandboxebf9383626af4e5e96c9334f4b302943.mailgun.org>',
		  'to'      => 'Damon DeShon <ddeshon@live.com>',
		  'subject' => 'Hello Damon DeShon',
		  'text'    => 'Congratulations Damon DeShon, you just sent an email with Mailgun!  You are truly awesome! '));


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $emailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $emailTo = "codemonkeystudios@outlook.com";
    $headers = "From: ".$emailFrom;
    $subject = "New Request";
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($emailTo, $subject, $txt, $headers);
    
    header("Location: index.php");
}

?>