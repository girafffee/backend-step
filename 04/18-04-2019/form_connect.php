<?php

$config = require_once 'config.php';
$dsn = "mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=".$config['charset'];

try {
    $dbh = new PDO($dsn, $config['user'], $config['pass']);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

/*
 * Формируем запрос
 * к базе данных
 */
$sql = 'SELECT car_config.id,
car_config.name as Имя_машины,
engines.name as "Двигатель",
colors.name as "Цвет",
transmissions.name as "Трансмиссия",
car_bodies.name as "Кузов",
roofs.name as "Крыша",
car_config.cost as "Цена_машины"

FROM car_config
JOIN engines ON car_config.engine = engines.id
JOIN colors ON car_config.color = colors.id
JOIN transmissions ON car_config.transmission = transmissions.id
JOIN car_bodies ON car_config.car_body = car_bodies.id
JOIN roofs ON car_config.roof = roofs.id ';




/*
 * Инициализируем массив,
 * в который будем загружать
 * полученую таблицу
 *
 * Идет запрос
 * к базе данных
 */
$rows = array();
foreach ($dbh->query($sql) as $col => $value) {
    foreach ($value as $key => $allrow) {
        if(!is_int($key))
            $rows[$col][$key] = $allrow;
    }
}
/*
 * Помещаем ключи в отдельный массив
 */
$count_keys = array_keys($rows[0]);


/*
 * Инициализируем массив
 * для сохранения полученных
 * данных из формы
 */
$get_rows_value = array();
for ($i = 0; $i < sizeof($count_keys); $i++){
    if (isset($_GET[$count_keys[$i]])) {
        foreach ($rows as $key => $row) {
            $key = $count_keys[$i];
            $get_rows_value[$key] = $_GET[$count_keys[$i]];
        }
    }
}

/*
 * ... и проверям
 * существующие ключи в
 * $get_rows_value
 *
 * и по ним определяем выборку из БД
 */
$wcount = 0;
foreach ($get_rows_value as $key => $row) {
    if(strlen($row)>0) {
        if (($key == "id") AND is_numeric($row)) {
            $where[$wcount] = " car_config.id=" . $row . " ";
            $wcount++;
        }
        if ($key == "Имя_машины") {
            $where[$wcount] = ' car_config.name LIKE "%' . $row . '%" ';
            $wcount++;
        }
        if ($key == "Двигатель") {
            $where[$wcount] = ' engines.name LIKE "%' . $row . '%" ';
            $wcount++;
        }
        if ($key == "Цвет") {
            $where[$wcount] = ' colors.name LIKE "%' . $row . '%" ';
            $wcount++;
        }
        if ($key == "Трансмиссия") {
            $where[$wcount] = ' transmissions.name LIKE "%' . $row . '%" ';
            $wcount++;
        }
        if ($key == "Кузов") {
            $where[$wcount] = ' car_bodies.name LIKE "%' . $row . '%" ';
            $wcount++;
        }
        if ($key == "Крыша") {
            $where[$wcount] = ' roofs.name LIKE "%' . $row . '%" ';
            $wcount++;
        }
        if (($key == "Цена_машины") AND is_numeric($row)) {
            $where[$wcount] = ' car_config.cost LIKE "%' . $row . '%" ';
            $wcount++;
        }
    }
}



if (isset($where)){
    //echo "WHERE ". implode(" AND ", $where );
    $sql .= "WHERE ". implode(" AND ", $where );
}

/*
 * Новый способ
 * (отчаяние)
 */

$result = $dbh->prepare($sql);
$result->execute();
$dbAnswer = $result->fetchALL(PDO::FETCH_ASSOC);


/*
 * Конец
 * (нифига не получилось)
 */

/*
 * UPD: слава богу!
 */


?>



<!DOCTYPE html>
<html>
<head>
    <title>Запрос через форму</title>
    <meta charset="utf-8">
    <link href="style/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="form container-fluid row" style="padding-top: 50px">

        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET" class="col-lg-4">
            <nav class="navbar navbar-dark" style="border-radius: 10px; margin-bottom: 20px; background-color: rgba(40,79,106,0.87);">
                <h3 class="navbar-text">Поиск по запросу</h3>
            </nav>
            <?php

                    for ($i = 0; $i < sizeof($count_keys); $i++) {

                            echo '
                                <div class="row form-group">
                                    <label for="' . $count_keys[$i] . '" class="col-3">' . $count_keys[$i] . '</label>
                                
                                    <input type="text" class="form-control col-8" 
                                    id="' . $count_keys[$i] . '"
                                    name="' . $count_keys[$i] . '" value="' . $_GET[$count_keys[$i]] . '">
                                </div>';
                    }?>
             <input type="submit" class="btn btn-outline-secondary" value="Поиск">
        </form>
        <?php
        $ret = '<table class="col-md-8 table table-hover table-bordered">';
            $ret .= '<thead class="text-center thead-dark">';
                foreach ($dbAnswer[0] as $key => $row) {
                    $ret .= '<th scope="col">'.$key.'</th>';
                }
            $ret .= '</thead>';
            $ret .= '<tbody>';
                for($i = 0; $i < sizeof($dbAnswer); $i++){
                    $ret .= '<tr>';
                    foreach ($dbAnswer[$i] as $key => $cell){
                        $ret .= '<td>'.$cell.'</td>';
                    }
                    $ret .= '</tr>';
                }
            $ret .= '</tbody>';
        $ret .= '<table>';

        echo $ret;
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>