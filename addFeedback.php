<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: w17021999
 * Date: 12/03/2019
 * Time: 13:10
 */

include 'database_conn.php';

$custForename = $_REQUEST['custForename'];
$custSurname = $_REQUEST['custSurname'];
$custEmail = $_REQUEST['custEmail'];
$rLocation = $_REQUEST['rLocation'];
$qService = $_REQUEST['qService'];
$qFood = $_REQUEST['qFood'];
$moreFeedback = $_REQUEST['moreFeedback'];

echo "<section>\n";
echo "\t<h1>Your details:</h1>\n";
echo "\t<p>Forename: $custForename</p>\n";
echo "\t<p>Surname: $custSurname</p>\n";
echo "\t<p>Email: $custEmail</p>\n";
echo "\t<p>Your location: $rLocation</p>\n";
echo "\t<p>Service opinion: $qService</p>\n";
echo "\t<p>Food opinion: $qFood</p>\n";
echo "\t<p>More feedback: $moreFeedback</p>\n";



?>
</body>
</html>