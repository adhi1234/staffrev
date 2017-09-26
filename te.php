<?php
 session_start();
 //$_SESSION['count']=$_POST['count'];
 $_SESSION['cnt']=0;
 $_SESSION['T1']=$_POST['T1'];
$_SESSION['D1']=$_POST['D1'];
$_SESSION['T2']=$_POST['T2'];

$_SESSION['D2']=$_POST['D2'];
$count=$_SESSION['count'];
$T1=$_SESSION['T1'];
//$T2=$_SESSION['T2'];
//$D1=$_SESSION['D1'];
//$D2=$_SESSION['D2'];
if ($_POST[R1] == "teacher")
{
//echo $_POST[count];
// Redirect to a different page in the current directory that was requested
//echo "<input type=\"hidden\" name=\"count\" value=\"".$count."\">";
/*echo "<input type=\"hidden\" name=\"T1\" value=$T1>"; 
echo "<input type=\"hidden\" name=\"T2\" value=$T2>";
echo "<input type=\"hidden\" name=\"D1\" value=$D1>";
echo "<input type=\"hidden\" name=\"D2\" value=$D2>";*/
header("Location:report.php?count=".$count."&T1=".$_POST[T1]."&T2=".$_POST[T2]."&D1=".$_POST[D1]."&D2=".$_POST[D2]);
exit;
}
else if($_POST[R1]=="question")
{
header("Location:Qreport1.php?T2=".$T2."&D1=".$_POST[D1]."&D2=".$_POST[D2]);
//exit;
}
?>

