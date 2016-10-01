<!-- message chat -->
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
$src="John";
$dest="Sam";
$sql="";
if(isset($_POST['usermessage'])){
	$mess=$_POST['usermessage'];//echo $mess;
	$sql = "INSERT INTO message (src, dest, Message)
VALUES ('$src', '$dest', '$mess')";
   
}
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
}
//$conn->close();

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
    <div id="info">
	<?php
	$sql = "SELECT dest,src,Message,Timestamp FROM message where src='$src' AND dest='$dest' order by Timestamp asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["dest"]. ":" . $row["Message"]. "   ".$row["Timestamp"]."<br>";
    }
} else {
    echo "0 results";
}
	
	?>
	</div>
	<form class="login_form" method="POST" action="chat.php">
	<div>Message: <input type="text" name="usermessage" />
	<input type="submit" value="Send" name="Send" /></div>
	</form>
     
</body>

</html>
