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
                            <a class="btn btn-block btn-google" href="{{ route('google.login') }}">
                                <i class="fa fa-google-plus"></i> <span class="hidden-xs hidden-sm">Signin with google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-7 authfy-panel-right">
            <div class="authfy-login">
                <!-- reset -->
                <div class="authfy-panel panel-login active text-center">
                    <div class="authfy-heading" style="margin-bottom: 0;">
                        <h3 class="auth-title">Reset Your Password</h3>
                        <p>Remember your password? <a href="{{route('login')}}">Let's login!</a></p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong class="checkbox text-success" id="success-message"></strong>
                        <strong class="checkbox text-danger" id="error-message"></strong>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <form class="loginForm" id="resetPassForm">
                                <input name="token" type="hidden" value="{{ $token }}">

                                <x-auth.form-input name="email" type="email" placeholder="Email" error="email_error" />

                                <x-auth.form-input-password name="password" type="password" placeholder="New Password" error="password_error" />

                                <x-auth.form-input-password name="password_confirmation" type="password" placeholder="Confirm Password"
                                    error="password_error" />

                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Update Password</button>
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
        var resetPassForm = document.querySelector('#resetPassForm');
        var token_input = document.querySelector('[name="token"]');
        var email_input = document.querySelector('[name="email"]');
        var password_input = document.querySelector('[name="password"]');
        var cpassword_input = document.querySelector('[name="password_confirmation"]');
        var email_error = document.querySelector('#email_error');
        var password_error = document.querySelector('#password_error');
        var csrf_token = document.querySelector('[name="csrf_token"]')
        var success = document.querySelector('#success-message');
        var error = document.querySelector('#error-message');
    </script>

    <script>
        resetPassForm.addEventListener('submit', function(e) {
            e.preventDefault();
            waitMessage.classList.remove("d-none");

            axios.post('{{ route('password.update') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                    token: token_input.value,
                    email: email_input.value,
                    password: password_input.value,
                    password_confirmation: cpassword_input.value,
                })
                .then(function(res) {
                    email_error.style.display = 'none';
                    password_error.style.display = 'none';


                    if (res.data.status) {
                        if (res.data.status == 'passwords.reset') {
                            success.style.display = 'block';
                            success.innerText = 'Password Reset Successful, redirecting to login';
                            error.style.display = 'none';
                            setTimeout(() => {
                                window.location.replace(res.data.url)
                            }, 2000);
                        } else if (res.data.status == 'passwords.token') {
                            error.style.display = 'block';
                            error.innerText = 'Sorry! Try again later';

                        } else if (res.data.status == 'passwords.user') {
                            error.style.display = 'block';
                            error.innerText = 'Provided Credentials are wrong';

                        }
                        setTimeout(() => {
                            success.style.display = 'none';
                            error.style.display = 'none';
                        }, 2500);
                    }

                })
                .catch(function(error) {
                    waitMessage.classList.add("d-none");
                    if (error.response.data.errors) {
                        error.response.data.errors.email == undefined ? email_error.style.display = 'none' : email_error.style
                            .display =
                            'block';

                        error.response.data.errors.password == undefined ? password_error.style.display = 'none' : password_error.style
                            .display =
                            'block';

                        email_error.innerText = error.response.data.errors.email;
                        password_error.innerText = error.response.data.errors.password;
                    }

                })
        });
    </script>
@endpush
