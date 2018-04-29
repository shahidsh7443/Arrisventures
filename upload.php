<?php
//$extension = end(explode(".", $_FILES["file"]["name"]));
if ($_FILES["file"]["size"] < 20000000000)
  {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
    
  }
else
  {
  echo "Invalid file";
  }
?>