<?php
function display($dept)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HealthCare";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT doctor.dept_id,doctor.Doctor_id,department.department_name,doctor.Doctor_name,doctor.degree,doctor.AvailStartTime, doctor.AvailEndTime from doctor,department where doctor.dept_id=department.department_id and department.department_name= $dept";
$result = $conn -> query ($sql);
//var_dump($result);		
try{
	while($row=$result->fetch_assoc()) {
$name=$row['Doctor_name'];
$degree=$row['degree'];
$start_time=$row['AvailStartTime'];
$end_time=$row['AvailEndTime'];
$rating=$row['rating'];
echo "Name: ".$name."\nDegree: ".$degree."\nTiming: ".$start_time." to ".$end_time."\nRating: ".$rating;
echo "<button type=\"button\" name=\"app\" id=\"app1\">Take appointment</button>";
echo "\n\n\n";
}
} catch(Exception $e){
     echo $e->getMessage();
 }
}

$dep=$_POST["Department"];
display($dep);
?>