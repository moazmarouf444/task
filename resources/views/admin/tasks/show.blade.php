@extends('admin.layouts.master')
@section('title')
    المهام
@stop
@section('page_name')
    عرض  مهمه
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
                            <form class="store" action="{{ route('admin.tasks.update',$task) }}"   enctype="multipart/form-data" class="section general-info" method="POST">
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
                                                                    <input type="hidden" name="id" value="{{$task -> id}}">

                                                                    <label for="fullName">العنوان </label>
                                                                    <input  type="text" name="title"
                                                                            class="form-control mb-4" id="fullName"
                                                                            placeholder="العنوان"
                                                                            value="{{$task->title}}">
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
                                                                              placeholder="الوصف">{{$task->description}}</textarea>
                                                                    @error('description')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="is_blocked">اسم المشروع</label>
                                                                    <select name="project_id" class="form-control" id="admin_id" >
                                                                        @foreach($projects as $project)
                                                                            <option {{ $task->id == $task->project_id ? 'selected' : '' }} value="{{$project->id}}">{{$project->title}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('project_id')
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

    {{-- submit edit form script --}}
    @include('admin.shared.submitEditForm')
    {{-- submit edit form script --}}
    <script>
        $('.store input').attr('disabled', true)
        $('.store textarea').attr('disabled', true)
        $('.store select').attr('disabled', true)
    </script>

@stop
