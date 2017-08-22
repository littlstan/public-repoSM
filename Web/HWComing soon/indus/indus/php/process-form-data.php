<?php

$email = $_POST[’email’];
$date = date("Y-m-d H:i:s");
$fp = fopen(”formdata.txt”, “a”);
$savestring = $email . “,” . $date . “n”;
fwrite($fp, $savestring);
fclose($fp);
echo “<h1>Thank you!</h1>”;
?>