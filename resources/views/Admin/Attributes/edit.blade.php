@extends('Admin.Layout.index')
@section('style')
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <p class="f20 m-5">ویرایش ویژگی </p>
    <div class="col-10 mx-auto">
        <div class='col-lg-8 col-md-12 col-sm-12'>

            <div class="form-group">
                <label for="product_title" class="font_black"> عنوان  ویژگی</label>
                <input type="text" class="form-control" id="product_title" value=""
                       placeholder="عنوان ویژگی را وارد نمایید">
            </div>
            {{--form-group--}}




            <div class="form-group mt-4">
                <label for="category_parent" class="font_black"> دسته بندی والد</label>
                <select class="form-control" id='category_parent' name="category_parent">
                    <option>انتخاب دسته بندی والد </option>
                    <option>لوازم مصرفی </option>
                    <option> جلوبندی و تعلیق</option>
                    <option> لوازم یدکی خودرو</option>
                </select>
            </div>
            {{--form-group--}}


            <div class="form-group mt-4">
                <label for="category_parent" class="font_black">زیر مجموعه </label>
                <select class="form-control" id='category_parent' name="category_parent" multiple>
                    <option> کمک فنر </option>
                    <option>لنت </option>
                    <option>روغن موتور</option>
                </select>
            </div>
            {{--form-group--}}



            <div class="d-flex flex-row justify-content-end mt-5">
                <button class="btn btn-warning mb-2 ">ویرایش</button>
            </div>

        </div>
        <!-- col-lg-8 -->
    </div>


@endsection
@section('script')

    <script src="/Admin/js/select2.min.js"></script>
    <script>
        //for search select2
        $('.search_sel2').select2();

    </script>
@endsection
