<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <input type="hidden" name="action" value="saveEdit">
    <?php
        for($i = 0; $i < sizeof($this->editFields); $i++){
            echo '<input type="text" name="' . $this->editFields[$i]  . '" value="' . $data["row"][$this->editFields[$i]] .  '"/>';

        }
        ?>
    <input type="submit">
</form>

<?php
print_r($data);