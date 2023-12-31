<?php
$Name=$_REQUEST['Name'];
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];

if(isset($_POST['submit']))
{
  $host="localhost";
  $user="root";
  $Password="";
  $db="login form";

 @$conn=mysqli_connect($host,$name,$password,$db);
 $insert="insert into Login values('$Name','$Email','$Password')";

 $mysqli_query($conn,$insert);
 if(conn){
    echo("<h1 style='color:green;'>Your Registration is Done!</h1>");
 }
 else{
    echo("<h1 style='color:red;'>Your Registration is Failed!</h1>");
 }

}



// $host ="localhost";
// $name="root";
// $password="";

// $dbname="login form";
// $connect_database= mysqli_connect($host,$name,$password,$dbname);
// if(mysqli_connect_errno()){
//     echo"not connected";
//     exit();
// }
// else{
//     echo"connected";
// }

// ?>
