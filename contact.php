<?php 
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$sug = $_POST['sug'];

 $sql = "INSERT INTO `contact` (`Name`, `Email`, `Phone`, `sug`) VALUES ('$Name', '$Email', '$Phone', '$sug')";

//$sql="INSERT INTO `contact`(`Hname`, `Req`, `Email`) VALUES ('$Hname',$Req,'$Email')";
if ($conn->query($sql) == true){
    echo "Success! Your entry has been submitted successfully"
;
} else {
  echo "ERROR: $sql <br> $conn->error";
}
}
mysqli_close($conn);

?>
