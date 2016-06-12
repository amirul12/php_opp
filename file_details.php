<?php 
$filename = 'filetest.txt';
 
 echo filesize($filename)."<br/>";
 
 echo strftime('%m/%d/%Y %H:%M', filemtime($filename))."<br/>";
 echo strftime('%m/%d/%Y %H:%M', filectime($filename))."<br/>";
 echo strftime('%m/%d/%Y %H:%M', fileatime($filename))."<br/>";

 echo "<hr/>";
touch($filename);
 echo strftime('%m/%d/%Y %H:%M', filemtime($filename))."<br/>";
 echo strftime('%m/%d/%Y %H:%M', filectime($filename))."<br/>";
 echo strftime('%m/%d/%Y %H:%M', fileatime($filename))."<br/>";
 echo "<hr/>";
  
  $path_parth = pathinfo(__FILE__);
  echo $path_parth['dirname']."<br/>";// directory
  echo $path_parth['basename']."<br/>";//file_details.php
  echo $path_parth['filename']."<br/>";//file_details
  echo $path_parth['extension']."<br/>";//php
 
?>