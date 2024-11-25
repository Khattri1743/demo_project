<?php include('registationform.html');

//HOSTING TO DATABASE 
$hostname ="localhost";
$username="root";
$dbpassword = "YES";
$dbname ="user_registation";

$conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
else{
    echo"Connected to database";
    mysqli_close($conn);
}

// POSTING VALUES INTO DATABASE
require 'registationform.php';

 if(isset($_POST["registerbtn"])){
    $first_name =$_POST["first_name"];
    $last_name =$_POST["last_name"];
    $gender=$_POST["gender"];
    $age=$_POST["age"];
    $phone_number=$_POST["phone_number"];
    $emailid =$_POST["emailid"];
    $create_password =$_POST["create_password"];
    $repeat_password =$_POST["repeat_password"];
    
 }
$duplicate = mysqli_query($conn, "SELECT * FROM registation WHERE email = $email");

 //CHECKING ANY DUPLICATE VALUES
if(mysqli_num_rows($duplicate)>0){
    echo
    "<script>alert('Email has already taken');</script>";
}

//QUERYRING REPEATED PASSWORD AND INSERTING VALUES
else {
    if($create_password == $repeat_password){
        $query = "INSERT INTO registation VALUES($first_name','$last_name','$gender','$age','$phone_number','$emailid','$create_password','$repeat_password')";
        mysqli_query($conn,$query);
        echo "Registation Successful";
    }
    else {
    echo "Password does not match";
    }
    }
mysqli_close($conn);
?>

