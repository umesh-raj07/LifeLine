<?php 
session_start();
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
$OName =$_POST['OName'];
$Available = $_POST['Available'];
$Name = $_POST['Name'];
$sql="INSERT INTO `dealer` (`OName`, `Available`, `Name`) VALUES ('$OName', $Available, '$Name');";

if ($conn->query($sql) == true){
    // echo "Success! Your entry has been submitted successfully"
;
} else {
  echo "ERROR: $sql <br> $conn->error";
}
}
?>

        <?php 
          $var1 = "SELECT * FROM `hospital`";
          $result = mysqli_query($conn, $var1);
           $sno = 0;
          while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
             $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row[0] . "</td>
            <td>". $row[1] . "</td>
            
            <td>". $row[2] . "</td>
            
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div> -->
  

<?php

if($Name=="KAMLA NEHRU MEMORIAL HOSPITAL"){
 $sql = "UPDATE hospital INNER JOIN dealer ON hospital.Name = dealer.Name SET hospital.Need = hospital.Need - $Available WHERE dealer.Name = 'KAMLA NEHRU MEMORIAL HOSPITAL'";
 mysqli_query($conn, $sql);
}
if($Name=="SWAROOP RANI NEHRU HOSPITAL"){
 $sql = "UPDATE hospital INNER JOIN dealer ON hospital.Name = dealer.Name SET hospital.Need = hospital.Need - $Available WHERE dealer.Name = 'SWAROOP RANI NEHRU HOSPITAL'";
  mysqli_query($conn, $sql);
}
if($Name=="DUFFERIN HOSPITAL"){
 $sql = "UPDATE hospital INNER JOIN dealer ON hospital.Name = dealer.Name SET hospital.Need = hospital.Need - $Available WHERE dealer.Name = 'DUFFERIN HOSPITAL'";
  mysqli_query($conn, $sql);
}
if($Name=="MOTILAL NEHRU HOSPITAL"){
 $sql = "UPDATE hospital INNER JOIN dealer ON hospital.Name = dealer.Name SET hospital.Need = hospital.Need - $Available WHERE dealer.Name = 'MOTILAL NEHRU HOSPITAL'";
  mysqli_query($conn, $sql);
}
if($Name=="NAZRETH HOSPITAL"){
 $sql = "UPDATE hospital INNER JOIN dealer ON hospital.Name = dealer.Name SET hospital.Need = hospital.Need - $Available WHERE dealer.Name = 'NAZRETH HOSPITAL'";
  mysqli_query($conn, $sql);
}
  ?>    
<div class="container my-4">
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Need</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    echo "CURRENT REQUIREMENTS OF HOSPITALS";
    echo "<br>";
    echo "<br>";
  
      $var1 = "SELECT * FROM `hospital`";
      $result = mysqli_query($conn, $var1);
       $sno = 0;
      while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
         $sno = $sno + 1;
         
        echo "<tr>
        <th scope='row'>". $sno . "</th>
        <td>". $row[0] . "</td>
        <td>". $row[1] . "</td>
        <td>". $row[2] . "</td>
        </tr>";
    } 
      ?>
</tbody>
</table>
</div>

<?php
$var = "SELECT * FROM hospital";      
$result = mysqli_query($conn,$var);
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){


if($row[0]==$Name){
  
if($row[1] >0)
  {
    $to_email = "muskanpatel272002@gmail.com, nikki.shiv2402@gmail.com,  shahikaju73@gmail.com, abc@gmail.com, xy@gmail.com, rst@gmail.com, pq@gmail.com";
    $subject = "REQUIREMENT!!!!";
     $body = "Requirement of ".$row[1]." oxygen cylinder in ".$row[0];
    $headers = "From: lifelinewebsite03@gmail.com";
    if (mail($to_email, $subject, $body, $headers)) {
      // echo "Email successfully sent to $to_email...";
   } else {
       echo "Email sending failed...";}
} 
else if($row[1]==0){
  $to_email = "muskanpatel272002@gmail.com, nikki.shiv2402@gmail.com,  shahikaju73@gmail.com, abc@gmail.com, xy@gmail.com, rst@gmail.com, pq@gmail.com";
    $subject = "REQUIREMENT COMPLETED :)";
     $body = "Requirement of  oxygen cylinder in ".$row[0]." is completed :)";
    $headers = "From: lifelinewebsite03@gmail.com";
    if (mail($to_email, $subject, $body, $headers)) {
      // echo "Email successfully sent to $to_email...";
   } else {
       echo "Email sending failed...";}
}  
}
}
mysqli_close($conn);
?>