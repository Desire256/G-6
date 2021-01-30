@extends('layouts.app');

@section('content')

<div class="container-">
    <div class="row justify-content-center">
        @if (count($officers))
        
         <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($officers as $officer)
                <tr>
                    <th scope="row">{{ $officer->officer_name }}</th>
                    <td>{{ 
                    $officer->hospital_name
                     }}</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                    
                @endforeach
                   
            </tbody>
          </table>
            
        @endif
    </div>
    <div class="footer">
        <a href="{{ route("home") }}">BackHome</a>
    </div>
</div>
    
@endsection