@extends('layouts.app')


@section('content')
<div class="container-">
  <div class="row">
    <button> <a href="{{ route('registerofficer') }}" 
      class="dropdown-item">Officers</a></button>
  </div>
<button>  <a href="{{ route('registerdonormoney') }}" 
  class="dropdown-item">MoneyDonated</a></button>
     </div>
<div>
  <button>  <a href="{{ route('patientlist') }}" 
    class="dropdown-item">Patients</a></button>
  </div>
  <div>
    <button>  <a href="{{ route('money') }}" 
      class="dropdown-item">MonthlySalary</a></button>
    </div>
    <div> <button> <a href="{{ route('graphs') }}" 
      class="dropdown-item">Graphs</a></button>
    </div>
    <div>
      <button>  <a href="{{ route('graphical') }}" 
        class="dropdown-item">Charts</a> </button>
    </div>
    <div> <button>  <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
   </a></button>
  </div>
</div>
</div>
@endsection
