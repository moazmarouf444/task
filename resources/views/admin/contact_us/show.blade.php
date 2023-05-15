@extends('admin.layouts.master')
@section('title')
    الرسائل
@stop
@section('page_name')
    عرض رساله
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
                                <form class="store" enctype="multipart/form-data" class="section general-info"
                                      method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="info">
                                        <h6 class="">عرض</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">الاسم </label>
                                                                        <input disabled type="text" name="name"
                                                                               class="form-control mb-4" id="fullName"
                                                                               placeholder="الاسم"
                                                                               value="{{$message->name ?? ''}}">

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">البريد الالكتروني </label>
                                                                        <input disabled type="email" name="email"
                                                                               class="form-control mb-4" id="fullName"
                                                                               placeholder="البريد الالكتروني"
                                                                               value="{{$message->email ?? ''}}">

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">رقم الجوال</label>
                                                                        <input disabled name="phone" type="number"
                                                                               class="form-control mb-4"
                                                                               id="profession" placeholder="رقم الجوال"
                                                                               value="{{$message->phone ?? ''}}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="profession">الرساله</label>
                                                                        <textarea disabled id="editor-container" name="message"
                                                                                  type="text" class="form-control mb-4"
                                                                                  id="profession" placeholder="">
                                                                               {{$message->message ?? ''}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12  mb-5" style="text-align: center">
                                                                    <a href="{{ url()->previous() }}" type="reset"
                                                                       class="btn btn-outline-warning mr-1 mb-1">رجوع</a>
                                                                    <a data-toggle="modal" data-target="#replay"
                                                                       class="btn btn-outline-primary mr-1 mb-1"  style="text-align: center">رد</a>
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
    <div class="modal fade" id="replay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('admin.inbox.reply' , ['id' => $message->id])}}" method="POST"
                  enctype="multipart/form-data" class="store">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">الرد علي الرساله</h5>
                    </div>
                    <textarea autofocus  name="replay" type="text" class="form-control mb-4"
                              id="profession" placeholder=""></textarea>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> تجاهل</button>
                        <button type="submit" class="btn btn-primary submit_button">رد</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
@section('script')

    <script src="{{asset('admin/plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="{{asset('admin/assets/js/users/account-settings.js')}}"></script>

    <script>
        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{header: [1, 2, false]}],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'  // or 'bubble'
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('submit', '.store', function(e) {
                e.preventDefault();
                var url = $(this).attr('action')
                $.ajax({
                    url: url,
                    method: 'post',
                    data: new FormData($(this)[0]),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $(".submit_button").html(
                            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                        ).attr('disable', true)
                    },
                    success: function(response) {
                        $(".text-danger").remove()
                        $('.store input').removeClass('border-danger')
                        $(".submit_button").html("رد").attr(
                            'disable', false)
                        Swal.fire({
                            position: 'top-start',
                            type: 'success',
                            title: 'تمت الرد بنجاح',
                            showConfirmButton: false,
                            timer: 1500,
                            confirmButtonClass: 'btn btn-primary',
                            buttonsStyling: false,
                        })

                        setTimeout(function() {
                            window.location.replace(response.url)
                        }, 1000);
                    },
                    error: function(xhr) {
                        $(".submit_button").html("اضافة").attr(
                            'disable', false)
                        $(".text-danger").remove()
                        $('.store input').removeClass('border-danger')

                        $.each(xhr.responseJSON.errors, function(key, value) {
                            $('.store input[name=' + key + ']').addClass(
                                'border-danger')
                            $('.store input[name=' + key + ']').after(
                                `<span class="mt-5 text-danger">${value}</span>`);
                            $('.store select[name=' + key + ']').after(
                                `<span class="mt-5 text-danger">${value}</span>`);
                        });
                    },
                });

            });
        });
    </script>

@stop
