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
                        <h3 class="auth-title">Sign up for free!</h3>
                        <p>Already have an account? <a href="{{route('login')}}">Login Here</a></p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong class="checkbox text-success" id="success-message"></strong>
                        <strong class="checkbox text-danger" id="error-message"></strong>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <form id="registerForm">
                                <x-auth.form-input name="fname" type="text" placeholder="First Name" error="fname_error" />

                                <x-auth.form-input name="lname" type="text" placeholder="Last Name" error="lname_error" />

                                <x-auth.form-input name="email" type="email" placeholder="Email address" error="email_error" />

                                <x-auth.form-input-password name="password" type="password" placeholder="New Password" error="password_error" />

                                <x-auth.form-input-password name="password_confirmation" type="password" placeholder="Confirm Password"
                                    error="cpassword_error" />

                                <div class="form-group">
                                    <p class="term-policy text-muted small">I agree to the
                                        <a href="#">privacy policy</a> and <a href="#">terms of service</a>.
                                    </p>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up with email</button>
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
        // message
        var success = document.querySelector('#success-message');
        var error = document.querySelector('#error-message');

        // registration
        var registerForm = document.querySelector('#registerForm');

        var reg_fname_input = registerForm.querySelector('[name="fname"]');
        var reg_lname_input = registerForm.querySelector('[name="lname"]');
        var reg_email_input = registerForm.querySelector('[name="email"]');
        var reg_password_input = registerForm.querySelector('[name="password"]');
        var reg_cpassword_input = registerForm.querySelector('[name="password_confirmation"]');
        var reg_fname_error = registerForm.querySelector('#fname_error');
        var reg_lname_error = registerForm.querySelector('#lname_error');
        var reg_email_error = registerForm.querySelector('#email_error');
        var reg_password_error = registerForm.querySelector('#password_error');
        var reg_button = registerForm.querySelector('[type="submit"]');
    </script>

    <script>
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
