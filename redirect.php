<?php
if($_POST[R1]=="Yes")
{
header("Location: http://192.168.0.253/evaluation/clearresponse.php");
exit;
}
else if ($_POST[R1]=="No")
{
header("Location: http://192.168.0.253/evaluation/adminpage.php");
exit;
}
?>
