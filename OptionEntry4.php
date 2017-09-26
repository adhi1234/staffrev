<?
$connect=mysql_connect("localhost","root","admin82fe")
or die ("Connection to the server could not be established");
$result=mysql_select_db("evaluation");
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
$sqlquery="insert into response values(3,'$T2','$T3','$T4','$T5','$T6','$T7','$T8','$T9','$T10','$T11')";






//$sqlquery="insert into response values(3,'".$_POST[T2]."','".$_POST[T3]."','".$_POST[T4]."','".$_POST[T5]."','".$_POST[T6]."','".$_POST[T7]."','".$_POST[T8]."','".$_POST[T9]."','".$_POST[T11]."','".$_POST[T10]."')";

//$sqlquery="insert into response values(3,'".$T2."','".$T3."','".$T4."','".$T5."','".$T6."','".$T7."','".$T8."','".$T9."','".$T11."','".$T10."')";
$queryresult=mysql_query($sqlquery)
 or die("Could not execute query");

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>QUESTION  4 </title>

 <SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31
            && (charCode < 49 || charCode > 51))
             return false;

          return true;
       }
    </SCRIPT>




<script language="javascript">
//window.history.forward(1);
function preventBack()
   {
   window.history.forward();

   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>

<style type="text/css">

.style10 {font-family: "Trebuchet MS"; font-weight: bold;}
.style14 {font-family: "Trebuchet MS"; font-weight: bold; color: #FF0000; }
.style16 {font-family: "Trebuchet MS"; font-weight: bold; color: #000000; }
.style17 {
	color: #FF0000;
	font-weight: bold;
}
.style18 {font-family: "Trebuchet MS"}

</style>
</head>

<body bgcolor="#D1D1D1">

<form method="POST" action="OptionEntry5.php">
  <!--webbot bot="SaveResults" u-file="D:\Evaluation\_private\form_results.csv" s-format="TEXT/CSV" s-label-fields="TRUE" -->
  <p align="center" class="style16">ONLINE STAFF EVALUATION </p>
  <div align="center">
    <center>
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4" height="106">
        <tr>
          <td height="37" bgcolor="#C1CFEE"><span class="style14" style="margin-top: 0; margin-bottom: 0">Instruction to the Students </span></td>
        </tr>
        <tr>
          <td width="100%" height="37" bgcolor="#C1CFEE"><ul class="style10">
              <li>
                <p style="margin-top: 0; margin-bottom: 0">Read the
                  questions carefully and write the option code in the appropriate box, as per
                  your assessment of teachers.</p>
              </li>
          </ul></td>
        </tr>
        <tr>
          <td width="100%" height="1" bgcolor="#C1CFEE"><ul class="style10">
              <li>
                <p style="margin-top: 0; margin-bottom: 0">You should
                  not consult anybody for making your assessment.</p>
              </li>
          </ul></td>
        </tr>
        <tr>
          <td width="100%" height="1" bgcolor="#C1CFEE"><ul class="style10">
              <li>
                <p style="margin-top: 0; margin-bottom: 0">Your
                  appraisal of teachers will be kept confidential and will not be disclosed
                  under any circumstances.</p>
              </li>
          </ul></td>
        </tr>
        <tr>
          <td width="100%" height="30" bgcolor="#C1CFEE"><ul class="style10">
              <li>
                <p style="margin-top: 0; margin-bottom: 0">Your
                  sincere co-operation on the evaluation will help the academic advancement of
                  your institution.</p>
              </li>
          </ul></td>
        </tr>
      </table>
    </center>
  </div>
  <p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
  <div align="center"></div>
  <p style="margin-top: 0; margin-bottom: 0"><b>
  <font face="Georgia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></p>
  <p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
  <table border="0" cellpadding="0" align= center cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="53%" id="AutoNumber2" height="37">
    <tr bgcolor="#CCCCCC">
      <td width="23%" height="37" bgcolor="#FFFFFF"><span class="style18" style="margin-top: 0; margin-bottom: 0"><b>Question</b> : <span class="style17">4</span></span></td>
      <td width="77%" bgcolor="#FFFFFF"><span class="style18"><b>&nbsp;Does the teacher
      encourage questioning ? </b></span></td>
    </tr>
  </table>
  <p style="margin-top: 0; margin-bottom: 0"><font face="Georgia"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></p>
  <div align="center">
    <center>
  <table border="0" cellpadding="0" cellspacing="0"  bordercolor="#111111" width="54%" height="151" style="border-collapse: collapse">
    <tr>
      <td height="43" colspan="3" align="justify">
        <p align="left" style="margin-top: 0; margin-bottom: 0"><font face="Georgia"><b>&nbsp; Options</b></font></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="29%" height="44" align="justify">
        <p align="center" class="style10" style="margin-top: 0; margin-bottom: 0">1. Yes</td>
      <td width="46%" align="justify"><div align="center"><span class="style10" style="margin-top: 0; margin-bottom: 0">2. Sometimes</span></div></td>
      <td width="25%" align="justify"><div align="center"><span class="style10">3. No</span></div></td>
    </tr>
    <tr>
      <td height="46" colspan="3" align="justify">&nbsp;</td>
    </tr>
    </table>
    </center>
  </div>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="91%" id="AutoNumber3" align="center" height="55">
    <tr>
      <td width="10%" align="center" height="19"><span class="style10">T1</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T2</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T3</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T4</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T5</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T6</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T7</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T8</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T9</span></td>
      <td width="10%" align="center" height="19"><span class="style10">T10</span></td>
    </tr>
    <tr>
      <td width="10%" height="29">
      <p align="center">
      <!--webbot bot="Validation" s-validation-constraint="Less than or equal to" s-validation-value="4" -->
      <input type="text" name="T2" size="5" maxlength="1" onkeypress="return isNumberKey(event)"   ></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T3" size="5"  maxlength="1" onkeypress="return isNumberKey(event)" ></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T4"  size="5" maxlength="1" onkeypress="return isNumberKey(event)"></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T5" size="5" maxlength="1" onkeypress="return isNumberKey(event)"></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T6" size="5" maxlength="1" onkeypress="return isNumberKey(event)"></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T7"  maxlength="1"  size="5" onkeypress="return isNumberKey(event)"></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" size="5" name="T8" maxlength="1" onkeypress="return isNumberKey(event)"></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T9" size="5" maxlength="1" onkeypress="return isNumberKey(event)" ></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T11" size="5" o maxlength="1" onkeypress="return isNumberKey(event)" ></td>
      <td width="10%" height="1">
      <p align="center"><input type="text" name="T10" size="5" maxlength="1" onkeypress="return isNumberKey(event)" ></td>
    </tr>
  </table>
  <p align="center"><input type="submit" value="Submit" name="B1" ></p>
 </form>

</body>

</html>
