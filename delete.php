
<?php
$nm=$_GET['nm'];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.b1{
 background-image: url("rb.jpg");
 vertical-align: middle;
 }
</style>
</head>
<?php
require_once 'conn.php';
if(isset($_GET['nm']))
{	require_once 'conn.php';
 		$sql = "DELETE  from user where name=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $bname);
            $bname =$_GET['nm'] ;
            if($stmt->execute()){
                header("location: index.php");
                exit();
            } 
            else{
                echo "Error Deleting  User table";
                }
          }
        $stmt->close();



?>