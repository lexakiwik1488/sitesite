<?php session_start();?>
<?php   $kor=$_GET['kor'];
   if ($kor!="") {
   if (!isset($_SESSION['korzina'])) {
	$_SESSION['korzina'] = array();
	        }
            $_SESSION['korzina'] []= $kor;
	        }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="icon" type="image/x-icon" href="img/favicon.gif">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.gif">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��������-������� �����</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
require_once('lib/datalib.php');
init_connection();
?>
<table width=1240px border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table">
      <tr>
        <?php include("blocks/top.php");?>
      </tr>
    </table>
  </tr>
  <tr>
    <?php include ("blocks/menu.php");?>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <?php include("blocks/left.php");?>
        <td width="65%" valign="top">
        <p class="text" style="padding-top:20px;">��� ������ �����, � ����� �� ���� �������� � ����������, ��������� � ������� ������ ��������-�������� ������� ���������� �� ���������:</p>
        <p class="text3">� ������ +7 (495) 217-63-13</p>
        <p class="text3">� �����-���������� +7 (812) 346-19-84</p>
        <p class="text">������ ����������� 7 ���� � ������ � 9-00 �� 21-00 �� ����������� �������.</p>
        <p class="text">����� �� ������ ��������� � ���� �� ����������� �����:</p>
        <p align="center"><a href="mailto:sales@oclock.ru"  class="text3">sales@oclock.ru</a> 
        <p class="text">��. �����: 125009, ������, ������, ������� ��., 3.
        <p class="text3" style="text-decoration:none;"><font size="+1">� ��������</font></p>
        <p><img src="img/333.gif" style="float:LEFT; width:300px;" class="img" alt="image"></p>
        <p class="text">�������� O'Clock! � �������� � 2007 ���� � �������� ��������-��������� ������������ ���������� ����������� � �������� ������� �������. �� ������� ������ ��������� ���� ������� ������� ��������������. �� ��� ���� ���� ����������� �������� � ���������� ������������. </p>
        <p class="text">�� ������ ������ �� ������������ ������� � ������, �����-���������� � �������� ������. ���������� ��������, ��� ���������� ������� ������� ����� �� �������� ������ ������. ������������ ������� ���������� ��� 35% �� ������� ��������-��������. </p>
        <p class="text">������������ �������������� � ��������������� ����� "��������", ��� �����������, ��� ����������� ������������ � ��������-�������� ����������� �������������, ������ ���������� ������ �����������, �������� � ������������ ������� �����, � ����� ��������� ��������� ���������.</p>
        <p class="text">����������� ���� ������ � ������ �������� ����� ��������� ���������� ����� ����������� ���������� � ������������� ��������� ��� �� ������� ������� �������������� �����, ����� ���: Charmex, Hugo Boss, Kolber, Valentino, Chronotech, Roberto Cavalli, Anne Klein.</p>
        <p class="text3" style="text-decoration:none;"><font size="+1">������������� ��������</font></p>
        <p class="text">� ����� ��������-�������� �� ������ ��������� ��� ���� ��������� ����� ����, ��� � ������������ ������ ����������� �����, ������� ������ �� �������� � ������� ���� ����������! �� ����� ���������� ������������� �������� ��� �������������� ������ ��� ������ �� 5 ��������, ��� � ���������� ��������������� �������� � ������� �����, � ���������������� ������������ ������� ��� ������������ � �������������.</p>
        </td>
          <?php include("blocks/right.php");?>
      </tr>
    </table> 
    </td>
  </tr>
  <tr>
    <?php include("blocks/bottom.php");?>
  </tr>
</table>
</body>
</html>
