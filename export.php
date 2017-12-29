<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ticket", $con);
$header="";$data="";
$result = mysql_query('SELECT ticketmaster.ticketid, section.name, ticketmaster.problem,
ticketmaster.createdate,ticketmaster.solvedate,ticketmaster.status
FROM ticketmaster
INNER JOIN section
ON ticketmaster.sectionid=section.id');
$count = mysql_num_fields($result);
$filename="tickets".date('d-m-y').".xls";
for ($i = 0; $i < $count; $i++){
$header .= mysql_field_name($result, $i)."\t";
}

while($row = mysql_fetch_row($result))
{
	$line = '';
	foreach($row as $value)
	{

            
		if(!isset($value) || $value == "")
		{
			$value = "\t";
		}
		else
		{

                 // echo "vishal bhite".$value; exit;
			# important to escape any quotes to preserve them in the data.
			$value = str_replace('"', '""', $value);
			# needed to encapsulate data in quotes because some data might be multi line.
			# the good news is that numbers remain numbers in Excel even though quoted.
			$value = '"' . $value . '"' . "\t";
		}
			$line .= $value;
}
$data .= trim($line)."\n";
}
# this line is needed because returns embedded in the data have "\r"
# and this looks like a "box character" in Excel
$data = str_replace("\r", "", $data);
# Nice to let someone know that the search came up empty.
# Otherwise only the column name headers will be output to Excel.
if ($data == "") 
{
	$data = "\nno matching records found\n";
}
# This line will stream the file to the user rather than spray it across the screen
//header("Content-Type: application/vnd.ms-excel; name='excel'");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");
echo $header."\n".$data;
?>