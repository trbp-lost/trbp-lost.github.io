<?php
include "scripts/database.php";
if( isset( $_POST['submit'] ) ){
   $username   = $_POST['username'];
   $email      = $_POST['email'];
   $sql  = "INSERT INTO `user` (`username`,`email`) VALUES ('$username','$email')";
   if(!mysqli_query($koneksi, $sql )){
      header( "Location:login.php?err=1" );
   }else{
      session_start();
      $_SESSION['bms_chat_user']=$username;
      $_SESSION['bms_chat_pw']=$ $email;
      header( "Location:index.php" );
   }
   
}
?>
<html>
<head><title>JQuery BMS Chat System</title><link rel="stylesheet" type="text/css" href="styles.css"></head>


<div id="wrapper">
<div id="navbar"></div>
<div id="centerbox">


   <form method="POST" action="" id="form-login">
      <input type="text" id="username" name="username" value="username" onclick="this.value='';"><br />
      <input type="text" name="email" id="email" value="email" onclick="this.value='';"><br />
      <input type="submit" name="submit" id="submit_login" value="Login">
   </form>
<?php if(isset($_GET['err'])){
echo "This user is already taken";
}?>

</div>
<div style="clear:both;"></div>



</div>

</div>

</body>

</html>
