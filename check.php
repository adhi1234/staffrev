<?php
if($_POST[T1]=="student" && $_POST[T2]=="cecstud")
{
header("Location:OptionEntry1.php");
}
else if($_POST[T1]=="admin" && $_POST[T2]=="123admin")
{
header("Location:adminpage.php");
}
else
{
$user="Invalid Username or Password";
header("Location: http://127.0.0.1/evaluation");

}
?>
M :>:>
