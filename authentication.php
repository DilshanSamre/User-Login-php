<?php



include('connection.php');

if(isset($_POST['username'])){
    $user=$_POST['username'];
}
else{
    $user="Name not set in the Method";

}

if(isset($_POST['password'])){

    $pass=$_POST['password'];
}
else{

    $pass="Password not set in the method";

}

$sql = "select *from tblusers where Username = '$user' and Password = '$pass'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    $welcome="Welcome";
    $first=$row['firstname'];
    $url = $row['imageurl'];
    $full =  $welcome." ".$first." ".$row['lastname']."!";
    echo("<h1><center>$full </center> </h1>");
    
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}    

?>

<!DOCTYPE html>
<html>
<head>
<style>
img{
    display: block;
    width:200px;
    height:300px;
    margin-left:600px;

    
}
</style>
</head>
<body>
    <img src="<?php echo("<center> $url </center>"); ?>">
</body>
</html>

