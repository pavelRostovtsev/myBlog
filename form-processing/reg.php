<?
require_once'../libs/db.php';

$errors = [];


if (isset($_POST['nameReg']) and isset($_POST['loginReg']) and isset($_POST['emailReg']) and isset($_POST['passwordReg']) and isset($_POST['passwordConfirmReg']) ) {

	$name = trim(htmlspecialchars($_POST['nameReg']));
	$login = trim(htmlspecialchars($_POST['loginReg']));
	$email = trim(htmlspecialchars($_POST['emailReg']));
	$password = trim(htmlspecialchars($_POST['passwordReg']));
	$password_confirmation = trim(htmlspecialchars($_POST['passwordConfirmReg']));

	


	if($name==""){
		$errors[]="Введите ваше имя!";
	}
	if($login==""){
		$errors[]="Введите ваше имя!";
	}

	if($email==""){
		$errors[]="Введите ваш email!";
	}
	if($password==""){
		$errors[]="Введите ваш пароль !";
	}
	if($password_confirmation==""){
	 	$errors[]="Введите второй пароль!";
	}
	

	if (empty($errors)){
		$reg_sql = 'INSERT INTO `users`(`name`,`login`, `email`, `password`) VALUES (?, ?, ?, ?)';
		$reg = $connection->prepare($reg_sql);

		$password = password_hash($password, PASSWORD_DEFAULT);

		$reg->bindParam(1, $name, PDO::PARAM_STR);
		$reg->bindParam(2, $login, PDO::PARAM_STR);
		$reg->bindParam(3, $email, PDO::PARAM_STR);
		$reg->bindParam(4, $password, PDO::PARAM_STR);
		$reg->execute();
		
		echo "Готово";
	
	}else{
		echo array_shift($errors);
	} 
		}
