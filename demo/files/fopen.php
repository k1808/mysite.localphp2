<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
	$f = fopen("data.txt", "a") or die("Не могу открыть файл!");
  fputs($f, "\nНовая строка");
  fclose($f);
?>
</BODY>
</HTML>