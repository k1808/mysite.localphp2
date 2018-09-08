<?
if (is_file("log/".PATH_LOG)) {
  $file = file("log/".PATH_LOG);
  echo "<ol>";
  foreach($file as $line) {
    list($dt, $page, $ref) = explode ("|", $line);
    $dt = date("d-m-Y H;i:s", $dt);
    echo "<li>[$dt]: $ref -> $page </li>";
  }
  echo "</ol>";
}