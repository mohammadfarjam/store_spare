

<?php $__env->startSection('style'); ?>
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/Admin/css/persian_datepicker.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <p class="f20 m-4">جزئیات محصولات فروخته شده </p>

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
    


    <div class="mt-5 mb-2 col-12 mx-auto d-flex flex-row justify-content-between">
        <div class="d-flex">
            <p class="p-1 mt-3"><i class="fas fa-search mr-2"></i>نتایج یافت شده:154 محصول</p>
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
        


    </div>
    




    <div class="table-responsive pt-3">
        <table class="table table-bordered table-striped mb-4">
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>شناسه محصول</th>
                <th>تصویر محصول</th>
                <th>نام محصول</th>
                <th>نام کاربر</th>
                <th>تاریخ خرید</th>
                <th>قیمت (تومان)</th>
                <th>کد تخفیف</th>
                <th> تعداد</th>
                <th>قیمت نهایی</th>
                <th>وضعیت</th>
                <th>عملیات</th>
                <th>علامت گذاری</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center align-items-center">
                <td>#</td>
                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>
                <td>
                    <select name="" class="form-control p-1" id="">
                        <option selected>همه</option>
                        <option>دارای تصویر</option>
                        <option>بدون تصویر</option>
                    </select>
                </td>
                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search " name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=""></td>


                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search date_picker" name=""
                           value="" placeholder=""></td>

                <td style="min-width: 80px"><input type="text" class="form-control custom_box_shadow p-1 " name=""
                                                   value="" placeholder=" ">

                </td>
                <td style="min-width: 80px"><input type="text" class="form-control custom_box_shadow p-1 " name=""
                                                   value="" placeholder=" ">

                </td><td style="min-width: 80px"><input type="text" class="form-control custom_box_shadow p-1 " name=""
                                                   value="" placeholder=" "></td>


                <td style="min-width: 80px">
                    <input type="text" class="form-control custom_box_shadow p-1 " name="" value="" placeholder=" ">
                </td>

                <td style="min-width:110px">
                    <select name="" class="form-control p-1" id="">
                        <option selected>همه</option>
                        <option>ارسال شده</option>
                        <option>در حال پردازش</option>
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
                <td>BS1234</td>
                <td><img src="/Admin/user_image/cheragh.jpg" width="75"></td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user3.jpg">
                        </div>
                        <p class="align-self-center mb-0">مینا</p>
                    </div>
                </td>
                <td>10/08/2020</td>
                <td>200,000 تومان</td>
                <td>D1234</td>
                <td>3</td>
                <td>600,000 تومان</td>
                <td>در حال پردازش</td>


                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>2</td>
                <td>BS9632</td>
                <td><img src="/Admin/user_image/komak.jpg" width="75"></td>
                <td> کمک فنر خودرو</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>
                <td>1399/10/15</td>
                <td>250,000 تومان</td>
                <td>D1234</td>
                <td>2</td>
                <td>500,000 تومان</td>
                <td>در حال پردازش</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>3</td>
                <td>BS9874</td>
                <td><img src="/Admin/user_image/safe.jpg" width="75"></td>
                <td>صفحه کلاچ والئو</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">حمید</p>
                    </div>
                </td>
                <td>1399/10/21</td>
                <td>900,000 تومان</td>
                <td>-</td>
                <td>1</td>
                <td>900,000 تومان</td>
                <td>ارسال شده</td>
                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>4</td>
                <td>BS1458</td>
                <td><img src="/Admin/user_image/lent.jpg" width="75"></td>
                <td>لنت ترمز</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">محمد</p>
                    </div>
                </td>
                <td>1399/09/11</td>
                <td>982,000 تومان</td>
                <td>-</td>
                <td>1</td>
                <td>982,000 تومان</td>
                <td>ارسال شده</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>5</td>
                <td>BS1234</td>
                <td><img src="/Admin/user_image/cheragh.jpg" width="75"></td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user3.jpg">
                        </div>
                        <p class="align-self-center mb-0">رها</p>
                    </div>
                </td>
                <td>10/08/2020</td>
                <td>450,000 تومان</td>
                <td>D1234</td>
                <td>1</td>
                <td>450,000 تومان</td>
                <td>در حال پردازش</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>6</td>
                <td>BS9632</td>
                <td><img src="/Admin/user_image/komak.jpg" width="75"></td>
                <td> کمک فنر خودرو</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">رضا</p>
                    </div>
                </td>
                <td>1399/10/15</td>
                <td>350,000 تومان</td>
                <td>D1234</td>
                <td>1</td>
                <td>350,000 تومان</td>
                <td>ارسال شده</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>7</td>
                <td>BS9874</td>
                <td><img src="/Admin/user_image/safe.jpg" width="75"></td>
                <td>صفحه کلاچ والئو</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">اکبر</p>
                    </div>
                </td>
                <td>1399/10/21</td>
                <td>780,000 تومان</td>
                <td>D1234</td>
                <td>2</td>
                <td>1,560,000 تومان</td>
                <td>ارسال شده</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
                    <div class="custom-control custom-checkbox checkbox-primary">
                        <input type="checkbox" class="custom-control-input todochkbox" id="todoAll1">
                        <label class="custom-control-label" for="todoAll1"></label>
                    </div>
                </td>
            </tr>
            <tr class="text-center">

                <td>8</td>
                <td>BS1458</td>
                <td><img src="/Admin/user_image/lent.jpg" width="75"></td>
                <td>لنت ترمز</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>
                <td>1399/09/11</td>
                <td>145,000 تومان</td>
                <td>D1234</td>
                <td>1</td>
                <td>145,000 تومان</td>
                <td>ارسال شده</td>

                <td class="text-center">
                    <div class="d-flex flex-row justify-content-center">
                        <a href="<?php echo e(route('posts.edit',1)); ?>">
                            <button class="btn-sm btn-warning " title="ویرایش"><i class="far fa-edit"></i></button>
                        </a>
                        <button class="btn-sm btn-danger warning confirm" title="حذف"><i class="fas fa-trash"></i>
                        </button>
                    </div>
                </td>
                <td class="checkbox-column align-middle">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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


        
        $(".date_picker").pDatepicker({
            initialValue: true,
            format: 'YYYY/MM/DD',
            persianDigit: false,
        });


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.Layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\store_spare\resources\views/Admin/Status_product/Products_sold.blade.php ENDPATH**/ ?>