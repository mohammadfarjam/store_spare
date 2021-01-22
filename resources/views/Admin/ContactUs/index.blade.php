@extends('Admin.Layout.index')

@section('content')

    <p class="f20 m-3">اطلاعات تماس با ما</p>
    <div class="col-10 mx-auto">
    <div class='col-lg-8 col-md-12 col-sm-12'>

        <div class="form-group">
            <label for="address_company" class="font_black">  آدرس فروشگاه</label>
            <input type="text" class="form-control" id="address_company" value="" placeholder="آدرس فروشگاه را وارد نمایید">
        </div>

        <div class="form-group">
            <label for="email_company" class="font_black">  ایمیل فروشگاه</label>
            <input type="email" class="form-control" id="email_company" value="" placeholder="ایمیل فروشگاه را وارد نمایید">
        </div>


        <div class="form-group">
            <label for="tel_company" class="font_black"> شماره تماس فروشگاه</label>
            <input type="text" class="form-control" id="tel_company" value="" placeholder="شماره تماس فروشگاه را وارد نمایید" maxlength="11">
        </div>

        <div class="form-group">
            <label for="telegram" class="font_black">Telegram</label>
            <input type="text" class="form-control" id="telegram" value="" placeholder="آدرس کانال تلگرام فروشگاه را وارد نمایید" >
        </div>

        <div class="form-group">
            <label for="whatsup" class="font_black">Whatsup</label>
            <input type="text" class="form-control" id="whatsup" value="" placeholder=" آدرس واتس آپ فروشگاه را وارد نمایید" >
        </div>

        <div class="form-group">
            <label for="instagram" class="font_black">Instagram</label>
            <input type="text" class="form-control" id="instagram" value="" placeholder="آدرس اینستاگرام فروشگاه را وارد نمایید" max="11">
        </div>

        <div class="form-group">
            <label for="instagram" class="font_black">Signal</label>
            <input type="text" class="form-control" id="instagram" value="" placeholder="آدرس سیگنال فروشگاه را وارد نمایید" max="11">
        </div>


        <div class="form-group d-flex flex-row justify-content-end mt-5 mb-5">
            <button class="btn btn-success">ثبت اطلاعات</button>
        </div>




        </div>
{{--    col-lg-7 col-md-8 col-sm-8 m-5--}}

    </div>
 @endsection
