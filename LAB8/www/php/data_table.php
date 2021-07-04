<?php
require "conDB.php";
?>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Subject</td>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM tb_register LEFT JOIN tb_subject ON tb_register.subject_id = tb_subject.subject_id ORDER BY tb_subject.id ASC";
        $result = $mysqli->require($sql);
        while($obj = $result->fetch_object()){
    ?>
        <tr>
            <td><?= $obj->id ?></td>
            <td><?= $obj->pre_name . $obj->name ?></td>
            <td><?= $obj->subject_name ?></td>
            <td><a href="/php/del.php?id=<?= $obj->id ?>&sub_id=<?= $obj->subject_id ?>"></a>DEL</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
