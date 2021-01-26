@extends('Frontend.Layout.index')

@section('style')
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/Dropify_min.css" rel="stylesheet" type="text/css"/>
    <link href="/Frontend/css/sweetalert.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>اطلاعات شخصی </h2>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->





    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5 mr-lg-5">
                <input type="file" id="" class="dropify mx-auto">
            </div>
            <div class="col-lg-9">

            </div>

        </div>

        <div class="row align-items-center ptb-50">
            <div class="col-lg-6 p-1">
                <div class="col-lg-10 bg_white border rounded p-4 mx-auto mb-3">
                    <p class="d-inline-block mb-0">نام و نام خانوادگی :</p>
                    <p class="d-block font_gray" id="newName">@if($user_data->name){{ $user_data->name }}@endif </p>
                    <img src="frontend/image/static/edit.png" class="img-fluid float-left pointer mt_native" width="20"
                         data-toggle="modal" data-target="#update_name_family">
                </div>
                {{--  col-lg-6  --}}

                <div class="col-lg-10 bg_white border rounded p-4 mx-auto mb-3">
                    <p class="d-inline-block mb-0">شماره تلفن همراه :</p>
                    <p class="d-block font_gray"
                       id="phone_number">@if($user_data->phone_number){{ $user_data->phone_number }}@endif </p>
                    <img src="frontend/image/static/edit.png" class="img-fluid float-left pointer mt_native" width="20"
                         data-toggle="modal"
                         data-target="#update_phone_number">
                </div>
            </div>
            {{--  col-lg-6  --}}


            <div class="col-lg-6 p-1">
                <div class="col-lg-10 bg_white border rounded p-4 mx-auto mb-3">
                    <p class="d-inline-block mb-0">تاریخ تولد :</p>
                    <p class="d-block font_gray" id="birthday">@if($user_data->birthday){{ $user_data->birthday }}@else
                            - @endif</p>
                    <img src="frontend/image/static/edit.png" class="img-fluid float-left pointer mt_native" width="20"
                         data-toggle="modal"
                         data-target="#update_birthday">
                </div>
                {{--  col-lg-6  --}}

                <div class="col-lg-10 bg_white border rounded p-4 mx-auto mb-3">
                    <p class="d-inline-block mb-0"> کد ملی :</p>
                    <p class="d-block font_gray"
                       id="natinal_code">@if($user_data->natinal_code){{ $user_data->natinal_code }}@else - @endif</p>
                    <img src="frontend/image/static/edit.png" class="img-fluid float-left pointer mt_native" width="20"
                         data-toggle="modal"
                         data-target="#update_natinal_code">
                </div>
                {{--  col-lg-6  --}}
            </div>


            <div class="col-lg-6 p-1">
                <div class="col-lg-10 bg_white border rounded p-4 mx-auto mb-3">
                    <p class="d-inline-block mb-0"> پست الکترونیک :</p>
                    <p class="d-block font_gray" id="email"> @if($user_data->email){{ $user_data->email }}@else
                            - @endif</p>
                    <img src="frontend/image/static/edit.png" class="img-fluid float-left pointer mt_native" width="20"
                         data-toggle="modal"
                         data-target="#update_email">
                </div>
                {{--  col-lg-6  --}}

                <div class="col-lg-10 bg_white border rounded p-4 mx-auto mb-3">
                    <p class="d-inline-block mb-0"> تغییر رمز عبور :</p>
                    <p class="d-block font_gray">********</p>
                    <img src="frontend/image/static/edit.png" class="img-fluid float-left pointer mt_native" width="20"
                         data-toggle="modal"
                         data-target="#update_password">
                </div>
            </div>
            {{--  col-lg-6  --}}
        </div>
        {{-- row align-items-center--}}
    </div>
    {{-- container--}}





    <!-- Modal for update name family-->
    <div class="modal fade" id="update_name_family" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">نام و نام خانوادگی</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin: -1rem 0rem -2rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name" class="font_black"> نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user_data->name}}"
                                   placeholder="نام و نام خانوادگی">
                            <p class="error_name error_my_profile mt-2"></p>
                        </div>
                        {{--form-group--}}

                        <div class="modal-footer" style="border-top:none;padding-left: 0px">
                            <button type="button" class="btn btn-success" id="btn_name" disabled onclick="updateName();">ویرایش</button>
                        </div>
                    </div>
                    {{--  col-12--}}
                </div>
            </div>
        </div>
    </div>
    {{--    end modal update name_family--}}





    <!-- Modal for update phone number-->
    <div class="modal fade" id="update_phone_number" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">شماره تلفن همراه</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin: -1rem 0rem -2rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name" class="font_black">شماره تلفن همراه</label>
                            <input type="text" class="form-control" id="phone_number_modal" name="phone_number" value="{{$user_data->phone_number}}"
                                   placeholder="شماره تلفن همراه" maxlength="11">
                            <p class="error_phone_number error_my_profile mt-2"></p>
                        </div>
                        {{--form-group--}}

                        <div class="modal-footer" style="border-top:none;padding-left: 0px">
                            {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                            <button type="button" class="btn btn-success" id="btn_phone_number" disabled onclick="update_phone_number();">ارسال کد
                                تایید
                            </button>
                        </div>
                    </div>
                    {{--  col-12--}}
                </div>
            </div>
        </div>
    </div>
    {{--    end modal update --}}



    <!-- Modal for update birthday-->
    <div class="modal fade" id="update_birthday" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">تاریخ تولد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin: -1rem 0rem -2rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 d-flex">
                        <div class="form-group">
                            <select class="form-control sel2" name="year" id="year">
                                <option >سال</option>
                                @for($i=1382;$i>=1310;$i--)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        {{--form-group--}}


                        <div class="form-group ml-4 mr-4">
                            <select class="form-control sel2" name="month" id="month">
                                <option >ماه</option>

                                <option value="1">فروردین</option>
                                <option value="2">اردیبهشت</option>
                                <option value="3">خرداد</option>
                                <option value="4">تیر</option>
                                <option value="5">مرداد</option>
                                <option value="6">شهریور</option>
                                <option value="7">مهر</option>
                                <option value="8">آبان</option>
                                <option value="9">آذر</option>
                                <option value="10">دی</option>
                                <option value="11">بهمن</option>
                                <option value="12">اسفند</option>

                            </select>
                        </div>
                        {{--form-group--}}


                        <div class="form-group">
                            <select class="form-control sel2" name="day" id="day">
                                <option >روز</option>
                                @for($i=1;$i<=31;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        {{--form-group--}}


                    </div>
                    {{--  col-12--}}
                    <div class="modal-footer" style="border-top:none;padding-left: 0px">
                        <button type="button" class="btn btn-success" onclick="update_birthday();">ویرایش</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    end modal update birthday--}}





    <!-- Modal for update natinal code-->
    <div class="modal fade" id="update_natinal_code" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">کد ملی</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin: -1rem 0rem -2rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name" class="font_black"> کد ملی</label>
                            <input type="text" class="form-control" id="" value="" name="natinal_code"
                                   placeholder="کد ملی">
                        </div>
                        {{--form-group--}}

                        <div class="modal-footer" style="border-top:none;padding-left: 0px">
                            {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                            <button type="button" class="btn btn-success" onclick="update_natinal_code();">ویرایش
                            </button>
                        </div>
                    </div>
                    {{--  col-12--}}
                </div>
            </div>
        </div>
    </div>
    {{--    end modal update natinal code--}}




    <!-- Modal for update email-->
    <div class="modal fade" id="update_email" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">پست الکترونیک</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin: -1rem 0rem -2rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="email" class="form-control" id="" value="" name="email"
                                   placeholder="پست الکترونیک">
                        </div>
                        {{--form-group--}}

                        <div class="modal-footer" style="border-top:none;padding-left: 0px">
                            <button type="button" class="btn btn-success" onclick="update_email();">ویرایش</button>
                        </div>
                    </div>
                    {{--  col-12--}}
                </div>
            </div>
        </div>
    </div>
    {{--    end modal update email--}}




    <!-- Modal for update password-->
    <div class="modal fade" id="update_password" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">رمز عبور</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="margin: -1rem 0rem -2rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <p><i class="fas fa-info-circle ml-2 align-middle"></i>رمز عبور باید حداقل 8 کاراکتر باشد و شامل
                            اعداد و حروف باشد.</p>

                        <div class="form-group">
                            <label for="now_password">رمز عبور فعلی</label>
                            <input type="password" class="form-control" id="now_password" name="now_password" value="">
                        </div>
                        {{--form-group--}}

                        <div class="form-group">
                            <label for="new_password">رمز عبور جدید</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" value="">
                        </div>
                        {{--form-group--}}


                        <div class="form-group">
                            <label for="confirm_new_password">تکرار رمز عبور جدید </label>
                            <input type="password" class="form-control" id="confirm_new_password"
                                   name="confirm_new_password" value=""
                                   placeholder="">
                        </div>
                        {{--form-group--}}

                        <div class="modal-footer" style="border-top:none;padding-left: 0px">
                            <button type="button" class="btn btn-success" onclick="update_password();">تغییر رمز عبور
                            </button>
                        </div>
                    </div>
                    {{--  col-12--}}
                </div>
            </div>
        </div>
    </div>
    {{--    end modal update name_family--}}

@endsection


@section('script')
    <script src="/Admin/js/select2.min.js"></script>
    <script src="/Admin/js/Dropify_min.js"></script>
    <script src="/Frontend/js/sweetalert.min.js"></script>


    <script>
        // for search in select
        $('.sel2').select2();


        //dropify
        $('.dropify').dropify({
            messages: {
                'default': 'ویرایش تصویر پروفایل',
                'replace': 'کشیدن و رها کردن تصویر',
                'remove': 'حذف کردن تصویر',
                'error': 'حجم تصویر بزرگ تر از حد تعیین شده می باشد'
            },
            maxFileSize: 1

        });


        //for check valid name
        $('#name').keyup(function (){
            let val=$('input[name=name]').val();
            if (val.length > 0){
                $('#btn_name').attr("disabled",false);
            }else {
                $('#btn_name').attr("disabled",true);
            }
        });

        //for check valid phone number
        $('#phone_number_modal').keyup(function (){
            let val=$('input[name=phone_number]').val();
            if (val.length == 11){
                $('#btn_phone_number').attr("disabled",false);
            }else {
                $('#btn_phone_number').attr("disabled",true);
            }
        });








        //update name
        function updateName() {
            let newName = $('input[name=name]').val();
            let user_id = {{\Illuminate\Support\Facades\Auth::user()->id}};
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '{{route('update.name.myProfile')}}',
                dataType: 'json',
                data: {newName: newName, user_id: user_id},
                success: function (changeName) {
                    if (changeName.length > 0) {
                        $('.close').click();
                        $('#newName').html('');
                        $('#newName').append(changeName);
                        $('.error_name').css('display','none');
                    }
                },error: function (changeName) {
                    $('.error_name').html(' ');
                    $.each(changeName.responseJSON, function (index, value) {
                        $('.error_name').append(value);
                    });
                }
            });
        }


        //update phone number
        function update_phone_number() {
            let newPhone = $('input[name=phone_number]').val();
            let user_id = {{\Illuminate\Support\Facades\Auth::user()->id}};
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '{{route('update.phone.number')}}',
                dataType: 'json',
                data: {newPhone: newPhone, user_id: user_id},
                success: function (changePhoneNumber) {
                    if (changePhoneNumber.length > 0) {
                        $('.close').click();
                        $('#phone_number').html('');
                        $('#phone_number').append(changePhoneNumber);
                        $('.error_phone_number').css('display','none');
                    }
                },error: function (changePhoneNumber) {
                    $('.error_phone_number').html(' ');
                    $.each(changePhoneNumber.responseJSON, function (index, value) {
                        $('.error_phone_number').append(value);
                    });
                }
            });
        }


        //update natinal code
        function update_natinal_code() {
            let new_natinal_code = $('input[name=natinal_code]').val();
            let user_id = {{\Illuminate\Support\Facades\Auth::user()->id}};
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '{{route('update.natinal.code')}}',
                dataType: 'json',
                data: {new_natinal_code: new_natinal_code, user_id: user_id},
                success: function (changeNatinalCode) {
                    if (changeNatinalCode.length > 0) {
                        $('.close').click();
                        $('#natinal_code').html('');
                        $('#natinal_code').append(changeNatinalCode);
                    }
                }
            });
        }


        //update email
        function update_email() {
            let new_email = $('input[name=email]').val();
            let user_id = {{\Illuminate\Support\Facades\Auth::user()->id}};
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '{{route('update.email')}}',
                dataType: 'json',
                data: {new_email: new_email, user_id: user_id},
                success: function (changeEmail) {
                    if (changeEmail.length > 0) {
                        $('.close').click();
                        $('#email').html('');
                        $('#email').append(changeEmail);
                    }
                }
            });
        }


        //update email
        function update_birthday() {
            let new_year_birthday = $('#year :selected').val();
            let new_month_birthday = $('#month :selected').val();
            let new_day_birthday = $('#day :selected').val();
            let user_id = {{\Illuminate\Support\Facades\Auth::user()->id}};

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '{{route('update.birthday')}}',
                dataType: 'json',
                data: {
                    new_year_birthday: new_year_birthday,
                    new_month_birthday: new_month_birthday,
                    new_day_birthday: new_day_birthday,
                    user_id: user_id
                },
                success: function (changeBirthday) {
                    if (changeBirthday.length > 0) {
                        $('.close').click();
                        $('#birthday').html('');
                        $('#birthday').append(changeBirthday);
                    }
                }
            });
        }


        //update email
        function update_password() {
            let now_password = $('input[name=now_password]').val();
            let new_password = $('input[name=new_password]').val();
            let confirm_new_password = $('input[name=confirm_new_password]').val();

            let user_id = {{\Illuminate\Support\Facades\Auth::user()->id}};

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'PUT',
                url: '{{route('update.password')}}',
                dataType: 'json',
                data: {
                    now_password: now_password,
                    new_password: new_password,
                    confirm_new_password: confirm_new_password,
                    user_id: user_id
                },
                success: function (changePassword) {
                    console.log(changePassword)
                    if (changePassword == 'success') {
                        $('.close').click();
                    }
                }
            });
        }


    </script>

@endsection
