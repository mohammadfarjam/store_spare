@extends('Admin.Layout.index')
@section('style')
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/Admin/css/persian_datepicker.min.css">
@endsection

@section('content')

    <p class="f20 m-5"> ویرایش کد تخفیف جدید</p>
    <div class="col-10 mx-auto">
        <div class='col-lg-8 col-md-12 col-sm-12'>

            <div class="form-group">
                <label for="discount_code_title" class="font_black"> عنوان </label>
                <input type="text" class="form-control" id="discount_code_title" value=""
                       placeholder="عنوان کد تخفیف را وارد نمایید">
            </div><!--form-group-->

            <div class="form-group">
                <label for="discount_percent" class="font_black"> مقدار تخفیف (درصد) </label>
                <input type="text" class="form-control" id="discount_percent" value=""
                       placeholder="مقدار تخفیف را وارد نمایید">
            </div><!--form-group-->

            <div class="form-group">
                <label for="name_product" class="font_black">نام محصول </label>
                <select class="form-control sel2" id="name_product">
                    <option>انتخاب نام محصول</option>
                    <option>صفحه کلاچ</option>
                    <option>هدلایت</option>
                    <option>باتری</option>
                </select>
            </div><!--form-group-->

            <div class="form-group">
                <label for="code_discount" class="font_black">کد تخفیف </label>
                <input type="text" class="form-control" id="code_discount" value=""
                       placeholder="کد تخفیف را وارد نمایید">
            </div><!--form-group-->

           <div class="form-group">
               <label for="status" class="font_black">وضعیت</label>
               <select class="form-control" id="status">
                   <option>معتبر</option>
                   <option>فعال نشده</option>
                   <option>منقصی</option>
               </select>
           </div><!--form-group-->


            <div class="form-group mt-4">
                <label for="use_code" class="font_black">حداکثر تعداد استفاده </label>
                <input type="text" class="form-control" id="use_code" value=""
                       placeholder="حداکثر تعداد استفاده از کد تخفیف را وارد نمایید">
            </div><!--form-group-->



                <div class="form-group col-lg-6 col-md-8 col-sm-12 p-0" style="position: relative;">
                    <label for="start_date" class="font_black">تاریخ شروع </label>
                    <input type="text" class="form-control date_picker" id="start_date" value=""
                           placeholder="تاریخ شروع کد تخفیف را وارد نمایید">
                    <input type="text" class="form-control date_picker_time" id="" value="">

                </div>

                <div class="form-group col-lg-6 col-md-8 col-sm-12 p-0" style="position: relative;">
                    <label for="end_date" class="font_black">تاریخ پایان </label>
                    <input type="text" class="form-control date_picker" id="end_date" value=""
                           placeholder="تاریخ پایان کد تخفیف را وارد نمایید">

                    <input type="text" class="form-control date_picker_time" id="" value="">
                </div>



            <div class="d-flex flex-row justify-content-end mt-5 mb-5">
                <button class="btn btn-warning ">ویرایش کد تخفیف</button>
            </div>


        </div>
        {{--    col-lg-7 col-md-8 col-sm-8 m-5--}}

        @endsection

        @section('script')

            <script src="/Admin/js/select2.min.js"></script>
            <script src="/Admin/js/persian_date.min.js"></script>
            <script src="/Admin/js/persian_datepicker.min.js"></script>
            <script>
                {{--    for select2--}}
                $('.sel2').select2();


                {{--for persian date picker--}}
                $(".date_picker").pDatepicker({
                    initialValue: true,
                    format: 'YYYY/MM/DD',
                    persianDigit: false,
                });

                $(".date_picker_time").pDatepicker({
                    onlyTimePicker: true,
                    initialValue: true,
                    format: 'H:m:s',

                });
            </script>

@endsection
