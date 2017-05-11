<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<title>Admin</title>
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

<div class="container">

	<div class="row">
    <div class="col-md-4 col-md-offset-4" >
		<div id="msg"></div>
		<div class="form_main" style="vertical-align:middle">
				<div class="logo col-md-offset-3 col-xs-offset-3" >
					<img src="/img/stumagz_2.svg" height="40px;" style="margin-left:20px;margin-top:150px;">
				</div>
                <h4 class="heading"><span></span></h4>
                <div class="form">
                <form action="download" method="post" id="contactFrm" name="contactFrm">
                	<h5><strong>Username:</strong></h5><input type="text" required="" placeholder="Please input your username" value="" name="admin" class="txt">
                    <h5><strong>Password:</strong></h5><input style="border: 1px solid #ccc;margin: 10px 0;padding: 10px 0 10px 5px;width: 100%;
                    " type="password" required="" placeholder="Please input your Password" value="" name="pwd" class="password">
                     <div class="text-center" style="margin-left:0px"><button type="submit" id="button" name="submit" class="text-center btn txt2">Download</button>

                     </div>
                </form>
            </div>
            </div>
            </div>
	</div>



</div>
</div>
</body>
</html>
