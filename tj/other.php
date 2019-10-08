<?php
//include_once('config.php');
	
	// function getLastNews()
	// {
		// $sql = "SELECT * FROM news LIMIT 3";
		// $res = mysql_query($sql);
		
		// while($row = mysql_fetch_object($res))
			// $news[] = $row;
			
		// return $news;
	// }
	if (isset($_POST['submit']))
	{
		$text = $_POST['text'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		
		$to      =  "sari.chashma@gmail.com";
		$subject = 'Сообщение от '.$name;
		$message = $text;
		
		$headers = 'From:'. $email. "'" . "\r\n" .
			'Content-type: text/html; charset=windows-1251' . "\r\n";

		mail($to, $subject, $message, $headers);
	}
	
	// $news = getLastNews();
	// for($i = 0; $i < count($news); $i++)
	// {
		// $a = $news[$i]->news;
		
		// $intro[] = substr($a, 0, 200);
	// }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<!-- This template was created by Mantis-a [http://www.mantisa.cz/]. For more templates visit Free website templates [http://www.mantisatemplates.com/]. -->

<meta name="Description" content="..." />
<meta name="Keywords" content="..." />
<meta name="robots" content="all,follow" />
<meta name="author" content="..." />


<meta http-equiv="Content-Script-Type" content="text/javascript" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/style-ie.css" media="screen, projection, tv" /><![endif]-->
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>ҶДММ "Сари-Чашма"</title>
</head>

<body>
	
	<!-- Header -->
	<div id="header">
	
		<!-- Your gallery name  -->
		<h1><a href="index.php">ҶДММ "Сари-Чашма"</a></h1>
		<!-- Your gallery name end -->
		
			<!-- Your slogan -->
			<h2> </h2>
			<!-- Your slogan end -->
		
		<!-- Search form -->	
		<form class="searching" action="">
		<fieldset>
			<label></label>
				<!--<div id="picture-input">
					<input type="text" class="search" onfocus="if(this.value==this.defaultValue)this.value=''" 
					onblur="if(this.value=='')this.value=this.defaultValue" value="Search phrase&hellip;" />
				</div>
				<input class="hledat" type="image" src="img/search-button.gif" name="" alt="Search" />-->
				<address>Ракамҳои мо:<br>(+992) 918-55-33-30<Br></address>
		</fieldset>
				<p style="color: #fff;">Забон: <a style="color: white;" href="../index.php">Русӣ</a>&nbsp;|&nbsp;<a style="color: #fff;" href="index.php">Тоҷики</a></p>
		</form>
		<!-- Search end -->
		
<a href="#skip-menu" class="hidden">Cкрыть меню</a>
	
		<!-- Menu -->
		<ul id="menu">
			<li><a href="index.php" >Саҳифаи Асосӣ</a></li>
			<li><a href="about.php" >Дар бораи мо</a></li>
			<li><a href="gallery.php" >Галерея</a></li>
			<li><a href="products.php" class="active">Истеҳсоли мо</a></li>
			<li><a href="contacts.php">Ракамҳои мо</a></li>
		</ul>
		<!-- Menu end -->
	</div>
	<!-- Header end -->
	
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<!-- Content box -->
	<div id="content-box">
		<div id="content-box-in">
		
			<!-- Content left -->
			<div id="content-box-in-left">
				<div id="content-box-in-left-in">
					<h3 class="line"><span>махсулотхоисохтмонивагайра</span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="object">
								<img src="img/shifer.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Болопуши бом</i></b><br>
										<b><i>Намуд:	одди</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/otsinkovannyij-metal-shifer.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Болопуши бом</i></b><br>
										<b><i>Намуд:	Алюмини</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/cvetnoy.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Болопуши бом</i></b><br>
										<b><i>Намуд:	ранги</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<div class="object">
								<img src="img/gallery/list.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Тоба</i></b><br>
										<b><i>Намуд:	Оханин</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/profil1.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Нимруххои гуногун</i></b><br>
										<b><i>Намуд:	Оханин</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/3434567.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: кунҷҳои рӯймол</i></b><br>
										<b><i>Намуд:	Металӣ</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/dscn5093.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: Арматура</i></b><br>
										<b><i>Намуд:	Харнамуд</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/678268882.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: новаболор</i></b><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/617597001_6.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: Катанкаи пулодин</i></b><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/images (2).jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: шоҳтири дутавра</i></b><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="klassa1.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: арматура</i></b><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/IMG_2732.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: Пахта</i></b><br>
										<b><i>Таджикистан</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/images (3).jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b><i>Махсулот: Семент </i></b><br>
										<b><i>Намуд: Таджикистан, Китай, Пакистан</b></i><br>
										<b><i>Нарх:	Шартномавӣ</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
						</div>
						<!-- My latest work end -->	
					
				</div>
			</div>
			<!-- Content left end -->
				
			<!-- Content right -->
			<div id="content-box-in-right">
				<div id="content-box-in-right-in">
					
					<h3>Ба мо нависед</h3>
						<form action="" method="post">
							<fieldset>
								<label>Ному насаб</label>
								<input type="text" name="name"/><br />
								<label>E-mail</label>
								<input type="text" value="@" name="email"/><br />
								<label>Фикри шумо</label>
								<textarea cols="25" rows="7" name="text"></textarea><br />
								<input class="send-button" type="submit" value="Равон кардан" name="submit"/>
							</fieldset>
						</form>
				</div>
			</div>
			<!-- Content right end -->
			<div class="cleaner">&nbsp;</div>
		</div>
	</div>
	<!-- Content box end -->

<hr class="noscreen" />
	
	<!-- Footer -->	
	<div id="footer">
		<div id="footer-in">
			<p class="footer-left">&copy; <a href="index.php">ҶДММ "Сари-Чашма"</a>, 2015.</p>
		</div>
	</div>
	<!-- Footer end -->
	
</body>
</html>

