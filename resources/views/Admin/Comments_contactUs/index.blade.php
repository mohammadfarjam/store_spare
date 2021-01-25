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

    <p class="f20 m-4">نظرات تماس با ما</p>

    <div class="mt-5 d-flex flex-row">

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
            <p class="p-1 mt-3"><i class="fas fa-search mr-2"></i>نتایج یافت شده:154 نظر</p>
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
                <th> ایمیل</th>
                <th>  تلفن / همراه</th>
                <th>  موضوع </th>
                <th>تاریخ درج پیام</th>
                <th>متن نظر</th>
                <th>وضعیت</th>
                <th>عملیات</th>
                <th>علامت گذاری</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center align-items-center">
                <td>#</td>
                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value="" placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value="" placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value="" placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value="" placeholder=" "></td>


                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search date_picker" name="" value="" placeholder=" "></td>


                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value="" placeholder=""></td>

                <td>
                    <select name="" class="form-control p-1" id="" style="min-width: 90px">
                        <option  selected>همه</option>
                        <option>پاسخ داده شده</option>
                        <option>در انتظار پاسخ </option>
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
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>نمایندگی فروش</td>
                <td>1399/12/12</td>
                <td>من میخواستم نماینده فروش شما بشم چطوری میتونم این کار رو انجام بدم؟</td>
                <td><span class="badge badge-success">پاسخ داده شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">

                            <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                                <i class="fas fa-reply"></i></button>

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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>انتقاد از شیوه ارسال کالا</td>
                <td>1399/12/12</td>
                <td>من خیلی لذت بردم از خریدم چون سریع به دستم رسید</td>
                <td><span class="badge badge-success">پاسخ داده شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>سرعت ارسال کالا</td>
                <td>1399/02/02</td>
                <td>سرعت ارسال کالا رو بیشتر کنید</td>
                <td><span class="badge badge-success">پاسخ داده شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>ظاهر ساییتون عالیه</td>
                <td>1399/10/14</td>
                <td>ظاهر و قالب سایتتون خیلی خوب و عالیه کاربر راحت میتونه محصولش رو پیدا کنه و خریداری کنه</td>
                <td><span class="badge badge-warning">در انتظار پاسخ</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>انتقاد از شیوه ارسال کالا</td>
                <td>1399/11/04</td>
                <td>من خیلی لذت بردم از خریدم چون سریع به دستم رسید</td>
                <td><span class="badge badge-warning">در انتظار پاسخ</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>نمایندگی فروش</td>
                <td>1399/12/12</td>
                <td>من میخواستم نماینده فروش شما بشم چطوری میتونم این کار رو انجام بدم؟</td>
                <td><span class="badge badge-warning">در انتظار پاسخ</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>انتقاد از شیوه ارسال کالا</td>
                <td>1399/12/12</td>
                <td>من خیلی لذت بردم از خریدم چون سریع به دستم رسید</td>
                <td><span class="badge badge-success">پاسخ داده شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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
                <td>test@gmail.com</td>
                <td>09121234567</td>
                <td>سرعت ارسال کالا</td>
                <td>1399/10/10</td>
                <td>سرعت ارسال کالا رو بیشتر کنید</td>
                <td><span class="badge badge-success">پاسخ داده شده</span></td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal" data-target="#replay_comment_contactUs">
                            <i class="fas fa-reply"></i></button>
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







    <!-- Modal -->
    <div class="modal fade" id="replay_comment_contactUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">پاسخ به نظر تماس با ما </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<div class="col-12">

    <div class="form-group">
        <label for="" class="font_black d-block">متن نظر کاربر</label>
        <textarea name="description" class="description description_comment_contactUs" id="description" readonly></textarea>
    </div><!--form-group-->

    <div class="form-group mt-4">
        <label for="user_email" class="font_black">ایمیل کاربر </label>
        <input type="text" class="form-control" id="user_email" value=""
               placeholder="" readonly>
    </div>
    {{--form-group--}}


    <div class="form-group">
        <label for="" class="font_black d-block">پاسخ به نظر کاربر</label>
        <textarea name="" class=" description_comment_contactUs" id="" ></textarea>
    </div><!--form-group-->


</div>
{{-- col-11--}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-success">پاسخ به نظر</button>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')
    <script src="/Admin/js/select2.min.js"></script>
    <script src="/Admin/plugins/sweetalerts/promise-polyfill.js"></script>
    <script src="/Admin/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="/Admin/plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="/Admin/js/persian_date.min.js"></script>
    <script src="/Admin/js/persian_datepicker.min.js"></script>
    <script>

        // sweetAlert
        $('.warning.confirm').on('click', function () {
            swal({
                title: 'آیا می خواهید این محصول را حذف نمایید؟',
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
                        title: 'محصول با موفقیت حذف شد',
                        padding: '2em',
                    })
                }
            })
        });


        // select2
        $('.search_sel2').select2();


        // sweetAlert for delete all mark date
        $('.remove_all_marked_data').on('click', function () {
            swal({
                title: 'آیا می خواهید تمام محصولات انتخاب شده را حذف نمایید؟',
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
                        title: 'محصولات با موفقیت حذف شدند',
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
