<?php
$user = ["user"=>"Jhon",
         "login"=>"root",
         "Password"=>"123456"  ];
$str=serialize($user);
echo $str;