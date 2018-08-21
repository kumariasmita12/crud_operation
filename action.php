<?php
if($_POST['option']=='insert')
  {
    require_once 'conn.php';
    $nameerr= "";
    $name = trim($_POST["name"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           $nameerr = "Error"; 
        }
        if(empty($nameerr)){
        $sql = "INSERT INTO user VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siiii", $bname, $bp, $bm,$bs,$bt);
            $bname =$name ;
            $bp = $_POST["p"]; $bm =$_POST["m"] ; $bs =$_POST["s"] ; $bt =$bp+$bm+$bs ;
            if($stmt->execute()){
                header("location: index.php");
                exit();
            } 
            else{
                echo "Error Inserting into User table";
                }
          }
       $stmt->close();
}  
if($_POST['option']=='update')
  {
    require_once 'conn.php';
    $nameerr= "";
    $name = trim($_POST["nn"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           $nameerr = "Error"; 
        }
        if(empty($nameerr)){
          $stmt = $conn->prepare("UPDATE USER SET name=?,P=?,M=?,S=?,Total=? where name=?");
           $stmt->bind_param("siiiis", $name,$p,$m,$s,$t,$name);
           $p=$_POST['p'];
           $m=$_POST['m'];
           $s=$_POST['s'];
           $t=$p+$m+$s;
          if($stmt->execute())
          {
        header("location: index.php");
                exit();
              } else {
            echo "Error updating record: " . $conn->error;
          }
           
             
          }
        $stmt->close();
        
} 
// if($_POST['option']=='delete')
//   {
//     require_once 'conn.php';
//     $nameerr= "";
//     $name = trim($_POST["nn"]);
//           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//            $nameerr = "Error"; 
//         }
//         if(empty($nameerr)){
//         $sql = "DELETE  from user where name=?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("s", $bname);
//             $bname =$name ;
//             if($stmt->execute()){
//                 header("location: index.php");
//                 exit();
//             } 
//             else{
//                 echo "Error Deleting  User table";
//                 }
//           }
//         $stmt->close();
// } 
?>