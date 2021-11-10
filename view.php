<?php
if(ISSET($_REQUEST['file'])){
    $file = $_REQUEST['file'];
    

    // Header content type 
header('Content-type: application/pdf'); 

header('Content-Disposition: inline; filename="' . $file . '"'); 

header('Content-Transfer-Encoding: binary'); 

header('Accept-Ranges: bytes'); 
 readfile("files/".$file);
}
?>

