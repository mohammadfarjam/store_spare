@extends('Admin.Layout.index')
@section('style')
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/Admin/css/persian_datepicker.min.css">
@endsection
@section('content')

    <p class="f20 m-4">اسلایدر</p>

    <div class="mt-5 d-flex flex-row">
        <a href="{{route('sliders.create')}}" class="mr-2">
            <button class="btn custom_box_shadow btn_green"><i class="fas fa-plus mr-2"></i> اسلاید جدید
            </button>
        </a>
        <a href="#" class="mr-2">
            <button class="btn custom_box_shadow btn_green"><i class="fas fa-file-excel mr-2"></i> افزودن اکسل
            </button>
        </a>

        <a href="#" class="mr-2">
            <button class="btn custom_box_shadow btn_green"><i class="fas fa-download mr-2"></i> خروجی اکسل
            </button>
        </a>
    </div>
    {{--    mt-2 d-flex flex-row--}}


    <div class="mt-5 mb-4 col-12 mx-auto d-flex flex-row justify-content-between">
        <div class="d-flex">
            <p class="p-1 mt-3"><i class="fas fa-search mr-2"></i>نتایج یافت شده:15 اسلایدر</p>
        </div>


        <div class="mt-2 d-flex flex-row">
            <div class="">
                <select name="" class="form-control custom_box_shadow p-1">
                    <option disabled selected>تعداد نمایش</option>
                    <option>35</option>
                    <option>65</option>
                    <option>200</option>
                </select>
            </div>
        </div>
        {{--        mt-2 d-flex flex-row--}}


    </div>
    {{--d-flex flex-row--}}



    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-4">
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>تصویر اسلایدر</th>
                <th> عنوان اسلایدر </th>
                <th>تاریخ ویرایش </th>
                <th>وضعیت </th>
                <th>عملیات</th>
                <th>علامت گذاری</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center align-items-center">
                <td>#</td>
                <td>
                    <select name="" class="form-control p-1" id="" style="min-width: 90px">
                        <option>همه</option>
                        <option> دارای تصویر </option>
                        <option>  بدون تصویر </option>
                    </select>
                </td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search " name="" value="" placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search date_picker" name="" value="" placeholder=" "></td>


                <td>
                    <select name="" class="form-control p-1" id="" style="min-width: 90px">
                        <option>همه</option>
                        <option> فعال </option>
                        <option>  غیر فعال </option>
                    </select>
                </td>


                <td>
                    <button class="btn-sm btn-danger remove_all_marked_data" title="حذف"><i class="fas fa-trash"></i>
                    </button>
                </td>


                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>

            </tr>

            <tr class="text-center">
                <td>1</td>
                <td><img src="/Admin/user_image/nexen.png" width="75"></td>
                <td>اسلایدر مربو به لاستیک</td>
                <td>1399/11/01</td>
                <td><span class="badge badge-danger">غیر فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('sliders.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td><img src="/Admin/user_image/kumho.jpg" width="75"></td>
                <td>اسلایدر مربوط به چراغ خودرو</td>
                <td>1399/10/29</td>
                <td><span class="badge badge-success"> فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td><img src="/Admin/user_image/valeo.png" width="75"></td>
                <td>اسلایدر مربوط به لنت</td>
                <td>1399/10/20 </td>
                <td><span class="badge badge-success"> فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td><img src="/Admin/user_image/crouse.png" width="75"></td>
                <td>اسلایدر صفحه کلاچ</td>
                <td>1399/10/12 </td>
                <td><span class="badge badge-success"> فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>5</td>
                <td><img src="/Admin/user_image/nexen.png" width="75"></td>
                <td>اسلایدر کمک فنر</td>
                <td>1399/09/27</td>
                <td><span class="badge badge-success"> فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>6</td>
                <td><img src="/Admin/user_image/kumho.jpg" width="75"></td>
                <td>اسلایدر حراجی</td>
                <td>1399/09/14 </td>
                <td><span class="badge badge-success"> فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>7</td>
                <td><img src="/Admin/user_image/valeo.png" width="75"></td>
                <td>اسلایدر لنت</td>
                <td>1399/08/18</td>
                <td><span class="badge badge-success"> فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>8</td>
                <td><img src="/Admin/user_image/crouse.png" width="75"></td>
                <td>اسلایدر</td>
                <td>1399/07/05</td>
                <td><span class="badge badge-danger">غیر فعال </span></td>
                <td class=" text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm " title="حذف"><i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="selectAll">
                        <label class="custom-control-label" for="selectAll"></label>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>
    </div>



    <div class="paginating-container pagination-solid mt-5">
        <ul class="pagination">
            <li class="prev"><a href="javascript:void(0);">قبلی</a></li>
            <li class="active"><a href="javascript:void(0);">1</a></li>
            <li><a href="javascript:void(0);">2</a></li>
            <li><a href="javascript:void(0);">3</a></li>
            <li class="next"><a href="javascript:void(0);">بعدی</a></li>
        </ul>
    </div>


@endsection

@section('script')
    <script src="/Admin/plugins/sweetalerts/promise-polyfill.js"></script>
    <script src="/Admin/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="/Admin/plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="/Admin/js/select2.min.js"></script>
    <script src="/Admin/js/persian_date.min.js"></script>
    <script src="/Admin/js/persian_datepicker.min.js"></script>

    <script>

        // sweetAlert
        $('.warning.confirm').on('click', function () {
            swal({
                title: 'آیا می خواهید اسلایدر را حذف نمایید؟',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله',
                cancelButtonText: 'لغو',
                padding: '2em'
            }).then(function (result) {
                if (result.value) {
                    const toast = swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        padding: '2em'
                    });
                    toast({
                        type: 'success',
                        title: ' اسلایدر با موفقیت حذف شد',
                        padding: '2em',
                    })
                }
            })
        });



        // sweetAlert for delete all mark date
        $('.remove_all_marked_data').on('click', function () {
            swal({
                title: 'آیا می خواهید تمام اسلایدر های انتخاب شده را حذف نمایید؟',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'بله',
                cancelButtonText: 'لغو',
                padding: '2em'
            }).then(function (result) {
                if (result.value) {
                    const toast = swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        padding: '2em'
                    });
                    toast({
                        type: 'success',
                        title: 'اسلایدر ها با موفقیت حذف شدند',
                        padding: '2em',
                    })
                }
            })
        });


        {{--for persian date picker--}}
        $(".date_picker").pDatepicker({
            initialValue: true,
            format: 'YYYY/MM/DD',
            persianDigit: false,
        });
    </script>
@endsection



