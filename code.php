<?php

$imagelink="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"; // image link format .png
 $name="new-image-name.png"; 

$data =file_get_contents("$imagelink");
$save=fopen('folder/'.$name.".png","w+"); //the extension of the file to be downloaded will be the same as the extension in $name / Do not forget to open the folder
fwrite($save, $data); //image download fwwrite
fclose($save);  //code stopg



?>