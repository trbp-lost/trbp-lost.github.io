<?php
$koneksi = new mysqli("localhost", "root", "", "bejiguysearch");
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset=”UTF-8/>
  <title>Daftar</title>
  <link rel="shortcut icon" href="../../guguy.jpg">
  <link rel="stylesheet" href="../../css/emx_nav_left.css" type="text/css" />
  <script type="text/javascript" src="../../js/letak.js"></script>
  <script type="text/javascript" src="../../js/tools.js"></script>
  <style type="text/css">
  .container{
    align-items: center;
    padding: 10% 50px;
    margin-left: auto;
    margin-right: auto;
  }
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
    <div id="globalNav"> 
      <img alt="" src="../../gblnav_left.gif" height="32" width="4" id="gnl" /> 
      <img alt="" src="../../glbnav_right.gif" height="32" width="4" id="gnr" />
      <div id="globalLink"> 
        <a href="../../home.php" id="gl1" class="glink" onMouseOver="ehandler(event,menuitem1);">Home</a>
        <a href="../../informasi.php" id="gl2" class="glink" onMouseOver="ehandler(event,menuitem2);">Informasi</a>
        <a href="../../download.php" id="gl3" class="glink" onMouseOver="ehandler(event,menuitem3);">Download</a>
        <a href="../../contact.php" id="gl5" class="glink" onMouseOver="ehandler(event,menuitem5);">Contact </a>
        <a href="../../about.php" id="gl6" class="glink" onMouseOver="ehandler(event,menuitem6);">About </a>  
        <a href="../../rules.php" id="gl7" class="glink" onMouseOver="ehandler(event,menuitem7);">Rules </a>
      </div>

      <form id="search" action="../../search.php" method="POST">
        <input type="text" size="40px" name="kata_kunci" placeholder="Search" />
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
      <a href="../../download/lagu.php">Lagu</a> | 
      <a href="../../download/gambar.php">Gambar</a> 
    </div>
    <div id="subglobal4" class="subglobalNav">
      <a href="../../coding.php">Coding</a> |
      <a href="../../converter.php">Converter</a> |
      <a href="../../lainnya.php">Lainnya</a>
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
      <a href="../login.php">Log in</a> / 
      <a href="daftar.php">Daftar</a> / 
    </div>

    <div id="pageName">
      <h2>Daftar</h2>
      <img alt="small logo" src="https://image.flaticon.com/icons/svg/1878/1878722.svg" height="59" width="66"/>
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
        <div class="container">
         <h1 align="center">Welcome to Bejiguy </h1>
         <h2 align="center"> Daftar </h2>
         <div align="center">
          <form onsubmit="alert('Submitted');return false;" method ="POST" action ="real.php" >
            <table align="center">
              <tr>
                <td>Username</td>
                <td>:
                  <input type="text" placeholder= "Username" name="username" width = "350px" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{4,}$" title="alphanumeric ,uppercase ,number . 6 or more chars" required />
                </td>
              </tr>
              <tr>
                <td>Password</td>
                <td>:
                  <input type="password" placeholder= "Password" name="password" width = "350px" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                </td>
              </tr>
              <tr>
                <td>Nama Anda</td>
                <td>:
                  <input type="text" placeholder= "Nama e wa" name="name" width = "350px" required />
                </td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:
                  <?php
                  echo "<select name='tgl' required>
                  <option selected></option>";
                  for ($tgl = 1; $tgl<=31; $tgl++)
                   {$tgl_leng = strlen($tgl);
                     if  ($tgl_leng==1)
                       {$i="0".$tgl;}
                     else
                       {$i=$tgl;}
                     echo "<option value=$i>$i</option>";
                   }
                   echo "</select>";
                   echo "<select name='bln' required>
                   <option selected></option>";
                   $bulan = array("Januari","Februari","Maret","April","Mei","Juni"
                     ,"Juli","Agustus","September","Oktober","November","Desember");
                   for ($c=0; $c <=11; $c++){
                     $bul = $bulan[$c];
                     echo "<option value= $bul>$bul</option><br>";}
                     echo "</select>";

                     echo " <select name='thn' required>
                     <option selected></option>";
                     $now = date("Y");

                     for ($thn = 1945; $thn <= $now; $thn++)
                      {$thn_leng = Strlen($thn);
                        if ($thn_leng==1)
                         {$b="0".$thn;}
                       else
                         {$b=$thn;}
                       echo "<option value=$b>$b</option>";
                     }
                     echo "</select>";
                     ?>   
                   </td>
                 </tr>
                 <tr>
                  <td>Jenis Kelamin</td>
                  <td>:
                    <input type="radio" name="kelamin" value="L" required />Pria
                    <input type="radio" name="kelamin" value="P" />Wanita
                  </td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>:
                    <input type="text" placeholder="Handphone" name="hp" required pattern="^\d{12}$" title="12 numeric characters only" title="Number Phone" />
                  </td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:
                   <input type="email" placeholder="E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Like abc@Bejiguy.com" required />
                 </td>
               </tr>
               <tr>
                <td>&nbsp;</td>
                <td>
                 <input type="submit" name="submit" value="Login" />
                 <input type="reset" name="cancel" value="Cancel" />
               </td>
             </tr>
           </table>
         </form>
       </div>
     </div>
     <div class="story"></div>
   </div>
   <div id="siteInfo"> 
    <img id="end" src="../../guguy.jpg" width="44" height="22" /> 
    <a href="../../about.php">About Me</a> | 
    <a href="../../rules.php">Privacy Policy</a> | 
    <a href="../../contact">Contact Me</a> | 
    <span class="style1">&copy;2019 Company Bejiguy</span> 
  </div>
</div>
<br />
<script type="text/javascript" src="../../js/hidden.js"></script>
<script type="text/javascript" src="../../js/inti.js"/>
</body>
</html>