@extends('Admin.Layout.index')
@section('content')
    <p class="f20 m-5"> داشبورد</p>

        <div class="d-flex col-11 mx-auto">

                <div class="col-lg-3 m-4 border d-flex flex-row rounded bg_dashboard" >
                    <img src="/Admin/user_image/group.png" class="img-fluid icon_info">
                    <div class="w-100 m-4">
                        <p class="mb-4 f20">کاربران جدید</p>
                        <p class="f20">56</p>
                    </div>
                </div>

                <div class="col-lg-3 m-4 border d-flex flex-row rounded bg_dashboard" >
                    {{--                <img src="/Admin/user_image/pexels.jpg" style="width: 100%;height: 100%;">--}}
                    <img src="/Admin/user_image/group.png" class="img-fluid icon_info">
                    <div class="w-100 m-4">
                        <p class="mb-4 f20">کاربران جدید</p>
                        <p class="f20">56</p>
                    </div>
                </div>
                <div class="col-lg-3 m-4 border d-flex flex-row rounded bg_dashboard" >
                    <img src="/Admin/user_image/group.png" class="img-fluid icon_info">
                    <div class="w-100 m-4">
                        <p class="mb-4 f20">کاربران جدید</p>
                        <p class="f20">56</p>
                    </div>
                </div>



        </div>


@endsection
