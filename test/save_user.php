	
<?php
    if (isset($_POST['first_name']))
		{ $first_name = $_POST['first_name']; 
	if ($first_name == '')
		{ unset($first_name);} } 
    if (isset($_POST['last_name']))
		{ $last_name=$_POST['last_name'];
	if ($last_name =='')
		{ 
	unset($last_name);
	} 
	}
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['password'])) { $password = $_POST['password']; if ($password == '') { unset($password);} }
if (isset($_POST['sex'])) { $sex = $_POST['sex']; if ($sex == '') { unset($sex);} }
if (isset($_POST['birthday'])) { $birthday = $_POST['birthday']; if ($birthday == '') { unset($birthday);} }





	if (empty($first_name) or empty($last_name)or empty ($email) or empty ($password)or empty ($sex)or empty ($birthday)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("You have entered not all information, return back and fill all fields!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $first_name = stripslashes($first_name);
    $first_name = htmlspecialchars($first_name);
 
    $last_name = stripslashes($last_name);
    $last_name = htmlspecialchars($last_name);
	
	
	
	$email = stripslashes($email);
    $email = htmlspecialchars($email);
	
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
	
	$sex = stripslashes($sex);
    $sex = htmlspecialchars($sex);
	
    $birthday = stripslashes($birthday);
    $birthday = htmlspecialchars($birthday);
	//удаляем лишние пробелы
    
	
	$first_name = trim($first_name);
    $last_name = trim($last_name);
 $email = trim($email);
 $password = trim($password);
 $sex = trim($sex);
 $birthday= trim($birthday);
 
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с такой ж почтой 
    $result = mysql_query("SELECT id FROM users WHERE email='$email'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Sorry, mail entered by you is already registered. Enter other mail.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (first_name,last_name,email,password,sex,birthday) VALUES('$first_name','$last_name','$email', '$password', '$sex', '$birthday')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "You are successfully registered! Now you can visit the website. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Mistake! You aren't registered.";
    }
    ?>
 
 
 
 
 