
<style>
.sidebar{
    background:#000 !important;
    color:#fff;
}
ul->li->a:hover{
    color: red !important;


}
</style>
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <h2>{{Auth::user()->name}}</h2>
        </div>
        @if (Auth::user()->role != 'Director')
        <ul class="nav">
            <li >
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-key-25" ></i>
                    <span class="nav-link-text" >REGISTER</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('registerofficer')  }}">
                                <i class="tim-icons icon-single-02"></i>
                             <p>{{ __('HealthOfficer') }}</p>
                            </a>
                        </li>
                        <li   >
                            <a href="{{ route('donations') }}">
                                <i class="tim-icons icon-coins"></i>
                            <p>{{ __('DonorMoney') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <a data-toggle="collapse" href="#charts" aria-expanded="true">
                    <i class="tim-icons icon-chart-bar-32" ></i>
                    <span class="nav-link-text" >CHARTS</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="charts">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route("donation")  }}">
                                <i class="tim-icons icon-money-coins"></i>
                             <p>{{ __('DonationGraph') }}</p>
                            </a>
                        </li>
                        <li  >
                            <a href="{{ route('donations') }}">
                                <i class="tim-icons icon-pin"></i>
                                <p>{{ __('PercentageGraph') }}</p>
                            </a>
                        </li>
                        <li  >
                            <a href="{{ route('hierarchical') }}">
                                <i class="tim-icons icon-triangle-right-17"></i>
                                <p>{{ __('HierarchicalGraph') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                


            </li>
           
            <li>
                <a href="{{ route('patientlist') }}">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>{{ __('PatientList') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('money') }}">
                    <i class="tim-icons icon-coins"></i>
                    <p>{{ __('MonthlyDistributions') }}</p>
                </a>
            </li>
        
        </ul>


            
        @else
        <ul class="nav">
            <li >
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            
            <li>
                {{-- <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-key-25" ></i>
                    <span class="nav-link-text" >REGISTER</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('registerofficer')  }}">
                                <i class="tim-icons icon-single-02"></i>
                             <p>{{ __('HealthOfficer') }}</p>
                            </a>
                        </li>
                        <li   >
                            <a href="{{ route('donations') }}">
                                <i class="tim-icons icon-coins"></i>
          g                      <p>{{ __('DonorMoney') }}</p>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                
                <a data-toggle="collapse" href="#charts" aria-expanded="true">
                    <i class="tim-icons icon-chart-bar-32" ></i>
                    <span class="nav-link-text" >CHARTS</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="charts">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route("donation")  }}">
                                <i class="tim-icons icon-money-coins"></i>
                             <p>{{ __('DonationGraph') }}</p>
                            </a>
                        </li>
                        <li  >
                            <a href="{{ route('donations') }}">
                                <i class="tim-icons icon-pin"></i>
                                <p>{{ __('PercentageGraph') }}</p>
                            </a>
                        </li>
                        <li  >
                            <a href="{{ route('hierarchical') }}">
                                <i class="tim-icons icon-triangle-right-17"></i>
                                <p>{{ __('HierarchicalGraph') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                


            </li>
           
            <li>
                <a href="{{ route('patientlist') }}">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>{{ __('PatientList') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('money') }}">
                    <i class="tim-icons icon-coins"></i>
                    <p>{{ __('MonthlyDistributions') }}</p>
                </a>
            </li>
        
        </ul>

            
        @endif
            </div>
</div>
