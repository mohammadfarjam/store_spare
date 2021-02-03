
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/Frontend/css/toastr.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>تماس با ما</h2>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="bg-danger p-4 rounded div_error mb-5" style="display: none;">
                        <ul class="error_contactUs m-0 text-white"></ul>
                    </div>

                    <div class="contact-form">
                        <div class="tile">
                            <h3>نظر بدهید</h3>
                            <p>آدرس ایمیل شما منتشر نخواهد شد. قسمتهای مورد نیاز علامت گذاری شده اند *</p>
                        </div>


                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>پیام شما*</label>

                                    <textarea name="message" id="message" cols="30" rows="5" required
                                              data-error="لطفا پیام خود را بنویسید" class="form-control"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>نام شما*</label>

                                    <input type="text" name="name" id="name" class="form-control" required
                                           data-error="لطفا نام خود را وارد کنید">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>آدرس ایمیل*</label>

                                    <input type="email" name="email" id="email" class="form-control" required
                                           data-error="لطفا ایمیل خود را وارد کنید">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>تلفن همراه*</label>

                                    <input type="text" name="phone_number" id="phone_number" class="form-control"
                                           required data-error="لطفا تلفن خود را وارد کنید" maxlength="11">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>موضوع*</label>

                                    <input type="text" name="subject" id="subject" class="form-control" required
                                           data-error="لطفا موضوع خود را وارد کنید">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="captcha form-group col-lg-12 col-md-12">
                                <span><?php echo captcha_img(); ?></span>
                                <button id='refresh_captcha' class="btn btn-success mr-3 align-middle" onclick="refresh_captcha()"><i
                                        class="fas fa-sync-alt align-middle"></i></button>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="captcha" id="captcha" class="form-control"
                                       placeholder="کد درون تصویر را وارد نمایید" value="" maxlength="5">
                            </div>

                            <div class="col-lg-12 col-md-12 mt-3">
                                <button type="submit" class="default-btn" onclick="submit_form();">
                                    ارسال پیام
                                    <span></span>
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="contact-information">
                        <h3>ملاقات با ما</h3>

                        <ul class="contact-list">
                            <li><i class='bx bx-map'></i> آدرس:
                                <span>ایران ، استان تهران ، میدان آزادی ، خیابان 9</span></li>
                            <li><i class='bx bx-phone-call'></i> تلفن: <a href="tel:021-12345678">021-12345678</a></li>
                            <li><i class='bx bx-envelope'></i> ایمیل: <a href="mailto:hello@ejon.com">hello@ejon.com</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Map -->
    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
    </div>
    <!-- End Map -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="/Frontend/js/toastr.min.js"></script>

    <script>
        function refresh_captcha() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'get',
                url: '<?php echo e(route('refresh.captcha')); ?>',

                success: function (refreshCaptcha) {
                    $('.captcha span').html(refreshCaptcha.captcha)
                }
            });
        }


        function submit_form() {
            let message = $('#message').val();
            let name = $('input[name=name]').val();
            let email = $('input[name=email]').val();
            let phone = $('input[name=phone_number]').val();
            let subject = $('input[name=subject]').val();
            let captcha = $('input[name=captcha]').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '<?php echo e(route('insert.contactUs')); ?>',
                dataType: 'json',
                data: {message, name, email, phone, subject,captcha},
                success: function (insertData) {
                    if (insertData == 'success') {
                        $('.error_contactUs').css('display', 'none');
                        $('.div_error').css('display', 'none');
                        alertToastr();
                        $('#message').val(' ');
                        $('input[name=name]').val(' ');
                        $('input[name=email]').val(' ');
                        $('input[name=phone_number]').val(' ');
                        $('input[name=subject]').val(' ');
                        $('input[name=captcha]').val(' ');
                        $('#refresh_captcha').click();

                    }

                }, error: function (insertData) {
                    $('.error_contactUs').html(' ');
                    $.each(insertData.responseJSON, function (index, value) {
                        $('.error_contactUs').append('<li>' + value + '</li>');
                        $('.div_error').css('display', 'block');
                        $('.error_contactUs').css('display', 'block');
                        $("html, body").animate({scrollTop: 200}, "slow");

                    });
                }
            });
        }


        function alertToastr() {
            toastr.options.progressBar = true;
            toastr.options.closeButton = false;
            toastr.success('پیام شما با موفقیت ارسال شد.');
        }


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\store_spare\resources\views/Frontend/ContactUs/index.blade.php ENDPATH**/ ?>