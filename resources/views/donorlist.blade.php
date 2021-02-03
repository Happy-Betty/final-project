@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title text-center">OfficerTable</h4>
            </div>
            @if ($donorlist)
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        DonorName
                      </th>
                      <th>
                        Amount
                      </th>
                      <th>
                        Month
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($donorlist as $donor)
                        <tr>
                            <td>
                              {{$donor->DonorName}}
                            </td>
                            <td>
                              {{$donor->Amount}}
                            </td>
                            <td>
                              {{$donor->Month}}
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
  
@endsection