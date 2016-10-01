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
$src="Sam";
$dest="John";
$sql="";
if(isset($_GET['usermessage'])){
	$mess=$_GET['usermessage'];//echo $mess;
	$sql = "INSERT INTO message (src, dest, Message)
VALUES ('$src', '$dest', '$mess')";
   
}
if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
}
?>
<script>var objDiv = document.getElementById("chattext");
objDiv.scrollTop = objDiv.scrollHeight;</script>
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
	        <script type="text/javascript" src="js/scroll.js"></script>

  <style>
  #chattext {
    height:80%;
    overflow: scroll;
}
  </style>
</head>
<body>

   <div class="row">
   <div class="col m1"></div>
   <div class="col m10">
   <div class="col m3">
   <ul class="collection">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
    </li>
  </ul>
  </div>
   <div class="col m9">
     <div id="chattext">
	 <?php
	$sql = "SELECT dest,src,Message,Timestamp FROM message where src='$src' OR src='$dest' order by Timestamp asc";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		echo "<p align='right'>";
		while($row = $result->fetch_assoc()) {
			if($row["src"]==$src)
			echo "<p align='right'>";
		    else echo "<p align='left'>";
			echo  $row["src"]. ":<br>" . $row["Message"]. "   ".$row["Timestamp"];
			echo "</p>";
		}
	} else {
		echo "0 results";
	}
	?>	
	 </div>
     <form class="login_form" method="GET" action="currentchat.php">
	<div>Message: <input type="text" name="usermessage" />
	<input type="submit" value="Send" name="Send" /></div>
	</form>
   </div>
   </div>
   </div>
  
			
    
        





						
			
			
</body>


</html>