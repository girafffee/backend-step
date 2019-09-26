<?php
namespace App\Ajax_Queries;

use App\Models\Binary;
use App\Models\BinaryTree;


if(isset($_GET) && is_array($_GET)) {
    $flag = false;
    $data = $_GET;

    foreach ($data as $item) {
        if (!empty($item)) {
            $item = intval($item);
            $flag = true;
        }
    }

    if ($flag && isset($data['par']) && isset($data['pos'])) {
        $query = Binary::getInstance();
        $query->add($data['par'], $data['pos']);
        header("Location:" . $_SERVER["PHP_SELF"]);
    } else if (isset($data['idbin'])) {
        echo "<pre>";
        echo var_dump(BinaryTree::getBranch($data['idbin']));
        echo "</pre>";

    }
}

BinaryTree::buildBinaryTree();



include_once "public/front-page.php";

