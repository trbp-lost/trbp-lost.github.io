<?php
error_reporting(0);
if(isset($_POST['submit'])){

  $id    = $_POST['id'];
  $class = $_POST['class'];
  $url   = $_POST['url'];
  $text  = $_POST['text'];

  $hasil  ='<a id="'.$id.'" target="_blank" class="'.$class.'" title="By Bejiguy" href="'.$url.'">'.$text.'</a>';
  $hasil1  ='<a id="'.$id.'" class="'.$class.'" title="By Bejiguy" href="'.$url.'">'.$text.'</a>';
  $code ='<input id="cetak" type="text" readonly value="'. htmlspecialchars($hasil1).'" /><button class="button" onclick="salin()" onmouseout="copy()"> Salin</button>';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8"/>
  <title>Text to Link </title>
  <link rel="shortcut icon" href="../../guguy.jpg">
  <link rel="stylesheet" href="../../css/emx_nav_left.css" type="text/css" />
  <script type="text/javascript" src="../../js/letak.js"></script>
  <script type="text/javascript" src="../../js/tools.js"></script>
  <script type="text/javascript">
    function validasi(){
      var text = document.getElementById('text');
      var url = document.getElementById('url');
      if (harusDiisi(text, "text belum diisi")) {
        if (harusDiisi(url, "url belum diisi")) {
          return true;
        };
      };
      return false;
    }
    function harusDiisi(att, msg){
      if (att.value.length == 0) {
        alert(msg);
        att.focus();
        return false;
      }
      return true;
    }
  </script>
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
      <a href="../../sign_up.php">Sign up  </a> | 
      <a href="../../log_out.php">Log out </a> | 
    </div>

    <div id="globalNav"> 
      <img alt="" src="../../gblnav_left.gif" height="32" width="4" id="gnl" /> 
      <img alt="" src="../../glbnav_right.gif" height="32" width="4" id="gnr" />
      <div id="globalLink"> 
        <a href="../../home.php" id="gl1" class="glink" onMouseOver="ehandler(event,menuitem1);">Home</a>
        <a href="../../informasi.php" id="gl2" class="glink" onMouseOver="ehandler(event,menuitem2);">Informasi</a>
        <a href="../../download.php" id="gl3" class="glink" onMouseOver="ehandler(event,menuitem3);">Download</a>
        <a href="../../tools.php" id="gl4" class="glink" onMouseOver="ehandler(event,menuitem4);">Tools</a>
        <a href="../../contact.php" id="gl5" class="glink" onMouseOver="ehandler(event,menuitem5);">Contact </a>
        <a href="../../about.php" id="gl6" class="glink" onMouseOver="ehandler(event,menuitem6);">About </a>  
        <a href="../../rules.php" id="gl7" class="glink" onMouseOver="ehandler(event,menuitem7);">Rules </a>
      </div>

      <form id="search" action="../../search.php" method="POST">
        <input type="text" name="kata_kunci" placeholder="Search" />
        <input type="submit" name="submit" value="Cari" />
      </form>

    </div>
    <div id="subglobal1" class="subglobalNav"> 
      <a href="../../home.php">Home</a>
    </div>
    <div id="subglobal2" class="subglobalNav"> 
      <a href="../terbaru.php">Terbaru</a> | 
      <a href="../../informasi/tips.php">Tips</a>
    </div>
    <div id="subglobal3" class="subglobalNav"> 
      <a href="../../download/game.php">Game</a> | 
      <a href="../../download/software.php">Software</a> | 
      <a href="../../download/lagu/lagu.php">Lagu</a> | 
      <a href="../../download/gambar.php">Gambar</a> 
    </div>
    <div id="subglobal4" class="subglobalNav">
      <a href="../coding.php">Coding</a> |
      <a href="../converter.php">Converter</a> |
      <a href="../lainnya.php">Lainnya</a>
    </div>

    <div id="subglobal5" class="subglobalNav"> 
      <a href="../../contact.php">Contact Me</a>
    </div>

    <div id="subglobal6" class="subglobalNav"> 
      <a href="../../about.php">About Me</a> 
    </div>

    <div id="subglobal7" class="subglobalNav"> 
      <a href="../../rules.php">Rules</a> 
    </div>
  </div>

  <div id="pagecell1">
    <img alt="" src="../../tl_curve_white.gif" height="6" width="6" id="tl" /> 
    <img alt="" src="../../tr_curve_white.gif" height="6" width="6" id="tr" />
    <div id="breadCrumb">
      <a href="../../tools.php">Tools</a> / 
      <a href="../converter.php">Converter</a> / 
      <a href="text_to_link.php">Text to Link </a> / 
    </div>

    <div id="pageName">
      <h2>Text to Link </h2>
      <img alt="small logo" src="https://image.flaticon.com/icons/png/512/699/699903.png" height="59" width="66"/>
    </div>
    
    <div id="pageNav">
      <center>  
        <script type="text/javascript" src="../../js/kalender.js"></script>
      </center>
      <div id="pageNav">
        <div class="relatedLinks">
          <h3 id="menu1">Menu Lainnya </h3>
          <a href="../../bantuan.php">Bantuan</a> 
          <a href="../../komplain.php">Masalah</a> 
          <a href="../../rules.php">Rules</a>  
        </div>
        <div id="advert"> 
          <img src="https://image.flaticon.com/icons/png/128/983/983790.png" alt="" width="107" height="66" />Advertisement here. </div>
        </div>
      </div>
      <div id="content">
        <form onSubmit="validasi()" method="POST" action="">
          <table align="center" border="0">
           <tr>
            <td>Masukan id</td>
            <td>:</td>
            <td>
              <input id="id" type="text" name="id" placeholder="Masukan id" />  
            </td>
          </tr>
          <tr>
            <td>Masukan teks</td>
            <td>:</td>
            <td>
             <input id="text" type="text" name="text" placeholder="Masukan teks (wajib)" />
           </td>
         </tr>
         <tr>
          <td>Masukan class</td>
          <td>:</td>
          <td>
           <input id="class" type="text" name="class" placeholder="Masukan class" />
         </td>
       </tr>
       <tr>
        <td>Tujuan teks (href)</td>
        <td>:</td>
        <td>
         <input id="url" type="text" name="url" placeholder="Masukan url (wajib)" pattern="https?://.+" required title="https://bejiguy.000webhostapp.com/home.php"/>
       </td>
     </tr>
     <tr>
      <td align="right" colspan="3">
       <input type="submit" name="submit" />
       <button class="button" id="reset" onClick="reload1();"> Reset</button>
     </td>
   </tr>
 </table>
</form>
<br>
<table>
  <tr>
   <td>Teks</td>
   <td>:</td>
   <td><?php echo ($text); ?></td>
 </tr>
 <tr>
   <td>Url</td>
   <td>:</td>
   <td><?php echo ($url); ?></td>
 </tr>
 <tr>
   <td>Source code</td>
   <td>:</td> 
   <td><?php echo ($code); ?></td>
 </tr>
 <tr>
   <td>Hasil</td>
   <td>:</td> 
   <td><?php echo $hasil; ?></td>
 </tr>  
</table>
<h2><br />Keterangan:</h2>
<p>Ini adalah converter text to link jadi dapat mengubah teks menjadi link caranya cukup isi form di atas.</p>
<p>Kalian tidak diwajibkan untuk mengisi semua form.</p>

<div class="story"></div>
</div>
<div id="siteInfo"> 
  <img id="end" src="../../guguy.jpg" width="44" height="22" /> 
  <a href="../../about.php">About Me</a> | 
  <a href="../../rules.php">Privacy Policy</a> | 
  <a href="../../contact.php">Contact Me</a> | 
  <span style="color: red;">
    <b>&copy;2019 Company Bejiguy</b>
  </span>
</div>
</div>
<br />
<script type="text/javascript" src="../../js/hidden.js"></script>
<script type="text/javascript" src="../../js/inti.js"/>
</body>
</html>