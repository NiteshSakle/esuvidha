<?php
include("connect.php");
    $csv_header = '';
    $csv_row ='';
    $result = mysql_query($_POST['qry']);

    $num_column = mysql_num_fields($result);		
    for($i=0;$i<$num_column;$i++) {
            $csv_header .= '"' . mysql_field_name($result,$i) . '",';
    }
    $csv_header .= "\n";

    while($row = mysql_fetch_row($result)) {
        for($i=0;$i<$num_column;$i++) {
                    $csv_row .= '"' . $row[$i] . '",';                
        }
        $csv_row .= "\n";
    }
    /* Download as CSV File */ 
    $name = date('M-d') . "-Quarter";
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename='. $name .'.csv');
    echo $csv_header . $csv_row;
    exit;

?>