<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8"/>
	<title>Enkripsi Encoder</title>
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
			<a href="enkripsi_encoder.php">Enkripsi Encoder</a> / 
		</div>
		<div id="pageName">
			<h2>Enkripsi Encoder </h2>
			<img alt="small logo" src="https://image.flaticon.com/icons/svg/1410/1410167.svg" height="59" width="66"/>
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
					<img src="https://image.flaticon.com/icons/png/128/983/983790.png" alt="" width="107" height="66" />Advertisement here.
				</div>
			</div>
		</div>
		<div id="content">
			<center>
				<h2>Hash Encoder</h2>
				<form method="POST" action="">
					<select id="algorithm" name="algorithm">
						<option  value="ADLER32">ADLER32</option>
						<option  value="BASE64">BASE64</option>
						<option  value="CRC32">CRC32</option>
						<option  value="CRC32B">CRC32B</option>
						<option  value="GOST">GOST</option>
						<option  value="MD2">MD2</option>
						<option  value="MD4">MD4</option>
						<option  value="MD5">MD5</option>
						<option  value="SHA1">SHA1</option>
						<option  value="SHA256">SHA256</option>
						<option  value="SHA384">SHA384</option>
						<option  value="SHA512">SHA512</option>
						<option  value="WHIRLPOOL">WHIRLPOOL</option>
						<option  value="SNEFRU">SNEFRU</option>
						<option  value="RIPEMD128">RIPEMD128</option>
						<option  value="RIPEMD160">RIPEMD160</option>
						<option  value="RIPEMD256">RIPEMD256</option>
						<option  value="RIPEMD320">RIPEMD320</option>
						<option  value="SEMUANYA">SEMUANYA</option>
					</select>
					<input type="text" name="encode" placeholder="Here...." />
					<input type="submit" name="submit" />
				</form>
			</center>
			<?php
			if (isset($_POST['submit']) ==1) {
				echo '<h3>hasil:</h3>';
				$algo = $_POST['algorithm'];
				$hash   = $_POST['encode'];

				if ( $algo == "ADLER32") {
					$hasil = hash('adler32', $hash ,false);
					echo'<p>adler32: '.$hasil.'</p>';
				}
				else if( $algo == "BASE64"){
					$hasil = base64_encode($hash);
					echo'<p>base64: '.$hasil.'</p>';
				}
				else if ( $algo == "CRC32") {
					$hasil = hash('crc32', $hash ,false);
					echo'<p>crc32: '.$hasil.'</p>';
				}
				else if ( $algo == "CRC32B") {
					$hasil = hash('crc32b', $hash ,false);
					echo'<p>crc32b: '.$hasil.'</p>';
				}
				else if ( $algo == "GOST") {
					$hasil = hash('gost', $hash ,false);
					echo'<p>gost: '.$hasil.'</p>';
				}
				else if ( $algo == "MD2") {
					$hasil = hash('md2', $hash ,false);
					echo'<p>md2: '.$hasil.'</p>';
				}
				else if ( $algo == "MD4") {
					$hasil = hash('md4', $hash ,false);
					echo'<p>md4: '.$hasil.'</p>';
				}
				else if ( $algo == "MD5") {
					$hasil    = md5($hash ,false);
					echo'<p>md5: '.$hasil.'</p>';
				}
				else if ( $algo == "RIPEMD128") {
					$hasil = hash('ripemd128', $hash ,false);
					echo'<p>ripemd128: '.$hasil.'</p>';
				}
				else if ( $algo == "RIPEMD160") {
					$hasil = hash('ripemd160', $hash ,false);
					echo'<p>ripemd160: '.$hasil.'</p>';
				}
				else if ( $algo == "RIPEMD256") {
					$hasil = hash('ripemd256', $hash ,false);
					echo'<p>ripemd256: '.$hasil.'</p>';
				}
				else if ( $algo == "RIPEMD320") {
					$hasil = hash('ripemd320', $hash ,false);
					echo'<p>ripemd320: '.$hasil.'</p>';
				}
				else if ( $algo == "SHA1") {
					$hasil   = sha1($hash ,false);
					echo'<p>sha1: '.$hasil.'</p>';
				}
				else if ( $algo == "SHA256") {
					$hasil = hash('sha256', $hash ,false);
					echo'<p>sha256: '.$hasil.'</p>';
				}
				else if ( $algo == "SHA384") {
					$hasil = hash('sha384', $hash ,false);
					echo'<p>sha384: '.$hasil.'</p>';
				}
				else if ( $algo == "SHA512") {
					$hasil = hash('sha512', $hash ,false);
					echo'<p>sha512: '.$hasil.'</p>';
				}
				else if ( $algo == "SNEFRU") {
					$hasil = hash('snefru', $hash ,false);
					echo'<p>snefru: '.$hasil.'</p>';
				}
				else if ( $algo == "WHIRLPOOL") {
					$hasil = hash('whirlpool', $hash ,false);
					echo'<p>whirlpool: '.$hasil.'</p>';
				}
				else if ( $algo == "SEMUANYA") {
					foreach (hash_algos() as $v) {
						$r = hash($v, $hash, false);
						printf("%-12s %3d %s\n", $v, strlen($r), $r);
						$hasil = ' ';
						echo'<p>'.$hasil.'</p>';
					}
					$hasil = base64_encode($hash);
					echo'<p>base64 '.$hasil.'</p>';
					echo'<h3>Hasilnya ada pada kolom ke-3 kecuali base64 ada di kolom ke-2</h3>';
				}
			}
			else{
				echo "<marquee align='middle'>Masukan kata yang mau dienkripsi</marquee>";
			}
			?>
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