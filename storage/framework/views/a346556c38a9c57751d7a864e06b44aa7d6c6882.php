

<?php $__env->startSection('content'); ?>

    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>ورود</h2>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->



    <?php if(count($errors)>0): ?>
        <div class="col-lg-3 mx-auto mt-5">
            <div class="alert alert-danger font_black">
                <ul style="list-style-type: none">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>


    <!-- Start Login Area -->
    <section class="login-area ptb-50">
        <div class="container">
            <div class="login-form">
                <h2>ورود کاربران</h2>

                <form method="POST" action="<?php echo e(route('login')); ?>">
                              <?php echo csrf_field(); ?>

                    <div class="form-group">
                    <input type="text" class="form-control input_register p-4" id="login" name="login" placeholder="شماره تلفن /  ایمیل">
                </div>

                <div class="form-group">
                    <input class="form-control input_register p-4" placeholder="گذرواژه" type="password" name="password">
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="checkme">مرا بخاطر بسپار</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password text-left">
                        <a href="#" class="lost-your-password">فراموشی گذرواژه؟</a>
                    </div>
                </div>

                <button type="submit" class="button_register">وارد شوید</button>
                </form>
                <div class="important-text">
                    <p>حساب کاربری نداری؟ <a href="<?php echo e(route('register.step1')); ?>">ثبت نام!</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->




















































































<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\store_spare\resources\views/auth/login.blade.php ENDPATH**/ ?>