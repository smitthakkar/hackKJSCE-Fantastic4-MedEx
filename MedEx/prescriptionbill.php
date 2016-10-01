<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="MedEx";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    
	echo "Error";
} 
$pid="0";
$bid="1";

$sql="SELECT med_name from prescription where PID='$pid' order by med_name asc";
$sql2="SELECT med_name,cost,tcost from bill where PID='$pid' order by med_name asc";

	$result = $conn->query($sql);$result2 = $conn->query($sql2);
   echo "<table>";
   echo "<tr><td>Medicine</td><td>Cost</td><td>Dose cost</td></tr>";
	if ($result->num_rows > 0 && $result2->num_rows > 0) {
		// output data of each row
		$flag=0;
		while(($row = $result->fetch_assoc()) && ($row2 = $result2->fetch_assoc())) {
			//echo $row["med_name"]." n".$row2["med_name"];
			if($row["med_name"]==$row2["med_name"])
			echo  "<tr><td>".$row2["med_name"]. "</td> <td>" . $row2["cost"]. "</td><td>".$row2["tcost"]."</td></tr>";
		    
			else {
				echo  "<tr style='color:red'><td>".$row2["med_name"]. "</td><td>" . $row2["cost"]. "</td><td>".$row2["tcost"]."</td></tr>";
		    
				$flag=1;
			}
		}
	} else {
		echo "0 results";
	}
	echo "</table>";
	if($flag==0)echo '<br>Correct';
	else echo '<br>mismatch';


?>