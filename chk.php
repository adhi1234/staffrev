<?php
if($T1=="student" && $T2=="student")
{
header("Location: http://192.168.0.253/evaluation/OptionEntry1.html");
}
else if($T1=="admin" && $T2=="admin")
{
header("Location: http://192.168.0.253/evaluation/adminpage.php");
}
else
{
$user="Invalid Username or Password";
header("Location: http://192.168.0.253/evaluation/log.php?user=".$user);
}
?>
