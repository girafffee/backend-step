<?php

$user = 'c13db';
$pass = 'SaNkO20001221';

echo '<h2>Connect with PDO</h2>';
try {
	$zapros = 'SELECT 
		car_config.id,
		car_config.name as "Имя машины",
		GROUP_CONCAT(DISTINCT accessories.name) as "Аксессуар",
		GROUP_CONCAT(DISTINCT accessories.cost) as "Стоимость",
		SUM(accessories.cost) AS "Общая стоимость аксессуаров",
		CONCAT(car_config.cost, " $") as "Стомость машины",
		CONCAT(car_config.cost+SUM(accessories.cost), " $") as "Полная стоимость"
		FROM `cars_accessories`
		JOIN car_config ON cars_accessories.car_id = car_config.id
		JOIN accessories ON cars_accessories.access_id = accessories.id
		GROUP BY car_config.name
		ORDER BY car_config.id';

    $dbh = new PDO('mysql:host=localhost;dbname=c13girafffee', $user, $pass);
    echo '<table>';
    foreach($dbh->query($zapros) as $key => $row) {
    	echo '<tr>';
    	foreach ($row as $key => $pole) {
    		
    		$ret .= '<td>'. $pole .'</td>';
    		echo $ret;

    	}
    	echo '</tr>';

        // $ret;
    }
    echo '</table>';

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$dbo = new mysqli('localhost', $user, $pass, 'c13girafffee');

//$dbo = mysqli_connect("127.0.0.1", $user, $pass, "my_db");

if (!$dbo) {
    $ret = "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    $ret .= "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    $ret .= "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    echo $ret;
    exit;
}

echo '<h2>Connect with MySQLi</h2>';

$ret = "Соединение с MySQL установлено!" . PHP_EOL;
$ret .= "Информация о сервере: " . mysqli_get_host_info($dbo) . PHP_EOL;

$arrDB = $dbo->query('SELECT * from car_config');

echo '<pre>';
print_r($arrDB);
echo '</pre>';




echo $ret;
?>