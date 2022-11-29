<?php

$cols = 10;
$rows = 10;

echo "<table border=\"0\">";
for ($r = 1; $r <= $rows; $r++) {
    echo '<tr>';

    for ($c = 1; $c <= $cols; $c++) {
        $result = $c * $r;
        if ($result % 2 == 0) {
            $result = "($result)";
        } elseif ($result % 2 != 0) {
            $result = "[$result]";
        }

        echo '<td>' . $result . '</td>';
    }
    echo '</tr>';
}

echo "</table>";
