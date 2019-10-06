<html>
<head>
<title>Take an appointment</title>
</head>
<body>
<!--<select name="Department" id="dep" onchange="showDetails()">
<option value="timepass">-->
<form action="second.php" method="post">
<input type="hidden" name="Department" value="<? echo $conceptName ?>" />
<select name="Department" id="dep">
<?php
function droplist(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HealthCare";
$port = 3306;
$conn = new mysqli($servername, $username, $password, $dbname, $port);
$sql="SELECT distinct department_name from department";
$result=$conn->query($sql);

	while($row = $result->fetch_assoc()) {
echo "<option value=\"" .$row['department_name']. "\">".$row['department_name']."</option>";
echo "var conceptName = $('#dep').find(\":selected\").text()";
}
}
droplist();
?>
</select>
<br>
<input type="submit" value="Search" class="profile_but">
</form>
<!-- </select> -->
</body>
</html>
