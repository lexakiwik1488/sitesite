<?php session_start();?>
<?php  
   $kor=$_GET['kor'];
   if ($kor!="") {
   if (!isset($_SESSION['korzina'])) {
	$_SESSION['korzina'] = array();
	        }
            $_SESSION['korzina'] []= $kor;
	        }?>
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
        <p style="padding-top:20px; text-decoration:none;" class="text3"><font size="+1">���������� ������:</font></p>
        <p class="text">���� �� ����� ������ ������ ����� � ������ �������� �����, ��� ���� �������� ����� � �������, ����� �� ������ "��������" - ��� ����������� ����� � ���� �����. ��� ������ ����� ��������� � ���� �������. ���� ����� �� ���� ����, �� ������ �������� � ������� ��� ��������� ������ �������. ����� ����� ��������� �� �������� ���������� ������ � ������� ���� ���������� ������.</p>
        <p class="text">����� ����, ��� �� �������� �����, � ���� �������� ��� ��������-����������� �� ����������� ����� ��� �� �������� ��� ��������� �������, ������� � ����� ��������, � ��� �� ��������� ������� ������.</p>
        <p style="text-decoration:none;" class="text3"><font size="+1">��������:</font></p>
        <p class="text">�������� �� �����-���������� � ������ ������������ ��������� �� ��������� ��� ����� ���� � 10.00 �� 18.00 ����� �� ������.</p>
        <p class="text">� ������ ������ ����� �������� ���������� �� 1 �� 7 ������� ����:</p>
        <p>��������� ������ 190-790 ������<br>
        ��������� ������ ������	������� ��������� (�� 100 �� 1300 ���.)</p>
        <p style="text-decoration:none;" class="text3"><font size="+1">������:</font></p>
        <p class="text">1. ������ �������� "���������" ������� ��� ��������� ������ � ���� ��������������� ����������. ����� ������� �������� � �������:</p>
        <p>�����-���������, ������, ���������, �������, ������ + �������, �����, �.�������� + �������, ������-��-���� + �������, ������ + �������, ������ + �������, �����.</p>
        <p class="text">2. ����� �������� ������. � ���� ������ ��� ����� ������� ��������� ��� ������.</p>
        <p style="text-decoration:none;" class="text3"><font size="+1">��������:</font></p>
        <p class="text">��������� ��� ������ ����� �������� �������������, ����� ���������� ������������ ��, ���������� ������������� �� ������� �����, � ����� ��������� ����������� ������.</p>
        <p class="text">�������� �� ���� �������� �������������� ������ ��� ������� ��������� � ��������� ������������ ������������ ������. � ��� ������ ���� ������� - ������, �������� ����� ���� �� ����, ���� ������� �����, ����������� ����. ����� �� ������ ������ ������ ������ ������ �����������-��������.</p>
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
