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
      <style>

      </style>

</head>
<body>
<!-- Top Nav -->
			<div class="row">

			<nav>
				<div class="nav-wrapper">
				  <a href="#!" class="brand-logo center">Mr.Ramesh</a>
				  <ul class="left hide-on-med-and-down">
					<li><a href="badges.html">Back</a></li>
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
	    <li class="tab col s3"><a class="active" href="#doctor">Doctors</a></li>
        <li class="tab col s3"><a  href="#chemist">Chemist</a></li>
              </ul>

    <div id="chemist" class="col m10">

						<ul class="collection" id="Chemist">
							<li class="collection-item avatar perm_identity" id="chem1" >
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Bharthi Medical</span>
							  <p>Delivery status<br>
								 <align="right">Timestamp: 00:05
							  </p>
							</li>
							<li class="collection-item avatar" id="chem2">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Global Medical</span>
							  <p>Waiting confirmation for prescreption from Dr.Khanna<br>
								 <align="right">Timestamp: 12:05
							  </p>
							</li>
							<li class="collection-item avatar" id="chem3">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Prime Medical</span>
							  <p>Delay in delivery <br>
								 <align="right">Timestamp: 13:27
							  </p>
							</li>
						</ul>
	 </div>
	 <div id="div3"></div>
	 <div id="div4"></div>
	 <div id="div5"></div>
    <div id="doctor" class="col m10">
	<ul class="collection" id="Pat">
							<li class="collection-item avatar"><!-- perm_identity-->
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Doc.Khanna</span>
							  <p>Avoid fried food <br>
								 Timestamp: 00:05
							  </p>
							</li>
							<li class="collection-item avatar">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Doc.Sunil</span>
							  <p>Heavy Diabetic medication from Doc.Kaur, eat every hour or so. <br>
								 Timestamp: 12:03
							  </p>
							</li>
							<li class="collection-item avatar">
							  <img src="images/yuna.jpg" alt="" class="circle">
							  <span class="title">Sunny</span>
							  <p>Visit me once the prescribed medicines are over<br>
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
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue" onclick="showpres()"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
<div title="pres" style="display:none" id="pres">
	<?php
	  $db_name="medex";
	$username="root";
	$password="";
	$host="localhost";
	$tb_name="Prescription";
	mysql_connect($host,$username,$password);
	mysql_select_db($db_name);

	$result=mysql_query("SELECT * FROM Prescription");
	echo "<table>
	<tr>
	<td>Medicine Name</td>
	<td>Number of Days</td>
	<td>Number of Times in a day</td>
	<td>Time of the Day</td>
	</tr> ";
	while($row = mysql_fetch_array($result)){
		echo "<tr>";
	echo "<td>". $row['med_name']." ";</td>
	echo "<td>" .$row['days']." ";</td>
	echo "<td>" .$row['times_day']." ";</td>
	echo "<td>". $row['time_of_day']." ";</td>
	</tr>
	//echo "<br>";
	}
	</table>
	?>
	<script>
	function showpres(){
		var pres1 = document.getElementById("pres");
		pres1.style.display = pres1.style.display === "none" ? "block": "none";
	}
	</script>
</div>
</body>


</html>
