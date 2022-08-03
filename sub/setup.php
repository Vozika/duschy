<html>
<head>
  <title>Установка TSB Subscription</title>
</head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<?php
if (isset($_POST['process']) and $_POST['process']=="setup") {
    include("head.php");
  	$config=fopen("config.inc.php", "w");
    fputs ($config,"<?php\n\$mainurl=\"".$_POST['mainurl']."\";\n\$style=\"1\";\n\$sendermail=\"".$_POST['sendermail']."\";\n\$sendername=\"".$_POST['sendername']."\";\n\$sendertheme=\"".$_POST['sendertheme']."\";\n\$senderurl=\"".$_POST['senderurl']."\";\n\$senderfolder=\"".str_replace("\\","",$_POST['senderfolder'])."\";\n\$charset=\"windows-1251\";\n\$username=\"".$_POST['username']."\";\n\$password=\"".$_POST['password']."\";?>");
    fclose($config);
    chmod ("config.inc.php", 0777);
    echo '<b>Скрипт установлен успешно... Спасибо за использование...</b><br><br>Обновления этого и других скриптов: <a href="http://tsb.mimozaf.ru" target="_blank">http://tsb.mimozaf.ru</a><br>Форум поддержки: <a href="http://tsb.mimozaf.ru/forum" target="_blank">http://tsb.mimozaf.ru/forum</a><br><br>';
    echo 'Обмен ссылками: <a href="http://tsb.mimozaf.ru?menu=users" target="_blank">http://tsb.mimozaf.ru?menu=users</a><br><font style="font-size:9px;font-family:verdana;">(Если вы используете скрипты TSB Scripts, ваш ресурс будет помещен в соотв. категории, помимо выбранной.)</font>';
} else {
	echo '<div align=center>';
    echo '<form name=\"config\" action="" method=post>';
    echo '<table><tr><td>';
    echo "<input type='hidden' name='process' value='setup'>";
	echo '<b>Общие настройки:</b><br>';
	echo '<input type="text" name="mainurl">  Главная<br><br>';
	echo '<b>Безопасность:</b><br><input type="text" name="username" style="width:200;"> Имя пользователя<br><input type="password" name="password" style="width:200;"> Пароль<br><br>';
	echo '<b>Настройки уведомительного письма:</b><br>';
	echo '<input type="text" name="sendermail" style="width:200;"> E-mail (поле reply-to)<br>';
	echo '<input type="text" name="sendername" style="width:200;"> Имя (поле from) - [sendername]<br>';
	echo '<input type="text" name="sendertheme" style="width:200;"> Тема (поле subject)<br><br>';
	echo '<input type="text" name="senderurl" value="http://'.$_SERVER['SERVER_NAME'].'" style="width:200;"> Адрес (url) сайта - [url]<br>';
	echo '<input type="text" name="senderfolder" value="'.dirname($_SERVER['PHP_SELF']).'" style="width:200;"> Путь к папке со скриптом - [folder]<br><br>';
    echo "<br><input type=submit value='Установить'>";
    echo '</td></tr></table>';
    echo "</form>";
}
echo '<br><br>';
?>
</body>
</html>