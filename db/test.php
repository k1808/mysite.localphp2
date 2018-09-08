<?
error_reporting(0);
$link = mysqli_connect('localhost', 'root', '', 'test');
//mysqli_select_db($link, 'tets');
if (!$link) {
  echo mysqli_connect_errno();
  echo "<br>";
  echo mysqli_connect_error();
}
mysqli_close($link);