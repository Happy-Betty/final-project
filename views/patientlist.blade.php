@extends('layouts.app')

@section('content')
<style>
    .tab{
        text-align: center;
        background:#000;
        color:#fff;
        border-radius: 999px;
        width: 100%;
        padding: 8px;
        font-weight: 800;
    }
    /* .color{
      background: red;
      width: 20%;
      height: 20px;
      align-self: center;
      align-items: center;
      text-align: center;

    } */
</style>
    <div class="header ">
        <div class="container">
            <div class="header-body text-center ">
                <div class="row ">
                    <div class="col-md-12">
                       <div class="tab md-12 mb-3">
                         @if ($total)
                             TotalPatients<h4 class="color">{{$total}}</h4>
                         @endif
                       </div>
                       <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title text-center">PatientsGeneralTable</h4>
                        </div>
                        @if (count($patients_general))
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    OfficerName
                                  </th>
                                  <th>
                                    OfficerUserName
                                  </th>
                                  <th>
                                    HospitalName
                                  </th>
                                </thead>
                                <tbody>
                                    @foreach ($patients_general as $officer)
                                    <tr>
                                        <td>
                                          {{$officer->PatientName}}
                                        </td>
                                        <td>
                                          {{$officer->OfficerName}}
                                        </td>
                                        <td>
                                          {{$officer->HospitalName}}
                                        </td>
                                        
                                       
                                      </tr>
                                        
                                    @endforeach
                                  
                                </tbody>
                              </table>
                              
                            </div>
                          </div>
                            
                        @endif
                       
                      </div>
                    </div>
              

                       
                       <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title text-center">PatientsRegiobalTable</h4>
                        </div>
                        @if ($patients_regional)
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    OfficerName
                                  </th>
                                  <th>
                                    OfficerUserName
                                  </th>
                                  <th>
                                    HospitalName
                                  </th>
                                </thead>
                                <tbody>
                                    @foreach ($patients_regional as $officer)
                                    <tr>
                                        <td>
                                          {{$officer->PatientName}}
                                        </td>
                                        <td>
                                          {{$officer->OfficerName}}
                                        </td>
                                        <td>
                                          {{$officer->HospitalName}}
                                        </td>
                                        
                                       
                                      </tr>
                                        
                                    @endforeach
                                  
                                </tbody>
                              </table>
                              
                            </div>
                          </div>
                            
                        @endif
                       
                      </div>
                    </div>
              
                       
                       <div class="card">
                        <div class="card-header card-header-primary">
                          <h4 class="card-title text-center">PatientsNationalTable</h4>
                        </div>
                        @if (count($patients_general))
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th>
                                    OfficerName
                                  </th>
                                  <th>
                                    OfficerUserName
                                  </th>
                                  <th>
                                    HospitalName
                                  </th>
                                </thead>
                                <tbody>
                                    @foreach ($patients_national as $officer)
                                    <tr>
                                        <td>
                                          {{$officer->PatientName}}
                                        </td>
                                        <td>
                                          {{$officer->OfficerName}}
                                        </td>
                                        <td>
                                          {{$officer->HospitalName}}
                                        </td>
                                        
                                       
                                      </tr>
                                        
                                    @endforeach
                                  
                                </tbody>
                              </table>
                              
                            </div>
                          </div>
                            
                        @endif

                      </div>
                    </div>

                    </div>
                </div>

            </div>
            @include('layouts.footer')
        </div>
    </div>
@endsection
