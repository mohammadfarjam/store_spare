@extends('Admin.Layout.index')
@section('content')

    <p class="f20 m-5">تنظیمات ارسال پیامک</p>
    <div class="col-10 mx-auto">
        <div class='col-lg-8 col-md-12 col-sm-12'>


            <div class="form-group">
                <label for="phone_number" class="font_black">شماره همراه ارسال پیامک</label>
                <input type="text" class="form-control" id="phone_number" value=""
                       placeholder="شماره همراه ارسال پیامک">
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="message_title" class="font_black">عنوان پیامک</label>
                <input type="text" class="form-control" id="message_title" value=""
                       placeholder="عنوان پیامک را وارد نمایید">
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="description" class="font_black">متن پیامک (پیشفرض) </label>
                <textarea name="description" class="description" id="description" rows="10" cols="80"></textarea>
            </div><!--form-group-->


            <div class="d-flex flex-row justify-content-end mt-5">
                <button class="btn btn-success mb-5 ">ثبت تنظیمات</button>
            </div>

        </div>
        <!-- col-lg-8 -->
    </div>

@endsection

@section('script')

    <script src="/Admin/js/ckeditor/ckeditor.js"></script>
    <script>
        // for ckeditor
        CKEDITOR.replace('description',{
            language: 'fa'
        });

    </script>
@endsection
