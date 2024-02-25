<?php

require_once "../connection.php";

$filename = $_POST["image"];

if (file_exists($filename)) {

  unlink($filename);
  if (unlink($filename)) {
      echo("success");
  } else {
      echo ("Unable to delete the file.");
  }
} else {
  echo ("File does not exist.");
}

?>