<?php
include("connect.php");

function empName($deptid) {
    $query = "select  concat(firstname,'   ',lastname) as name  from user where emp_id='$deptid'";
    $rw = mysql_query($query);
    if ($row1 = mysql_fetch_object($rw))
        return $row1->name;
}

$result = mysql_query($_POST['qry']);

$num_column = mysql_num_fields($result);		

$csv_header = '';
for($i=0;$i<$num_column;$i++) {
	$csv_header .= '"' . mysql_field_name($result,$i) . '",';
}	
$csv_header .= "\n";

$csv_row ='';
while($row = mysql_fetch_row($result)) {
	for($i=0;$i<$num_column;$i++) {
                if($i==1) {
                    $csv_row .= '"' . empName($row[$i]) . '",';
                }else {
                    $csv_row .= '"' . $row[$i] . '",';                
                }                                    
	}
	$csv_row .= "\n";
}
/* Download as CSV File */
$name = date('M-d') . "-Defect";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='. $name .'.csv');
echo $csv_header . $csv_row;
exit;
?>