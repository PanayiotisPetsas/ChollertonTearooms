	<?php
$dbConn = new mysqli('localhost', 'unn_w17021999', 'ODLDNTYZ', 'unn_w17021999');

if ($dbConn->connect_error) {
    echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
    exit;
}
?>
