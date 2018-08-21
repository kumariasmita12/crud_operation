
<?php
include("conn.php");
error_reporting(0);
$nm=$_GET['nm'];
$_GET['ph'];
$_GET['ma'];
$_GET['sc'];
?>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .b1
  {
  	 background-image: url('bg3.jpg');
  }
  label
  {
  	color:yellow;
  }
  .f
  {
  	   color: red;
  	    font-size: 20px;
  }
</style>
</head>
<body class="b1">
<div class="container text-center"><span class="col-md-4"></span><span class="col-md-4">
<form class="f" action="action.php" align="center" method="post">
<br>
<br>
 <label><h1>Update Marks for <?php echo $nm;?></h1></label>
       <br>
	   <br> <label>Physics:</label>
	  <input type="text" name="p" value="<?php echo $_GET['ph']; ?>"><br>
	  <br>
	   <br> <label >Maths:</label>
	  <input type="text" name="m"value="<?php echo $_GET['ma']; ?>"><br>
	  <br>
	 <br>   <label >Science:</label>
	  <input type="text" name="s" value="<?php echo $_GET['sc']; ?>"><br>
	  <input type="hidden" name="nn" value=<?php echo $nm;?>>
	  <input type="hidden" name="option" value="update">
<br>
<br>
<input type="submit"  value="Update" style="color: green"></form></span>
</form>
</div>
</body>
</html>