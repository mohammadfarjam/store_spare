@extends('Admin.Layout.index')
@section('style')
    <link href="/Admin/css/dropzone.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <p class="f20 m-5">ویرایش اسلایدر </p>
    <div class="col-10 mx-auto">
        <div class='col-lg-8 col-md-12 col-sm-12'>

            <div class="form-group">
                <label for="product_title" class="font_black"> عنوان اسلایدر</label>
                <input type="text" class="form-control" id="product_title" value=""
                       placeholder="عنوان اسلایدر را وارد نمایید">
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="photo_original" class="font_black"> تصویر اصلی </label>
                <div id="photo_original" class="dropzone"></div>
            </div><!--form-group-->


            <div class="form-group">
                <label for="status" class="font_black">وضعیت  </label>
                <select class="form-control" id="status">
                    <option>فعال</option>
                    <option>غیر فعال</option>
                </select>
            </div><!--form-group-->



            <div class="d-flex flex-row justify-content-end mt-5">
                <button class="btn btn-warning mb-5 ">ویرایش</button>
            </div>

        </div>
        <!-- col-lg-8 -->
    </div>


@endsection
@section('script')

    <script src="/Admin/js/dropzone.min.js"></script>
    <script>


        //for upload picture by dropzone
        $("#photo_original").dropzone({
            url: '{{route('posts.index')}}',
            uploadMultiple: false,
            addRemoveLinks: true,
            maxFiles: 1,
            parallelUploads: 1,
            timeout: 1000000,
            maxRequestSize: 800000, //Mb
            autoProcessQueue: true,
            autoDiscover: false,
            dictDefaultMessage: "آپلود تصویر اصلی",
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
        });


    </script>
@endsection
