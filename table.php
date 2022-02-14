function printTable($query)
{
    global $con;
    $stmt = $con -> prepare($query);
    $stmt -> execute();
    $columnCount = $stmt->columnCount();
    $meta = array(); //Informationen zu den Attributen als Array
    echo '<table border = "1"><tr>';
    for($i = 0; $i < $columnCount; $i++){
        $meta[] = $stmt -> getColumnMeta($i);
        echo '<th> ' .$meta[$i]['name'].' </th>';
    }
    echo '</tr>';
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
        echo '<tr> ';
        foreach($row as $r)
        {
            echo '<td> '.$r.' </td>';
        }
        echo ' </tr>';
    }
    echo '</table>';
}