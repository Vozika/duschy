<html>
<head>
  <title>��������� TSB Subscription</title>
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
    echo '<b>������ ���������� �������... ������� �� �������������...</b><br><br>���������� ����� � ������ ��������: <a href="http://tsb.mimozaf.ru" target="_blank">http://tsb.mimozaf.ru</a><br>����� ���������: <a href="http://tsb.mimozaf.ru/forum" target="_blank">http://tsb.mimozaf.ru/forum</a><br><br>';
    echo '����� ��������: <a href="http://tsb.mimozaf.ru?menu=users" target="_blank">http://tsb.mimozaf.ru?menu=users</a><br><font style="font-size:9px;font-family:verdana;">(���� �� ����������� ������� TSB Scripts, ��� ������ ����� ������� � �����. ���������, ������ ���������.)</font>';
} else {
	echo '<div align=center>';
    echo '<form name=\"config\" action="" method=post>';
    echo '<table><tr><td>';
    echo "<input type='hidden' name='process' value='setup'>";
	echo '<b>����� ���������:</b><br>';
	echo '<input type="text" name="mainurl">  �������<br><br>';
	echo '<b>������������:</b><br><input type="text" name="username" style="width:200;"> ��� ������������<br><input type="password" name="password" style="width:200;"> ������<br><br>';
	echo '<b>��������� ��������������� ������:</b><br>';
	echo '<input type="text" name="sendermail" style="width:200;"> E-mail (���� reply-to)<br>';
	echo '<input type="text" name="sendername" style="width:200;"> ��� (���� from) - [sendername]<br>';
	echo '<input type="text" name="sendertheme" style="width:200;"> ���� (���� subject)<br><br>';
	echo '<input type="text" name="senderurl" value="http://'.$_SERVER['SERVER_NAME'].'" style="width:200;"> ����� (url) ����� - [url]<br>';
	echo '<input type="text" name="senderfolder" value="'.dirname($_SERVER['PHP_SELF']).'" style="width:200;"> ���� � ����� �� �������� - [folder]<br><br>';
    echo "<br><input type=submit value='����������'>";
    echo '</td></tr></table>';
    echo "</form>";
}
echo '<br><br>';
?>
</body>
</html>