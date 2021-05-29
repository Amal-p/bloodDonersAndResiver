<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Bootstrap css-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--css on public folder-->
    <link rel="stylesheet" href="{{secure_asset('css/admindashbord.css')}}">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin - Dashbord</title>
    <style>
        .logout{
            position: fixed;
            right: 30px;
            top: 10px;
        }
    </style>
</head>
<body>
   <div class="body">
        <div class='navbar'>
            <img class='logo' src="{{URL::asset('/Image/logo.png')}}" alt="Logo" />
            <a href="/admindashbord"><h5 class="avatar-name">{{Session::get('admin')->name}}</h4><img class='avatar' src="{{URL::asset('/Image/Admin-Avatar/'.Session::get('admin')->avatar)}}" alt="Avatar" /></a>
            <a class="logout" href="/logout">Log Out</a>
        </div>
        <div class="search">

            <form action="/sarech" method="POST">
                @csrf
                <div class="container d-flex justify-content-center">
                    <div class="card mt-5 p-4">
                        <!--DropDown-->
                        <div>
                            <select class="form-select mb-3" name="type" id="">
                                <option value="blood_grooup">Blood Group</option>
                                <option value="mobile">Mobile</option>
                            </select>
                        </div>
                        <!--DropDown-->
    
                        <div class="input-group mb-3"> <input type="text" name="searchkey" class="form-control" placeholder="Blood Group(Full capital AB-) OR Mobile...">
                            <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>

                            
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <div class="link">
            <a href="/showalldoner" class=" mt-5 btn btn-outline-secondary">Full Doners Data</a>
            <a href="/showallreceiver" class=" mt-5 btn btn-outline-secondary">Full Receiver Data</a>
            <a href="/showalldonernotverify" class=" mt-5 btn btn-outline-secondary">Not Verifyied Doners</a>
            <a href="/showallreceivernotverify" class=" mt-5 btn btn-outline-secondary">Not Verifyied Receiver</a>
        </div>
   </div>
 <!--Script for bootstrap-->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>