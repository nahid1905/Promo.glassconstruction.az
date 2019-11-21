<?php

$servername = "localhost";
$username = "glassco_idealand";
$password = "u8vN_[vMv-rb";
$dbname = "glassco_glassaz";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$phone = $_POST['phone'];
$phone = str_replace('-', '', $phone);
$phone = str_replace(' ', '', $phone);
$ip =  $_SERVER['REMOTE_ADDR'];
$os = $_SERVER['HTTP_USER_AGENT'];


$sql = 'INSERT INTO _call_order (phone, ip, os) VALUES ("' . $phone . '", "' . $ip . '", "' . $os . '")';

if (mysqli_query($conn, $sql)) {
    $message = "Bizə yazdığınız üçün təşəkkür edirik! Tezliklə sizinlə əlaqə saxlayacağıq.";
    echo $message;
}
else{
    $message = "Mesajınız göndərilmədi yenidən cəhd edin";
    echo $message;
}
//else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

mysqli_close($conn);

?>