<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Blood</title>
</head>
<body>

<!--NavBar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Keep Smail</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/register">Doner Registration</a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="/reciverregister">Resiver Registration</a>
          </li>
       
      </ul>
    </div>
  </nav>
<!--NavBar-->


    <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
              <div class="col-6">
                  <h3 class="mb-3">Resiver List</h3>
              </div>
              <div class="col-6 text-right">
              </div>
              <div class="col-12">
                  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
      
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="row">
      
                                  @foreach ($resivers as $resiver)
                                  <div class="col-md-4 mb-3">
                                    <div class="card">
                                        @if ($resiver->blood_group == 'a+' or $resiver->blood_group == 'A+')
                                        <img class="img-fluid" alt="A+" src="https://thebloodconnection.org/wp-content/uploads/2020/02/Blood-Types-v01_A-Positive-1.png" style="max-height: 100px;max-width: 100px;">
                                        
                                        @elseif($resiver->blood_group == 'a-' or $resiver->blood_group == 'A-')
                                        <img class="img-fluid" alt="A-" src="https://1cct7u2mqwcc1ylzy10oxm8e-wpengine.netdna-ssl.com/wp-content/uploads/2020/03/Blood-Types_A-Negative.png" style="max-height: 100px;max-width: 100px;">
                                        
                                        @elseif($resiver->blood_group == 'b+' or $resiver->blood_group == 'B+')
                                        <img class="img-fluid" alt="B-" src="https://thebloodconnection.org/wp-content/uploads/2020/02/Blood-Types-v01_B-Positive-1.png" style="max-height: 100px;max-width: 100px;">
                                        
                                        @elseif($resiver->blood_group == 'b-' or $resiver->blood_group == 'B-')
                                        <img class="img-fluid" alt="B-" src="https://thebloodconnection.org/wp-content/uploads/2020/02/Blood-Types-v01_B-Negative-1.png" style="max-height: 100px;max-width: 100px;">
                                        
                                        @elseif($resiver->blood_group == 'ab+' or $resiver->blood_group == 'AB+')
                                        <img class="img-fluid" alt="AB+" src="https://thebloodconnection.org/wp-content/uploads/2020/02/Blood-Types-v01_AB-Positive-1.png" style="max-height: 100px;max-width: 100px;">

                                        @elseif($resiver->blood_group == 'ab-' or $resiver->blood_group == 'AB-')
                                        <img class="img-fluid" alt="AB-" src="https://www.blood.ca/sites/default/files/icon/blood-types_ab-negative_blood-drop.jpg" style="max-height: 100px;max-width: 100px;">

                                        @elseif($resiver->blood_group == 'o+' or $resiver->blood_group == 'O+')
                                        <img class="img-fluid" alt="O+" src="https://1cct7u2mqwcc1ylzy10oxm8e-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/Blood-Types-v01_O-Positive-1-300x285.png" style="max-height: 100px;max-width: 100px;">

                                        @else
                                        <img class="img-fluid" alt="O-" src="https://1cct7u2mqwcc1ylzy10oxm8e-wpengine.netdna-ssl.com/wp-content/uploads/2020/02/Blood-Types-v01_O-Negative-1-300x285.png" style="max-height: 100px;max-width: 100px;">
                                        @endif
                                        
                                        <div class="card-body">
                                            <h4 class="card-title">Patiant Name : {{$resiver->patient_name}}</h4>
                                            <p class="card-text">Reporter Name : {{$resiver->name}} </p>
                                            <p class="card-text">Blood Group : {{$resiver->blood_group}}</p>
                                            
                                            @if (($resiver->unit)>5)
                                                <p class="card-text">Unit : <b style="color: #FF4433">{{$resiver->unit}}</b></p>
                                            @else
                                                <p class="card-text">Unit : <b style="color: #3f704d">{{$resiver->unit}}</b></p>
                                            @endif

                                            <p class="card-text">Required Date : <b>{{$resiver->required_date}}</b></p>
                                            <p class="card-text">Application Date : <b>{{$resiver->application_date}}</b></p>
                                            <p class="card-text">Hospital Name : {{$resiver->hospital}}</p>
                                            <p class="card-text">Status : 
                                                @if ($resiver->verify)
                                                    <span style="color: #3f704d">Verifyed</span>
                                                @else
                                                <span style="color: #FF4433">Verification Pending</span>
                                                @endif
                                            </p>
                                            <p class="card-text">Admin Number : 0000000000</p>
    
                                        </div>
    
                                    </div>
                                </div>
                                  @endforeach
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </section>

   
   <!--Script for bootstrap-->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 

</body>
</html>