<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <input type="hidden" name="action" value="saveEdit">
    <?php
        for($i = 0; $i < sizeof($this->editFilds); $i++){
            echo '<input type="text" name="' . $this->editFilds[$i]  . '" value="' . $data["row"][$this->editFilds[$i]] .  '"/>';
        //echo "<td>" . $row[$this->viewFildsAll[$i]] . "</td>";
        }
        ?>
    <input type="submit">
</form>

<?php
print_r($data);