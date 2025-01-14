<?php
   if(!session_start()){
    session_start();
  }
   if (! isset($_SESSION['name'])) {
      if (isset($_POST['username'])) {
         $username = $_POST['username'];
         $pswd = $_POST['pswd'];
         $con=mysqli_connect("localhost","root","","uas_web");
         $query = "SELECT name,username FROM users WHERE username='$username' AND pswd='$pswd'";
		 $result = mysqli_query($con, $query) or die(mysqli_error($con));
		 $rowcount=mysqli_num_rows($result);
         $row=mysqli_fetch_array($result,MYSQLI_BOTH);
		 if ($rowcount == 1) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
			include "display-data.php";
		 }else{
			 echo "user atau password salah, <a href>silahkan ulangi login lagi... !</a>";
		 }
         } else {
            include "login-form.html";
			exit;
         }

      } else {
         $name = $_SESSION['name'];
		 include "display-data.php";
      }
?>
