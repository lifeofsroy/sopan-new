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
                            <a class="btn btn-block btn-twitter" href="{{ route('login') }}">
                                Already have an account?
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
                        <h3 class="auth-title">Verify Your Email</h3>
                        <p>You can change your email here</p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <strong class="checkbox text-success" id="success-message"></strong>
                        <strong class="checkbox text-danger" id="error-message"></strong>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <form id="updateEmailForm">
                                <x-auth.form-input name="email" type="email" placeholder="New Email address" error="email_error" />

                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Update Email</button>
                                </div>
                            </form>

                            <a id="resendBtn" href="#">Resend Verification Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('auth-script')
    <script>
        let csrf_token = document.querySelector('[name="csrf_token"]')
        let updateEmailForm = document.querySelector('#updateEmailForm');
        let resendBtn = document.querySelector('#resendBtn');
        let success = document.querySelector('#success-message');
        let error = document.querySelector('#error-message');
        let email_input = updateEmailForm.querySelector('[name="email"]');
        let email_error = updateEmailForm.querySelector('#email_error');
    </script>

    <script>
        resendBtn.addEventListener('click', function(e) {
            e.preventDefault();
            axios.post('{{ route('verification.send') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                })
                .then(function(res) {
                    success.style.display = 'block';
                    success.innerText = res.data.message;
                    setTimeout(() => {
                        if (res.data.url) {
                            window.location.replace(res.data.url)
                        }
                    }, 2000);
                })
                .catch(function(error) {
                    console.log(error);
                })
        });

        updateEmailForm.addEventListener('submit', (e) => {
            e.preventDefault();
            axios.post('{{ route('verification.email.update') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                    email: email_input.value
                })
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    console.log(err);
                    if (err.response.data.errors) {
                        err.response.data.errors.email == undefined ? email_error.style.display = 'none' : email_error.style
                            .display =
                            'block';
                        email_error.innerText = err.response.data.errors.email;
                    }
                })
        })
    </script>
@endpush
