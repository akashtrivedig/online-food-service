<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  </body>
</html>
<?php
  include("database/db.php");
  $obj_db=new Connect_db();
  $obj_db->connect("GameToh");
  $_query="INSERT INTO cuisine VALUES('','','')";
  $result=mysqli_query($obj_db->conobj, $_query);
?>