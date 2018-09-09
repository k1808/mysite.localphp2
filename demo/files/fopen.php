<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
	$f = fopen("data.html", "r") or die("Не могу открыть файл!");
  $lines = [];
  while ($line = fgetss($f, 1024, '<a>')) {
    $lines[] = $line;
  }
  print_r($lines);
  fclose($f);
?>
</BODY>
</HTML>