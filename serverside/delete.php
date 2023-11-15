<?php
$file_pointer = $_GET["key"]; 
  
// Use unlink() function to delete a file 
if (!unlink($file_pointer)) { 
    echo ("FAIL"); 
} 
else { 
    echo ("SUCCESS"); 
} 
 
?> 
