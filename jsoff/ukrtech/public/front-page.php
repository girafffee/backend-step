<html>
<head>
    <title>Добавление бинов</title>
    <meta charset="utf8">
    <link rel="shortcut icon" type="image/png" href="#"/>
</head>

<body>
<?php
$qr = \App\Models\Binary::getInstance();

$free_parents = $qr->getOutParents();
?>

<form method="GET" id="bin">

    <label for="pos_left">Слева: </label><input id="pos_left" type="radio" name="pos" value="0" checked>
    <label for="pos_right">Справа: </label><input id="pos_right" type="radio" name="pos" value="1">
    <select id="parent_id" name="par">
        <option value="" disabled>Parent Bin</option>
        <?php $str = "";
        print_r($free_parents);
        if(is_array($free_parents) && count($free_parents)) {
            foreach ($free_parents as $par) {
                if (is_array($par)) {
                    foreach ($par as $pos => $item) {
                        $str .= '<option value="' . $par[$pos] . '" class="' . $pos . '">(' . $pos . ') ' . $par[$pos] . ' ячейка</option>';
                    }
                } else {
                    $str .= '<option value="' . $par . '">' . $par . ' ячейка</option>';
                }
            }
        }else
            $str .= '<option value="0">1 ячейка</option>';
        echo $str;
        ?>
    </select>
    <input type="button" value="Добавить" id="addBin">
</form>
    <br><br>
<form method="GET" id="path_form">

    <p id="path"><input type="number" name="idbin" value="<?php echo (isset($data['idbin']) ? $data['idbin'] : 1) ?>" min="1" max="100"/><input type="button" id="bin_num" value="Показать путь"></p>
</form>

    <p id="out"></p>

    <!--    <button>Send</button>-->


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="public/common.js"></script>
</body>
</html>