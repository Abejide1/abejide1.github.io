




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arcola inn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
  
if(isset($_post['submit'])){
	
if(!empty($_post['fname']) && !empty($_post['lname'])){
	$fname = $_post['fname'];
	$lname = $_post['lname'];
	
	$query = "insert into guest(first_name,last_name) VALUES('$fname' , '$lname')";
	
	$run = mysqli_query($conn,$querry) or die(mysqli_error()); 
	
	if($run){
		echo "form submitted successfully" ;
		
	}
	else{
		echo "form not submitted";
	}
}
else {
	echo "all fields required" ;
}

}


/*else echo " all feilds required";

$fname = $_POST['fname'];
echo "First Name:       "; 
echo $fname; 
echo "       "; 
echo "<br>";
$lname = $_POST['lname'];
echo "Last Name:       "; 
echo $lname; 
echo "    "; 
echo "<br>";
$email = $_POST['email'];
echo "Email:       "; 
echo $email;
echo "    ";
echo "<br>";
$name = $_POST['checkI'];
echo "Check-In Date:       "; 
echo $name;
echo "    ";
echo "<br>";
$name = $_POST['checkO'];
echo "Check-Out Date:       "; 
echo $name;
echo "    ";
echo "<br>"; 
$sql = "SELECT * FROM booking and guest";
$sql2 = "INSERT INTO `booking and guest` (first_name) VALUES ('fname')";
$sql3=$name.") ";
$query = "insert into `guest` (`last_name`,`first_name`) VALUES (`$fname`,`$lname`)";




$query = "INSERT INTO `guest` (`first_name`, `last_name``) VALUES
      (NULL, '" . $lname . "', '" . $fname . "');";
if ($insert = mysql_query($query, $connect)) {
    // Success!
} else {
    echo 'MySQL Error: ' . mysql_error($connect); // this will tell you whats wrong
}
mysql_close($connect);









//mysqli_query($dbconn, $query);
//$sql4=$sql2.$sql3;
//echo $sql3;

//$result = 
//$conn->query($sql4);
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . "<br>";
  }
} else {
  echo "0 results";
}
*/
//$conn->close();
?>