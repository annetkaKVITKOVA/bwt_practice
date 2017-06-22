<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
	
    <title>Weather today</title>
    </head>
	
	<style>
  body { 
  background: #000000 url(kosmos.jpg); 
  color: #FFFFFF;
  }
</style>
    <body>
	<h2>WEATHER IN ZP TODAY</h2>
    <h2>Homepage</h2>
    <form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 <p>
    <label>First_name:<br></label>
    <input name="first_name" type="text" size="50" maxlength="50">
    </p>


    <p>

    <label>Password:<br></label>
    <input name="password" type="password" size="50" maxlength="50">
    </p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

	<p>
    <label>Email:<br></label>
    <input name="email" type="text" size="50" maxlength="50">
    </p>

    <p>
    <input type="submit" name="submit" value="Enter">

    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href="reg.php">Check-in</a> 
    </p></form>
    <br>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['first_name']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "You have entered on the website as the guest <br><a href='#'> _WEATHER_IN_ZP_(This reference is available only to the registered users) </a>";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "You have entered on the website as ".$_SESSION['first_name']." <br><a  href='weather.php'> This reference is available only to the registered users</a>";
    }
    ?>
    </body>
    </html>
	<form name="message" action="message.php" method="post">
  <p>
    <label>Name:</label>
    <input type="text" name="name" size="50" maxlength="50" />
  </p>
  <p>
    <label>Email:</label>
    <input type="text" name="email" size="50" maxlength="50" />
  </p>
  <p>
    <label>Message:</label>
    <br />
    <textarea name="message" cols="50" rows="20"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <input type="submit" value="Send" />
  </p>
</form>