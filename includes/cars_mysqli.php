<?php
$db = new mysqli('localhost', 'root', '', 'phpexport');
if($db->connect_error){
  $error = $db->connect_error;
}
else{
  $sql = 'SELECT * FROM cars
          INNER JOIN makes
            USING(make_id)
          WHERE yearmade > 2008
          ORDER BY price';
  $result = $db->query($sql);
  if($db->error){
    $error = $db->error;
  }
}

function getRow($result){
  return $result->fetch_assoc();
}
