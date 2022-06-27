<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset=”UTF-8”/>
  <title>Software</title>
  <link rel="shortcut icon" href="../guguy.jpg">
  <link rel="stylesheet" href="../css/emx_nav_left.css" type="text/css" />
  <link rel="stylesheet" href="../css/lagu.css" type="text/css" />
  <script type="text/javascript" src="../js/letak.js"></script>
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
      <a href="../sign_up.php">Sign up  </a> | 
      <a href="../log_out.php">Log out </a> |  </div>
      <div id="globalNav"> 
        <img alt="" src="../source/gblnav_left.gif" height="32" width="4" id="gnl" /> 
        <img alt="" src="../source/glbnav_right.gif" height="32" width="4" id="gnr" />
        <div id="globalLink"> 
          <a href="../index.php" id="gl1" class="glink" onMouseOver="ehandler(event,menuitem1);">Home</a>
          <a href="../informasi.php" id="gl2" class="glink" onMouseOver="ehandler(event,menuitem2);">Informasi</a>
          <a href="../download.php" id="gl3" class="glink" onMouseOver="ehandler(event,menuitem3);">Download</a>
          <a href="../tools.php" id="gl4" class="glink" onMouseOver="ehandler(event,menuitem4);">Tools</a>
          <a href="../contact.php" id="gl5" class="glink" onMouseOver="ehandler(event,menuitem5);">Contact </a>
          <a href="../about.php" id="gl6" class="glink" onMouseOver="ehandler(event,menuitem6);">About </a>  
          <a href="../rules.php" id="gl7" class="glink" onMouseOver="ehandler(event,menuitem7);">Rules </a>
        </div>

        <form id="search" action="../search.php" method="POST">
          <input type="text" size="40px" name="kata_kunci" placeholder="Search" />
          <input type="submit" name="submit" value="Cari" />
        </form>

      </div>
      <div id="subglobal1" class="subglobalNav"> 
        <a href="../home.php">Home</a>
      </div>
      <div id="subglobal2" class="subglobalNav"> 
        <a href="../informasi/terbaru.php">Terbaru</a> | 
        <a href="../informasi/tips.php">Tips</a>
      </div>
      <div id="subglobal3" class="subglobalNav"> 
        <a href="game.php">Game</a> | 
        <a href="software.php">Software</a> | 
        <a href="lagu.php">Lagu</a> | 
        <a href="gambar.php">Gambar</a> 
      </div>
      <div id="subglobal4" class="subglobalNav">
        <a href="../coding.php">Coding</a> |
        <a href="../converter.php">Converter</a> |
        <a href="../lainnya.php">Lainnya</a>
      </div>

      <div id="subglobal5" class="subglobalNav"> 
        <a href="../contact.php">Contact Me</a>
      </div>

      <div id="subglobal6" class="subglobalNav"> 
        <a href="../about.php">About Me</a> 
      </div>

      <div id="subglobal7" class="subglobalNav"> 
        <a href="../rules.php">Rules</a> 
      </div>
    </div>
    <div id="pagecell1">
      <img alt="" src="../source/tl_curve_white.gif" height="6" width="6" id="tl" /> 
      <img alt="" src="../source/tr_curve_white.gif" height="6" width="6" id="tr" />
      <div id="breadCrumb"> 
        <a href="../download.php">Download</a> / 
        <a href="software.php">Software</a> /  </div>
        <div id="pageName">
          <h2>Software</h2>
          <img alt="small logo" src="https://www.flaticon.com/premium-icon/icons/svg/608/608258.svg" height="59" width="66"/> </div>
          <div id="pageNav">
            <center>
              <script type="text/javascript" src="../js/kalender.js"></script>
            </center>
            <div id="pageNav">
              <div class="relatedLinks">
                <h3 id="menu1">Menu Lainnya </h3>
                <a href="../bantuan.php">Bantuan</a> 
                <a href="../komplain.php">Masalah</a> 
                <a href="../rules.php">Rules</a>        </div>
                <div id="advert"> 
                  <img src="https://image.flaticon.com/icons/png/128/983/983790.png" alt="" width="107" height="66" />Advertisement here. </div>
                </div>
              </div>
    <div style="background-color: white;" id="content">
    
    <div style="padding: 0 15px;">
      <!--
      -- Buat sebuah div dengan class row
      -- class row ini berfungsi untuk membagi-bagi layar
      -- di dalam bootstrap, 1 layar penuh (dari kiri ke kanan) dibagi menjadi 12 bagian / Kolom
      -- Atau lebih tepatnya sering disebut dengan GRID
      -- col-xs-12 artinya jika ukuran layar < 768px, maka gunakan 12 kolom
      -- col-sm-6 artinya jika ukuran layar >= 768px, maka gunakan 6 kolom
      -- Untuk lebih jelasnya soal Grid, silahkan buka link ini : http://viid.me/qb4V8P
      -->
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <!--
          -- Input Group adalah salah satu komponen yang disediakan bootstrap
          -- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
          -->
          <div class="input-group">
            <form method="POST">
            <!-- Buat sebuah textbox dan beri id keyword -->
            <input name="kata_kunci" type="text" class="form-control" placeholder="Pencarian..." id="keyword">
            
            <span class="input-group-btn">
              <!-- Buat sebuah tombol search dan beri id btn-search -->
              <input type="submit" name="submit" />
              <button onClick="">Reset</button>
            </span>
            </form>
          </div>
        </div>
      </div>
      <br>
      
      <!--
      -- Buat sebuah div dengan id="view" yang digunakan untuk menampung data 
      -- yang ada pada tabel siswa di database
      -->
      <div id="view"><?php include "view2.php"; ?></div>
    </div>
    
    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="../js/jquery.min.js"></script>
    
    <!-- Load File bootstrap.min.js yang ada difolder js -->
    <script src="../js/bootstrap.min.js"></script>
    
    <!-- Load file ajax.js yang ada di folder js -->
    <script src="../js/ajax.js"></script>
 
          <div style="position: static;" id="siteInfo"> 
            <img id="end" src="../../guguy.jpg" width="44" height="22" /> 
            <a href="../../about.php">About Me</a> | 
            <a href="#menu">Site Map</a> | 
            <a href="../../rules.php">Privacy Policy</a> | 
            <a href="../../contact">Contact Me</a> | 
            <span class="style1">&copy;2019 Company Bejiguy</span> 
          </div>
        </div>
      </div>
        <br />
        <script type="text/javascript" src="../../js/hidden.js"></script>
        <script type="text/javascript" src="../../js/inti.js"/>
      </body>
      </html>