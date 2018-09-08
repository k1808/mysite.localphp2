<?php
	setcookie("userName", 'John', time()-3600);
echo $_COOKIE["userName"];