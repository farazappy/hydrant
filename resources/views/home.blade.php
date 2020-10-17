@extends('layouts.app')

@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles m-b-0">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                    <a href="{{ route('add-area') }}">Add a new area</a>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row page-titles">
                <div class="col-lg-12 text-center">
                    <div class="ml-auto">
                        <form id="cityForm" method="GET" action="{{ route('home') }}">
                            <select class="custom-select" name="area" onchange="submitCityForm()">
                                <option selected>-- Select Area --</option>
                                @foreach($areas as $area)
                                    @if($selectedArea == $area)
                                        <option selected>{{ $area->area_name }}</option>
                                    @else
                                        <option>{{ $area->area_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <h1 class="m-t-30">{{ $selectedArea }}</h1>
                    <h5 class="text-muted m-b-30"><i class="ti-pin"></i> Kolkata, West Bengal, India</h5>
                </div>
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Water Usage/Wastage Overviews</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="amp-pxl m-t-40" style="height: 335px;"></div>
                                <div class="text-center">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Usage</h6> </li>
                                        <li>
                                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Wastage</h6> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Weather Report</h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex  p-l-20 bg-light align-items-center flex-row ">
                                <div class="p-2 display-5 text-info">
                                    <canvas class="sleet" width="44" height="44"></canvas> <span>32<sup>°</sup></span></div>
                                <div class="p-2">
                                    <h3 class="m-b-0">Monday</h3><small>Kolkata, India</small></div>
                            </div>
                            <div class="card-body">
                                <table class="table no-border lite-padding">
                                    <tbody>
                                        <tr>
                                            <td>Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td>Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td>Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td>Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                        <tr>
                                            <td>Ceiling</td>
                                            <td class="font-medium">25760 ft</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <ul class="list-unstyled row text-center city-weather-days">
                                    <li class="col">
                                        <canvas class="clear-day" width="30" height="30"></canvas><span>09:30</span>
                                        <h3>70<sup>°</sup></h3></li>
                                    <li class="col">
                                        <canvas class="partly-cloudy-day" width="30" height="30"></canvas><span>11:30</span>
                                        <h3>72<sup>°</sup></h3></li>
                                    <li class="col">
                                        <canvas class="wind" width="30" height="30"></canvas><span>13:30</span>
                                        <h3>75<sup>°</sup></h3></li>
                                    <li class="col">
                                        <canvas class="snow" width="30" height="30"></canvas><span>15:30</span>
                                        <h3>76<sup>°</sup></h3></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h4 class="card-title">Predicted Hourly Usage/Wastage for Today</h4>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li>
                                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Usage</h6> </li>
                                                    <li>
                                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Wastage</h6> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="earning" style="height: 355px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection

@section('extraJs')
<script type="text/javascript">
    function submitCityForm() {
        $("#cityForm").submit();       
    }
</script>
@endsection
