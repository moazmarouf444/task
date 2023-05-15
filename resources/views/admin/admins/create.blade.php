@extends('admin.layouts.master')
@section('title')
    المشرفين
@stop
@section('page_name')
    اضافه مشرف
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
                                <form class="store" action="{{ route('admin.admins.store') }}"   enctype="multipart/form-data" class="section general-info" method="POST">
                                    @csrf

                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <input name="avatar" type="file" id="input-file-max-fs" class="dropify"
                                                                   data-default-file="{{asset('storage/images/admins/default.png')}}"  accept="image/*"
                                                                   data-max-file-size="2M"/>
                                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                                تحميل الصوره</p>
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
                                                                                value="">
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
                                                                               value="">
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
                                                                               value="">
                                                                        @error('phone')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="password">الرقم السري </label>
                                                                        <input name="password" type="password" class="form-control mb-4"
                                                                               id="" placeholder="الرقم السري">
                                                                    </div>
                                                                    @error('password')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="is_blocked">الحالة</label>
                                                                        <select name="is_blocked" class="form-control" id="is_blocked" >
                                                                            <option  value="1"  >محظور</option>
                                                                            <option value="0"  >غير محظور</option>
                                                                        </select>
                                                                        @error('is_blocked')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="role_id">الصلاحيه</label>
                                                                        <select name="role_id" class="form-control" id="role_id" >
                                                                            @foreach($roles as $role)
                                                                                <option value="{{ $role->id }}" @if(old('role_id') == $role->id ) selected @endif >{{ $role->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('role_id')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror

                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-flex justify-content-center mt-3 ">
                                                                    <button type="submit" id="add-work-platforms"
                                                                            class="btn btn-primary submit_button">اضافه
                                                                    </button>
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
    @include('admin.shared.submitAddForm')
    {{-- submit edit form script --}}
@stop
