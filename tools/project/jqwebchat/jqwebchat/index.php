<?php
include "scripts/database.php";
session_start();
if(!isset( $_SESSION['bms_chat_user'] )){
   header("Location:login.php");
}
?>
<html>
<head><title>JQuery BMS Chat System</title><link rel="stylesheet" type="text/css" href="styles.css"></head>

<body onload="scrollbawah();">
   <script>
      function scrollbawah(){
      var objDiv = document.getElementById("centerbox");
      objDiv.scrollTop = objDiv.scrollHeight;   
      }
   </script>
<div id="wrapper">
   <div id="timecontainer"><?php include "scripts/datetime.php";?></div>
   <div id="navbar"><?php echo "You logged in as " . $_SESSION['bms_chat_user'];?>&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></div>
   <div id="centerbox">
      <?php include "scripts/chat_list.php";?>
   </div>
   <div id="chat_userlist"></div>
   <div style="clear:both;"></div>


<!--form-chat-->
   <div id="form">
      <form method="post" action="" id="chatform">
         <input type="hidden" id="chatuser" name="chatuser" value="<?php echo $_SESSION['bms_chat_user'];?>">
         <input type="text" name="chat" id="chat">
         <input type="submit" name="submit" id="submit_chat" value="Chat">
      </form>
   </div>
<!--form-chat-->

</div>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="chat.js"></script>

</body>

</html>
