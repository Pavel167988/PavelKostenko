<?php
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'films and humans');


$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or   die('Увы!!! Не удалось подключиться к базе: '.mysqli_connect_error());


mysqli_set_charset($dbcon, 'utf8');

$queryStr = 'SELECT * FROM Films';
$queryResult = $dbcon->query($queryStr);

echo "<table width='100%'>";
echo "<tr><td></td><td><input type = text></td><td><input type = text></td><td></td><td></td><td><input type = submit value='min'><input type = submit value='max'></td></tr>";
echo "<tr><td>id</td><td>title</td><td>lenght</td><td>date</td><td>Author</td><td>cash</td></tr>";

$row[]= 0;
while ($row=mysqli_fetch_array($queryResult)){
    $pole1=$row[0];
    $pole2=$row[1];
    $pole3=$row[2];
    $pole4=$row[3];
    $pole5=$row[4];
    $pole6=$row[5];

    echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td><td>$pole5</td><td>$pole6</td></tr>";
}
echo "</table>";
?>
<style>
    td {
        text-align: center;
        border : 1px black solid;
    }
</style>





Пагинация


