<!DOCTUPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<title>Элементы управления</title>
</head>
<body>
<form method="post" action="formReg.php">
<p>Ваш логин:</p>
<input type="login" name="text" />
<p>Ваш пароль:</p>
<input type="password" name="password" />
</form>
<?$host='127.0.0.1';
$name='accaunt';
$user='root';
$pass='';
$login = $_POST['login']; 
// Считываем логин
$password = $_POST['password'];
// считываем пароль и передаём их в Базу данных
mysql_connect($host,$user,$pass);
mysql_select_db($name);
// Подключаем нужную бд
$result=mysql_query('SELECT * FROM `problem`');
if ($connection == false){echo 'Небудет конекта!'};
echo mysqli_connect_error(); 
//Проверяю что тут твориться exit(); 
// Убегаю }mysqli_set_charset($connection, 'utf8');
$reg = mysqli_query($connection,"SELECT * FROM `accaunt` "); 
// В "" прописываем Mysql Запросы. Перемееная результат для проверки того что мы от туда взяли
$reg1 = mysqli_fetch_assoc($reg); 
// Фильтруем запрос
// Отправляю даные в Mysql библеоткеа (accaunt)mysql_query("INSERT INTO `ProblemTable`.`accaunt` ( `id` ,`$login` ,`$password` )VALUES ( '1', 'Adm@email.ru', '123')");
?> 
<?
///  Безопасность для администратора
// вызываем псевдо случайный пароль.
$key = fopen("X:\home\Zadchi.rus\Protected\KeyAdm.txt","r"); // Открыли тхт для чтения пароляmysql_query("INSERT INTO `ProblemTable`.`accaunt` ( `id` ,`$login` ,`$password` )VALUES ( '1', 'Adm@email.ru', '$key')");// прочитали тхт и спомощью переменной изменили пороль

?>
</body>
</html>
