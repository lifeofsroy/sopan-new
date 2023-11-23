@extends('layouts.auth')
@section('auth-section')
    <div class="d-table-cell align-middle">

        <div class="mt-4 text-center">
            <h1 class="h2">Welcome to {{ config('app.name') }}</h1>
            <p class="lead">
                Sign up and join with us
            </p>
            <p class="text-primary fw-bold text-center" id="message"></p>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="m-sm-3">
                    <form id="registerForm">
                        <div class="mb-3">
                            <label class="form-label text-primary">First Name</label>
                            <input class="form-control form-control-lg" name="fname" type="text" placeholder="e.g. Suman" />
                            <small class="text-danger" id="fname_error"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary">Last Name</label>
                            <input class="form-control form-control-lg" name="lname" type="text" placeholder="e.g. Roy" />
                            <small class="text-danger" id="lname_error"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary">Email</label>
                            <input class="form-control form-control-lg" name="email" type="email" placeholder="e.g. sroy@gmail.com" />
                            <small class="text-danger" id="email_error"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary">New Password</label>
                            <input class="form-control form-control-lg" name="password" type="password" />
                            <small class="text-danger" id="password_error"></small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary">Confirm Password</label>
                            <input class="form-control form-control-lg" name="password_confirmation" type="password" />
                        </div>

                        <button class="btn btn-primary btn-lg mt-3" type="submit">Sign Up</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="mb-3 text-center">
            Already have an account? <a href='{{ route('login') }}'>Sign in</a>
        </div>
    </div>

    @push('auth-script')
        <script>
            var registerForm = document.querySelector('#registerForm');

            var fname_input = document.querySelector('[name="fname"]');
            var lname_input = document.querySelector('[name="lname"]');
            var email_input = document.querySelector('[name="email"]');
            var password_input = document.querySelector('[name="password"]');
            var cpassword_input = document.querySelector('[name="password_confirmation"]');

            var fname_error = document.querySelector('#fname_error');
            var lname_error = document.querySelector('#lname_error');
            var email_error = document.querySelector('#email_error');
            var password_error = document.querySelector('#password_error');

            var button = registerForm.querySelector('[type="submit"]');

            var csrf_token = document.querySelector('[name="csrf_token"]');

            var message = document.querySelector('#message');

            registerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                button.innerText = 'Please Wait...';
                axios.post('{{ route('register.post') }}', {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token.content,
                        },
                        fname: fname_input.value,
                        lname: lname_input.value,
                        email: email_input.value,
                        password: password_input.value,
                        password_confirmation: cpassword_input.value,
                    })
                    .then(function(res) {
                        button.innerText = 'Sign Up';
                        fname_error.style.display = 'none';
                        lname_error.style.display = 'none';
                        email_error.style.display = 'none';
                        password_error.style.display = 'none';
                        message.style.display = 'block';
                        message.innerText = res.data.message;
                        setTimeout(() => {
                            message.style.display = 'none';
                            window.location.replace('{{ route('verification.page') }}')
                        }, 5000);
                    })
                    .catch(function(error) {
                        button.innerText = 'Sign Up';
                        if (error.response.data.errors) {
                            error.response.data.errors.fname == undefined ? fname_error.style.display = 'none' : fname_error.style.display =
                                'block';

                            error.response.data.errors.lname == undefined ? lname_error.style.display = 'none' : lname_error.style.display =
                                'block';

                            error.response.data.errors.email == undefined ? email_error.style.display = 'none' : email_error.style.display =
                                'block';

                            error.response.data.errors.password == undefined ? password_error.style.display = 'none' : password_error.style
                                .display = 'block';

                            fname_error.innerText = error.response.data.errors.fname;
                            lname_error.innerText = error.response.data.errors.lname;
                            email_error.innerText = error.response.data.errors.email;
                            password_error.innerText = error.response.data.errors.password;
                        }

                    })
            });
        </script>
    @endpush
@endsection
