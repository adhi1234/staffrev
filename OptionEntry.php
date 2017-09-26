<?
$connect=mysql_connect("localhost","root","admin82fe")
or die ("Connection to the server could not be established");
$result=mysql_select_db("evaluation")
or die ("Database could not be selected");

$T2=$_POST['T2'];
$T3=$_POST['T3'];
$T4=$_POST['T4'];
$T5=$_POST['T5'];
$T6=$_POST['T6'];
$T7=$_POST['T7'];
$T8=$_POST['T8'];
$T9=$_POST['T9'];
$T10=$_POST['T10'];
$T11=$_POST['T11'];
$sqlquery="insert into response values(15,'$T2','$T3','$T4','$T5','$T6','$T7','$T8','$T9','$T10','$T11')";





//$sqlquery="insert into response values(15,'".$_POST[T2]."','".$_POST[T3]."','".$_POST[T4]."','".$_POST[T5]."','".$_POST[T6]."','".$_POST[T7]."','".$_POST[T8]."','".$_POST[T9]."','".$_POST[T11]."','".$_POST[T10]."')";

//$sqlquery="insert into response values(15,'".$T2."','".$T3."','".$T4."','".$T5."','".$T6."','".$T7."','".$T8."','".$T9."','".$T11."','".$T10."')";
$queryresult=mysql_query($sqlquery)
 or die("Could not execute query");
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Thank You</title>
<script language="javascript">
//window.history.forward(1);
function preventBack()
   {
   window.history.forward();

   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>

</head>

<body bgcolor="#D1D1D1">

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><font face="Bookman Old Style" size="7" color="#800000">Thank
You... </font></p>
<p align="center"><b><font face="Bookman Old Style" size="4" color="#800000">
Your data is saved ! ! ! </font></b></p>

</body>

</html>
