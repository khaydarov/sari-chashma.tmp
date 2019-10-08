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

<title>ООО "Сари-Чашма"</title>
</head>

<body>
	
	<!-- Header -->
	<div id="header">
	
		<!-- Your gallery name  -->
		<h1><a href="index.php">ООО "Сари-Чашма"</a></h1>
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
<address>Наши контакты:<br>(+992) 918-55-33-30<Br></address>
		</fieldset>

		<p style="color: #fff;">Язык: <a style="color: white;" href="index.php">Русский</a>&nbsp;|&nbsp;<a style="color: #fff;" href="tj/index.php">Таджикский</a></p>
		</form>

		<!-- Search end -->
		
<a href="#skip-menu" class="hidden">Cкрыть меню</a>
	
		<!-- Menu -->
		<ul id="menu">
			<li><a href="index.php" class="active">Главная страница</a></li>
			<li><a href="about.php">О нас</a></li>
			<li><a href="gallery.php">Галерея</a></li>
			<li><a href="products.php" >Наша продукция</a></li>
			<li><a href="contacts.php">Контакты</a></li>
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
				<div style="font-weight: bold; font-size: 15px; width: 560px; color: #004A70;">
					<p style="margin-left: 5px; " align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Наши опытные специалисты выполняют индивидуальные
						заказы бетонных, металлических и столярных изделий в соответствии с пожеланиями и потребностями клиента 
						за кратчайшие сроки. </p>
				</div><br>
					<h3 class="line"><span><a href="biton.php">Бетонные изделия‎</a></span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="foto">
								<a href="biton.php" title=""><img src="img/gallery/4.JPG" alt="" width="120" height="90" /></a> 
								<p><a href="biton.php" title="">Бетонные лотки</a></p>
							</div>
			
							<div class="foto">
								<a href="biton.php" title=""><img src="img/gallery/3.JPG" alt="" width="120" height="90" /></a> 
								<p><a href="biton.php" title="">Колодезные кольца</a></p>
							</div>
			
							<div class="foto">
								<a href="biton.php" title=""><img src="img/gallery/16.JPG" alt="" width="120" height="90" /></a> 
								<p><a href="biton.php" title="">Цементные блоки</a></p>
							</div>
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My latest work end -->
			
							<div class="perex">
								<p><a href="biton.php">Показать все.....</a></p> 
							</div>
			
					<h3 class="line"><span><a href="metal.php">Металлоизделия и металлоконструкция</a></span></h3>
					
						<!-- My other work -->
						<div class="galerie">
						
							<div class="foto">
								<a href="metal.php" title=""><img src="img/gallery/19.JPG" alt="" width="120" height="90" /></a> 
								<p><a href="metal.php" title="">Металлические ворота</a></p>
							</div>
			
							<div class="foto">
								<a href="metal.php" title=""><img src="img/metal/12709804846474.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="metal.php" title="">Металлические Топчаны</a></p>
							</div>
			
							<div class="foto">
								<a href="metal.php" title=""><img src="img/metal/pergola.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="metal.php" title="">Металлические Навесы</a></p>
							</div>
					
							
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My other work end -->
						<div class="perex">
								<p><a href="metal.php">Показать все.....</a></p> 
					</div>
					<h3 class="line"><span><a href="derevo.php">Столярные изделия</a></span></h3>
					
						<!-- My other work -->
						<div class="galerie">
						
							<div class="foto">
								<a href="derevo.php" title=""><img src="img/gallery/IMG_2703.JPG" alt="" width="120" height="90" /></a> 
								<p><a href="derevo.php" title="">Окна</a></p>
							</div>
			
							<div class="foto">
								<a href="derevo.php" title=""><img src="img/gallery/dveri-iz-naturalnogo-dereva.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="derevo.php" title="">Межкомнатные двери</a></p>
							</div>
			
							<div class="foto">
								<a href="derevo.php" title=""><img src="img/gallery/dsc01486.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="derevo.php" title="">Табуреты и скамьи</a></p>
							</div>
					
							
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My other work end -->
						<div class="perex">
								<p><a href="derevo.php">Показать все.....</a></p> 
						</div>
				</div>
				<h3 class="line"><span><a href="other.php">Строительные материалы и прочие продукты</a></span></h3>
					
						<!-- My other work -->
						<div class="galerie">
						
							<div class="foto">
								<a href="other.php" title=""><img src="img/shifer.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="other.php" title="">Шиферы</a></p>
							</div>
			
							<div class="foto">
								<a href="other.php" title=""><img src="img/gallery/profil1.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="other.php" title="">Арматуры, Швеллеры, Уголки, Профили и прочее</a></p>
							</div>
			
							<div class="foto">
								<a href="other.php" title=""><img src="img/97299067.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="other.php" title="">Цемент</a></p>
							</div>
					
							
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My other work end -->
						<div class="perex">
								<p><a href="other.php">Показать все.....</a></p> 
						</div>
				</div>
			</div>
			<!-- Content left end -->
				
			<!-- Content right -->
			<div id="content-box-in-right">
				<div id="content-box-in-right-in">
					
					<h3>Обратная связь</h3>
						<form action="" method="post">
							<fieldset>
								<label>Ваше имя</label>
								<input type="text" name="name"/><br />
								<label>E-mail</label>
								<input type="text" value="@" name="email"/><br />
								<label>Текст сообщения</label>
								<textarea cols="25" rows="7" name="text"></textarea><br />
								<input class="send-button" type="submit" value="Отправить" name="submit"/>
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
			<p class="footer-left">&copy; <a href="index.php">ООО "Сари-Чашма"</a>, 2015.</p>
		</div>
	</div>
	<!-- Footer end -->
	
</body>
</html>

