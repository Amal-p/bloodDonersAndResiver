<!DOCTYPE html>
<html>
<head>
<title>Resiver Update</title>
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
  .logout{
      position: fixed;
      right: 30px;
      top: 10px;
    }
	.avatar-name{
    position: fixed;
    right: 100px; 
}

.avatar{
    position: fixed;
    right: 20px;
    width: 60px;
}
</style>

<!--css on public folder-->
<link rel="stylesheet" href="{{asset('css/Resiver/resiverregister.css')}}">

<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>

    <div class="body">
		<div class='navbar'>
		  <img class='logo' src="{{URL::asset('/Image/logo.png')}}" alt="Logo" />
		  <a href="/admindashbord"><h5 class="avatar-name">{{Session::get('admin')->name}}</h4><img class='avatar' src="{{URL::asset('/Image/Admin-Avatar/'.Session::get('admin')->avatar)}}" alt="Avatar" /></a>
		  <a class="logout" href="/logout">Log Out</a>
		</div>

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Update Resiver</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="/saveresiverupdate/{{$resiver->id}}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
					<input class="text" type="text" value="{{$resiver->name}}" name="name" placeholder="Name" required>
                    <input class="text" type="text" value="{{$resiver->blood_group}}" name="blood_group" placeholder="Blood Group" required>
					<input class="text" type="text" value="{{$resiver->unit}}" name="unit" placeholder="Unit" required>
                    <input class="text" type="text" value="{{$resiver->mobile}}" name="mobile" placeholder="Mobile - Only Admin can see your Number !!!" required>
                    <input class="text" type="text" value="{{$resiver->patient_name}}" name="patient_name" placeholder="Patient Name" required>
                    <input class="text" type="text" value="{{$resiver->hospital}}" name="hospital" placeholder="Hospital" required><br>
                    <label>Required Date : </label>
                    <input class="text" value="{{$resiver->required_date}}" type="date" name="required_date" required>
					<input class="text email" value="{{$resiver->email}}" type="email" name="email" placeholder="Email">

					
					<input type="submit" value="UPDATE">
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