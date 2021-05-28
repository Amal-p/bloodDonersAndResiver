<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--css on public folder-->
<link rel="stylesheet" href="{{asset('css/app.css')}}">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well">Doner Updation Form</h1>

    <br>

	<div class="col-lg-12 well">
	<div class="row">
				<form action="/updatelistsave/{{$doner->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Name</label>
								<input type="text" name="name" value="{{$doner->name}}" placeholder="Enter Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Age</label>
								<input type="text" name="age" value="{{$doner->age}}" placeholder="Enter Age Here.." class="form-control">
							</div>
                            <div class="col-sm-6 form-group">
								<label>Blood Group</label>
								<input type="text" name="blood_group" value="{{$doner->blood_group}}" placeholder="Enter Blood Group Here.." class="form-control">
							</div>
						</div>						
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="city" value="{{$doner->city}}" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="state" value="{{$doner->state}}" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="zip" value="{{$doner->zip}}" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
												
					<div class="form-group">
						<label>Mobile Number</label>
						<input type="text" name="mobile" value="{{$doner->mobile}}" placeholder="Enter Mobile Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" name="email" value="{{$doner->email}}" placeholder="Enter Email Address Here.." class="form-control">
                        </div>
					</div>
                    

                    <div class="form-group">
						<label>Id Proof</label>
                        <br>
                        <a href="{{asset('uploads/image/'.$doner->id_proof)}}"><img class="card-img-top" style="height: 300px; width:300px" src="{{asset('uploads/image/'.$doner->id_proof)}}" alt="Id Proof"></a>
                        <br>
						<input type="file" name="id_proof" class="form-control">
					</div>

					<button type="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>