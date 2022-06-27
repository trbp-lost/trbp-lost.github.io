 <?php
 error_reporting(0);

 if (isset($_POST['submit'])) {
   function AmbilData($url,$awal,$akhir)
   {
    $url   = $_POST['url'];
    $data  = file_get_contents($url);

    $awal  = $_POST['awal'];
    $akhir = $_POST['akhir'];

    $isi   = explode($awal, $data);
    $isi2  = explode($akhir, $isi[1]);

    $hasil = $isi2[0];

    return $hasil;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8"/>
  <title>Text Grabber</title>
  <link rel="shortcut icon" href="../../guguy.jpg">
  <link rel="stylesheet" href="../../css/emx_nav_left.css" type="text/css" />
  <script type="text/javascript" src="../../js/letak.js"></script>
  <script type="text/javascript" src="../../js/tools.js"></script>
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
      <a href="../lainnya.php">Lainnya</a> / 
      <a href="url_to_text.php">URL to Text </a> / 
    </div>

    <div id="pageName">
      <h2>URL to Text </h2>
      <img alt="small logo" src="../../source/gambar/url_to_txt.png" height="59" width="66"/>
    </div>
    
    <div id="pageNav">
      <center>  
        <script type="text/javascript" src="../../js/kalender.js"></script>
        <script type="text/javascript" src="../../js/hidden.js"></script>
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
        <center>
          <h1>URL to Text Grabber From Any Website</h1>
          <form method="POST">
            <table border="0">
              <tr>
               <td>Masukan Url</td>
               <td>:
                <input type="text" placeholder= "URL" name="url" value="https://bejiguy.000webhostapp.com/rules.php" />
              </td>
            </tr>
            <tr>
             <td>Masukan Code Bagian Awal</td>
             <td>:
              <input type="text" placeholder= "Code bagian awal" name="awal" value='<div id="content">' />
              </td>
            </tr>
            <tr>
             <td>Masukan Code Bagian Akhir</td>
             <td>:
              <input type="text" placeholder= "Code bagian akhir" name="akhir" value="</div>" />
            </td>
          </tr>
          <tr>
           <td>&nbsp;</td>
           <td>
            <input type="submit" name="submit" value="Grab It" />
            <button onClick="">Reset All</button>
          </td>
        </tr>
      </table>
    </form>
    <br>
    <a href="#tutor">Step? / How?</a> || 
    <a href="#hasil">Hasil</a>
  </center>
  <div style="margin-left: 20px;">
    <h3 id="tutor">Step? / How?</h3>
    <p>Masukan Url --><br /> masukin url seperti :https://bejiguy.000webhostapp.com/rules.php, https://soundcloud.com/discover, dan lain - lain</p>
    <p>Masukan Code Bagian Awal --><br /> masukin code awal bebas tapi lengkap dan ada perbedaan dari code lain seperti : &lt;h1 id="tutor"&gt;, &lt;li class="toclevel-1 tocsection-6"&gt;, dan lain - lain</p>
    <p>Masukan Code Bagian Akhir --><br /> masukin code akhir sesuai akhiran code seperti : &lt;/h1&gt;, &lt;/li&gt;, dan lain - lain</p>
    <center>
     <a href="#judul">Back</a>
   </center>
   <?php
   echo '<br><br><p id="hasil">Hasil :</p>';
   echo AmbilData($url, $awal, $akhir);
   echo '<center>
   <a href="#judul">Back</a>
   </center>';
   ?>
   <script type="text/javascript" src="../../js/inti.js"/>
 </body>
 </html>