<?php
require_once("../includes/database.php");

if(isset($database)) { echo "true"; } else { echo "false"; }
echo "<br />";

echo $database->escape_value("It's working?<br />");

$sql  = "INSERT INTO users (id, username, password, first_name, last_name) ";
$sql .= "VALUES (1, 'amirul', 'amir', 'amirul', 'islam')";
$result = $database->query($sql);

$sql = "SELECT * FROM users WHERE id = 2";
$result_set = $database->query($sql);
$found_user = $database->fetch_array($result_set);
echo $found_user['username'];

?>
