<!DOCTUPE html><html> 
<head>
<meta charset= "UTF-8"/>
<title>Ввод задач</title>
</head>
<body>
<header>
</header>
<?// Ввод задач?>
<form method = "post" action="formaZadachi.php">
<input type="text" name="id" />
<?//id?>
<input type="text" name="email" />
<?//email?>
<input type="text" name="problem" />
<?//problem?>
<input type="text" name="Answer" />
<?//Answer?>
<input type="image" name="img" />
<?//img?>
<input type="text" name="AnswerTable" />
<?//AnswerTable?>
</form><?$id= $_POST['id'];  //Считываем но не водим так как автоинкремент стоит  
$email = $_POST['email'];
$problem = $_POST['problem']; 
$answer = $_POST['Answer']; 
$img = $_POST['img']; ///// Подключаемся к бд
$ip = '127.0.0.1';// айпи
$name = 'root'; 
// Имя пользователя
$pass ='';
// Пароль
$nameBD = 'ProblemTable';
// Навание базы данных
mysql_connect($host,$user,$pass);
mysql_select_db($name); 
// Подключаем нужную бд
$result=mysql_query('SELECT * FROM `problemtable`');
// Вводим новую задачу
mysql_query(INSERT INTO `articals`.`problemtable` ( `id` ,`email` ,`Problem` ,`Answer`)VALUES (NULL , $email, $problem, $answer));
while($row=mysql_fetch_array($result)){ echo'<p>id='.$id['id'].'.          Email='.$email['Email'].'.         
// проверяем что ввели         
Priblem='.$problem['Prblem'].'.         Answer='.$answer['Answer'].'.</p>';}
?>
</body>
</html>
