<?php
include 'database_conn.php';	  // make db connection

$sql = "SELECT filmID, title, notes FROM film";
$queryResult = $dbConn->query($sql);

// Check for and handle query failure
if($queryResult === false) {
    echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
    exit;
}
// Otherwise fetch all the rows returned by the query one by one
else {
    while($rowObj = $queryResult->fetch_object()){
        echo "<div>{$rowObj->filmID}, {$rowObj->title}, {$rowObj->notes}</div>";
    }
}
$queryResult->close();
$dbConn->close();
?>
