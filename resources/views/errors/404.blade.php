<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>صفحة غير متوفرة </title>
    <link rel="shortcut icon" type="image/x-icon" href="@if(isset($setting['favicon'])){{asset('assets/uploads/settings/' . $setting['favicon'] )}} @else {{asset('Admin/app-assets/images/ico/favicon.ico')}} @endif">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/css/pages/error/style-500.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body class="error500 text-center">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
            {{--            <a href="index.html" class="ml-md-5">--}}
            {{--                <img alt="image-500" src="assets/img/90x90.jpg" class="theme-logo">--}}
            {{--            </a>--}}
        </div>
    </div>
</div>

<div class="container-fluid error-content">
    <div class="">
        <h1 class="error-number">500</h1>
        <p class="mini-text">Ooops!</p>
        <p class="error-text">صفحة غير متوفرة!</p>
        <a class="btn btn-primary btn-lg mt-2" onclick="window.history.back();">عوده</a>
    </div>
</div>
</body>
<!-- END: Body-->

</html>
