<?php

 //$fullname = $_GET['fullname'];

          $result['email'] = 'info@example.com';
          $result['username'] = 'sample user';
          //$result['fullname'] = $row['fullname'];
 
 //$result = ("Harald","Haribald","Harold","Harry","Haribald");
// Finally the JSON, including the correct content-type

header('Content-type: application/json'); 
echo json_encode($result); 
?>
