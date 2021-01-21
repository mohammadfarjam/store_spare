@extends('Admin.Layout.index')

@section('style')
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/persian_datepicker.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <p class="f20 m-4">مدیریت</p>

    <div class="mt-5 d-flex flex-row">
        <a class="mr-2"><button class="btn btn_green custom_box_shadow mb-3" data-toggle="modal" data-target="#add_new_manager"><i class="fas fa-plus mr-2"></i>افزودن مدیر </button></a>

        <a href="#" class="mr-2"><button class="btn btn_green custom_box_shadow mb-3"><i class="far fa-envelope mr-2"></i>ارسال ایمیل </button></a>

        <a href="#" class="mr-2"><button class="btn btn_green custom_box_shadow mb-3"><i class="far fa-comment-alt mr-2"></i> ارسال پیامک</button></a>

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


    <div class="mt-5 mb-2 col-12 mx-auto d-flex flex-row justify-content-between">
        <div class="d-flex">
            <p class="p-1 mt-3"><i class="fas fa-search mr-2"></i>نتایج یافت شده:4 مدیر</p>
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




    <div class="table-responsive pt-3">
        <table class="table table-bordered table-striped mb-4">
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th>ایمیل کاربر</th>
                <th>نقش کاربر</th>
                <th>تاریخ عضویت </th>
                <th>عملیات</th>
                <th>علامت گذاری</th>
            </tr>
            </thead>

            <tbody>
            <tr class="text-center align-items-center">
                <td>#</td>
                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search date_picker" name="" value=""
                           placeholder=" "></td>



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
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>

                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/12/12</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a>
                            <button class="btn-sm btn-warning " title="ویرایش" data-toggle="modal" data-target="#edit_manager"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">رضا</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/12/12</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">پویا</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/02/02</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">امیر</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/10/14</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>5</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">ریحانه</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/11/04</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>6</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user3.jpg">
                        </div>
                        <p class="align-self-center mb-0">فاطمه</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/12/12</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>7</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">علی</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/12/12</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td>8</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">نگار</p>
                    </div>
                </td>
                <td>test@gmail.com </td>
                <td>مدیر فروشگاه</td>
                <td>1399/10/10</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="{{route('posts.edit',1)}}">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>

                <td class="checkbox-column">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
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





    <!-- Modal new manager-->
    <div class="modal fade" id="add_new_manager" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ایجاد مدیریت جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-11 mx-auto">
                        <div class="form-group">
                            <label for="email" class="font_black">ایمیل </label>
                            <select class="form-control sel2 p-2" id="email">
                                <option>جستجو بر اساس ایمیل</option>
                                <option>test@gmail.com</option>
                                <option>mohammad@gmail.com</option>
                                <option>noemail@gmail.com</option>
                            </select>
                        </div><!--form-group-->

                        <div class="form-group">
                            <label for="user_name" class="font_black">نام کاربر </label>
                            <input type="text" class="form-control" id="user_name" value=""
                                   placeholder=" نام کاربر را وارد نمایید" disabled>
                        </div><!--form-group-->


                        <div class="form-group">
                            <label for="role_user" class="font_black">نقش </label>
                            <select class="form-control p-2" id="role_user">
                                <option>مدیر فروشگاه</option>
                                <option>کاربر عادی</option>
                            </select>
                        </div><!--form-group-->
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-success">ثبت</button>
                </div>
            </div>
        </div>
    </div>
{{--  end modal--}}



    <!-- Modal edit manager-->
    <div class="modal fade" id="edit_manager" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ویرایش مدیریت </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-11 mx-auto">
                        <div class="form-group">
                            <label for="email" class="font_black">ایمیل </label>
                            <input type="text" class="form-control" id="email" value="test@gmail.com"
                                   placeholder="  ایمیل را وارد نمایید" disabled>
                        </div><!--form-group-->

                        <div class="form-group">
                            <label for="user_name" class="font_black">نام کاربر </label>
                            <input type="text" class="form-control" id="user_name" value="test"
                                   placeholder=" نام کاربر را وارد نمایید" disabled>
                        </div><!--form-group-->


                        <div class="form-group">
                            <label for="role_user" class="font_black">نقش </label>
                            <select class="form-control p-2" id="role_user">
                                <option>مدیر فروشگاه</option>
                                <option>کاربر عادی</option>
                            </select>
                        </div><!--form-group-->
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-warning">ویرایش</button>
                </div>
            </div>
        </div>
    </div>
    {{--  end modal--}}


@endsection

@section('script')
    <script src="/Admin/js/select2.min.js"></script>
    <script src="/Admin/plugins/sweetalerts/promise-polyfill.js"></script>
    <script src="/Admin/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="/Admin/plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="/Admin/js/persian_date.min.js"></script>
    <script src="/Admin/js/persian_datepicker.min.js"></script>

    <script>

        {{--    for select2--}}
        $('.sel2').select2();


        // sweetAlert
        $('.warning.confirm').on('click', function () {
            swal({
                title: 'آیا می خواهید کاربر را حذف نمایید؟',
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
                        title: 'کاربر با موفقیت حذف شد',
                        padding: '2em',
                    })
                }
            })
        });




        // sweetAlert for delete all mark date
        $('.remove_all_marked_data').on('click', function () {
            swal({
                title: 'آیا می خواهید تمام کاربران انتخاب شده را حذف نمایید؟',
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
                        title: 'کاربران با موفقیت حذف شدند',
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

