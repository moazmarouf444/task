@extends('admin.layouts.master')
@section('style')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="{{asset('admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css"/>

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@stop

@section('title')
    الرئيسيه
@stop
@section('content')
    <!--  BEGIN CONTENT PART  -->

    <div class="layout-px-spacing">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card bg-analytics text-white">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="{{asset('admin/assets/img/decore-left.png')}}" class="img-left" alt="card-img-left">
                            <img src="{{asset('admin/assets/img/decore-right.png')}}" class="img-right" alt="card-img-right">
                            <div class="text-center">
                                <h1 class="mb-2">مرحبا بك {{auth()->guard('admin')->user()->name}}</h1>
                                <p class="m-auto w-75">{{  date('d-m-Y', strtotime(\Carbon\Carbon::now())) }} </p>
                                <p class="m-auto w-75">{{  date('h:i A', strtotime(\Carbon\Carbon::now())) }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 weatherWidgetInner">
                <a class="weatherwidget-io"  href="https://forecast7.com/ar/24d7146d68/riyadh/" data-label_1="الرياض" data-label_2="الطقس" data-theme="pure" >Riyadh WEATHER</a>
            </div>
        </div>

            <div class="row layout-top-spacing">

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <a href="{{route('admin.admins.index')}}">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-header">
                                    <div class="w-info">
                                        <h6 class="value">المشرفين</h6>
                                    </div>
                                </div>
                                <div class="w-content">
                                    <div class="w-info">
                                        <p class="value"> {{\App\Models\Admin::count() - 1}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <a href="{{route('admin.reports.index')}}">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-header">
                                    <div class="w-info">
                                        <h6 class="value">التقارير</h6>
                                    </div>
                                </div>
                                <div class="w-content">
                                    <div class="w-info">
                                        <p class="value"> {{\App\Models\Report::count()}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <a href="{{route('admin.inbox.index')}}">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-header">
                                    <div class="w-info">
                                        <h6 class="value">البريد الوارد</h6>
                                    </div>
                                </div>
                                <div class="w-content">
                                    <div class="w-info">
                                        <!-- hitwebcounter Code START -->
                                        <a href="https://www.hitwebcounter.com" target="_blank">
                                            <img src="https://hitwebcounter.com/counter/counter.php?page=8312188&style=0006&nbdigits=5&type=ip&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>


    <!--  END CONTENT PART  -->

@stop
@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('admin/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard/dash_2.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
@stop
