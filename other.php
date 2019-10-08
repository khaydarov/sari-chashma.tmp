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
			<li><a href="index.php" >Главная страница</a></li>
			<li><a href="about.php" >О нас</a></li>
			<li><a href="gallery.php" >Галерея</a></li>
			<li><a href="products.php" class="active">Наша продукция</a></li>
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
					<h3 class="line"><span>Строительные материалы и прочие продукты</span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="object">
								<img src="img/shifer.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение:	Шифер</i></b><br>
										<b><i>Тип:	Обычный</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/otsinkovannyij-metal-shifer.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение:	Шифер</i></b><br>
										<b><i>Тип:	Аллюминевый</b></i><br>
										<b><i>Размер, мм:	250x120x88</i></b><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/cvetnoy.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение:	Шифер</i></b><br>
										<b><i>Тип:	Цветной</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<div class="object">
								<img src="img/gallery/list.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Лист</i></b><br>
										<b><i>Тип:	Металлический</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/profil1.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Профиль</i></b><br>
										<b><i>Тип:	Металлический</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/3434567.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Уголок</i></b><br>
										<b><i>Тип:	Металлический</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/dscn5093.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Арматура</i></b><br>
										<b><i>Тип:	Разных размеров</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/678268882.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Швеллер</i></b><br>
										<b><i>Тип:	Разных размеров</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/617597001_6.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Катанка Стальная</i></b><br>
										<b><i>Тип:	Разных размеров</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/images (2).jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Двутавровая балка</i></b><br>
										<b><i>Тип:	Разных размеров</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="klassa1.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: : Гладкая арматура</i></b><br>
										<b><i>Тип:	Разных размеров</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/IMG_2732.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Хлопок</i></b><br>
										<b><i>Тип:	Таджикистан</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/images (3).jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Цемент </i></b><br>
										<b><i>Тип: Таджикистан, Китай, Пакистан</b></i><br>
										<b><i>Цена:	Договорная</i></b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/images (1).jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Информация</div>
									<div class="block_info">
									<br>
										<b><i>Назначение: Пиломатериалы</i></b><br>
										<B><i>Тип: Разные</i></B><br>
										<b><i>Цена:	Договорная</i></b><br>
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

