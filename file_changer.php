<?php

echo fileowner('file_basics.php');
echo "<br/>";
$owner_id = fileowner('file_basics.php');
$owner_array = posix_getpwuid($owner_id);
echo $owner_array;

?>