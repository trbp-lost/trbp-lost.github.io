<?php
//memasukkan file koneksi
include 'conek/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Engine --></title>
	<meta http-equiv="Content-Type" content="text/html"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset='UTF-8'/>
	<link rel="shortcut icon" href="guguy.jpg">
	<link rel="stylesheet" href="css/emx_nav_left.css" type="text/css" />
	<link rel="stylesheet" href="css/das.css" type="text/css" />
	<link rel="stylesheet" href="css/search.css" type="text/css" />
	<script type="text/javascript" src="js/letak.js"></script>
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
			<a href="Search.php">Search</a> / 
		</div>
		<div id="pageName">
			<h2>Search</h2>
			<img alt="small logo" src="https://image.flaticon.com/icons/png/128/34/34202.png" height="59" width="66"/>
		</div>
		<div id="pageNav">
			<center>
				<script type="text/javascript" src="js/kalender.js"></script>
			</center>
			<div id="pageNav">
				<div class="relatedLinks">
					<h3 id="menu1">Menu Lainnya </h3>
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
			<form method="POST">
				<div class="tempat-cari">
					<input name="kata_kunci" type="text" class="cari" placeholder="Type to search"/>
					<button title="Search" class="cari btn-white" type="submit" name="submit">
						<img class="image1" src="https://image.flaticon.com/icons/png/128/34/34202.png">
					</button>
				</div>
			</form>
			<br><br>
			<?php
			if(isset($_POST['submit'])){
				$kata_kunci = $koneksi->real_escape_string(htmlentities(trim($_POST['kata_kunci'])));
				if(strlen($kata_kunci)<3){
					echo '<br><br><p>Kata kunci terlalu pendek.</p>
					<br><center><img width="25%" src="https://image.flaticon.com/icons/svg/128/128469.svg" /></center>';
				}else{
					$where = "";
					$kata_kunci_split = preg_split('/[\s]+/', $kata_kunci);
					$total_kata_kunci = count($kata_kunci_split);
					foreach($kata_kunci_split as $key=>$kunci){
						$where .= "kata_kunci LIKE '%$kunci%'";
						if($key != ($total_kata_kunci - 1)){
							$where .= " OR ";
						}
					}
					$results = $koneksi->query("SELECT judul, LEFT(deskripsi, 100) as deskripsi, foto, url FROM artikel WHERE $where");
					$num = $results->num_rows;
					if($num == 0){
						echo '<br><br><p>Pencarian dengan kata kunci <b>'.$kata_kunci.'</b> tidak ada hasil.</p>
						<br><center><img size="100%" src="https://pbs.twimg.com/profile_images/1077797757094526976/XVXQdz8i_400x400.jpg" /></center>';
					}else{
						echo '<br><br><p>Pencarian dari kata kunci <b>'.$kata_kunci.'</b> mendapatkan '.$num.' hasil:</p>';
						while($row = $results->fetch_assoc()){
							?>
							<a title="<?php echo $row['judul']; ?>" style="text-decoration: none; color: black;" href="<?php echo $row['url']; ?>">
								<table width="100%" border="0">
									<tr>
										<td width="15%" rowspan="2">
											<img src="<?php echo $row['foto']; ?>" width="150px" />
										</td>
										<td width="80%">
											<h1 align="left">
												<b><?php echo $row['judul']; ?></b>
											</h1>
										</td>
									</tr>
									<tr valign="top">
										<td valign="top" align="left">
											<p><?php echo $row['deskripsi'].'...'; ?></p>
											<p>Read more ... --></p>
										</td>
									</tr>
								</table>
							</a>
							<?php
						}
					}
				}
			}
			?>
		</div>
		<div id="siteInfo"> 
			<img src="guguy.jpg" width="44" height="22" /> 
			<a href="about.php">About Me</a> |  
			<a href="rules.php">Privacy Policy</a> | 
			<a href="contact.php">Contact Me</a> | 
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