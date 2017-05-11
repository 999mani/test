<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/materialize.min.css" >

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<script>
 $(document).ready(function() {
	 //$('select').material_select();
   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  });

</script>
<title>Interns</title>
</head>

<body>

<!-- Google Analytics code -->
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-66299251-1', 'auto');
			  ga('send', 'pageview');

		</script>

		<header id="page-top">
				<div class="container-fluid" style="height:100px;background:#18bc9c;">
					 <a href="https://www.stumagz.com" style="cursor:pointer"> <img class="logo pull-left"src="/img/stumagz.svg"> </a>
					 <a class="goto pull-right" href="https://www.stumagz.com" >Go to stumagz.com</a>
				</div>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12 col-xs-12">
		              <img class="stu-img img-responsive" src="img/student.svg" style="height:100px;"alt="">
		                <div class="intro-text">
		                    <span class="name">Are You Looking for Interns ?</span>
		                    <hr class="star-light">
		                    <p class="skills">Do fill the details below, We'll find them for you.</p>

		                </div>
		            </div>
		        </div>
		    </div>
		</header>

		<section class="form_interns " >
			<div class="container ">
				<div class="col-lg-2 col-md-4 xs-hidden" ></div>
				<div class="col-lg-10 col-md-12 col-xs-12 " style="padding:0px;">
			<div class="col-md-12 col-lg-10 col-xs-12">
		<form method="post" action="success">
			<div class="input-field">
				<input name="company" id="company_name" type="text" class="validate">
				<label for="company_name">Company Name</label>
			</div>
			</div>
			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<input name="person" id="contact_person" type="text" class="validate">
				<label for="contact_person">Name of contact person</label>
			</div>
		</div>
			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<input name="contact" id="contact_number" type="text" class="validate">
				<label for="contact_number">Contact Number</label>
			</div>
			</div>
			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<input name="requirement" id="requirement" type="text" class="validate">
				<label for="requirement">Requirement</label>
			</div>
			</div>
			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<input name="peoples" id="peoples" type="text" class="validate">
				<label for="peoples">No of people required</label>
			</div>
			</div>
			<br>
			<div class="col-lg-5 col-md-6 col-xs-12">
			<div class="input-field">
				<input name="start" id="starts" type="date" class="datepicker" >
				<label for="starts">Starts at</label>

			</div>
			</div>
			<div class="col-lg-5 col-md-6 col-xs-12">
				<div class="input-field">
				<input name ="end" id="ends" type="date" class="datepicker">
				<label for="starts">Ends at</label>
			</div>
			</div>

			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<input name="pay" id="pay" type="text" class="validate">
				<label for="pay">Pay per month</label>
			</div>
			</div>

			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<textarea name="skills" id="skills" class="materialize-textarea"></textarea>
          <label for="skills">Skills to possess</label>
			</div>
			</div>
			<div class="col-lg-10 col-md-12 col-xs-12">
			<div class="input-field">
				<textarea name="qns" id="questions" class="materialize-textarea"></textarea>
          <label for="question">Questions to be asked in HR Round?</label>
			</div>
			</div>
			<div class="col-lg-10 col-md-12 col-xs-12 text-center">
				<button id="test" class="waves-effect waves-light btn-large submit" type="submit" style="text-decoration:none">Submit</button>
			</div>
		</form>
			</div>
		</div>
			</div>
		</section>


</div>
</div>
<div class="container-fluid hidden-lg" style="background:#18bc9c">
		<div class="row">
				<div class="col-lg-12 col-xs-12 ">
					<div class="text-center" style="color:#fff;text-align:center;vertical-align:middle;margin-top:15px;font-size:12px;">© 2015 Right Process Infotech Pvt Ltd. All Rights Reserved</div>
				</div>
		</div>
</div>

</body>

</html>
