



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

function studentno()
{
 $sqlquery="select count(*) from response";
$result=mysql_query($sqlquery)
or die("Query cannot be executed");
$row1=mysql_fetch_row($result);
$n=(int)($row1[0]/15);
echo $n;
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
<table cellpadding="5" cellspacing="0" width="93%" id="AutoNumber1" >
<tr><td>
<font face="Monotype Corsiva" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Following are the summary of the staff performance&nbsp; evaluation by <b> <?php studentno();?></b> Students of <?php echo $D2;?></b>&nbsp;Semester <b> <?php echo $D1; ?></b>&nbsp; Batch, during <b><?php echo $T2;?></b> &nbsp;&nbsp;&nbsp; </font>
</tr>
</table>
<TABLE id=AutoNumber1 style="BORDER-COLLAPSE: collapse" borderColor=#111111 
cellSpacing=0 cellPadding=0 width="91%" border=1>
  <TBODY>
  <TR>
    <TD width="51%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; </FONT></B><FONT 
      face="Times New Roman"><B>Speed of presentation </B></FONT></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
      face="Times New Roman"><I>&nbsp;&nbsp; <B>1.</B>Just right&nbsp;&nbsp; 
      &nbsp; <B>2.</B> Too slow&nbsp; &nbsp;<B>3. </B>Too fast</I></FONT></P>
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
          align=middle width="25%"><?php option(1,1,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,1); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,2); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,3); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,4); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,5); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,6); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,7); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,8); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,1,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,2,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(1,3,9); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(1,1,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(1,2,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(1,3,10); ?></TD></TR></TBODY></TABLE></TD>
    <TD width="49%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman"><SPAN style="FONT-SIZE: 11pt">Does the teacher 
      review notes prepared by students?</SPAN></FONT></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
      face="Times New Roman">&nbsp; 
      <I><B>1.</B>Frequently&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <B>2.</B>Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <B>3.</B>Never</I></FONT></P>
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
          align=middle width="25%">

          <?php option(6,1,1); ?>




</TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"> <?php option(6,2,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"> <?php option(6,3,1); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"> <?php option(6,1,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,2); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,3); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,4); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,5); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,6); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,7); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,8); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,1,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,2,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(6,3,9); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(6,1,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(6,2,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(6,3,10); ?></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD width="51%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; Use of the Blackboard</FONT></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
      face="Times New Roman"><I>&nbsp;<B>1.</B>Effective&nbsp; <B>&nbsp;2. 
      </B>Not Effective&nbsp;&nbsp; <B>3.</B>Rarely Uses</I></FONT></P>
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
          align=middle width="25%"><?php option(2,1,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,1); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,2); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,3); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,4); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,5); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,6); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,7); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,8); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,1,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,2,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(2,3,9); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(2,1,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(2,2,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(2,3,10); ?></TD></TR></TBODY></TABLE></TD>
    <TD width="49%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; Does the teacher encourage questioning 
      ?</FONT></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
      face="Times New Roman">&nbsp;&nbsp; 
      <I><B>1.</B>Yes&nbsp;&nbsp;<B>&nbsp;&nbsp;&nbsp;&nbsp; 
      2.</B>Sometimes&nbsp;&nbsp;&nbsp; <B>&nbsp;&nbsp;&nbsp; 3. 
      </B>No</I></FONT></P>
      <TABLE id=AutoNumber7 
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
          align=middle width="25%"><?php option(4,1,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,1); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,2); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,3); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,4); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,5); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,6); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,7); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,8); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,1,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,2,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(4,3,9); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(4,1,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(4,2,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(4,3,10); ?></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD width="51%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; Approximate percentage of classes 
      </FONT></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">&nbsp; NOT engaged by the teacher </FONT></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
      face="Times New Roman"><I>&nbsp;<B> 1.</B>&nbsp; &lt; 
      10%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <B>2. </B>10% - 
      25%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <B>3.</B> &gt; 25%</I></FONT></P>
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
          align=middle width="25%"><?php option(7,1,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,1); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,2); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,3); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,4); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,5); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,6); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,7); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,8); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,1,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,2,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(7,3,9); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(7,1,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(7,2,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(7,3,10); ?></TD></TR></TBODY></TABLE></TD>
    <TD width="49%">
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><B><FONT 
      face="Times New Roman">Regularity in valuing tests &amp; 
      assignments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </FONT></B></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><FONT 
      face="Times New Roman"><B>&nbsp; </B><I><B>1</B>.Quite 
      Punctual&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <B>2.</B> Not Punctual&nbsp;&nbsp; </I></FONT></P>
      <P style="MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px"><I><FONT 
      face="Times New Roman">&nbsp;<B>3. </B>Doesn't return the&nbsp; valued 
      script at all</FONT></I></P>
      <TABLE id=AutoNumber7 
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
          align=middle width="25%"><?php option(8,1,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,1); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,1); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T2</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,2); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,2); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T3</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,3); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,3); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T4</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,4); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,4); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T5</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,5); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,5); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T6</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,6); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,6); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T7</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,7); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,7); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T8</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,8); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,8); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: 1px solid" 
          align=middle width="11%" height=19><B><FONT 
            face="Times New Roman">T9</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,1,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,2,9); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid" 
          align=middle width="25%"><?php option(8,3,9); ?></TD></TR>
        <TR>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
          align=middle width="11%" height=24><B><FONT 
            face="Times New Roman">T10</FONT></B></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(8,1,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(8,2,10); ?></TD>
          <TD 
          style="BORDER-RIGHT: medium none; BORDER-TOP: 1px solid; BORDER-LEFT: 1px solid; BORDER-BOTTOM: medium none" 
          align=middle width="25%"><?php option(8,3,10); ?></TD></TR></TBODY></TABLE></td></tr></table>
<P align=right><I><B><FONT 
size=4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Qreport2.php">Contd . . .</a> </FONT></B></I></P></BODY></HTML>
