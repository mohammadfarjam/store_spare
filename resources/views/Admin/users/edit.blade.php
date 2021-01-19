@extends('Admin.Layout.index')
@section('content')
    <p class="f20 m-5"> ویرایش کاربر</p>
    <div class="col-10 mx-auto mt-5">
        <div class="col-lg-8 col-md-12 col-sm-12">


            <div class="form-group mt-4">
                <img src="/Admin/user_image/user3.jpg" class="img-fluid rounded" width="175" id="user_img">
            </div>

            <div class="form-group mt-4">
                <label for="user_name" class="font_black"> نام کاربر </label>
                <input type="text" class="form-control" id="user_name" value="حمید" readonly>
            </div>

            <div class="form-group mt-4">
                <label for="role_user" class="font_black"> نقش کاربر</label>
                <select class="form-control" id="role_user" multiple>
                    <option value="">مدیر</option>
                    <option value="">نویسنده</option>
                    <option value="">کاربر عادی</option>
                </select>
            </div>

            <div class="d-flex flex-row justify-content-end mt-5 mb-5">
                <button class="btn btn-warning">ویرایش</button>
            </div>

        </div>
    </div>
    {{--    col-lg-8--}}

@endsection

