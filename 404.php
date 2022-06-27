<?php
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Bejiguy -->404 Error</title>
 <meta http-equiv="Content-Type" content="text/html"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset='UTF-8'/>
 <link rel="stylesheet" type="text/css" href="css/chibi.css">
 <link rel="shortcut icon" href="guguy.jpg">
 <style type="text/css">
   * {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: sans-serif; 
  font-size: 1rem;
  line-height: 1.5;
  color: #333;
  overflow-x: hidden;
  color: blue;
  background-image: url(https://bejiguy.000webhostapp.com/source/miku.mp4);
}

video{
    height: 50%;
}

.head {
  height: 100vh;
  display: flex;
  align-items: center;
}
.wrapper {
  max-width: 960px;
  margin: auto;
  text-align: center;
}
.box {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}
.box video {
  min-width: 100%;
  min-height: 100%;
}
.header-overlay {
  height: 100vh;
  width: 100vw;
  position: absolute;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 45, 1);
  background: rgba(0, 0, 45, 1);
  z-index: 1;
  opacity: 0.85;
}
.content {
  z-index: 99;
  width: 400px;
  margin: auto;
}
.content h1{
  font-size: 50px;
}
a {
  border: 2px solid blue;
  color: #fff;
  font-size: 1.2rem;
  padding: 10px;
  text-decoration: none;
  cursor: grab;
}
 </style>
</head>
<body onmousedown="return false;">
 <header class="wrapper head">
  <div class="box">
    <video autoplay loop src="https://bejiguy.000webhostapp.com/source/miku.mp4" />
  </div>
  <div class="content">
    <h1>404 NOT FOUND</h1>
    <a title="Hello...!" href="https://bejiguy.000webhostapp.com/home.php">Home</a>
    <br>
    <p>
      <b>Hint : Halaman website yang Anda minta tidak tersedia di website ini.</b>
    </p>
  </div>
</header>
<footer id="ftr" style="position:fixed; left:0px; right:0px; bottom:3px; background:transparent); text-align:center;">
  <font face="Courier New" size="3">
    <center>
      <font color="#00FFFF">Sorry : </font>
      <marquee direction="up" scrollamount="2" height="15" width="250" onmouseover="this.stop()" onmouseout="this.start()">
        <font color="#1E90FF">
          <center>
            <br><br>error
            <br><br>fatal error
            <br><br>Really fatal error
          </center>
        </font>
      </marquee>
      <!-- /FOOTER -->
      <audio loop hidden="hidden" autoplay controls src="https://api.soundcloud.com/tracks/9913985/stream?client_id=NmW1FlPaiL94ueEu7oziOWjYEzZzQDcK">
      </audio>
    </font>
  </footer>
  <script type="text/javascript" href="js/inti.js"/>
</body>
</html>