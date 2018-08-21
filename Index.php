<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style >
  .b1

{
  background-image: url('bg3.jpg');
  color:red;
}
.modal-content
 {
   background-color:AntiqueWhite;
 }
 h1 {
    color: yellow;
    font: 
}

</style>
<body class ="b1" align="center">
  <div class="container text-center">
<br>
<br>
<h1 >Student Managment</h1>

<br>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create New Entry</button>
<br>
<hr>
<br>
</div>
<div class="container text-center">
 <div class="div1">
  <?php
                   
                    require_once 'conn.php';
                    $sql = "SELECT * FROM user";
                    $stmt = $conn->prepare($sql);
                    if($stmt->execute()){
                      $result = $stmt->get_result();
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered'>";
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
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['P'] . "</td>";
                                        echo "<td>" . $row['M'] . "</td>";
                                        echo "<td>" . $row['S'] . "</td>";
                                        echo "<td>" . $row['Total'] . "</td>";
                                        echo "<td>";
                                             echo "<a href='read.php?nm=". $row['name'] ."'><span class=' glyphicon glyphicon-th-list'style='color:white'></span></a>";
                                            echo "&nbsp&nbsp";
                                            echo "<a href='Update.php?nm=$row[name] &ph=$row[P]&ma=$row[M]&sc=$row[S]'><span class='glyphicon glyphicon-pencil'style='color:red'></span></a>"; echo "&nbsp&nbsp";
                                            echo "<a href='delete.php?nm=". $row['name'] . "' onclick=' return myFunction()'><span class='glyphicon glyphicon-trash'style='color:white'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                          
                        } 
                    } else{
                        echo "Error in Displaying";
                    }
 
                 
                   $conn->close();
                    ?>
  </div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      <form  action="action.php" method="post">
      <h2>Details</h2>
       <br>
     <label>Name:</label>
      <input type="text" name="name" class="form-control" required>
      <label>Physics:</label>
    <input type="text" name="p" class="form-control" required>
      <label >Maths:</label>
    <input type="text" name="m" class="form-control" required>
      <label >Science:</label>
    <input type="text"  name="s" class="form-control" required>
    <input type="hidden" name="option" value="insert" required>
        </div>
        <div class="foot">
          <input type="submit"></button>
          <br>
        </div>
        <br>

      </div>
      </form>
      
    </div>
  </div>
</div>

</div>

   </body>


   <script>
function myFunction() {
    
     return confirm("are you sure to Delete!") ;

}
</script>
    </html>