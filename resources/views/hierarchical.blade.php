@extends('layouts.app');


@section('content')
<a href="home"><button class="btn btn-primary">Home</button></a><br>
<br><img src="images/min.jpeg" alt="logo" height="100" width="100" vertical-align="left">
   <br><br> 
    <div class="container">
    <style>
    .general,.national{
      color:white;
      background:#000;
      width:100%;
      height:100px
    }
    .regional{
      color:white;
      background:#000;
      width:100%;
      margin-left:20px;
      height:100px
    }
    .text-margin{
      margin-left: 20px;
    }
    .text{
      text-align:center;
      font-weight:900;
      background:blue;
      color:white;
    }
</style>
        <div class="col-md-12 mt-3 mb-3">
            <p class="tab">HierachicalDisplays</p>
        </div>
        <div class="contained">
            <div class="text">
                <p class="tab-hospitals">GeneralHospitalHierarchy</p>
            </div>
            <ol class="general">
                <h2 class="level-3 rectangle">GeneralHospitalHead</h2>
                <ol class="level-4-wrapper">
                  <li>
                    <h4 class="level-4 rectangle">Officers</h4>
                  </li>
                </ol>
            </ol>
            <div class="text text-margin">
                <p class="tab-hospitals">RegionalHospitalHierarchy</p>
            </div>
            <ol class="regional">
                <h2 class="level-3 rectangle">Superintendent</h2>
                <ol class="level-4-wrapper">
                  <li>
                    <h4 class="level-4 rectangle">SeniorOfficers</h4>
                  </li>
                </ol>

                <div class="text mt-5">
                    <p class="tab-hospitals">NationalHospitalHierarchy</p>
                </div>
                <ol class="national">
                    <h2 class="level-3 rectangle">Covid19PandemicDirector</h2>
                    <ol 
                    >
                      <li>
                        <h4 class="level-4 rectangle">StaffMembers</h4>
                      </li>
                    </ol>

        </div>
    </div>
</div>'
    
@endsection