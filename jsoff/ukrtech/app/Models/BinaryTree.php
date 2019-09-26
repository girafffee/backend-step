<?php


namespace App\Models;

use App\Database\Query;

class BinaryTree extends Binary
{
    public static $tbl, $minPath, $upperBins, $branch;

    public static function getBranch($id = 1) {
        $sql = "SELECT path FROM ".self::$tbl." WHERE path LIKE '%.$id' OR path LIKE '%.$id.%'";
        if($id == 1)
            $sql .= " OR '$id.%'";

        $ret = Query::query_($sql);

        $bins = $ret->fetchAll(\PDO::FETCH_ASSOC);

        if(isset($bins[0])) {
            foreach ($bins as $row) {
                self::$branch[] = $row["path"];
            }

            self::$upperBins = self::expForUpperBins(self::getMinPath(self::$branch));

            self::getUpperBins();
            echo "<h3>Ветка ячейки #$id</h3>";
            return self::$branch;
        }
        else{
            return "<h3>Не существует ячейки #$id</h3>";
        }


    }

    public static function getMinPath($arr){
        return min($arr);
    }

    public static function expForUpperBins($str = ""){
        if(strlen($str) == 0)
            return false;
        $up_bins = explode(".", $str);

        array_pop($up_bins);

        return $up_bins;
    }

    public static function getUpperBins() {
        $in = "(" .implode(", ", self::$upperBins) . ")";
        $sql = "SELECT path FROM " .self::$tbl . " WHERE id IN ". $in;

        $ret = Query::query_($sql);

        $response = array();
        while($row = $ret->fetch(\PDO::FETCH_ASSOC)){
            $response[] = $row['path'];
        }

        for($i = count($response) - 1; $i >= 0; $i--)
            array_unshift(self::$branch, $response[$i]);
    }

    public static function buildBinaryTree(){
        $sql = "SELECT COUNT(id) as id FROM " . self::$tbl;
        $ret = Query::query_($sql)->fetchAll(\PDO::FETCH_ASSOC);
        if($ret[0]['id'] < 3){
            Query::updateAutoIncrement(self::$tbl, 1);

            //Добавляем первые записи
            Binary::getInstance()->add(0, 0); // 1
            Binary::getInstance()->add(1, 0); // 2
            Binary::getInstance()->add(1, 1); // 3
        }
        else{
            echo "Уже есть первые записи!";
        }
    }



}

BinaryTree::$tbl = "ut_bins";