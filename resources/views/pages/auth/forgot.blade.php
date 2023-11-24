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

                    <p>Try Login or Registration</p>
                    <div class="row social-buttons">
                        <div class="col-xs-4 col-sm-4 col-md-12">
                            <a class="btn btn-block btn-twitter" href="{{route('login')}}">
                                Already have an account?
                            </a>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-12">
                            <a class="btn btn-block btn-google" href="{{route('register')}}">
                                Don't have an account?
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
                        <h3 class="auth-title">Recover Your Password!</h3>
                        <p>We will sent a link to verify your email</p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong class="checkbox text-success" id="success-message"></strong>
                        <strong class="checkbox text-danger" id="error-message"></strong>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <form id="forgotPassForm">
                                <x-auth.form-input name="email" type="email" placeholder="Email address" error="email_error" />

                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
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

        // forgot password
        var forgotPassForm = document.querySelector('#forgotPassForm');
        var forgot_email_input = forgotPassForm.querySelector('[name="email"]');
        var forgot_email_error = forgotPassForm.querySelector('#email_error');
    </script>

    <script>
        forgotPassForm.addEventListener('submit', function(e) {
            e.preventDefault();
            success.style.display = 'block';
            success.innerText = 'Please Wait...';

            axios.post('{{ route('password.email') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                    email: forgot_email_input.value,
                })
                .then(function(res) {
                    success.style.display = 'none';
                    forgot_email_error.style.display = 'none';

                    if (res.data.status) {
                        if (res.data.status == 'passwords.sent') {
                            success.style.display = 'block';
                            success.innerText = 'A link sent to your email to reset password';
                        } else if (res.data.status == 'passwords.throttled') {
                            error.style.display = 'block';
                            error.innerText = 'Too many attempts, try after some time';
                        } else if (res.data.status == 'passwords.user') {
                            error.style.display = 'block';
                            error.innerText = 'User Not Found';
                        }

                        setTimeout(() => {
                            success.style.display = 'none';
                            error.style.display = 'none';
                        }, 2000);
                    }
                })
                .catch(function(error) {
                    if (error.response.data.errors) {
                        error.response.data.errors.email == undefined ? forgot_email_error.style.display = 'none' : forgot_email_error.style
                            .display =
                            'block';

                        forgot_email_error.innerText = error.response.data.errors.email;
                    }

                })
        });
    </script>
@endpush
