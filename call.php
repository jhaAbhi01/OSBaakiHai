<!-- <?php
				include "config.php";
				session_start();				
				$sql = "Select h.hospital_name from hospital as h, wards as w where w.hnumber = h.hospital_id and w.ward_availability = 1";
				$result = $conn -> query($sql);
				echo '<select name="hospital_name">';
					while($row = mysql_fetch_array(result)){
						echo "<option value= ". $row['hospital_name'] .">" . $row['hospital_name'] ."</option>"; 
					}
				echo '</select>';
			?> -->


			<?php
			session_start();
			include "config.php";
			if(isset($_GET['submit'])){
				$ambulance_no = $driver_name = $driver_contact = "";
				// $name = $_GET['submit'];
				$sql = "select * from ambulance where availability = 1";
				$result = mysqli_query($sql);
				$row = mysqli_fetch_assoc($result);	
				echo "<br> Ambulance No.: ". $row["ambulance_no"]. "<br> Driver Name: ". $row["driver_name"]. "<br> Contact no: ". $row["driver_contact"]; 
			}
			else{
				echo "0 results";
			}
		?>