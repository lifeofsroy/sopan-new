@extends('layouts.user')
@section('user-section')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-xl-3 mb-2">
                <div class="d-none d-sm-block col-auto">
                    <h3><strong>User</strong> Profile</h3>
                </div>
            </div>

            <div class="row">
                {{-- update avatar --}}
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title text-primary mb-0">Update Avatar</h5>
                            <h6 class="card-subtitle text-success fw-bolder" id="avatar-success-message"></h6>
                            <h6 class="card-subtitle text-danger fw-bolder" id="avatar-error-message"></h6>
                        </div>
                        <div class="card-body text-center">
                            @if (!is_null(request()->user()->avatar))
                                <img class="img-fluid rounded-circle selectfile mb-2" src="{{ '/storage' }}/{{ request()->user()->avatar }}"
                                    alt="{{ request()->user()->name }}" role="button" width="128" height="128" />
                            @else
                                <img class="img-fluid rounded-circle selectfile mb-2" src="{{ asset('assets/images/avatar.png') }}"
                                    alt="{{ request()->user()->name }}" role="button" width="128" height="128" />
                            @endif

                            <h5 class="card-title mb-0">{{ request()->user()->name }}</h5>
                            <div class="text-muted mb-2">{{ request()->user()->type }}</div>

                            <form class="mb-2" id="avatarForm">
                                <input class="d-none" id="avatarInput" name="avatar" type="file">
                                <button class="btn btn-primary btn-sm" type="submit">Update Avatar</button>
                                <button class="btn btn-info btn-sm" id="removeAvatar" type="button">Remove</button>
                            </form>
                            <small class="text-danger" id="avatar_error"></small>

                        </div>
                    </div>
                </div>

                {{-- update details --}}
                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-primary">Update Details</h5>
                            <h6 class="card-subtitle text-success fw-bolder" id="detail-success-message"></h6>
                            <h6 class="card-subtitle text-danger fw-bolder" id="detail-error-message"></h6>
                            <h6 class="card-subtitle text-info fw-bolder" id="detail-notice"></h6>
                        </div>
                        <div class="card-body">
                            <form id="profileForm">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" name="fname" type="text" value="{{ request()->user()->fname }}">
                                            <small class="text-danger" id="fname_error"></small>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" name="lname" type="text" value="{{ request()->user()->lname }}">
                                            <small class="text-danger" id="lname_error"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input class="form-control" name="email" type="email" value="{{ request()->user()->email }}">
                                    <small class="text-danger" id="email_error"></small>
                                </div>

                                <div class="row d-none" id="mail_code">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Code from old email</label>
                                            <input class="form-control" name="old_code" type="text">
                                            <small class="text-danger" id="old_error"></small>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Code from new email</label>
                                            <input class="form-control" name="new_code" type="text">
                                            <small class="text-danger" id="new_error"></small>
                                        </div>
                                    </div>

                                    <input name="special" type="hidden">
                                </div>

                                <button class="btn btn-primary" type="submit">Update Details</button>

                                <button class="btn btn-secondary d-none" id="resendCode" type="button">Resend Code</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- update password --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-primary">Update Password</h5>
                    <h6 class="card-subtitle text-success fw-bolder" id="password-success-message"></h6>
                    <h6 class="card-subtitle text-danger fw-bolder" id="password-error-message"></h6>
                </div>
                <div class="card-body">
                    <form id="passwordForm">
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <input class="form-control" name="oldpass" type="password" placeholder="Old Password">
                                    <button class="btn btn-secondary" id="showPassOld" type="button">show</button>
                                </div>
                                <small class="text-danger" id="oldpass_error"></small>
                            </div>

                            <div class="col-4">
                                <div class="input-group">
                                    <input class="form-control" name="password" type="password" placeholder="New Password">
                                    <button class="btn btn-secondary" id="showPassNew" type="button">show</button>
                                </div>
                                <small class="text-danger" id="password_error"></small>
                            </div>

                            <div class="col-4">
                                <div class="input-group">
                                    <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm New Password">
                                    <button class="btn btn-secondary" id="showPassConfirm" type="button">show</button>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mt-3" type="submit">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @push('user-script')
        <script>
            var csrf_token = document.querySelector('[name="csrf_token"]');
            var profileForm = document.querySelector('#profileForm');
            var resendCode = document.querySelector('#resendCode');
            var fname_input = document.querySelector('[name="fname"]');
            var lname_input = document.querySelector('[name="lname"]');
            var email_input = document.querySelector('[name="email"]');
            var old_code = document.querySelector('[name="old_code"]');
            var new_code = document.querySelector('[name="new_code"]');
            var special = document.querySelector('[name="special"]');
            var fname_error = document.querySelector('#fname_error');
            var lname_error = document.querySelector('#lname_error');
            var email_error = document.querySelector('#email_error');
            var old_error = document.querySelector('#old_error');
            var new_error = document.querySelector('#new_error');
            var mail_code = profileForm.querySelector('#mail_code');
            var passwordForm = document.querySelector('#passwordForm');
            var oldpass = document.querySelector('[name="oldpass"]');
            var password = document.querySelector('[name="password"]');
            var password_confirmation = document.querySelector('[name="password_confirmation"]');
            var oldpass_error = document.querySelector('#oldpass_error');
            var password_error = document.querySelector('#password_error');
            var showPassOld = passwordForm.querySelector('#showPassOld');
            var removeAvatar = document.querySelector('#removeAvatar');
            var avatarForm = document.querySelector('#avatarForm');
            var selectfile = document.querySelector('.selectfile');
            var avatarInput = avatarForm.querySelector('#avatarInput');
            var avatar_error = document.querySelector('#avatar_error');
            var showPassNew = passwordForm.querySelector('#showPassNew');
            var showPassConfirm = passwordForm.querySelector('#showPassConfirm');

            var detail_success = document.querySelector('#detail-success-message');
            var detail_error = document.querySelector('#detail-error-message');
            var detail_notice = document.querySelector('#detail-notice');
            var password_success = document.querySelector('#password-success-message');
            var password_error = document.querySelector('#password-error-message');
            var avatar_success = document.querySelector('#avatar-success-message');
            var avatar_error = document.querySelector('#avatar-error-message');
        </script>

        <script>
            // show old password
            showPassOld.addEventListener('click', function(e) {
                if (oldpass.getAttribute('type') == 'password') {
                    oldpass.setAttribute('type', 'text');
                    showPassOld.innerText = 'hide';
                } else {
                    oldpass.setAttribute('type', 'password');
                    showPassOld.innerText = 'show';
                }
            })

            // show new password
            showPassNew.addEventListener('click', function(e) {
                if (password.getAttribute('type') == 'password') {
                    password.setAttribute('type', 'text');
                    showPassNew.innerText = 'hide';
                } else {
                    password.setAttribute('type', 'password');
                    showPassNew.innerText = 'show';
                }
            })

            // show confirm password
            showPassConfirm.addEventListener('click', function(e) {
                if (password_confirmation.getAttribute('type') == 'password') {
                    password_confirmation.setAttribute('type', 'text');
                    showPassConfirm.innerText = 'hide';
                } else {
                    password_confirmation.setAttribute('type', 'password');
                    showPassConfirm.innerText = 'show';
                }
            })

            // open avatar form
            selectfile.addEventListener('click', function() {
                avatarInput.click();
            });

            // select avatar
            avatarInput.addEventListener('change', function(e) {
                selectfile.setAttribute('src', URL.createObjectURL(e.target.files[0]));
            })
        </script>

        <script>
            // Profile Update
            profileForm.addEventListener('submit', function(e) {
                e.preventDefault();
                axios.post('{{ route('student.profile.post.detail') }}', {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token.content,
                        },
                        fname: fname_input.value,
                        lname: lname_input.value,
                        email: email_input.value,
                        special: special.value,
                        old_code: old_code.value,
                        new_code: new_code.value,
                    })
                    .then(function(res) {
                        fname_error.style.display = 'none';
                        lname_error.style.display = 'none';
                        email_error.style.display = 'none';
                        old_error.style.display = 'none';
                        new_error.style.display = 'none';

                        if (res.data.message) {
                            detail_notice.style.display = 'none';
                            detail_error.style.display = 'none';
                            detail_success.style.display = 'block';
                            detail_success.innerText = res.data.message;
                            setTimeout(() => {
                                detail_success.style.display = 'none';
                            }, 3500);
                        }

                        if (res.data.error) {
                            detail_notice.style.display = 'none';
                            detail_success.style.display = 'none';
                            detail_error.style.display = 'block';
                            detail_error.innerText = res.data.error;
                            setTimeout(() => {
                                detail_error.style.display = 'none';
                            }, 3500);
                        }

                        if (res.data.notice) {
                            detail_success.style.display = 'none';
                            detail_error.style.display = 'none';
                            detail_notice.style.display = 'block';
                            detail_notice.innerText = res.data.notice;
                            special.value = 'checked';
                            mail_code.classList.remove('d-none');
                            resendCode.classList.remove('d-none');
                        }

                        if (res.data.button) {
                            resendCode.classList.add('d-none');
                        }

                    })
                    .catch(function(error) {
                        if (error.response.data.errors) {
                            error.response.data.errors.fname == undefined ? fname_error.style.display = 'none' : fname_error.style.display =
                                'block';

                            error.response.data.errors.lname == undefined ? lname_error.style.display = 'none' : lname_error.style.display =
                                'block';

                            error.response.data.errors.email == undefined ? email_error.style.display = 'none' : email_error.style.display =
                                'block';

                            error.response.data.errors.old_code == undefined ? old_error.style.display = 'none' : old_error.style.display =
                                'block';

                            error.response.data.errors.new_code == undefined ? new_error.style.display = 'none' : new_error.style.display =
                                'block';

                            fname_error.innerText = error.response.data.errors.fname;
                            lname_error.innerText = error.response.data.errors.lname;
                            email_error.innerText = error.response.data.errors.email;
                            old_error.innerText = error.response.data.errors.old_code;
                            new_error.innerText = error.response.data.errors.new_code;
                        }

                    })
            });

            // resend code
            resendCode.addEventListener('click', function(e) {
                e.preventDefault();
                axios.post('{{ route('student.profile.resend.mail') }}', {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token.content,
                        },
                        email: email_input.value,
                    })
                    .then(function(response) {
                        if (response.data.notice) {
                            deatil_notice.style.display = 'block';
                            deatil_notice.innerText = response.data.notice;
                            if (response.data.remaining) {
                                resendCode.innerText = 'Resend Code ' + '( left: ' + response.data.remaining + ')';
                            } else {
                                resendCode.innerText = 'Resend Code';
                            }

                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    })
            })

            // update password
            passwordForm.addEventListener('submit', function(e) {
                e.preventDefault();
                axios.post('{{ route('student.profile.post.password') }}', {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf_token.content,
                        },
                        oldpass: oldpass.value,
                        password: password.value,
                        password_confirmation: password_confirmation.value,
                    })
                    .then(function(res) {
                        oldpass_error.style.display = 'none';
                        password_error.style.display = 'none';

                        if (res.data.message) {
                            password_error.style.display = 'none';
                            password_success.style.display = 'block';
                            password_success.innerText = res.data.message;
                            setTimeout(() => {
                                password_success.style.display = 'none';
                            }, 3500);
                        }

                        if (res.data.error) {
                            password_success.style.display = 'none';
                            password_error.style.display = 'block';
                            password_error.innerText = res.data.error;
                            setTimeout(() => {
                                password_error.style.display = 'none';
                            }, 3500);
                        }

                    })
                    .catch(function(error) {
                        if (error.response.data.errors) {
                            error.response.data.errors.oldpass == undefined ? oldpass_error.style.display = 'none' : oldpass_error.style.display =
                                'block';

                            error.response.data.errors.password == undefined ? password_error.style.display = 'none' : password_error.style
                                .display =
                                'block';

                            oldpass_error.innerText = error.response.data.errors.oldpass;
                            password_error.innerText = error.response.data.errors.password;
                        }

                    })
            });

            // remove avatar
            removeAvatar.addEventListener('click', function() {
                axios.get('{{ route('student.profile.remove.avatar') }}')
                    .then(function(res) {
                        if (res.data.error) {
                            avatar_error.innerText = res.data.error
                            setTimeout(() => {
                                avatar_error.style.display = 'none';
                            }, 3500);
                        }
                        if (res.data.message) {
                            avatar_success.innerText = res.data.message
                            setTimeout(() => {
                                avatar_success.style.display = 'none';
                            }, 3500);
                        }

                    })
                    .catch(function(err) {
                        console.log(err);
                    })
            })

            // update avatar
            avatarForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const form = new FormData();
                form.append('avatar', avatarInput.files[0]);

                axios.post('{{ route('student.profile.update.avatar') }}', form)
                    .then(function(res) {
                        avatar_success.style.display = 'block';
                        avatar_success.innerText = res.data.message;
                        setTimeout(() => {
                            avatar_success.style.display = 'none';
                        }, 3500);
                    })
                    .catch(function(err) {
                        if (err.response.data.errors) {
                            err.response.data.errors.avatar == undefined ? avatar_error.style.display = 'none' : avatar_error.style.display =
                                'block';

                            avatar_error.innerText = err.response.data.errors.avatar;
                        }
                    })
            });
        </script>
    @endpush
@endsection
