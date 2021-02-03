<?php $__env->startSection('style'); ?>
    <link href="/Admin/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css"/>
    <link href="/Admin/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/Admin/css/persian_datepicker.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
        


    </div>
    




    <div class="table-responsive pt-3">
        <table class="table table-bordered table-striped mb-4">
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th> ایمیل</th>
                <th> تلفن / همراه</th>
                <th> موضوع</th>
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
                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>

                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=" "></td>


                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search date_picker" name=""
                           value="" placeholder=" "></td>


                <td><input type="text" class="form-control custom_box_shadow p-1 input_fast_search" name="" value=""
                           placeholder=""></td>

                <td>
                    <select name="" class="form-control p-1" id="" style="min-width: 90px">
                        <option selected>همه</option>
                        <option>پاسخ داده شده</option>
                        <option>در انتظار پاسخ</option>
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
            <?php $__currentLoopData = $getCommentContactUs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="text-center">
                    <td><?php echo e($loop->index+1); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->phone); ?></td>
                    <td><?php echo e($data->subject); ?></td>
                    <td><?php echo e($data->created_at); ?></td>
                    <td><?php echo e(Str::limit($data->message, 70)); ?></td>
                    <td class="answer" data-id="<?php echo e($data->id); ?>">
                        <?php if($data->status == 0): ?>
                            <span class="badge badge-warning">در انتظار پاسخ</span>
                        <?php else: ?>
                            <span class="badge badge-success">پاسخ داده شده</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <div class="d-flex flex-row justify-content-center">
                            <button type="button" class="btn-sm btn-info " title="پاسخ" data-toggle="modal"
                                    data-target="#replay_comment_contactUs"
                                    onclick="get_data_replay(<?php echo e($data->id); ?>)">
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <div class="modal fade" id="replay_comment_contactUs" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <label for="" class="font_black d-block">متن پیام کاربر</label>
                            <textarea name="description"
                                      class="description text-black rounded description_comment_contactUs"
                                      id="description" readonly></textarea>
                        </div><!--form-group-->

                        <div class="form-group mt-4">
                            <label for="user_email" class="font_black">ایمیل کاربر </label>
                            <input type="text" class="form-control" id="user_email" value=""
                                   placeholder="" readonly>
                        </div>
                        


                        <div class="form-group">
                            <label for="" class="font_black d-block">پاسخ به پیام کاربر</label>
                            <textarea name="" class="rounded description_comment_contactUs"
                                      id="replay_to_user"></textarea>
                        </div><!--form-group-->

                    </div>
                    
                    <input type="text" name="user_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">لغو</button>
                    <button type="button" class="btn btn-success" disabled id="btn_replay" onclick="sendEmail()">پاسخ
                    </button>
                </div>
            </div>
        </div>
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


        //for get and show user info to model
        function get_data_replay(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '<?php echo e(route('get.data.replay')); ?>',
                dataType: 'json',
                data: {id},
                success: function (getDataReplay) {
                    $('#description').html(' ');
                    $('#description').append(getDataReplay.message);
                    $('#user_email').val(getDataReplay.email);
                    $('input[name=user_id]').val(getDataReplay.id);
                }, error: function (getDataReplay) {

                }
            });
        }


        //for enable button answer
        $('#replay_to_user').keyup(function () {
            let value = $('#replay_to_user').val();
            if (value.length > 0) {
                $('#btn_replay').attr("disabled", false);
            } else {
                $('#btn_replay').attr("disabled", true);
            }
        });


        function sendEmail() {
            let message = $('#description').val();
            let user_email = $('#user_email').val();
            let replay_to_user = $('#replay_to_user').val();
            let user_id = $('input[name=user_id]').val();


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '<?php echo e(route('send.Email.To.User')); ?>',
                dataType: 'json',
                data: {message, user_email, replay_to_user, user_id},
                success: function (sendEmail) {

                    if (sendEmail.success == 'success') {
                        $('.close').click();
                        $('#replay_to_user').val(' ');
                        $('#btn_replay').attr("disabled", true);

                            $(".answer[data-id='" + sendEmail.user_id + "']").html(' ');
                            $(".answer[data-id='" + sendEmail.user_id + "']").append('<span class="badge badge-success">پاسخ داده شده</span>');
                    }
                }, error: function (sendEmail) {

                }

            });
        }


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.Layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\store_spare\resources\views/Admin/comments_contactUs/index.blade.php ENDPATH**/ ?>