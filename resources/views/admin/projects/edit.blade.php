@extends('admin.layouts.master')
@section('title')
    المشاريع
@stop
@section('page_name')
    تعديل  مشروع
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
                            <form class="store" action="{{ route('admin.projects.update',$project) }}"   enctype="multipart/form-data" class="section general-info" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form" >
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="id" value="{{$project -> id}}">

                                                                    <label for="fullName">العنوان </label>
                                                                    <input  type="text" name="title"
                                                                            class="form-control mb-4" id="fullName"
                                                                            placeholder="العنوان"
                                                                            value="{{$project->title}}">
                                                                    @error('title')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">الوصف </label>
                                                                    <textarea type="text" name="description"
                                                                              class="form-control mb-4" id="fullName"
                                                                              placeholder="الوصف">{{$project->description}}</textarea>
                                                                    @error('description')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="is_blocked">اسم المشرف</label>
                                                                    <select name="admin_id" class="form-control" id="admin_id" >
                                                                        @foreach($admins as $admin)
                                                                            <option {{ $admin->id == $project->admin_id ? 'selected' : '' }} value="{{$admin->id}}">{{$admin->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('admin_id')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror

                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="is_blocked">اسم العميل</label>
                                                                    <select name="user_id" class="form-control" id="admin_id" >
                                                                        @foreach($users as $user)
                                                                            <option  {{ $user->id == $project->user_id ? 'selected' : '' }} value="{{$user->id}}">{{$user->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('user_id')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="profession">الميعاد النهائي</label>
                                                                    <input name="dead_line" type="date" class="form-control mb-4"
                                                                           id="profession" placeholder="الميعاد النهائي"
                                                                           value="{{$project->dead_line}}">
                                                                    @error('dead_line')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="is_blocked">الحاله</label>
                                                                    <select name="status" class="form-control" id="admin_id" >
                                                                        <option  {{ $project->status == 'open' ? 'selected' : '' }} value="open">مفتوح</option>
                                                                        <option {{ $project->status == 'closed' ? 'selected' : '' }} value="closed">مغلق</option>
                                                                    </select>
                                                                    @error('status')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-12 d-flex justify-content-center mt-3 ">
                                                                <button type="submit" id="add-work-platforms"
                                                                        class="btn btn-primary submit_button">تعديل
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
    @include('admin.shared.submitEditForm')
    {{-- submit edit form script --}}
@stop
