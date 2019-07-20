<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food results</title>
</head>
<body>
<?php
$forename = isset($_REQUEST['forename']) ? $_REQUEST['forename'] : null;
$surname = isset($_REQUEST['surname']) ? $_REQUEST['surname'] : null;
$studyLevel = isset($_REQUEST['studyLevel']) ? $_REQUEST['$studyLevel'] : null;
$gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : null;
$food = isset($_REQUEST['food']) ? $_REQUEST['food'] : null;
echo "<section>\n";
echo "\t<h1>Foods that you liked</h1>\n";
echo "\t<h2>Your details</h2>\n";
echo "\t<p>Forename: $forename</p>\n";
if (empty($forename)) {
    echo "<p>You have not typed your forename. Please try again.</p>\n";
}
echo "\t<p>Surname: $surname</p>\n";
if (empty($surname)) {
    echo "<p>You have not typed your $surname. Please try again.</p>\n";
}
echo "\t<p>Level of study: $studyLevel</p>\n";
if (empty($gender)) {
    echo "<p>You have not selected your level of study. Please try again.</p>\n";
}
echo "\t<p>Gender: $gender</p>\n";
if (empty($gender)) {
    echo "<p>You have not selected your gender. Please try again.</p>\n";
}
echo "\t<h2>Foods that you like</h2>\n";
echo "\t<p>You like the following type(s) of food: ";
if (empty($food)) {
    echo "<p>You did not like any of the foods listed</p>\n";
}
foreach ($food as $foodType) {
    echo "$foodType ";
}

echo "\t</p>\n";
echo "</section>\n";?>
</body>
</html>