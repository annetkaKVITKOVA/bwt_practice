<?php
    session_start();//  ��� ��������� �������� �� �������. ������ � ��� �������� ������  ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� �  ����� ������ ���������!!!
    if (isset($_POST['first_name'])) { $first_name = $_POST['first_name']; if ($first_name == '') { unset($first_name);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
    
	if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
	
	if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
   
if (empty($first_name)  or empty($password) or empty($email))//���� ������������ �, �� ������ ������ � ������������� ������

{ 
exit ("You have entered not all information, return back and fill all fields!");
  }
    //���� ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
    $first_name = stripslashes($first_name);
    $first_name = htmlspecialchars($first_name);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
//������� ������ �������
    $first_name = trim($first_name);
    $last_name = trim($larst_name);
    $password = trim($password);
	$email = trim($email);
	
// ������������ � ����
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
 
$result = mysql_query("SELECT * FROM users WHERE email='$email'",$db); //��������� �� ���� ��� ������ � ������������ � ��������� ������

    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //���� ������������ � ��������� ������� �� ����������
    exit ("Sorry, the name,a surname or the password entered by you are incorrect.");
    }
    else {
    //���� ����������, �� ������� ������
    if ($myrow['password']==$password) {
    //���� ������ ���������, �� ��������� ������������ ������! ������ ��� ����������, �� �����!
    $_SESSION['first_name']=$myrow['first_name'];
	
    $_SESSION['id']=$myrow['id'];//��� ������ ����� ����� ������������, ��� �� � ����� "������ � �����" �������� ������������
    echo "You have successfully entered on the website!Now you can see weather in Zaporizhia for today. <a href='weather.php'>Weather</a>" ;
    }
 else {
    //���� ������ �� �������

    exit ("Sorry, the name entered by you or the password are incorrect.");
    }
    }
    ?>