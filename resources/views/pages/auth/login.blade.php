@extends('layouts.auth')
@section('auth-section')
    <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
        <div class="col-sm-5 authfy-panel-left">
            <div class="brand-col">
                <!-- social login -->
                <div class="headline">
                    <!-- brand-logo -->
                    <div class="brand-logo">
                        {{-- <img src="{{asset('assets/auth/images/brand-logo-white.png')}}" alt="brand-logo" width="150"> --}}
                    </div>

                    <p>Login using social media to get quick access</p>
                    <div class="row social-buttons">
                        <div class="col-xs-4 col-sm-4 col-md-12">
                            <a class="btn btn-block btn-facebook" href="#">
                                <i class="fa fa-facebook"></i> <span class="hidden-xs hidden-sm">Signin with facebook</span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-12">
                            <a class="btn btn-block btn-twitter" href="#">
                                <i class="fa fa-twitter"></i> <span class="hidden-xs hidden-sm">Signin with twitter</span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-12">
                            <a class="btn btn-block btn-google" href="#">
                                <i class="fa fa-google-plus"></i> <span class="hidden-xs hidden-sm">Signin with google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-7 authfy-panel-right">
            <div class="authfy-login">
                <!-- login -->
                <div class="authfy-panel panel-login active text-center">
                    <div class="authfy-heading" style="margin-bottom: 0;">
                        <h3 class="auth-title">Login to your account</h3>
                        <p>Don't have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong class="checkbox text-success" id="success-message"></strong>
                        <strong class="checkbox text-danger" id="error-message"></strong>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <form class="loginForm" id="loginForm">
                                <x-auth.form-input type="email" name="email" placeholder="Email address" error="email_error"/>

                                <div class="form-group" style="margin-bottom: 0;">
                                    <div class="pwdMask">
                                        <input class="form-control password" name="password" type="password" style="margin-bottom: 0;"
                                            placeholder="Password">
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>
                                </div>
                                <strong class="checkbox text-danger text-left" id="password_error" style="margin-top: 0;"></strong>

                                <div class="row remember-row">
                                    <div class="col-xs-6 col-sm-6">
                                        <label class="checkbox text-left">
                                            <input name="remember" type="checkbox">
                                            <span class="label-text">Remember me</span>
                                        </label>
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <p class="forgotPwd">
                                            <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login with email</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- register -->
                <div class="authfy-panel panel-signup text-center">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="authfy-heading">
                                <h3 class="auth-title">Sign up for free!</h3>
                            </div>
                            <form class="registerForm">
                                <x-auth.form-input type="text" name="fname" placeholder="First Name" error="fname_error"/>

                                <x-auth.form-input type="text" name="lname" placeholder="Last Name" error="lname_error"/>

                                <x-auth.form-input type="email" name="email" placeholder="Email address" error="email_error"/>

                                <div class="form-group" style="margin-bottom: 0;">
                                    <div class="pwdMask">
                                        <input class="form-control password" name="password" type="password" style="margin-bottom: 0;"
                                            placeholder="New Password">
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>
                                </div>
                                <strong class="checkbox text-danger text-left" id="password_error" style="margin-top: 0;"></strong>

                                <div class="form-group" style="margin-bottom: 0;">
                                    <div class="pwdMask">
                                        <input class="form-control password" name="cpassword" type="password" style="margin-bottom: 0;"
                                            placeholder="Confirm Password">
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <p class="term-policy text-muted small">I agree to the
                                        <a href="#">privacy policy</a> and <a href="#">terms of service</a>.
                                    </p>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up with email</button>
                                </div>
                            </form>

                            <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                        </div>
                    </div>
                </div>

                <!-- forgot password -->
                <div class="authfy-panel panel-forgot">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="authfy-heading">
                                <h3 class="auth-title">Recover your password</h3>
                                <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                            </div>
                            <form class="forgetForm" name="forgetForm" action="#" method="POST">
                                <div class="form-group">
                                    <input class="form-control" name="username" type="email" placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
                                </div>
                                <div class="form-group">
                                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                                </div>
                                <div class="form-group">
                                    <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('auth-script')
    <script>
        var csrf_token = document.querySelector('[name="csrf_token"]');
        var success = document.querySelector('#success-message');
        var error = document.querySelector('#error-message');

        // login
        var loginForm = document.querySelector('#loginForm');

        var login_email_input = document.querySelector('[name="email"]');
        var login_password_input = document.querySelector('[name="password"]');
        var login_remember_input = document.querySelector('[name="remember"]');

        var login_email_error = document.querySelector('#email_error');
        var login_password_error = document.querySelector('#password_error');

        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();

            axios.post('{{ route('login.post') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                    email: login_email_input.value,
                    password: password_input.value,
                    remember: remember_input.checked
                })
                .then(function(res) {
                    login_email_error.style.display = 'none';
                    login_password_error.style.display = 'none';

                    if (res.data.success) {
                        success.style.display = 'block';
                        success.innerText = res.data.success;
                    }
                    if (res.data.error) {
                        error.style.display = 'block';
                        error.innerText = res.data.error;
                    }
                    setTimeout(() => {
                        if (res.data.error) {
                            error.style.display = 'none';
                        }

                        if (res.data.url) {
                            window.location.replace(res.data.url)
                        }
                    }, 2000);
                })
                .catch(function(err) {
                    if (err.response.data.errors) {
                        err.response.data.errors.email == undefined ? login_email_error.style.display = 'none' : login_email_error.style
                            .display =
                            'block';
                        login_email_error.innerText = err.response.data.errors.email;

                        err.response.data.errors.password == undefined ? login_password_error.style.display = 'none' : login_password_error
                            .style
                            .display =
                            'block';
                        login_password_error.innerText = err.response.data.errors.password;
                    }

                })
        });

        // registration
        var registerForm = document.querySelector('#registerForm');

        var reg_fname_input = document.querySelector('[name="fname"]');
        var reg_lname_input = document.querySelector('[name="lname"]');
        var reg_email_input = document.querySelector('[name="email"]');
        var reg_password_input = document.querySelector('[name="password"]');
        var reg_cpassword_input = document.querySelector('[name="password_confirmation"]');

        var reg_fname_error = document.querySelector('#fname_error');
        var reg_lname_error = document.querySelector('#lname_error');
        var reg_email_error = document.querySelector('#email_error');
        var reg_password_error = document.querySelector('#password_error');

        var reg_button = registerForm.querySelector('[type="submit"]');

        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            reg_button.innerText = 'Please Wait...';
            axios.post('{{ route('register.post') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                    fname: reg_fname_input.value,
                    lname: reg_lname_input.value,
                    email: reg_email_input.value,
                    password: reg_password_input.value,
                    password_confirmation: reg_cpassword_input.value,
                })
                .then(function(res) {
                    reg_button.innerText = 'Sign Up';
                    reg_fname_error.style.display = 'none';
                    reg_lname_error.style.display = 'none';
                    reg_email_error.style.display = 'none';
                    reg_password_error.style.display = 'none';
                    success.style.display = 'block';
                    success.innerText = res.data.success;
                    setTimeout(() => {
                        success.style.display = 'none';
                        window.location.replace('{{ route('verification.page') }}')
                    }, 5000);
                })
                .catch(function(error) {
                    reg_button.innerText = 'Sign Up';
                    if (error.response.data.errors) {
                        error.response.data.errors.fname == undefined ? reg_fname_error.style.display = 'none' : reg_fname_error.style
                            .display =
                            'block';

                        error.response.data.errors.lname == undefined ? reg_lname_error.style.display = 'none' : reg_lname_error.style
                            .display =
                            'block';

                        error.response.data.errors.email == undefined ? reg_email_error.style.display = 'none' : reg_email_error.style
                            .display =
                            'block';

                        error.response.data.errors.password == undefined ? reg_password_error.style.display = 'none' : reg_password_error
                            .style
                            .display = 'block';

                        reg_fname_error.innerText = error.response.data.errors.fname;
                        reg_lname_error.innerText = error.response.data.errors.lname;
                        reg_email_error.innerText = error.response.data.errors.email;
                        reg_password_error.innerText = error.response.data.errors.password;
                    }

                })
        });
    </script>
@endpush
