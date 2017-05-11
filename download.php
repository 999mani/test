<?php

if(isset($_POST['admin']) && isset($_POST['pwd']) && $_POST['admin']=='stumagz@internships' && $_POST['pwd']=='@dmin_csv_download')
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname="interns";

// Create connection
$conn = mysql_connect($servername, $username, $password,$dbname);
echo mysql_error();

$selectdb=mysql_select_db($dbname);
$result=mysql_select_db($dbname);

$output = "";
$table = "interns_form";


$sql = mysql_query("select * from $table");
$columns_total = mysql_num_fields($sql);

for ($i = 0; $i < $columns_total; $i++) {
	$heading = mysql_field_name($sql, $i);
	$output .= '"'.$heading.'",';
}
$output .="\n";

while ($row = mysql_fetch_array($sql)) {
	for ($i = 0; $i < $columns_total; $i++) {
		$output .='"'.$row["$i"].'",';
	}
	$output .="\n";
}

$filename = "interns.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;



//
mysqli_close($conn);

//

}


else
{

	header('Location: http://localhost/admin');
	exit;
}

?>
