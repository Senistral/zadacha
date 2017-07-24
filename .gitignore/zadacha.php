<!DOCTUPE html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>Задача</title>
<style></style>
</head>
<body>
<?php/// Подключаюсь к базе данных
$host='127.0.0.1';$name='problem';
$user='root';
$pass='';
mysql_connect($host,$user,$pass);
mysql_select_db($name); // Подключаем нужную бд
$result=mysql_query('SELECT * FROM `problem`');
/// Берём результаты из каждой строчки
while($row=mysql_fetch_array($result)){ echo'<p>id='.$row['id'].'.          Email='.$row['Email'].'.         Priblem='.$row['Prblem'].'.         Answer='.$row['Answer'].'.         AnswerTable='.$row['AnswerTable'].'</p>';}
/// Ошибка в БД. Дальше програмирую в слепую (Так как решения не нашёл (Весь интернет перерыл пишу вроде правельено но все равно ошибка)?>
<?/// Идёт вывод таблицы для решения 
/// Задёться поиск 3 заданий которые не были решены
///  Если 3 задания не были найдены система сама предложит их сделать каждому жилающему  \\\mysql_select_db($name); 
// Подключаем нужную бд$result2=mysql_query('SELECT * FROM `problem`');
// Опять фильтруем запрос
/// Берём результаты из каждой строчкиwhile($row2=mysql_fetch_array($result2)){ echo'<p>id='.$row2['id'].'.          AnswerTable='.$row2['AnswerTable'].'</p>';};
///Проверяем среди задач те которые не решены и что бы их было 3 штукиif(id<= 3 and AnswerTable = 0) 
// попытка найти 3 нерешонные задачи{ for($i=0,3,i++){  $ids=mysql_query('SELECT id FROM `problem` WHERE `id` <3 ORDER BY `id` ASC LIMIT 0 , 30'); $Result = mysql_fetch_assoc($ids);   }
///////// Если нашли создаём таблицу из HTML с формой для решения и заполнеения

?>    <table><tr><td>id задачи</td><td>Текст задачи</td><td>Картинка</td><td alt = '0 значит нет'>решена или нет</td><td>Ответ</td><td>Автор (Email)</td> </tr><tr><td><?if(AnswerTable !==0){$re1=mysqli_query('SELECT * FROM `problem` WHERE `AnswerTable` =0 ORDER BY `id` ASC LIMIT 0 , 30')}; $re2 = mysqli_fetch_assoc($re1); /* Ищем нерешонные задачи, если нашли то тогда выводим.*/ $re3=mysqli_query('SELECT id FROM `problem`ORDER BY `id` ASC LIMIT 0 , 30')}; $re4 = mysqli_fetch_assoc($re3); echo re4; /*Выводим их по id*/  ?></td><td><? $re5 = mysql_query('SELECT `problem` FROM Problem'); $re6 = mysqli_fetch_assoc($re5); echo $re6; /* Выводим текст задания*/?></td><td> <? $re7 = mysqli_query("SELECT img FROM `problem` "); $re8 = mysqli_fetch_assoc($re7); print_r $re8; //выводим картинку из таблицы ?></td><td alt = '0 значит нет'><? $re9=mysqli_query(SELECT AnswerTable FROM `problm` ORDER BY `id` ASC LIMIT 0 , 30); $re10 = mysqli_fetch_assoc($re9); print_r $re10;/* Выводим значение решена она или нет*/ ?></td><td><form method='post'> <p><input type="text" name ="Answer1"></p><button type="submit"> Отправить ответ </button></p></form> <? $_POST[$Answer1]; if($Answer1 == Answer){echo Ответ правельный } else ответ не правильный /*Водим ответ проверяем его на правельность и даём ответ на странице*/?></td> </tr><tr><td><?if(AnswerTable !==0){$re11=mysqli_query('SELECT * FROM `problem` WHERE `AnswerTable` =0 ORDER BY `id` ASC LIMIT 0 , 30')}; $re12 = mysqli_fetch_assoc($re11); /* Ищем нерешонные задачи, если нашли то тогда выводим.*/ $re13=mysqli_query('SELECT id FROM `problem`ORDER BY `id` ASC LIMIT 0 , 30')}; $re14 = mysqli_fetch_assoc($re13); echo re14; /*Выводим их по id*/  ?></td><td><? $re15 = mysql_query('SELECT `problem` FROM Problem'); $re16 = mysqli_fetch_assoc($re15); echo $re16; /* Выводим текст задания*/?></td><td> <? $re17 = mysqli_query("SELECT img FROM `problem` "); $re18 = mysqli_fetch_assoc($re17); print_r $re18; //выводим картинку из таблицы ?></td><td alt = '0 значит нет'><? $re19=mysqli_query(SELECT AnswerTable FROM `problm` ORDER BY `id` ASC LIMIT 0 , 30); $re110 = mysqli_fetch_assoc($re19); print_r $re110;/* Выводим значение решена она или нет*/ ?></td><td><form method='post'> <p><input type="text" name ="Answer1"></p><button type="submit"> Отправить ответ </button></p></form> <? $_POST[$Answer1]; if($Answer1 == Answer){echo Ответ правельный } else ответ не правильный /*Водим ответ проверяем его на правельность и даём ответ на странице*/?></td> </tr><tr><td><?if(AnswerTable !==0){$re21=mysqli_query('SELECT * FROM `problem` WHERE `AnswerTable` =0 ORDER BY `id` ASC LIMIT 0 , 30')}; $re22 = mysqli_fetch_assoc($re21); /* Ищем нерешонные задачи, если нашли то тогда выводим.*/ $re23=mysqli_query('SELECT id FROM `problem`ORDER BY `id` ASC LIMIT 0 , 30')}; $re24 = mysqli_fetch_assoc($re23); echo re24; /*Выводим их по id*/  ?></td><td><? $re25 = mysql_query('SELECT `problem` FROM Problem'); $re26 = mysqli_fetch_assoc($re25); echo $re26; /* Выводим текст задания*/?></td><td> <? $re27 = mysqli_query("SELECT img FROM `problem` "); $re28 = mysqli_fetch_assoc($re27); print_r $re28; //выводим картинку из таблицы ?></td><td alt = '0 значит нет'><? $re29=mysqli_query(SELECT AnswerTable FROM `problm` ORDER BY `id` ASC LIMIT 0 , 30); $re210 = mysqli_fetch_assoc($re29); print_r $re210;/* Выводим значение решена она или нет*/ ?></td><td><form method='post'> <p><input type="text" name ="Answer1"></p><button type="submit"> Отправить ответ </button></p></form> <? $_POST[$Answer1]; if($Answer1 == Answer){echo Ответ правельный } else ответ не правильный /*Водим ответ проверяем его на правельность и даём ответ на странице*/?></td> </tr>
 <?   }    ?><table>




</body></html>
