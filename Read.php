<?php 
require_once 'conn.php';
$sql = "SELECT * FROM user WHERE name = ?";
    
    if($stmt=$conn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["nm"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
    
            if($result->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $result->fetch_assoc();
               $rn=$row['name'];
               $rp=$row['P'];
               $rm=$row['M'];
               $rs=$row['S'];
               $rt=$row['Total'];              
            }

}
}
$stmt->close();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body class ="b1" align="center">
  <div class="container text-center">
      <h2>Details:</h2>
      <hr>
      <h3>Name:      <label><?php echo $rn; ?><br></label></h3>
      <h3>Physics:    <label>  <?php echo $rp; ?><br></label></h3>
      <h3>Maths:       <label>   <?php echo $rm; ?><br></label></h3>
      <h3>Science:      <label>  <?php echo $rs; ?><br></label></h3>
      <h3>Total Marks:   <label>  <?php echo $rt; ?><br></label></h3>
      <hr>
      <a href='index.php'><button class='btn btn-success'>Home Page</button></a>
  </div>
   <style>
  .b1
  {
  	 background-image: url('bg3.jpg');
  	 color:yellow;

  }
  label
  {
  	color:white;
  }
  h3{
  
    }
</body>
</html>
