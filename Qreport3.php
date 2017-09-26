
<?php
session_start();
$count = $_SESSION['cnt'];
$T1 = $_SESSION['T1'];
$T2 = $_SESSION['T2'];
$D1 = $_SESSION['D1'];
$D2 = $_SESSION['D2'];
$count++;
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
style="BORDER-LEFT-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
borderColor=#111111 height=597 cellSpacing=0 cellPadding=0 width="93%" 
  border=1>
  <TBODY>
  <TR>
    <TD width="50%" 
    height=284 bordercolor="#000000" style="BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #111111">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp;</FONT> <FONT size=2>&nbsp; </FONT><SPAN 
      style="FONT-SIZE: 10pt">Clarity and Understandability of teacher's 
      explanation </SPAN></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><SPAN 
      style="FONT-SIZE: 11pt"><B>&nbsp; </B></SPAN><I><B>&nbsp;1.</B> 
      Excellent<B>&nbsp; 2. </B>Good <B>&nbsp; 3. </B>Fair <B>&nbsp; 4. 
      </B>Poor</I></P>
      <TABLE id=AutoNumber2 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 height=239 cellSpacing=0 cellPadding=0 width="100%" 
      border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="20%" height=39 rowSpan=2><I><FONT 
            face="Times New Roman">Teacher code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="80%" colSpan=4 height=19>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>1</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>2</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>3</B></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>4</B></I></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=14><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(3,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(3,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(3,3,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(3,4,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,3,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(3,4,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=23><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(3,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(3,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(3,3,10);?></TD>
      <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(3,4,10);?></TD></TR></TBODY></TABLE></TD>
    <TD style="BORDER-RIGHT-WIDTH: 1px; BORDER-RIGHT-COLOR: #111111" width="50%" 
    height=284>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp;</FONT>&nbsp;&nbsp; Teacher's willingness to 
      help&nbsp;&nbsp;&nbsp; </B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><I><B>&nbsp;&nbsp; 1.&nbsp; 
      </B>Excellent <B>&nbsp;&nbsp;&nbsp;&nbsp; 
      2.</B>Good<B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.</B>Fair&nbsp;&nbsp; 
      <B>&nbsp; 4.</B>Poor</I></P>
      <TABLE id=AutoNumber3 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 height=237 cellSpacing=0 cellPadding=0 width="100%" 
      border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="20%" height=39 rowSpan=2><I><FONT 
            face="Times New Roman">Teacher code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="80%" colSpan=4 height=19>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>1</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>2</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>3</B></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>4</B></I></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=14><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(11,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(11,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(11,3,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(11,4,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=17><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=17><?php option(11,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=17><?php option(11,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=17><?php option(11,3,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=17><?php option(11,4,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,3,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(11,4,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=23><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(11,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(11,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(11,3,10);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=24><?php option(11,4,10);?></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD 
    width="50%" height=17 bordercolor="#000000" 
    style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid"></TD>
    <TD 
    style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
    width="50%" height=17>
      <P style="MARGIN-TOP: 1px; MARGIN-BOTTOM: 1px"></P></TD></TR>
  <TR>
    <TD width="50%" 
    height=294 bordercolor="#000000" style="BORDER-LEFT-WIDTH: 1px; BORDER-LEFT-COLOR: #111111">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp;</FONT>&nbsp; Knowledge of teacher in the 
      subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B>&nbsp; <I>1.&nbsp; 
      </I></B><I>Excellent<B>&nbsp; 2.</B>Good<B>&nbsp;&nbsp; 3.&nbsp; 
      </B>Fair&nbsp; <B>4.</B>Poor</I></P>
      <TABLE id=AutoNumber4 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 height=244 cellSpacing=0 cellPadding=0 width="100%" 
      border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="20%" height=39 rowSpan=2><I><FONT 
            face="Times New Roman">Teacher code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="80%" colSpan=4 height=19>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>1</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>2</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>3</B></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>4</B></I></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=14><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(14,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(14,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(14,3,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(14,4,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,3,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(14,4,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=28><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(14,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(14,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(14,3,10);?></TD>
      <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(14,4,10);?></TD></TR></TBODY></TABLE></TD>
    <TD style="BORDER-RIGHT-WIDTH: 1px; BORDER-RIGHT-COLOR: #111111" width="50%" 
    height=294>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp;</FONT>&nbsp;&nbsp; General assessment of the 
      student&nbsp;&nbsp;&nbsp;&nbsp; </B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><I><B>&nbsp;&nbsp; 1.&nbsp; 
      </B>Very Good <B>&nbsp; 2. </B>Good <B>&nbsp;&nbsp; 3. 
      </B>&nbsp;Average<B>&nbsp;&nbsp; 4.</B>Poor</I></P>
      <TABLE id=AutoNumber5 
      style="BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-COLLAPSE: collapse; BORDER-RIGHT-WIDTH: 0px" 
      borderColor=#111111 height=244 cellSpacing=0 cellPadding=0 width="100%" 
      border=1>
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          width="20%" height=39 rowSpan=2><I><FONT 
            face="Times New Roman">Teacher code</FONT></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          width="80%" colSpan=4 height=19>
            <P align=center><I><FONT 
          face="Times New Roman">score</FONT></I></P></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>1</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>2</B></I></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>3</B></I></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><I><B>4</B></I></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=14><B><FONT 
            face="Times New Roman">T1</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(15,1,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(15,2,1);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(15,3,1);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=14><?php option(15,4,1);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,2);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,2);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,2);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,3);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,3);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,3);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,4);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,4);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,4);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,5);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,5);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,5);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,6);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,6);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,6);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,7);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,7);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,7);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,8);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,8);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,8);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,1,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,2,9);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,3,9);?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="20%" height=19><?php option(15,4,9);?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=28><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(15,1,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(15,2,10);?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" height=29><?php option(15,3,10);?></TD>
<TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="20%" 
  height=29><?php option(15,4,10);?></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<br><br><br><p align="right"><a href="thank.html">End</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</BODY></HTML>
