<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <input type="hidden" name="action" value="addField">
    <?php foreach ($this->addFields as $field){
            echo '<label for="'.$field.'">'.$field.':</label>
            <input type="text" name="'.$field.'" id="'.$field.'"/> <br/>';
        } ?>
    <input type="submit">
</form>