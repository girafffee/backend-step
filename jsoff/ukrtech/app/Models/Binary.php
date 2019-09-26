<?php


namespace App\Models;


use App\Database\Query;

class Binary extends Query
{
    private $parent_id, $position, $path, $level;

    private function __construct(){
        $this->table = "ut_bins";
    }


    public function add($par_id, $pos){
        $this->parent_id = $par_id;
        $this->position = $pos;

        print_r($this->parent_id);
        print_r($this->position);

        $this->getPath()->getLevel();

        $sql = "INSERT INTO $this->table (`parent_id`, `position`, `path`, `level`) VALUES (
        $this->parent_id, $this->position, '$this->path', $this->level)";

        $this->query($sql);
    }

    private function getPath(){
        $sql = "SELECT CONCAT((SELECT path FROM $this->table WHERE path LIKE '%.$this->parent_id'), 
        '.', (SELECT MAX(id) FROM $this->table) + 1) as path";

        $path = $this->query($sql);
        $bin_path = $path->fetch(\PDO::FETCH_ASSOC)['path'];
        if(strlen($bin_path) > 0 && $bin_path == "0.1")
            $this->path = substr($bin_path, 2);
        else if(strlen($bin_path) > 0)
            $this->path = $bin_path;
        else
            $this->path = "0.1";

        return $this;
    }

    private function getLevel(){
        $sql = "SELECT `level`, `id` FROM $this->table WHERE id=$this->parent_id";

        $qr_level = $this->query($sql);
        $level = $qr_level->fetch(\PDO::FETCH_ASSOC);

        $this->level = $level['level'] + 1;

        return $this;
    }

    public function getOutParents(){
        
        $all_bins = $this->getAllBins();
        $response = $this->getCommunBins();

        if(isset($response['all'])) {
            foreach ($response as $key => $res) {
                for ($i = 0; $i < count($res); $i++)
                    $bin_parents[] = $res[$i];
            }
        }else
            return false;
                
        $diff_bins = array_diff($all_bins, $bin_parents);
        foreach($response as $key => $res){
            for($i = 0; $i < count($res); $i++){
                if($key != "all"){
                    $diff_bins[] = array(
                        $key => $res[$i]
                    );
                }
                
            }
        }


        return $diff_bins;
    }

    public function getAllBins(){
        $all_bins = "SELECT id FROM $this->table ORDER BY id";
        $all = $this->query($all_bins);
        
        $all_bins = array();       

        while($row = $all->fetch(\PDO::FETCH_ASSOC)){
            $all_bins[] = $row['id'];
        } 

        return $all_bins;
    }

    public function getCommunBins(){
        $sql = "SELECT parent_id, GROUP_CONCAT(position) as pos, 
        GROUP_CONCAT(id) as id FROM $this->table GROUP BY parent_id";
        
        $qr = $this->query($sql);

        $response = array();

        while($row = $qr->fetch(\PDO::FETCH_ASSOC)) {
            if($row['id'] == 1) continue;

            $check_left = stripos($row['pos'], "0");
            $check_right = stripos($row['pos'], "1");

            if($check_left !== false && $check_right !== false) {
 
                $response['all'][] = $row['parent_id'];

            }else if($check_left === false) {
                // Добавляем в массив свободных по Правой позиции
                $response['left'][] = $row['parent_id'];

            }else if($check_right === false){
                $response['right'][] = $row['parent_id'];
            }

        }

        return $response;
    }




    private static $instance;
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

