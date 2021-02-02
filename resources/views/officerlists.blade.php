@extends('layouts.app');

@section('content')
<style>
form,body{background-color:powderblue}  
</style>
<br><img src="images/min.jpeg" alt="logo" height="100" width="100" vertical-align="left">
   <br><br> 
<div class="container">
    <div class="row justify-content-center">
        @if (count($officers))
        
         <table class="table">
         <thead class="thead-dark">
              <tr>
                <th scope="col">officerName</th>
                <th scope="col">AssignedHospital</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($officers as $officer)
                <tr>
                    <th scope="row">{{ $officer->officer_name }}</th>
                    <td>{{ 
                    $officer->hospital_name
                     }}</td>
                    <td></td>
                    <td></td>
                  </tr>
                    
                @endforeach
                   
            </tbody>
          </table>
            
        @endif
    </div>
    <div style="" class="container">
        <a href="{{ route("home") }}">BackHome</a>
    </div>
</div>
    
@endsection