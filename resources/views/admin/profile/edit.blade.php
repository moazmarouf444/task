@extends('admin.layouts.master')
@section('title')
    الملف الشخصي
@stop
@section('page_name')
    تحديث الملف الشخصي
@stop
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/dropify/dropify.min.css')}}">
    <link href="{{asset('admin/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css"/>

@stop
@section('content')
    <!--  BEGIN CONTENT AREA  -->
        <div class="layout-px-spacing">

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                         data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form class="store" action="{{ route('admin.profile.update', ['id' => $admin->id]) }}"   enctype="multipart/form-data" class="section general-info" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <input type="hidden" name="id" value="{{$admin -> id}}">
                                                            <input name="avatar" type="file" id="input-file-max-fs" class="dropify"
                                                                   data-default-file="{{$admin->avatar}}"  accept="image/*"
                                                                   data-max-file-size="2M"/>
                                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                                رفع صوره</p>
                                                            @error('avatar')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form" >
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">الاسم </label>
                                                                        <input  type="text" name="name"
                                                                               class="form-control mb-4" id="fullName"
                                                                               placeholder="الاسم"
                                                                               value="{{$admin->name ?? ''}}">
                                                                        @error('name')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">البريد الالكتروني </label>
                                                                        <input type="email" name="email"
                                                                               class="form-control mb-4" id="fullName"
                                                                               placeholder="البريد الالكتروني"
                                                                               value="{{$admin->email ?? ''}}">
                                                                        @error('email')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">رقم الجوال</label>
                                                                        <input name="phone" type="number" class="form-control mb-4"
                                                                               id="profession" placeholder="رقم الجوال"
                                                                               value="{{$admin->phone ?? ''}}">
                                                                        @error('phone')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">الرقم السري </label>
                                                                        <input name="password" type="password" class="form-control mb-4"
                                                                               id="profession" placeholder="الرقم السري">
                                                                    </div>
                                                                    @error('password')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="col-md-12 text-right mb-5">
                                                                    <button type="submit" id="add-work-platforms" class="btn btn-primary">تحديث</button>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!--  END CONTENT AREA  -->

@stop
@section('script')

    <script src="{{asset('admin/plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{asset('admin/assets/js/users/account-settings.js')}}"></script>

    {{-- submit edit form script --}}
    @include('admin.shared.submitEditForm')
    {{-- submit edit form script --}}
@stop
