<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    if (isset($_POST['first_name'])) { $first_name = $_POST['first_name']; if ($first_name == '') { unset($first_name);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    
	if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
	
	if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
   
if (empty($first_name)  or empty($password) or empty($email))//если пользователь н, то выдаем ошибку и останавливаем скрипт

{ 
exit ("You have entered not all information, return back and fill all fields!");
  }
    //если данные введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $first_name = stripslashes($first_name);
    $first_name = htmlspecialchars($first_name);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
//удаляем лишние пробелы
    $first_name = trim($first_name);
    $last_name = trim($larst_name);
    $password = trim($password);
	$email = trim($email);
	
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
$result = mysql_query("SELECT * FROM users WHERE email='$email'",$db); //извлекаем из базы все данные о пользователе с введенной почтой

    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Sorry, the name,a surname or the password entered by you are incorrect.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['first_name']=$myrow['first_name'];
	
    $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo "You have successfully entered on the website!Now you can see weather in Zaporizhia for today. <a href='weather.php'>Weather</a>" ;
    }
 else {
    //если пароли не сошлись

    exit ("Sorry, the name entered by you or the password are incorrect.");
    }
    }
    ?>