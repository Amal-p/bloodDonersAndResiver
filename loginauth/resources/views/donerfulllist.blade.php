<head>
  <title>Doner-Full list</title>
  <style>
    a.disabled {
    pointer-events: none;
    cursor: default;
}
</style>
</head>
<!--Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--css on public folder-->
<link rel="stylesheet" href="{{asset('css/admindashbord.css')}}">
<!--fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .logout{
      position: fixed;
      right: 30px;
      top: 10px;
  }
</style>



<div class="body">
  <div class='navbar'>
    <img class='logo' src="{{URL::asset('/Image/logo.png')}}" alt="Logo" />
    <a href="/admindashbord"><h5 class="avatar-name">{{Session::get('admin')->name}}</h4><img class='avatar' src="{{URL::asset('/Image/Admin-Avatar/'.Session::get('admin')->avatar)}}" alt="Avatar" /></a>
    <a class="logout" href="/logout">Log Out</a>
</div>

    @if (session('message'))
    <div class="message">
        <h3>{{session('message')}}</h3>
    </div>
    @endif


    <div class="list">

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Address</th>
                <th scope="col">Mobile</th>
                <th scope="col">Status</th>
                <th scope="col">ID Proof</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($doners as $doner)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$doner->name}}</td>
                <td>{{$doner->age}}</td>
                <td>{{$doner->blood_group}}</td>
                <td>{{$doner->city}},{{$doner->state}},{{$doner->zip}}<br>Email : {{$doner->email}}</td>
                <td>{{$doner->mobile}}</td>
                <td>
                    @if ($doner->verify)
                        Verifyed
                    @else
                        Verification pending
                    @endif
                </td>
                <td><a href="{{asset('uploads/image/'.$doner->id_proof)}}"><img id="" src="{{asset('uploads/image/'.$doner->id_proof)}}" alt="Id Proof" style="width:100px;max-width:300px"></a></td>
                <td>
                    @if ($doner->verify)
                        <a href="/verify/{{$doner->id}}"  class="btn btn-secondary mt-2 disabled">Verify</a>
                    @else
                        <a href="/verify/{{$doner->id}}" class="btn btn-primary mt-2">Verify</a>
                    @endif
                    <a href="/updatelist/{{$doner->id}}" class="btn btn-primary mt-2">Update</a>
                    <a href="/deletelist/{{$doner->id}}" class="btn btn-primary mt-2">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>


    <!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</i></span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>
        
</div>


  <!--Script for bootstrap-->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 