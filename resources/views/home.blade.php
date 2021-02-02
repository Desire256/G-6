@extends('layouts.app')


@section('content')
<div style="background:url(images/covid.jpeg);Background-repeat:no-repeat;background-size:100% 100%" class="container">
   
<h2 style="text-align:center; color:white;font-weight:bold;">WELCOME</h2>
   <br><img src="images/min.jpeg" alt="logo" height="100" width="100" vertical-align="left">
   <br><br> 
   <div><button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:red" ><a href="{{route('registerofficer')}}">Officers</a></button></div>
   <div><br>
     <button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:white" ><a href="{{ route('registerdonormoney') }}">RegisterDonor</a></button>
     </div><br>
<div>
     <button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:white"><a href="{{ route('patientlist') }}">Patients</a></button>
   </div><br>
  <div>
    <button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:white">  <a href="{{ route('money') }}">MonthlySalary</a></button>
    </div><br>
    <div> <button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:white"> <a href="{{ route('graphs') }}">Graphs</a></button>
    </div><br>
    <div>
      <button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:white">  <a href="{{ route('graphical') }}">Charts</a> </button>
    </div><br>
    <div> <button type="button" class="btn btn-primary" style="background-color:black; border-radius:100px;font-weight:bold;color:white">  <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
   </a></button>
  </div>
</div>
@endsection
