<?php
session_start();
$count = $_SESSION['cnt'];
$T1 = $_SESSION['T1'];
$T2 = $_SESSION['T2'];
$D1 = $_SESSION['D1'];
$D2 = $_SESSION['D2'];
$count++;
?>
<?php
//session_start();
//$count = session_register('count');
//$T1 = session_register('T1');
//$T2 = session_register('T2');
//$D1 = session_register('D1');
//$D2 = session_register('D2');
//$count++;
?>
<?php $connect=mysql_connect("localhost","root","")
or die ("Connection to the server could not be established");
$result=mysql_select_db("evaluation")
or die ("Database could not be selected");
function option($qno,$opt,$tno)
{
global $count;
  $sqlquery="select count(*) from response where qno=".$qno." and t".$tno."=".$opt;
$result=mysql_query($sqlquery)
or die("Query cannot be executed");
$row=mysql_fetch_row($result);
echo $row[0];
}
?>

<script language="javascript">
//window.history.forward(1);
function preventBack() 
   {
   window.history.forward();
 
   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Evaluation Report</TITLE>
<META http-equiv=Content-Language content=en-us>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<META content=FrontPage.Editor.Document name=ProgId>
<META http-equiv=Content-Type content="text/html; charset=windows-1252"></HEAD>
<BODY>
<P align=center><SPAN style="LETTER-SPACING: 2pt"><B><FONT 
face="Times New Roman" size=5>Evaluation Report</FONT></B></SPAN></P>
<TABLE id=AutoNumber1 
style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
borderColor=#111111 cellSpacing=0 cellPadding=0 width="94%" border=1>
  <TBODY>
  <TR>
    <TD style="BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #111111" 
      width="49%"><P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; </FONT>&nbsp; Behaviour&nbsp; of the 
      teacher&nbsp;&nbsp;&nbsp;&nbsp; </B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><I>&nbsp;&nbsp; 
      1.Pleasant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. 
      Indifferent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.Unpleasant</I></P>
      <TABLE id=AutoNumber2 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 cellSpacing=0 cellPadding=0 width="100%" border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="25%" rowSpan=2><I><FONT face="Times New Roman">Teacher 
            code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="20%" colSpan=3 height=18>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">1</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">2</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="6%" height=18><B><I><FONT 
            face="Times New Roman">3</FONT></I></B></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(10,3,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(10,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(10,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(10,3,10);?></TD></TR></TBODY></TABLE></TD>
    <TD style="BORDER-RIGHT-WIDTH: 1px; BORDER-RIGHT-COLOR: #111111" 
width="51%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B>&nbsp; Whether all the 
      topics in the syllabus are taught?</B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><I>&nbsp; 
      1.100%&nbsp;&nbsp;&nbsp;&nbsp; 2. Above 75%&nbsp;&nbsp; 3. Below 
      75%</I></P>
      <TABLE id=AutoNumber6 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 cellSpacing=0 cellPadding=0 width="100%" border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="25%" rowSpan=2><I><FONT face="Times New Roman">Teacher 
            code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="20%" colSpan=3 height=18>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">1</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">2</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="6%" height=18><B><I><FONT 
            face="Times New Roman">3</FONT></I></B></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,5);?></TD> 
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(12,3,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(12,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(12,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(12,3,10);?></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #111111" 
      width="49%"><P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B>Whether the 
      teacher&nbsp; ONLY dictates notes without adequate 
      explanation?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <I>1.</I></B><I>Yes&nbsp; 
      <B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. </B>No</I></P>
      <TABLE id=AutoNumber7 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 cellSpacing=0 cellPadding=0 width="100%" border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="26%" rowSpan=2><I><FONT face="Times New Roman">Teacher 
            code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="74%" colSpan=2>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="14%" height=18><B><I><FONT 
            face="Times New Roman">1</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">2</FONT></I></B></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="4%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="40%"><?php option(5,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(5,2,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="4%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="40%"><?php option(5,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="34%"><?php option(5,2,10);?></TD></TR></TBODY></TABLE></TD>
    <TD style="BORDER-RIGHT-WIDTH: 1px; BORDER-RIGHT-COLOR: #111111" 
width="51%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B>Whether revision classes 
      and review test papers </B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B>are conducted by the 
      teacher&nbsp; 1<I>.</I></B><I>Yes 
      <B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. </B>No</I></P>
      <TABLE id=AutoNumber8 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 cellSpacing=0 cellPadding=0 width="100%" border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="33%" rowSpan=2><I><FONT face="Times New Roman">Teacher 
            code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="67%" colSpan=2>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">1</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">2</FONT></I></B></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="33%"><?php option(9,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="34%"><?php option(9,2,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="33%"><?php option(9,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="34%"><?php option(9,2,10);?></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD 
    style="BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #111111; BORDER-BOTTOM-WIDTH: 1px; BORDER-BOTTOM-COLOR: #111111" 
    width="49%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; </FONT>Teacher introduces current/emerging 
      topics</B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B>&nbsp; in the 
      lecture.&nbsp; </B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><I>&nbsp;1 
      Frequently&nbsp;&nbsp;&nbsp;&nbsp; 2. Sometimes&nbsp;&nbsp; 3. 
      Never</I></P>
      <TABLE id=AutoNumber5 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 cellSpacing=0 cellPadding=0 width="100%" border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="25%" rowSpan=2><I><FONT face="Times New Roman">Teacher 
            code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="20%" colSpan=3 height=18>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">1</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="7%" height=18><B><I><FONT 
            face="Times New Roman">2</FONT></I></B></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="6%" height=18><B><I><FONT 
            face="Times New Roman">3</FONT></I></B></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(13,3,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(13,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(13,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(13,3,10);?></TD></TR></TBODY></TABLE>

       </FONT></B></P></TBODY></TABLE>
<P align=right><I><B><FONT 
size=4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<a href="Qreport3.php">Contd . . .</a> 
 </FONT></B></I></P></BODY></HTML>
