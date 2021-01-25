@extends('Frontend.Layout.index')

@section('content')

    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>ورود</h2>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Login Area -->
    <section class="login-area ptb-50">
        <div class="container">
            <div class="login-form">
                <h2>ورود کاربران</h2>


                    <div class="form-group">
                        <input type="text" class="form-control input_register p-4" placeholder="شماره تلفن">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control input_register p-4" placeholder="گذرواژه">
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme">
                                <label class="form-check-label" for="checkme">مرا بخاطر بسپار</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password text-left">
                            <a href="#" class="lost-your-password">فراموشی گذرواژه؟</a>
                        </div>
                    </div>

                    <button type="submit" class="button_register">وارد شوید</button>

                <div class="important-text">
                    <p>حساب کاربری نداری؟ <a href="{{route('register.step1')}}">ثبت نام!</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Area -->
@endsection
