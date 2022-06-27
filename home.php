<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset='UTF-8'/>
  <title>Home</title>
  <link rel="shortcut icon" href="guguy.jpg">
  <link rel="stylesheet" href="css/emx_nav_left.css" type="text/css" />
  <script type="text/javascript" src="js/letak.js"></script>
  <style type="text/css">
  <!--
  .style1 {
   font-size: 36px;
   font-style: italic;
   font-family: Arial, Helvetica, sans-serif;
 }
 .style2 {font-family: Arial, Helvetica, sans-serif}
 .style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
 -->
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
      <a href="log_out.php">Log out </a> |  
    </div>
    <div id="globalNav"> 
      <img alt="" src="source/gblnav_left.gif" height="32" width="4" id="gnl" /> 
      <img alt="" src="source/glbnav_right.gif" height="32" width="4" id="gnr" />
      <div id="globalLink"> 
        <a href="home.php" id="gl1" class="glink" onMouseOver="ehandler(event,menuitem1);">Home</a>
        <a href="informasi.php" id="gl2" class="glink" onMouseOver="ehandler(event,menuitem2);">Informasi</a>
        <a href="download.php" id="gl3" class="glink" onMouseOver="ehandler(event,menuitem3);">Download</a>
        <a href="tools.php" id="gl4" class="glink" onMouseOver="ehandler(event,menuitem4);">Tools</a>
        <a href="contact.php" id="gl5" class="glink" onMouseOver="ehandler(event,menuitem5);">Contact </a>
        <a href="about.php" id="gl6" class="glink" onMouseOver="ehandler(event,menuitem6);">About </a>  
        <a href="rules.php" id="gl7" class="glink" onMouseOver="ehandler(event,menuitem7);">Rules </a>
      </div>

      <form id="search" action="search.php" method="POST">
        <input type="text" name="kata_kunci" placeholder="Search" />
        <input type="submit" name="submit" value="Cari" />
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
      <a href="download/lagu/lagu.php">Lagu</a> | 
      <a href="download/gambar.php">Gambar</a> 
    </div>
    <div id="subglobal4" class="subglobalNav">
      <a href="tools/coding.php">Coding</a> |
      <a href="tools/converter.php">Converter</a> |
      <a href="tools/lainnya.php">Lainnya</a>
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
  <div id="pagecell1">
    <img alt="" src="source/tl_curve_white.gif" height="6" width="6" id="tl" /> 
    <img alt="" src="source/tr_curve_white.gif" height="6" width="6" id="tr" />
    <div id="breadCrumb"> 
      <a href="home.php">Home</a> /  
    </div>
    <div id="pageName">
      <h2>Home</h2>
      <img alt="small logo" src="https://image.flaticon.com/icons/svg/69/69524.svg" height="59" width="66"/>
    </div>
    <div id="pageNav">
      <center>
        <a style="cursor: help; text-decoration: none; color: black;" href="jam/jam.html">	
          <script type="text/javascript" src="js/kalender.js"></script>
        </a>
      </center>
      <div id="pageNav">
        <div class="relatedLinks">
          <h3 class="style2" id="menu1">Menu Lainnya </h3>
          <a href="bantuan.php">Bantuan</a> 
          <a href="komplain.php">Masalah</a> 
          <a href="rules.php">Rules</a>
        </div>
        <div id="advert"> 
          <img src="https://image.flaticon.com/icons/png/128/983/983790.png" alt="" width="107" height="66" />Advertisement here.
        </div>
      </div>
    </div>
    <div id="content">
      <h1  align="center" class="style1">WELCOME</h1>
      <p align="center">Saya mengucapkan Terimakasih karena sudah datang ke website saya.</p>
      <p align="center">Di sini saya menyediakan beberapa info dan fitur yang Recomendasikan di bawah ini </p>
      <h1 align="center" class="style1">Recomended</h1>
      <table border="0" width="100%">
        <tr>
          <td>
            <div id="game" class="feature"> 
              <a href="download/game.php" style="text-decoration:none"> 
                <img src="https://image.flaticon.com/icons/png/512/1797/1797949.png" alt="" width="280" height="200" />
                <h3> 
                  <span id="kepala" class="style2" style="text-align:center">Game</span>
                </h3>
              </a>
            </div>
          </td>
          <td>
            <div id="software" class="feature"> 
              <a href="download/software.php" style="text-decoration:none"> 
                <img src="https://image.flaticon.com/icons/svg/1819/1819901.svg" alt="" width="280" height="200" />
                <h3> 
                  <span id="kepala" class="style2" style="text-align:center">Software</span>
                </h3>
              </a>
            </div>
          </td>
        </tr>
        <br>
        <br>
        <tr>
          <td>
            <div id="lagu" class="feature"> 
              <a href="download/lagu/lagu.php" style="text-decoration:none"> 
                <img src="https://image.flaticon.com/icons/svg/126/126493.svg" alt="" width="280" height="200" />
                <h3>Lagu</h3>
              </a>
            </div>
          </td>
          <td>
            <div id="gambar" class="feature"> 
              <a href="download/gambar.php" style="text-decoration:none"> 
                <img src="https://image.flaticon.com/icons/svg/23/23765.svg" alt="" width="280" height="200" />
                <h3>Gambar</h3>
              </a>
            </div>
          </td>
        </tr>
        <br>
        <br>
        <tr>
          <td>
            <div id="tips" class="feature"> 
              <a href="informasi/tips.php" style="text-decoration:none"> 
                <img src="https://image.flaticon.com/icons/png/128/77/77487.png" alt="" width="280" height="200" />
                <h3>Tips</h3>
              </a>
            </div>
          </td>
        </tr>
        <br>
        <br>
      </table>
    </div>
    <div class="style2" id="siteInfo"> 
      <img src="guguy.jpg" width="44" height="22" /> 
      <a href="about.php">About Me </a> |  
      <a href="rules.php">Privacy Policy</a> | 
      <a href="contact.php">Contact Me </a> | 
      <span style="color: red;">
        <b>&copy;2019 Company Bejiguy</b>
      </span>
    </div>
  </div>
  <br />
  <script type="text/javascript" src="js/hidden.js"></script>
  <script type="text/javascript" href="js/inti.js"/>
</body>
</html>