<!-- chemist.html -->
<!-- doctor components -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    
	echo "Error";
} 


?>
<html>
<head>
	
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  
</head>
<body>
<!-- Top Nav -->
			<div class="row">
		 
			<nav>
				<div class="nav-wrapper">
				  <a href="#!" class="brand-logo center">Mr.Ramesh</a>
				  <ul class="left hide-on-med-and-down">
					<li><a href="index.html">Back</a></li>
					<li class="active"><a href="collapsible.html"><center> <img class=" circle responsive-img" src="img/Profile.JPG" height="100px" width="100px"></center></a></li>
				  </ul>
				</div>
			  </nav>
			</div>	
			
<!-- Chat type -->
  
    <div class="row">
	<div class="col m1"></div>
    <div class="col m10 card" >
      <ul class="tabs">
	    <li class="tab col s3"><a class="active" href="#patient">Patients</a></li>
        <li class="tab col s3"><a  href="#doctor">Doctor</a></li>
              </ul>
   
    <div id="doctor" class="col m10">
				
						<ul class="collection" id="Chemist">
							<li class="collection-item avatar" id="chem1" >
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Doc.Khanna</span>
							  <p>Rosavel will do just fine.<br>
								 <align="right">Timestamp: 00:05
							  </p>
							</li>
							<li class="collection-item avatar" id="chem2">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Doc.Monica</span>
							  <p>Have to look up for another alternative.Need time.<br>
								 <align="right">Timestamp: 12:05
							  </p>
							</li>
							
						</ul>
	 </div>
	 <div id="div3"></div>
	 <div id="div4"></div>
	 <div id="div5"></div>
    <div id="patient" class="col m10">
	<ul class="collection" id="Pat">
							<li class="collection-item avatar">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Mr.Rajesh</span>
							  <p>Change in delivery address <br>
								 Timestamp: 00:05
							  </p>
							</li>
							<li class="collection-item avatar">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Ms.Sucheta</span>
							  <p>Prescription by Dr.Khanna. Need medicines tomorrow morning. <br>
								 Timestamp: 12:03
							  </p>
							</li>
							<li class="collection-item avatar">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Mr.Ram</span>
							  <p>Thank you.Those meds really saved my life.<br>
								 Timestamp: 09:03
							  </p>
							</li>
						</ul>
	</div> </div>
	<div class="col m1"></div>
  </div>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    
    <ul>
      <li><a class="btn-floating red" onclick="showpress()" ><i class="material-icons">insert_chart</i></a></li>
     
	 <li><a class="btn-floating yellow darken-1"  href="framelist.php" ><i class="material-icons">format_quote</i></a></li>
     
      	<li><a class="btn-floating green" href="prescription.php"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue" onclick="showpres()"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
  
  <div title="pres" style="display:none" id="pres">
	<?php
	  $db_name="medex";
	$username="root";
	$password="";
	$host="localhost";
	$tb_name="prescription";
	mysql_connect($host,$username,$password);
	mysql_select_db($db_name);
	$result=mysql_query("SELECT * FROM prescription");
	echo "<table><tr><td>Medicine Name</td><td>Number of Days</td><td>Number of Times in a day</td><td>Time of the Day</td></tr> ";
	echo "<br>";
	while($row = mysql_fetch_array($result)){
		echo "<tr>";
	echo "<td>". $row['med_name']." </td><td>" .$row['days']." </td><td>" .$row['times_day']."</td><td>". $row['time_of_day']." </td></tr>";
	//echo "<br>";
	}
	echo "</table>"
	?>
	<script>
	function showpres(){
		var pres1 = document.getElementById("pres");
		pres1.style.display = pres1.style.display === "none" ? "block": "none";
	}
	</script>
</div>
  <div title="pres" style="display:none" id="press">
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
	<script>
	function showpress(){
		var pres1 = document.getElementById("press");
		pres1.style.display = pres1.style.display === "none" ? "block": "none";
	}
	</script>
</div>
  
        





						
		
        





						
			
			
</body>


</html>