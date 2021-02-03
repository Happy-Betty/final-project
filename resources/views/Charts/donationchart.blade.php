@extends('layouts.app');

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
</style>
<div class="container-">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3 mb-3">
            <p class="tab">DonationGraph</p>
        </div>
        <div id="donationgraph" style="height: 500px;" class="m-4"></div>

    </div>
</div>
!-- Charting library -->
<script  src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

 <script>
        
      // your Chart code here ex: new Chart
      const chart = new Chartisan({
     el: '#donationgraph',
     url: "@chart('donation_chart')",
     hooks:new ChartisanHooks()
            .beginAtZero()
            .responsive()
           .colors()
           .title({display:true,
           color:"red",
            text:"A graph of Donations  versus Wellwishers",
            font:{
              style:"bold"
            }
            })
           .legend({position:"bottom"})
           .datasets([{type:"bar", 
           label:"wellwishers",
           borderColor:"orange",
           backgroundColor:"orange",
           hoverBackgroundColor:"blue",
           barPercentage: 0.6,
           minBarLength: 2,
           axis:true,
           }])
           
   });

    
@endsection