@extends('layouts.app');

@section('content')
<style>
form,body{background-color:powderblue}  
</style>
<br><img src="images/min.jpeg" alt="logo" height="100" width="100" vertical-align="left">
   <br><br> 
<div class="container">
    <div class="row justify-content-center">
        @if (count($donors))
        
         <table class="table">
         <thead class="thead-dark">
              <tr>
                <th scope="col">Donor Name</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($donors as $officer)
                <tr>
                    <th scope="row">{{ $officer->donor_name }}</th>
                    <td>{{ 
                    $officer->amount
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
<div style="" class="container">
        <a href="{{ route("home") }}">BackHome</a>
    </div>
    
@endsection