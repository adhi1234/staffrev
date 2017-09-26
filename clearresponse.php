
<?php 
$connect=mysql_connect("localhost","root","")
or die ("Connection to the server could not be established");
$result=mysql_select_db("evaluation")
or die ("Database could not be selected");
$sqlquery="delete from response";
$result=mysql_query($sqlquery)
or die("Query cannot be executed");

echo "<html><head><title>CEC</title></head>";
echo "<body bgcolor=\"#cccccccc\"><br><br><br><p align=\"center\">";
echo "<font size=\"5\" color=\"#80000000\">Database Deleted!</font>";
echo "<p align=\"center\"><font size=\"5\" color=\"#80000000\">Thank You";
echo ";<br><br><p align=\"center\">";
echo "<font size=\"3\" color=\"#80000000\">";
echo "<a href=\"http://192.168.0.253/dashboard/\" >HOME</a></font>";
echo "</body></html>";
?>
