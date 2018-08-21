<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

 .modal-content
 {
   background-color:AntiqueWhite;
 }
 h1 {
    color: yellow;
}

 </style>
</head>

<body class ="b1" align="center">
<br>
<br>
<h1 >Student Managment</h1>

<br>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create New Entry</button>
<br>
<br>
 <div class="div1">
  <?php             require_once 'conn.php';
                    $sql = "SELECT * FROM user";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered '>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        echo "<th>Physics</th>";
                                        echo "<th>Maths</th>";
                                        echo "<th>Science</th>";
                                        echo "<th>Total</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['P'] . "</td>";
                                        echo "<td>" . $row['M'] . "</td>";
                                        echo "<td>" . $row['S'] . "</td>";
                                        echo "<td>" . $row['Total'] . "</td>";
                                        echo "<td>";
                                           
                                            echo "<a href='Update.php' title='Update' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                      echo "<a href='delete.php' title='Delete' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";   }
                                echo "</tbody>";                            
                            echo "</table>";
                          mysqli_free_result($result);
                        } 
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                 
                    mysqli_close($conn);
                    ?>
  </div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <form  action="action.php" method="post">
      <h2>Details</h2>
       <br>
     <label>Name:</label>
      <input type="text" name="name" class="form-control" >
      <label>Physics:</label>
    <input type="text" name="p" class="form-control">
      <label >Maths:</label>
    <input type="text" name="m" class="form-control" >
      <label >Science:</label>
    <input type="text"  name="s" class="form-control">
    <input type="hidden" name="option" value="insert">
        </div>
        <div class="modal-footer">
          <input type="submit"></button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
   </body>
    
      </html>