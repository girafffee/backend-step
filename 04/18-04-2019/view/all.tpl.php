<?php
print_r ($data);
?>

<table border="2" cellspacing="10" cellpadding="10" width="700px">
    <?php
    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        for($i = 0; $i < sizeof($this->viewFieldsAll); $i++){
            echo "<td>" . $row[$this->viewFieldsAll[$i]] . "</td>";
        }
        echo "<td><a href='" . $_SERVER['PHP_SELF'] ."?action=edit&id=" . $row['id'] . "'> Edit</a> </td>";
        echo "<td><a href='" . $_SERVER['PHP_SELF'] ."?action=del&id=" . $row['id'] . "'> Delete</a> </td>";
        echo "</tr>";

    }
    ?>
</table>
<a href="<?=$_SERVER['PHP_SELF']?>?action=viewAdd"> Add </a>