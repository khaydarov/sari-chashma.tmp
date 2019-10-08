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
					<h3 class="line"><span>Махсулотхои бетони‎</span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="object">
								<img src="img/gallery/IMG_2737.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title"></div>
									
										<b>Маҳсулот: Ҳалқаи корези КЦ </b><br>
										<b>Андоза: 9 Х 1h Х 1000мм; V=0,3 м3</b><br>
                                                                                <b>Нарх: 250 Сомони </b><br>
                                                                                <br>
										<b>Маҳсулот: Ҳалқаи корези КЦ </b><br>
										<b>Андоза: 14 Х 1h Х 1000мм; V=0,5 м3</b><br>
										<b>Нарх: 350 Сомони </b><br>
										<br>
										<b>Маҳсулот: Ҳалқаи корези КЦ </b><br>
										<b>Андоза: 9 Х 1h Х 1500мм; V=0,45 м3</b><br>
										<b>Нарх: 400 Сомони </b><br><br>  
									</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2737.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									
									<B>Маҳсулот: Ҳалқаи корези КЦ + арматура </B><br>
									<b>Андоза: КЦ 9 Х 1h Х 1000мм; V=0,3 м3</b><br>
									<b>Нарх: 300 сомони </b><br>
                                                                        <br>
									<b>Маҳсулот: Ҳалқаи корези КЦ + арматура </b><br>
									<b>Андоза: КЦ 14 Х 1h Х 1000мм; V=0,5 м3</b><br>
									<b>Нарх: 400 Сомони </b><br>
                                                                        <br>   
									<b>Маҳсулот: Ҳалқаи корези КЦ + арматура </b><br>
									<b>Андоза: КЦ 9 Х 1h Х 1500мм; V=0,45 м3</b><br>
									<b>Нарх: 450 Сомони </b><br><br>  
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2737.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
									<B>Маҳсулот: Ҳалқаи корези КЦ </B><br>
									<b>Андоза: КЦ 12 Х 1h Х 2000мм; V=0,8 м3</b><br>
									<b>Нарх: 700 сомони </b><br>
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/images.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									
									<b>Маҳсулот: Тахтасанги бетонии чоҳ КЦП </B><br>
									<b>Андоза: 1 Х 10 Х 2; V=0,01 м3</b><br>
									<b>Нарх: 300 Сомони</b><br>
                                                                        <br>
									<b>Маҳсулот: Тахтасанги бетонии чоҳ КЦП </b><br>
									<b>Андоза: 1 Х 15 Х 2; V=0,27 м3</b><br>
									<b>Нарх: 400 Сомони</b><br>
                                                                        <br>
                                                                        <b>Маҳсулот: Тахтасанги бетонии чоҳ КЦП </b><br>
									<b>Андоза: 1 Х 20 Х 2; V=0,35 м3</b><br>
									<b>Нарх: 700 Сомони </b><br><br>
                                                                        <br> 
    
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/4.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b>Маҳсулот: Новаи ЛК </b><br>
										<b>Андоза: 2 Х 3; V=0,42 м3</b><br>
										<b>Нарх: 400 Сомони</b><br>
										<br>
										<B>Маҳсулот: Новаи ЛК </b><br>
										<b>Андоза: 2 Х 3; V=0,40 м3</b><br>
										<b>Нарх: 350 Сомони</b><br>
										
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2769.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b>Маҳсулот: Новаи ЛК </b><br>
										<b>Андоза: 3 Х 2,5; V=0,21 м3</b><br>
										<b>Нарх: 250 Сомони</b><br> 
																		
                                                                     </div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
							<div class="object">
								<img src="img/gallery/IMG_2773.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
									<b>Маҳсулот: Новаи ЛК </b><br>
									<b>Андоза: 0,16 Х 0,26 Х 1; V=0,03 м3</b><br>
									<b>Нарх: 50 Сомони</b><br>
									
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">
							
						<div class="object">
								<img src="img/gallery/image-cb.jpg" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
									<b>Маҳсулот: Новаи ЛК </b><br>
									<b>Андоза: 0,16 Х 0,26 Х 2; V=0,06 м3</b><br>
									<b>Нарх: 100 Сомони</b><br>
										
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

			                                   <div class="object">
								<img src="img/gallery/IMG_2673.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
									<b>Маҳсулот: Шпалер  </b><br>
									<b>Андоза: ВС-1; V=0,026 м3</b><br>
									<b>Нарх: 50 Сомони</b><br>
										
									</div>
								</div>
							</div>
							
							<hr style="width: 550px">

							<div class="object">
								<img src="img/gallery/16.JPG" alt="" width="250px" height="200px">
								<div class="about">
									<div class="about_title">Маълумот</div>
									<div class="block_info">
									<br>
										<b>Маҳсулот: Цемблок  </b><br>
										<b>Андоза: 20см Х 40см</b><br>
										<b>Нарх: 2.40 Сомони; 2.50 Сомони</b><br>
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