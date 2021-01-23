@extends('Admin.Layout.index')
@section('content')

    <p class="f20 m-5">تنظیمات نام فروشگاه</p>
    <div class="col-10 mx-auto">
        <div class='col-lg-8 col-md-12 col-sm-12'>

            <div class="form-group">
                <label for="name_store" class="font_black"> نام فروشگاه</label>
                <input type="text" class="form-control" id="name_store" value=""
                       placeholder="نام سایت را وارد نمایید">
            </div>
            {{--form-group--}}



            <div class="d-flex flex-row justify-content-end mt-5">
                <button class="btn btn-success mb-5 ">ثبت تنظیمات</button>
            </div>

        </div>
        <!-- col-lg-8 -->
    </div>

@endsection

