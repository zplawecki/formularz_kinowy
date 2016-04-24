<?php

function showInfoInTable($dbTable, $whereQuery, $fieldsToShow) {
    global $conn;
    global $result;
    //Tworzymy z tablicy listę jak w SQL, np. ['a', 'b', 'c'] => 'a, b, c'
    $fieldsInSql = implode(', ', $fieldsToShow);
    $sql = "SELECT $fieldsInSql FROM $dbTable WHERE $whereQuery";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border=1px>";

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            $id = $row['id'];

            echo '<td><a href="delete.php?id=' . $id . '&table=' . $dbTable . '">Usun z bazy</a></td>';
            foreach ($fieldsToShow as $field) {

                //...wyświetl z rzędu pole o tej nazwie
                echo '<td>' . $row[$field] . '</td>';
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Brak danych!';
    }
    echo '<br>';
};



?>

