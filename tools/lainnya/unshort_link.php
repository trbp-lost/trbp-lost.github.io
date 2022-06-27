<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8"/>
  <title>Unshort link</title>
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
      <a href="unshort_link.php">Unshort link </a> / 
    </div>

    <div id="pageName">
      <h2>Unshort link </h2>
      <img alt="small logo" src="../../source/gambar/unshort_link.png" height="59" width="66"/>
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

       <center>      
        <form  action="" method="POST">
         <table>
          <h1 style="font-size: 20px">Unshort link <font style="font-size: 10px" title="akses awal">V 1.0</font></h1>
          <tr>
           <td>Your Shorten URL : </td>
           <td>
            <input name=url size=50 placeholder="Shortlink here" />
          </td>
          <tr>
            <td><br />&nbsp;</td>
            <td>
             <input type="submit" value="unshort it" />
             <input type="reset" value="Reset" />
           </td>
         </tr>
       </tr>
     </table>
   </form>
   <?php
   error_reporting(0);
   $url=$_POST['url'];
   if (isset($url) AND !empty($url) AND 
     filter_var($url, FILTER_VALIDATE_URL)):
     $urlEncode =urlencode($url);
   $urlDecode = htmlspecialchars(urldecode($urlEncode), ENT_QUOTES);
   $getHeaders = get_headers($urlDecode, 1);
   if(is_array($getHeaders['Location'])):
     $location = current($getHeaders['Location']);
   else:
     $location = $getHeaders['Location'];
   endif;
   if (strpos($getHeaders[0], '301') || strpos($getHeaders[0], '302') || strpos($getHeaders[0], '303') !== false):
     ?>
   <p>Url tujuan : 
    <a href="<?php echo $location; ?>" target="_blank"><?php echo $location; ?></a>
  </p>
  <p>Tampilan :</p>
  <iframe src="<?php echo $location; ?>" height="400px" width="50%"></iframe>
  <?php
else:
	?>
  <h3> This url is not redirected</h3>
  <h3> Maybe <font style="color: red;">not safe</font> or <font style="color: yellow;">wrong link</font></h3>
  <p> Nama Shortlinknya :
   <a href="<?php echo $url; ?>" onclick="return confirm('Are you sure want to go to that link?');" target="_blank"><?php echo $url; ?></a>
 </p>
 <?php
endif;
endif;
?>
<p>
  <b>Untuk memperpanjang link yang telah di singkat dan melihat url asli juga tampilan websitenya.</b>
</p>
</center>
</div>
<div id="siteInfo"> 
  <img id="end" src="../../guguy.jpg" width="44" height="22" /> 
  <a href="../../about.php">About Me</a> | 
  <a href="../../rules.php">Privacy Policy</a> | 
  <a href="../../contact.php">Contact Me</a> | 
  <span class="style1">
    <b>&copy;2019 Company Bejiguy</b>
  </span> 
</div>
</div>
<br />
<script type="text/javascript" src="../../js/hidden.js"></script>
<script type="text/javascript" src="../../js/inti.js"/>
</body>
</html>