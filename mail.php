<?php 
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['Phone-Number'];
$Addressline1 = $_POST['Address-line-1'];
$Addressline2 = $_POST['Address-line-2'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$Ownfranchise = $_POST['Own-franchise'];

$formcontent="From: $Name.\n  
Email: $Email.\n 
Phone: $PhoneNumber.\n 
Address Line 1: $Addressline1.\n  
Address Line 2: $Addressline2.\n  
City: $City.\n 
Pincode: $Pincode.\n  
Own Franchise?: $Ownfranchise.\n ";

$to = "hello@keshavsharma.in";
$subject = "Contact Form";
$headers = "From: $email \r\n";
mail($to, $subject, $formcontent, $headers) or die("Error!");
header("Location: get-in-touch.html");
?>
