@extends('admin.layouts.master')

@section('title', 'إضافة صلاحية')
@section('page_name', 'إضافة صلاحية')
@section('style')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="layout-px-spacing">

            <div class="account-settings-container layout-top-spacing">

            <!-- START: Content-->
            <form id="form" class="store" action="{{ route('admin.permissions.store') }}" method="POST" >
            @csrf
            <!-- You can all alert messages by removing the comment -->
                {{--            @include('admin.includes.alerts.all-errors')--}}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach(config('app.languages') as $key => $language)
                                <div class="col-md-6 col-12">
                                    <div class="form-label-group form-group">
                                        <label for="{{$key}}-name">{{ __('dashboard.main.name_in_' . $key) }}</label>
                                        <input type="text" id="{{$key}}-name" class="form-control" name="name[{{$key}}]"
                                               placeholder="{{ __('dashboard.main.name_in_' . $key) }}" autofocus value="{{ old('name.'. $key) }}">

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <!-- Permissions -->
                            @foreach($superPermissions as $key => $permission)
                                <div class="col col-md-4 col-sm-6 md-3 roll-checkk">
                                    <a class="filter-title mb-0 select-all-permissions">{{ __('routes.admin.' . $permission['title'] . '.' . $permission['title'])  }}</a>
                                    <div class="brand-list" id="brands">
                                        <ul class="list-unstyled">
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                            <span style="border-bottom: 1px solid #ddd;padding-bottom: 10px;" class="vs-checkbox-con vs-checkbox-primary">
                                                                <input class="checkbox-input check-all" type="checkbox">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">تحديد الكل</span>
                                                            </span>
                                            </li>
                                            @foreach($permission['childrens'] as $child)

                                                <li class="d-flex justify-content-between align-items-center py-25">
                                                            <span class="vs-checkbox-con vs-checkbox-primary">
                                                                <input name="permissions[]" value="{{ $child }}" class="checkbox-input checkk" type="checkbox">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">{{ __('routes.' . $child ) }}</span>
                                                            </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                        @endforeach
                        <!-- /Permissions -->
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 mb-1">{{ __('dashboard.add') }}</button>
                        </div>
                    </div>
                </div>

            </form>
            <!-- END: Content-->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        $(".check-all").on("change" , function(){
            if($(this).is(':checked') )
                $(this).parents(".roll-checkk").find(".checkk").attr("checked" , true);
            else
                $(this).parents(".roll-checkk").find(".checkk").attr("checked" , false);
        })
    </script>
@include('admin.shared.submitAddForm')
@endsection
