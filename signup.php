<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HealthCare";
$port="3306";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user_id = $name = $address = $gender = $age ="";

if(isset($_POST["user_id"])){

    $user_id = $_POST["user_id"];
}
echo "$user_id";

if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["address"])){
    $address = $_POST["address"];
}
//$Username = $_POST["Username"];
//$Password = $_POST["Password"];
if(isset($_POST["gender"])){
    $gender = $_POST["gender"];
}

//$Contact = $_POST["Contact"];
if(isset($_POST["age"])){
    $age = $_POST["age"];
}


$sql = "INSERT INTO users VALUES ('$user_id','$name','$address','$gender','$age')";
if ($conn->query($sql) === TRUE) {
    echo "alert(\"Sign Up Successful\");
    echo '<a href =\"landing.html\">Go to the Main Page</a>.' 
} else {
	echo "Error: " . $conn->error;
}
}
?>