<?php
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == ''){ unset($name);} } 
    if (isset($_POST['email'])){ $email=$_POST['email']; if ($email =='') {unset($email); } }
	if (isset($_POST['message'])) { $message = $_POST['message']; if ($email == 'message') { unset($message);} }
	
	
	if (empty($name) or empty($email)or empty ($message)) 
		{
    exit ("You have entered not all information, return back and fill all fields!");
    }
    // ���� �� ��� ���� ����� ������
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
	$message= stripslashes($message);
    $message = htmlspecialchars($message);
	
	//������� 
	$name = trim($name);
    $email = trim($email);
    $message = trim($message);
	
	//�����. � ����
	include ("bd1.php");
	// �������� �� ������������� ������������ � ����� � ������ 
    $result = mysql_query("SELECT id FROM shoutbox WHERE email='$email'",$db);
    $myrow = mysql_fetch_array ($result);
    
	if (!empty($myrow['id'])) {
    exit ("Sorry, mail entered by you can not use . Enter other mail.");
    }
 // ���� ������ ���, �� ��������� ������
    $result2 = mysql_query ("INSERT INTO shoutbox (name,email,message) VALUES('$name','$email', '$message')");
    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
    echo "You are successfully left message! <a href='index.php'>������� ��������</a>";
    }
 else {
    echo "Mistake!.";
    }
   $result_set = $mysqli->query("SELECT * FROM `shoutbox` WHERE `message`='$message'"); //����������� ��� ����������� ��� ������ ��������
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //����� ������������
    echo "<br />";
  }
?>

	


 
 
 
  