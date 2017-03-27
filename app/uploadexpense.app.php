 <?php
 
 
 require_once '../dbh.php';
 
  $base=$_REQUEST['image'];
  
     $binary=base64_decode($base);
	 
	 
	 // Do some logic here for dropping the files and what not
	 
	 
    header('Content-Type: bitmap; charset=utf-8');
	
    $file = fopen('uploaded_image.jpg', 'wb');
	
    fwrite($file, $binary);
    fclose($file);
	
	
echo json_encode('Image upload complete!!, Please check your php directory');

?> 

