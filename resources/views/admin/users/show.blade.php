@extends('admin.layouts.master')
@section('title')
    عرض عميل
@stop
@section('page_name')
    عرض عميل
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
                            <form class="store"    enctype="multipart/form-data" class="section general-info" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input type="hidden" value="{{$user->id}}">
                                                        <input name="avatar" type="file" id="input-file-max-fs" class="dropify"
                                                               data-default-file="{{$user->avatar}}"  accept="image/*"
                                                               data-max-file-size="2M"/>
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>
                                                        </p>
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
                                                                            value="{{$user->name ?? ''}}">
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
                                                                           value="{{$user->email ?? ''}}">
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
                                                                           value="{{$user->phone ?? ''}}">
                                                                    @error('phone')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror

                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="is_blocked">الحالة</label>
                                                                    <select name="is_blocked" class="form-control" id="is_blocked" >
                                                                        <option>اختر حالة الحظر</option>
                                                                        <option  value="1"  {{ $user->is_blocked == 1 ? 'selected' : '' }}>محظور</option>
                                                                        <option value="0" {{ $user->is_blocked == 0 ? 'selected' : '' }} >غير محظور</option>
                                                                    </select>
                                                                    @error('is_blocked')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12  mb-5" style="text-align: center">
                                                                <a href="{{ url()->previous() }}" type="reset"
                                                                   class="btn btn-outline-warning mr-1 mb-1">رجوع</a>

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

    <script>
        $('.store input').attr('disabled', true)
        $('.store textarea').attr('disabled', true)
        $('.store select').attr('disabled', true)
    </script>
@stop
