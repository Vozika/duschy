<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<script language="JavaScript">
function fclear(idf) {
	idf.value="";
}

</script>
<style>.tf {border:1px solid black; font-size:12px; width:100px; text-align:center;}</style>
<?php
$path= __FILE__;
$path=str_replace("/show_form.php","",$path);
$path=str_replace("\show_form.php","",$path);
include($path."/config.inc.php");
echo '<table>';
echo '<form name="subform" action="'.$senderfolder.'/write.php" method="post" target="sub">';
if(!isset($style) or $style==1) {
	echo '<tr><td><input type="textbox" class="katalog" style="font-size:80%;" name="name" value="[ Ваше имя ]" id="fn" onClick="fclear(this);"></td></tr>';
	echo '<tr><td><input type="textbox" class="katalog" style="font-size:80%;" name="mail" value="[ Ваша почта ]" id="fm" onclick="fclear(this);"></td></tr>';
	echo '<tr><td><input type="submit"  value="подписаться" onclick="sub=window.open(\'\',\'sub\',\'width=550,height=150,top=0,left=0,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no\');sub.document.write(\'<b>Eaao iiaienea...</b>\');"></td></tr>';
} else {
	echo '<tr><td><input type="textbox" name="mail" value="[ aaoa ii?oa ]" id="fm" onclick="fclear(this);"></td>';
    echo '<td><input type="submit" value="ok"  style="width:20;" onclick="sub=window.open(\'\',\'sub\',\'width=550,height=150,top=0,left=0,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no\');sub.document.write(\'<b>Eaao iiaienea...</b>\');"></td></tr>';
}
?>
</form>
</table>