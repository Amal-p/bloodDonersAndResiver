<!DOCTYPE html>
<html>
<head>
<title>Register-Blood</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<style>
    .message{
    position: fixed;
    width: 100%;
    height: 2rem;
    background-color: #92badd;
    text-align: center;
    padding-top: 10px;
    margin-top: 0;
  }
</style>

<!--css on public folder-->
<link rel="stylesheet" href="{{secure_asset('css/Resiver/resiverregister.css')}}">

<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>

    @if (session('message'))
    <div class="message">
        <h3>{{session('message')}}</h3>
    </div>
    @endif

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Rgister For Blood</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="/saveresiver" method="post">
                    @csrf
					<input class="text" type="text" name="name" placeholder="Name" required>
                    <input class="text" type="text" name="blood_group" placeholder="Blood Group" required>
					<input class="text" type="text" name="unit" placeholder="Unit" required>
                    <input class="text" type="text" name="mobile" placeholder="Mobile - Only Admin can see your Number !!!" required>
                    <input class="text" type="text" name="patient_name" placeholder="Patient Name" required>
                    <input class="text" type="text" name="hospital" placeholder="Hospital" required><br>
                    <label>Required Date : </label>
                    <input class="text" type="date" name="required_date" required>
					<input class="text email" type="email" name="email" placeholder="Email">

					
					<input type="submit" value="REGISTER">
				</form>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="" target="_blank">coder</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>