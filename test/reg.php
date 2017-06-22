<html>
    <head>
    <title>Registration
	
	</title>
    </head>
	
	<style>
  body { 
  background: #000000 url(kosmos.jpg); 
  color: #FFFFFF;
  }
</style>
    <body>
    <h2>Registration</h2>
    <form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>First Name:<br></label>
    <input name="first_name" type="text" size="50" maxlength="50">
    </p>

<p>


<label>Last Name:<br></label>
    <input name="last_name" type="text" size="50" maxlength="50">
    </p>
	
	<p>
<label>E-mail:<br></label>
    <input name="email" type="text" size="50" maxlength="50">
    </p>

<p>
<label>Password:<br></label>
    <input name="password" type="password" size="50" maxlength="50">
    </p>

<p>
<label>Sex:<br></label>
    <input name="sex" type="enum" size="1" maxlength="1">
    </p>

<p>

<label>Birthday:<br></label>
    <input name="birthday" type="date" size="8" maxlength="8">
    </p>

<p>


    <input type="submit" name="submit" value="Check-in">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p>
</form>
    </body>
    </html>
