<?php
$dir = "H:/Directory-Sarika";

// Sort in ascending order - this is default
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo  $file . "<br>";
    }
    closedir($dh);
  }
}
?>