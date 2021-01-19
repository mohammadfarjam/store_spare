@extends('Admin.Layout.index')
@section('style')
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/dropzone.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <p class="f20 m-5">ایجاد محصول جدید</p>
    <div class="col-10 mx-auto">
        <div class='col-lg-8 col-md-12 col-sm-12'>

            <div class="form-group">
                <label for="product_title" class="font_black"> عنوان محصول</label>
                <input type="text" class="form-control" id="product_title" value=""
                       placeholder="عنوان محصول را وارد نمایید">
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="photo_original" class="font_black"> تصویر اصلی </label>
                <div id="photo_original" class="dropzone"></div>
            </div><!--form-group-->


            <div class="form-group">
                <label for="category" class="font_black"> دسته بندی محصول</label>
                <select class="form-control search_sel2" id="category">
                    <option>لوازم مصرفی</option>
                    <option> لوازم یدکی</option>
                    <option> جلوبندی و تعلیق</option>

                </select>
            </div>
            {{--form-group--}}

            <div class="form-group">
                <label for="product_status" class="font_black"> وضعیت محصول</label>
                <select class="form-control" id="product_status">
                    <option selected=selected>موجود</option>
                    <option>ناموجود</option>
                    <option> توقف تولید</option>
                    <option> عدم نمایش</option>
                </select>
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="price" class="font_black"> قیمت محصول</label>
                <input type="text" class="form-control" id="price" value="" placeholder="قیمت محصول را وارد نمایید">
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="discount_percentage" class="font_black">درصد تخفیف</label>
                <input type="text" class="form-control" id="discount_percentage" value=""
                       placeholder="درصد تخفیف محصول را وارد نمایید">
            </div>
            {{--form-group--}}


            <div class="form-group mt-4">
                <label for="description_seo" class="font_black"> توضیحات سئو </label>
                <input type="text" class="form-control" id="description_seo" value=""
                       placeholder=" توضیحات سئو را وارد نمایید">
            </div>
            {{--form-group--}}


            <div class="form-group mt-4">
                <label for="description_seo" class="font_black"> کلمات کلیدی </label>
                <select class="form-control sel2" id='description_seo' name="description_seo[]" multiple="multiple">
                    <option>برچسب اول</option>
                    <option>برچسب دوم</option>
                    <option>برچسب سوم</option>
                </select>
            </div>
            {{--form-group--}}


            <div class="form-group">
                <label for="gallery" class="font_black"> گالری تصاویر</label>
                <div id="gallery" class="dropzone"></div>
            </div><!--form-group-->


            <div class="form-group">
                <label for="gallery" class="font_black">توضیحات محصول</label>
                <textarea name="description" class="description" id="description" rows="10" cols="80"></textarea>
            </div><!--form-group-->


            <div class="d-flex flex-row justify-content-end mt-5">
                <button class="btn btn-success mb-2 ">انتشار</button>
            </div>

        </div>
        <!-- col-lg-8 -->
    </div>


@endsection
@section('script')

    <script src="/Admin/js/select2.min.js"></script>
    <script src="/Admin/js/dropzone.min.js"></script>
    <script src="/Admin/js/ckeditor/ckeditor.js"></script>
    <script>
        // for search in select
        $('.search_sel2').select2();


        // for meta keywords
        $('.sel2').select2({
            maximumSelectionLength: 5,
            // selectionAdapter:true,
            tags: true,
        });

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


        //for upload gallery by dropzone
        $("#gallery").dropzone({
            url: '{{route('posts.index')}}',
            uploadMultiple: true,
            addRemoveLinks: true,
            maxFiles: 20,
            parallelUploads: 1,
            timeout: 1000000,
            maxRequestSize: 800000, //Mb
            autoProcessQueue: true,
            autoDiscover: false,
            dictDefaultMessage: "آپلود تصاویر گالری  ",
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
        });


        // for ckeditor
        CKEDITOR.replace('description',{
            language: 'fa'
        });

    </script>
@endsection
