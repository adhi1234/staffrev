<?php
session_start();
//session_start();
 //$_SESSION['count']=$_POST['count'];
// $_SESSION['T1']=$_POST['T1'];
//$_SESSION['D1']=$_POST['D1'];
//$_SESSION['T2']=$_POST['T2'];
$_SESSION['cnt']=$_SESSION['cnt']+1;
$D2=$_SESSION['D2'];
$D1=$_SESSION['D1'];
$T2=$_SESSION['T2'];
$T1=$_SESSION['T1'];
$count=$_SESSION['cnt'];
 if( $count>$T1)
{
header("Location:thank.html");
exit;
}

$connect=mysql_connect("localhost","root","")
or die ("Connection to the server could not be established");
$result=mysql_select_db("evaluation")
or die ("Database could not be selected");

function option($qno,$opt)
{
// global $count;

$sqlquery="select count(*) from response where qno=".$qno." and t".$_SESSION['cnt']."=".$opt;
$result=mysql_query($sqlquery)
or die("Query cannot be executed");
$row=mysql_fetch_row($result);
echo $row[0]; 
}
function studentno()
{
global $count;
 $sqlquery="select count(*) from response where t".count."!=' '";
$result=mysql_query($sqlquery)
or die("Query cannot be executed");
$row1=mysql_fetch_row($result);
$n=(int)($row1[0]/15);
echo $n;
}
?>

<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Evaluation Report of Teacher</title>
</head>

<body>
<font size=1>
T<?php echo $count; ?>&nbsp;</font>
<font size="5" face="Book Antiqua">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<center>EVALUATION REPORT </center></font>

<br>
<META http-equiv=Content-Language content=en-us>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<META content=FrontPage.Editor.Document name=ProgId>
<META http-equiv=Content-Type content="text/html; charset=windows-1252"></HEAD>
<BODY>
<TABLE id=AutoNumber1
style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px"
borderColor=#111111 cellSpacing=0 cellPadding=0 width="96%" border=0>
  <TBODY>
  <TR>
    <TD
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none"
    width="100%"><I><FONT face="Book Antiqua" size=3>Dear Sri/Smt&nbsp;
      .................................................................................,</FONT></I></TD></TR>   <TR>     <TD     style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none"     width="100%"> 
      <P align=justify><I><FONT face="Book Antiqua"       size=3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The<B>
     <?php echo $D2; ?> </B>&nbsp;Semester <B><?php echo $D1; ?></B>&nbsp; Batch Students have evaluated
      your classes taken for them during <B><?php echo $T2; ?></B>, which is
      summarized below. You may analyze their opinion critically. I request you
      to pay due attention on deserving points so that the teaching-learning
      process becomes more effective</FONT></I></P></TD></TR><tr><td>
  <TR>
    <TD     style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none"     width="100%"><I><FONT face="Book Antiqua"       size=2>Chegannur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      With Best Wishes</FONT></I></TD></TR>
  <TR>
    <TD
    style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none"
    width="100%"><FONT face="Book Antiqua" size=2><I><?php echo date("d-M-Y");?> &nbsp; </I></FONT>
      <P><FONT face="Book Antiqua"
      size=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <B>PRINCIPAL</B></FONT></P></TD></TR></TBODY></TABLE><br>
<center><u><b>SUMMARY  OF  EVALUATION</b></u></center>
<form method="POST" action="report.php">
<font size="2">
<!--webbot bot="SaveResults" u-file="D:\Evaluation\_private\form_results.csv" s-format="TEXT/CSV" s-label-fields="TRUE" --><table border="1" cellpadding="1" cellspacing="0" style="border-width:3; padding:0; border-collapse: collapse; border-style: solid; " bordercolor="#800000" width="93%" id="AutoNumber1" height="364">
<font size="5">
  <tr>
    <td width="50%" height="74"><b>1.Speed of Presentation</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2" height="47">
      <tr>
        <td width="26%" height="23" style="border-style: none; border-width: medium">
        <i>Just Right&nbsp;&nbsp;</i></td>
       <td width="25%" height="23" style="border-style: none; border-width: medium">
<?php 
option(1,1);
?>

<b>&nbsp; </b></td>
        <td width="29%" align="left" height="23" style="border-style: none; border-width: medium">
        <i>Too Slow </i> </td>
        <td width="139%" align="left" height="23" style="border-style: none; border-width: medium"><?php option(1,2); ?>          &nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="24" style="border-style: none; border-width: medium">
        <i>Too Fast&nbsp;&nbsp;&nbsp;&nbsp; </i>        </td>
        <td width="25%" height="24" style="border-style: none; border-width: medium">
<?php option(1,3); ?>&nbsp;</td>
        <td width="168%" height="24" colspan="2" style="border-style: none; border-width: medium">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="74"><b>9.Whether revision classes and review test 
    papers are conducted by the teacher</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber10" height="15">
      <tr>
        <td width="26%" height="19"><i>Yes</i></td>
        <td width="25%" height="19">
<?php option(9,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>No</i></td>
        <td width="139%" align="left" height="19">
<?php option(9,2); ?>&nbsp;</td>
      </tr>
      </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="74"><b>2.Use of the Blackboard</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber3" height="9">
      <tr>
        <td width="26%" height="19"><i>Effective&nbsp;</i></td>
        <td width="25%" height="19">
<?php option(2,1); ?>&nbsp;</td>
<td width="29%" align="left" height="19"><i>Not Effective</i></td>
        <td width="139%" align="left" height="19">
<?php option(2,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="13"><i>Rarely Uses</i></td>
        <td width="25%" height="13">
<?php option(2,3); ?></td>
        <td width="168%" height="13" colspan="2"></td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="74"><b>10.Behavior of the teacher</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber11" height="15">
      <tr>
        <td width="26%" height="19"><i>Pleasant&nbsp;</i></td>
        <td width="25%" height="19">
<?php option(10,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Indifferent</i></td>
        <td width="139%" align="left" height="19">
<?php option(10,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Unpleasant</i></td>
        <td width="25%" height="19">
<?php option(10,3); ?>&nbsp;</td>
        <td width="168%" height="19" colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="74"><b>3.Clarity and Understandability of teacher's 
    explanation</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4" height="15">
      <tr>
        <td width="26%" height="19"><i>Excellent</i></td>
        <td width="25%" height="19">
<?php option(3,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Good</i></td>
        <td width="139%" align="left" height="19">
<?php option(3,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Fair</i></td>
        <td width="25%" height="19">
<?php option(3,3); ?>&nbsp;</td>
        <td width="29%" height="19"><i>Poor</i></td>
        <td width="139%" height="19">
<?php option(3,4); ?>&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="74"><b>11.Teacher's willingness to help</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber12" height="10">
      <tr>
        <td width="26%" height="18"><i>Excellent</i></td>
        <td width="25%" height="18">
<?php option(11,1); ?></td>
        <td width="29%" align="left" height="18"><i>Good</i></td>
        <td width="139%" align="left" height="18">
<?php option(11,2); ?></td>
      </tr>
      <tr>
        <td width="26%" height="15"><i>Fair</i></td>
        <td width="25%" height="15">
<?php option(11,3); ?></td>
        <td width="17%" height="15" ><i>Poor</i></td>
<td width="151%" height="15">
<?php option(11,4); ?> &nbsp;  </td>       
</tr> 
    </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="74"><b>4.Does the teacher encourage Questioning</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber5" height="15">
      <tr>
        <td width="26%" height="19"><i>Yes</i></td>
        <td width="25%" height="19">
<?php option(4,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Sometimes</i></td>
        <td width="139%" align="left" height="19">
<?php option(4,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>No</i></td>
        <td width="25%" height="19">
<?php option(4,3); ?>&nbsp;</td>
        <td width="168%" height="19" colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="74"><b>12. Whether all the topics in the syllabus are 
    taught?</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber13" height="15">
      <tr>
        <td width="26%" height="19">100%</i></td>
        <td width="25%" height="19">
<?php option(12,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Above 75%</i></td>
        <td width="139%" align="left" height="19">
<?php option(12,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Below 75%</i></td>
        <td width="25%" height="19">
<?php option(12,3); ?>&nbsp;</td>
        <td width="168%" height="19" colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="74"><b>5.Whether the teacher ONLY dictates notes 
    without adequate explanation?</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber6" height="15">
      <tr>
        <td width="26%" height="19"><i>Yes&nbsp;</i></td>
        <td width="25%" height="19">
<?php option(5,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>No</i></td>
        <td width="139%" align="left" height="19">
<?php option(5,2); ?>&nbsp;</td>
      </tr>
      </table>
    
    </td>
    <td width="50%" height="74"><b>13. Teacher introduces current/emerging topics 
    in the lecture </b>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber14" height="15">
      <tr>
        <td width="26%" height="19"><i>Frequently&nbsp;</i></td>
        <td width="25%" height="19">
<?php option(13,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Sometimes</i></td>
        <td width="139%" align="left" height="19">
<?php option(13,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Never</i></td>
        <td width="25%" height="19">
<?php option(13,3); ?>&nbsp;</td>
        <td width="168%" height="19" colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="75"><b>6.Does the teacher review notes prepared by 
    students?</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber7" height="15">
      <tr>
        <td width="26%" height="19"><i>Frequently</i></td>
        <td width="25%" height="19">
<?php option(6,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Sometimes</i></td>
        <td width="139%" align="left" height="19">
<?php option(6,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Never</i></td>
        <td width="25%" height="19">
<?php option(6,3); ?>&nbsp;</td>
        <td width="168%" height="19" colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="75"><b>14. Knowledge of teacher in the subject</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber15" height="15">
      <tr>
        <td width="26%" height="19"><i>Excellent&nbsp;</i></td>
        <td width="25%" height="19">
<?php option(14,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Good</i></td>
        <td width="139%" align="left" height="19">
<?php option(14,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Fair</i></td>
        <td width="25%" height="19">
<?php option(14,3); ?> &nbsp;</td>
        <td width="28%" height="19" ><i>Poor</i></td>
        <td width="140%" height="19">
<?php option(14,4); ?> &nbsp;</td>       
</tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="75"><b>7.Approximate percentage of classes NOT engaged 
    by the teacher</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber8" height="15">
      <tr>
        <td width="28%" height="19"><i>&lt 10%</i></td>
        <td width="23%" height="19">
<?php option(7,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>10% - 25%</i></td>
        <td width="139%" align="left" height="19">
<?php option(7,2); ?> &nbsp;</td>
      </tr>
      <tr>
        <td width="28%" height="19"><i>&gt 25%</i></td>
        <td width="23%" height="19">
<?php option(7,3); ?> &nbsp;</td>
        <td width="168%" height="19" colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="75"><b>15.General assessment of the student</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber16" height="15">
      <tr>
        <td width="26%" height="19"><i>Very Good</i></td>
        <td width="25%" height="19">
<?php option(15,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Good</i></td>
        <td width="139%" align="left" height="19">
<?php option(15,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="26%" height="19"><i>Average</i></td>
        <td width="25%" height="19">
<?php option(15,3); ?>&nbsp;</td>
        <td width="12%" height="19" ><i>Poor</i></td>
        <td width="156%" height=19>
<?php option(15,4); ?> &nbsp;</td>
      </tr>
    </table>
    
    </td>
  </tr>
  <tr>
    <td width="50%" height="75"><b>8.Regularity in valuing Tests and assignments</b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber9" height="15">
      <tr>
        <td width="26%" height="19"><i>Quite Punctual</i></td>
        <td width="25%" height="19">
<?php option(8,1); ?>&nbsp;</td>
        <td width="29%" align="left" height="19"><i>Not Punctual</i></td>
        <td width="139%" align="left" height="19">
<?php option(8,2); ?>&nbsp;</td>
      </tr>
      <tr>
        <td width="56%" height="19" colspan="2"><i>Doesn't return a valued script 
        at all</i></td>
        <td width="163%" height="19" colspan="2">
<?php option(8,3); $count=$count+1; ?>&nbsp;</td>
      </tr>
    </table>
    
    </td>
    <td width="50%" height="75"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </b>
    <p></td>
  </tr></font>
</table>
<p align="center"><font face="Book Antiqua"><b><input type="submit" value="Next" name="B1"></b></font></p>
</form>
</body>

</html>
