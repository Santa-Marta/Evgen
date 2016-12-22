<?php
    if($_POST){       
        $email = $_POST['email'];
        $message = $_POST['message'];
        

		/* Создаем соединение */
		$link = mysqli_connect('localhost', 'root', '', 'qwerty') or die('Cant connect: ');
	 

		/* Определяем текущую дату */
		$cdate = date("Y-m-d");
	 
		/* Составляем запрос для вставки информации в таблицу
		name...date - название конкретных полей в базе;
		в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные, полученные из формы */
		$query = "INSERT INTO `qwerty` VALUES ('$email','$message')";
		 
		/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
		mysqli_query($link, $query) or die('Cant query: ');
		 
		/* Закрываем соединение */
		mysqli_close();
    }
?>