<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form method = "POST">
    <input type="text" placeholder="Parent" name = "Parent"><br>
    <input type="text" placeholder="Title" name = "Title"><br><br>
    <input type="submit" name = "OK">Добавить</input><br>

</form>



</body>
</html>




<?php

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'films and humans');


$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or   die('Увы!!! Не удалось подключиться к базе: '.mysqli_connect_error());


mysqli_set_charset($dbcon, 'utf8');
$queryStr = 'SELECT * FROM parent';
$queryResult = $dbcon->query($queryStr);




echo "<table width='100%'>";
echo "<tr><td>id</td><td>parent</td><td>title</td><td><input type = button></td><td><input type = button></td></tr>";

$row[]= 0;
while ($row=mysqli_fetch_array($queryResult)){
    $pole1=$row[0];
    $pole2=$row[1];
    $pole3=$row[2];


    echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td><tr>";
}
echo "</table>";



if (isset($_POST["Parent"])) {
    $sql = mysqli_query($dbcon , "INSERT INTO 'parent' (parent, title)
    VALUES ('".$_POST['Parent']."','".$_POST['Title']."')");
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}
?>
<style>
    td {
        text-align: center;
        border : 1px black solid;
    }
</style>


