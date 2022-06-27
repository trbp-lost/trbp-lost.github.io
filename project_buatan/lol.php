<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta charset=”UTF-8”/>
  <title>Run code</title>
   <script type='text/javascript' src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
   <script type="text/javascript">
    alert('website ini mengeluarkan audio');
       var nama = prompt("Masukan nama kamu:");
      if(nama != ""){
        alert( "Welcome " + nama +" to Bejiguy");
      }
   </script>
  <script>

  var openFile = function(event) {
    var input = event.target;

    var reader = new FileReader();
    reader.onload = function(){
      var text = reader.result;
      var node = document.getElementById('editor-textarea');
      node.innerText = text;
      console.log(reader.result.substring(0, 200));
    };
    reader.readAsText(input.files[0]);
  };

  function myFunction() {
    alert('Sukses menyalin')
    var copyText = document.getElementById("editor-textarea");
    copyText.select();
    document.execCommand("copy");

    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Tersalin " + copyText.value;
  }

  function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Salin isi teks";
  }

  function refresh() {
    var textContent = document.getElementById('editor-textarea').value;
    document.getElementById('viewer').srcdoc = textContent;
  }

  function reset() {
    alert('Sukses menghapus')
    document.getElementById("editor-textarea").value = "";
    window.location.reload();
  }

  function exportTofile() {
    var textContent = document.getElementById('editor-textarea').value;
    document.getElementById('viewer').srcdoc = textContent;
    var myfile = document.getElementById('viewer').srcdoc = textContent;

    window.open('data:text/csv;charset=utf-8,' + escape(myfile));
  }

  var button = document.getElementById('b');
  button.addEventListener('click', exportTofile);
</script>
<style type="text/css">
.read{
max-height: 200px;
display: block;
margin: auto;
width: 100%;
 }

#info-teja {
  z-index: 1000;
  background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(#555));
  box-shadow:0px 0px 8px #000000, 2px 2px 20px #000000;
  -moz-box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;
  -webkit-box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;
  width:460px;
  position: fixed;
  top:75px;
  left:0;
  margin-left:-350px;
  border:1px solid #444;
  background-position:top no-repeat;
  height:35px;
  font:11px Arial;
  color:#eee;

}
#info-teja{
  -o-transition: all 1s ease-in;
  -moz-transition: all 1s ease-in;
  -webkit-transition: all 1s ease-in;
  } 
  #info-teja:hover{
    width:400px;
    opacity:1.0;
    margin-left:0;
  }
  .Tejainbox {
    border:1px solid #444;
    width:320px; 
    margin:0px 90px 10px 10px;
    background:#000;
    color:#ffffff; 
    border-radius :20px; 
    padding:5px 0;
    -moz-border-radius:20px;
    -webkit-border-radius:20px;
    -o-transition:all 2s ease-in;
    -moz-transition:all 2s ease-in;
    -webkit-transition:all 2s ease-in;
    opacity:0.2;
  }
  .Tejainbox:hover{
    opacity:1.0;
    box-shadow:1px 1px 15px #000; 
    -moz-box-shadow: 1px 1px 15px #000; 
    -webkit-box-shadow: 1px 1px 15px #000;
  }
  .Tejainbox2 {
    margin:5px 10px;
    padding:0px 8px 10px;
    color:#FFFFFF;
    overflow:hidden;
    height:370px;
  }
  .teja15 {
    border-radius:15px;
    -moz-border-radius:15px;
    -webkit-border-radius:15px;
    }.
    .Teja2 ul.bom {
      margin: 0; 
      padding: 0;
    }
    .Tejainbox2 li {
      margin-left:20px;
    }
    .Tejainbox2 li a {
      color: #FFFFF; 
      line-height: 4px;
      font-size: 11px;
      font-weight: bold; 
      text-decoration:none;
    }
    .Tejainbox2 li a:hover {
      color: red;
      text-shadow: 0 1px 1px #000;
    }
    .Tejainbox2 h2 { 
      font: 18px Droid Serif;
      font-weight:bold;
      padding:0 8px;
      color: #fffff;
      text-shadow: 0px 1px 1px #ddd;
      border-bottom: 1px solid #000000;
    }
    .Tejatouch {
      font-size:21px;
      font-weight:bold;
      font-family:Arial Narrow;
      float:right;
      -o-transition: all 0.5s ease-out;
      -moz-transition: all 0.5s ease-out;
      -webkit-transition: all 0.5s ease-out;
      text-decoration:blink;
    }
    .Tejatouch:hover{
      -o-transform: scale(2) rotate(720deg) translate(0px);
      -moz-transform: scale(2) rotate(720deg) translate(0px);
      -webkit-transform: scale(2) rotate(720deg) translate(0px);
      color: #fffff;
    }

    #editor-textarea{
      height: 50%;
      width: 44%;
      margin: 10px;
      position: absolute;
      background-color: black;
      color: white;
      right: 0%;
    }

    #viewer{
      background: white;
      border: none;
      height: 51%;
      width: 40%;
      margin: 10px;
      border: 1px solid black;
      position: absolute;
    
    }
    .button {
      display: inline-block;
      padding: 15px 25px;
      font-size: 24px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #4CAF50;
      border: none;
      border-radius: 15px;
      box-shadow: 0 9px #999;
    }

    .button:hover {
      background-color: #3e8e41;
    }

    .button:active {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
    </style>
  
  
  
  
  <link rel="shortcut icon" href="guguy.jpg">
  <link rel="stylesheet" href="css/emx_nav_left.css" type="text/css" />
  <script type="text/javascript" src="js/letak.js"></script>
  <style type="text/css">
  </style>
</head>
<body onmousemove="closesubnav(event);">
  <div class="skipLinks">skip to: 
    <a href="#content">page content</a> | 
    <a href="#pageNav">links on this page</a> | 
    <a href="#globalNav">site navigation</a> | 
    <a href="#siteInfo">footer (site information)</a> 
  </div>
  <div id="masthead">
    <h1 id="siteName">Bejiguy</h1>
    <div id="utility"> 
      <a href="sign_up.php">Sign up  </a> | 
      <a href="log_out.php">Log out </a> |  </div>
      <div id="globalNav"> 
        <img alt="" src="source/gblnav_left.gif" height="32" width="4" id="gnl" /> 
        <img alt="" src="source/glbnav_right.gif" height="32" width="4" id="gnr" />
        <div id="globalLink"> 
          <span class="style2"><a href="home.php" id="gl1" class="glink" onMouseOver="ehandler(event,menuitem1);">Home</a>
          <a href="informasi.php" id="gl2" class="glink" onMouseOver="ehandler(event,menuitem2);">Informasi</a>
          <a href="download.php" id="gl3" class="glink" onMouseOver="ehandler(event,menuitem3);">Download</a>
          <a href="contact.php" id="gl5" class="glink" onMouseOver="ehandler(event,menuitem5);">Contact </a>
          <a href="about.php" id="gl6" class="glink" onMouseOver="ehandler(event,menuitem6);">About </a>  
          <a href="rules.php" id="gl7" class="glink" onMouseOver="ehandler(event,menuitem7);">Rules </a></span>        </div>

        <form id="search" action="">
          <input name="searchFor" type="text" size="40px" />
          <button><a href="">search</a></button>
        </form>

      </div>
      <div id="subglobal1" class="subglobalNav"> 
        <a href="home.php">Home</a>
      </div>
      <div id="subglobal2" class="subglobalNav"> 
        <a href="informasi/terbaru.php">Terbaru</a> | 
        <a href="informasi/tips.php">Tips</a>
      </div>
      <div id="subglobal3" class="subglobalNav"> 
        <a href="download/game.php">Game</a> | 
        <a href="download/software.php">Software</a> | 
        <a href="download/lagu.php">Lagu</a> | 
        <a href="download/gambar.php">Gambar</a> 
      </div>
      <div id="subglobal4" class="subglobalNav"> 
	  <a href="coding.php">Coding</a>
      </div>

      <div id="subglobal5" class="subglobalNav"> 
        <a href="contact.php">Contact Me</a>
      </div>

      <div id="subglobal6" class="subglobalNav"> 
        <a href="about.php">About Me</a> 
      </div>

      <div id="subglobal7" class="subglobalNav"> 
        <a href="rules.php">Rules</a> 
      </div>
</div>
    <div class="pagecell1" id="pagecell1">
      <img alt="" src="source/tl_curve_white.gif" height="6" width="6" id="tl" /> 
      <img alt="" src="source/tr_curve_white.gif" height="6" width="6" id="tr" />
      <div id="breadCrumb"> 
        <a href="../coding.php">Coding</a> / <a href="php.php"> Html</a>
      </div>
      <div id="pageName">
        <h2>Html</h2>
        <img alt="small logo" src="https://image.flaticon.com/icons/svg/1670/1670104.svg" height="59" width="66"/> </div>
        <div id="pageNav">
          <center>  
              <script type="text/javascript" src="js/kalender.js"></script>
          </center>
          <div id="pageNav" class="pageNav">
            <div class="relatedLinks">
              <h3 class="style2" id="menu1">Menu Lainnya </h3>
              <a href="bantuan.php">Bantuan</a> 
              <a href="komplain.php">Masalah</a> 
              <a href="rules.php">Rules</a>        </div>
              <div id="advert"> 
                <img src="https://image.flaticon.com/icons/png/128/983/983790.png" alt="" width="107" height="66" />Advertisement here. </div>
          </div>
      </div>
      <div class="read" id="content">
        <table border="0">
        <h1>Real time code : HTML <br>
      <input class="button" type='file' accept='php' onchange='openFile(event);' />
      <button class="button" id="reset" onClick="reset();"> Reset</button>
      <button class="button" id="save" onClick="exportTofile();"> Save</button>
      <button class="button" onClick="myFunction()" onMouseOut="outFunc()"> Salin</button>
    </h1>
    <tr>
    <textarea id="editor-textarea" onkeyup="refresh();" placeholder="Place Code here"><!DOCTYPE php PUBLIC "http://www.w3.org/TR/xphp1/DTD/xphp1-transitional.dtd">
<php>
<head>
    <title>Bejiguy</title>
    <link rel="stylesheet" type="text/css" href="">
    <script type="text/javascript"></script>
    <style type="text/css"></style>
</head>
<body>
    <div id="Bejiguy">Bejiguy</div>
</body>
</php>
</textarea>
</tr>
<tr>
     <iframe id="viewer"></iframe>
   </tr>
     <div title="Maaf nutupin" id="info-teja">
      <span class="Tejatouch"><a style="text-decoration: none; color: white;" href="https://bejiguy.000webhostapp.com/home.php">Bejiguy</a></span>
      <div class="Tejainbox">
        <div class="Tejainbox2 teja15">
         <h2>Informasi</h2>
         <span class="style4">
          <center>
            <font color="black">.</font>
          </center>
        </span>
        <br>
        <span class="style4">
          <center>Vinotengku@gmail.com</center>
        </span> 
        <br>
        <center>087765759265</center>
      </span>
      <br>
      <span class="style4">
        <center>Bejiguy</center>
      </span>
      <br>
      <span title="HI ^_^" style="cursor: grab;" class="style4">
        <center>
          <img src="https://bejiguy.000webhostapp.com/guguy.jpg" width="50" height="50" />
        </center>
      </span>
      <br>
      <br>
      <span class="style4">
        <left>Jika tidak bisa :</left>
        <center>
          <li>script anda terlalu banyak jadi butuh waktu untuk mengolahnya</li>
          <li>berilah salah satu key pada tempat edit seperti (space)</li>
          <li>refreh page ini / tekan Reset / hapus semua isi tempat editor script</li>
        </center>
      </span>
      <br>
      <span title="^_^" style="cursor: cell;" class="style4">
        <center>
          <img src="https://66.media.tumblr.com/da271ff141b9d3f48eb3453cde2ecc6d/tumblr_p4pkxl5iwD1qehrvso1_540.gif" width="100" height="75" />
        </center>
      </span>
      </div>
    </div>
  </div>
  <audio src="https://api.soundcloud.com/tracks/280277020/stream?client_id=NmW1FlPaiL94ueEu7oziOWjYEzZzQDcK" hidden loop autoplay />
</table>
    </div>
    <footer>
          <div class="style2" id="siteInfo"> 
            <img src="guguy.jpg" width="44" height="22" /> 
            <a href="about.php">About Us</a> |  
            <a href="rules.php">Privacy Policy</a> | 
            <a href="contact.php">Contact Us</a> | &copy;2003 Company Name  </div>
</div>
</footer>
          <br />
          <script type="text/javascript" src="js/hidden.js"></script>
          <script type="text/javascript" href="js/inti.js"/>
</body>
        </html>