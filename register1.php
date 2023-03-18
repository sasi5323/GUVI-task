<?php
if(isset($_POST['submit']))
{
  $conn = new mysqli("localhost", "root", '', "registra");
  $reg_name=$_REQUEST['reg_name'];
  $username=$_REQUEST['username'];
  $email=$_REQUEST['email'];
  $phone=$_REQUEST['phone'];
  $reg_password=$_REQUEST['reg_password'];
  $confirm=$_REQUEST['confirm'];

}
 $conn=mysqli_connect('localhost','root','','registra');
 $sql ="INSERT INTO registra (nameK,username,email,phone,passwordKP,confirm) VALUES ('$reg_name', '$username', '$email', '$phone', '$reg_password', '$confirm') WHERE email PRIMARY";

  $rs = mysqli_query($conn, $sql);
  if($rs)
  {
  echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>