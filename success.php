
<!DOCTYPE html>
<?php
if(isset($_POST["company"])||$_POST["company"] !== NULL)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname="interns";

$company= $_POST["company"];
$contact_person= $_POST["person"];
$contact_no= $_POST["contact"];
$requirment= $_POST["requirement"];
$no_of_people= $_POST["peoples"];
$start =  $_POST["start"];
$ends = $_POST["end"];
$pay = $_POST["pay"];
$skills = $_POST["skills"];
$qns = $_POST["qns"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$stmt = $conn->prepare("INSERT INTO interns_form (company_name, contact_person, contact_number , requirement,no_of_people,start_time,end_time,pay,skills,questions) VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss", $company, $contact_person, $contact_no,$requirment,$no_of_people,$start,$ends,$pay,$skills,$qns);
$stmt->execute();
mysqli_close($conn);
}
else {
	header('Location: http://localhost/');
	exit;
}

?>

<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>success</title>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/materialize.min.css" >
<link rel="stylesheet" href="css/styles.css" >

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body style="background: #18bc9c;">
	<div class="container-fluid" style="height:100px;background:#18bc9c;">
		 <a href="https://www.stumagz.com" style="cursor:pointer">
			 <img class="logo pull-left"src="/img/stumagz.svg">
		  </a>
		 <a href="https://www.stumagz.com" class="goto pull-right">Go to stumagz.com</a>
	</div>

	<div class="container">
		<div class="col-xs-12 col-lg-12">
			<div class="flex_content">
				<div class="child">
					<img class="check"src="/img/check_white.svg" style="">
					<h2>Thank You</h2>
			</div>
		</div>
		</div>
	</div>



</body>
<div class="container-fluid hidden-lg" style="background:#18bc9c">
		<div class="row">
				<div class="col-lg-12 col-xs-12">
					<div class="text-center" style="color:#fff;text-align:center;vertical-align:middle;margin-top:55px;font-size:12px;">© 2015 Right Process Infotech Pvt Ltd. All Rights Reserved</div>
				</div>
		</div>
</div>

</html>
