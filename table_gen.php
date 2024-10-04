<?php

    $row_count = $_GET['row_num'];
    $col_count = $_GET['col_num'];

    echo'表格大小:'. $row_count .'列'. $col_count . '行';


    echo '<table border="1">';
    for ($i = 0; $i < $row_count; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $col_count; $j++) {
            echo '<td>列' .  ($i+1) . '行'.  ($j+1) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>