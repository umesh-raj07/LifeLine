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
$Name = $_POST['Name'];
$Need = $_POST['Need'];
$Email = $_POST['Email'];
$_SESSION['Need']=$Need;





 if($Name=="KAMLA NEHRU MEMORIAL HOSPITAL"){
$c = "SELECT Name FROM hospital WHERE Name = 'KAMLA NEHRU MEMORIAL HOSPITAL'";
 $result = mysqli_query($conn,$c);
if(mysqli_num_rows($result) == 0) {
  $ins = "INSERT INTO `hospital`(`Name`, `Need`, `Email`) VALUES ('$Name',$Need,'$Email')";
  if ($conn->query($ins) == true){
    echo "";
  }
else {
  echo "ERROR: $ins <br> $conn->error";
}
}
 

else {
  $sql = "UPDATE hospital SET hospital.Need = hospital.Need + $Need WHERE Name = 'KAMLA NEHRU MEMORIAL HOSPITAL'";
  mysqli_query($conn,$sql);
    
  
 }
}

if($Name=="SWAROOP RANI NEHRU HOSPITAL"){
 $d = "SELECT Name FROM hospital WHERE Name = 'SWAROOP RANI NEHRU HOSPITAL'";
 $result2 = mysqli_query($conn,$d);
if(mysqli_num_rows($result2) == 0) {
  $ins2 = "INSERT INTO `hospital`(`Name`, `Need`, `Email`) VALUES ('$Name',$Need,'$Email')";
  if ($conn->query($ins2) == true){
    echo "";

} else {
  echo "ERROR: $ins2 <br> $conn->error";
}
}

 else {
  $sql2 = "UPDATE hospital SET hospital.Need = hospital.Need + $Need WHERE Name = 'SWAROOP RANI NEHRU HOSPITAL'";
  mysqli_query($conn,$sql2);
    
}
}
if($Name=="DUFFERIN HOSPITAL"){
 $d = "SELECT Name FROM hospital WHERE Name = 'DUFFERIN HOSPITAL'";
 $result2 = mysqli_query($conn,$d);
if(mysqli_num_rows($result2) == 0) {
  $ins2 = "INSERT INTO `hospital`(`Name`, `Need`, `Email`) VALUES ('$Name',$Need,'$Email')";
  if ($conn->query($ins2) == true){
    echo "";

} else {
  echo "ERROR: $ins2 <br> $conn->error";
}
}

 else {
  $sql2 = "UPDATE hospital SET hospital.Need = hospital.Need + $Need WHERE Name = 'DUFFERIN HOSPITAL'";
  mysqli_query($conn,$sql2);
}
}
if($Name=="MOTILAL NEHRU HOSPITAL"){
  $d = "SELECT Name FROM hospital WHERE Name = 'MOTILAL NEHRU HOSPITAL'";
  $result2 = mysqli_query($conn,$d);
 if(mysqli_num_rows($result2) == 0) {
   $ins2 = "INSERT INTO `hospital`(`Name`, `Need`, `Email`) VALUES ('$Name',$Need,'$Email')";
   if ($conn->query($ins2) == true){
     echo "";
 
 } else {
   echo "ERROR: $ins2 <br> $conn->error";
 }
 }
 
  else {
   $sql2 = "UPDATE hospital SET hospital.Need = hospital.Need + $Need WHERE Name = 'MOTILAL NEHRU HOSPITAL'";
   mysqli_query($conn,$sql2);
 }
 }

if($Name=="NAZRETH HOSPITAL"){
 $d = "SELECT Name FROM hospital WHERE Name = 'NAZRETH HOSPITAL'";
 $result2 = mysqli_query($conn,$d);
if(mysqli_num_rows($result2) == 0) {
  $ins2 = "INSERT INTO `hospital`(`Name`, `Need`, `Email`) VALUES ('$Name',$Need,'$Email')";
  if ($conn->query($ins2) == true){
    echo "";

} else {
  echo "ERROR: $ins2 <br> $conn->error";
}
}

 else {
  $sql2 = "UPDATE hospital SET hospital.Need = hospital.Need + $Need WHERE Name = 'NAZRETH HOSPITAL'";
  mysqli_query($conn,$sql2);
}
}
}




// code for email

if($Name=="KAMLA NEHRU MEMORIAL HOSPITAL"){
  
  $to_email = "nikki.shiv2402@gmail.com";
  $subject = "REQUIREMENT!!!!";
   $body = "Requirement of ".$Need." oxygen cylinder in ".$Name;
    $headers = "From: lifelinewebsite03@gmail.com";
    if (mail($to_email, $subject, $body, $headers)) {
          echo "Success! Your entry has been submitted successfully";
       } else {
           echo "Email sending failed...";}

  }
  if($Name=="SWAROOP RANI NEHRU HOSPITAL"){
  
    $to_email = "nikki.shiv2402@gmail.com";
    $subject = "REQUIREMENT!!!!";
     $body = "Requirement of ".$Need." oxygen cylinder in ".$Name;
      $headers = "From: lifelinewebsite03@gmail.com";
      if (mail($to_email, $subject, $body, $headers)) {
            echo "Success! Your entry has been submitted successfully";
         } else {
             echo "Email sending failed...";}
  
    }
  if($Name=="DUFFERIN HOSPITAL"){
  
    $to_email = "nikki.shiv2402@gmail.com";
    $subject = "REQUIREMENT!!!!";
     $body = "Requirement of ".$Need." oxygen cylinder in ".$Name;
      $headers = "From: lifelinewebsite03@gmail.com";
      if (mail($to_email, $subject, $body, $headers)) {
            echo "Success! Your entry has been submitted successfully";
         } else {
             echo "Email sending failed...";}
  
    }
  if($Name =="MOTILAL NEHRU HOSPITAL"){
  
    $to_email = "mail@gmail.com";
    $subject = "REQUIREMENT!!!!";
     $body = "Requirement of ".$Need." oxygen cylinder in ".$Name;
      $headers = "From: lifelinewebsite03@gmail.com";
      if (mail($to_email, $subject, $body, $headers)) {
            echo "Success! Your entry has been submitted successfully";
         } else {
             echo "Email sending failed...";}
  
    }
  if($Name=="NAZRETH HOSPITAL"){
  
    $to_email = "mail1@gmail.com";
    $subject = "REQUIREMENT!!!!";
     $body = "Requirement of ".$Need." oxygen cylinder in ".$Name;
      $headers = "From: lifelinewebsite03@gmail.com";
      if (mail($to_email, $subject, $body, $headers)) {
            echo "Success! Your entry has been submitted successfully";
         } else {
             echo "Email sending failed...";}
  
    }
  
mysqli_close($conn);
?>