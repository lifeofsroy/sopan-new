@extends('layouts.teacher')
@section('teacher-section')
    <main class="content">
        <div>
            <div class="container-fluid p-0">

                <div class="row mb-xl-3 mb-2">
                    <div class="d-none d-sm-block col-auto">
                        <h3><strong>Add</strong> Class</h3>
                        <strong class="checkbox text-success" id="message"></strong>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form id="newClassForm">
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input class="form-control" name="meet_topic" type="text">
                                <small class="text-danger" id="topic_error"></small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agenda</label>
                                <input class="form-control" name="meet_agenda" type="text">
                                <small class="text-danger" id="agenda_error"></small>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="meet_type">Class Type</label>
                                    <select class="form-control" name="meet_type">
                                        <option value="">Select</option>
                                        <option value="1">Instant</option>
                                        <option value="2">Scheduled</option>
                                        <option value="3">Recurring with no fixed time</option>
                                        <option value="8">Recurring with fixed time</option>
                                    </select>
                                    <small class="text-danger" id="type_error"></small>
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label">Class Duration <span class="text-info">(in minutes)</span></label>
                                    <input class="form-control" name="meet_duration" type="number">
                                    <small class="text-danger" id="duration_error"></small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label">Meet Password</label>
                                    <input class="form-control" name="meet_password" type="text">
                                    <small class="text-danger" id="password_error"></small>
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label">Start Time</span></label>
                                    <input class="form-control" name="meet_start" type="datetime-local">
                                    <small class="text-danger" id="start_error"></small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="meet_approval">Approval Type</label>
                                    <select class="form-control" name="meet_approval">
                                        <option value="">Select</option>
                                        <option value="0">Automatically Approve</option>
                                        <option value="1">Manually Approve</option>
                                        <option value="2">No Registration Required</option>
                                    </select>
                                    <small class="text-danger" id="approval_error"></small>
                                </div>
                            </div>

                            <div class="d-flex">
                                <button class="btn btn-primary" type="submit">Add Class</button>
                                <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" id="addLodingIcon" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@push('teacher-script')
    <script>
        let csrf_token = document.querySelector('[name="csrf_token"]');
        let addLoding = newClassForm.querySelector('#addLodingIcon');
        let meet_topic = newClassForm.querySelector('[name="meet_topic"]');
        let topic_error = newClassForm.querySelector('#topic_error');
        let meet_agenda = newClassForm.querySelector('[name="meet_agenda"]');
        let agenda_error = newClassForm.querySelector('#agenda_error');
        let meet_type = newClassForm.querySelector('[name="meet_type"]');
        let type_error = newClassForm.querySelector('#type_error');
        let meet_duration = newClassForm.querySelector('[name="meet_duration"]');
        let duration_error = newClassForm.querySelector('#duration_error');
        let meet_password = newClassForm.querySelector('[name="meet_password"]');
        let password_error = newClassForm.querySelector('#password_error');
        let meet_start = newClassForm.querySelector('[name="meet_start"]');
        let start_error = newClassForm.querySelector('#start_error');
        let meet_approval = newClassForm.querySelector('[name="meet_approval"]');
        let approval_error = newClassForm.querySelector('#approval_error');
        let message = document.querySelector('#message');
    </script>

    <script>
        addLoding.style.display = 'none';

        // no class found
        

        // create class
        newClassForm.addEventListener('submit', (e) => {
            e.preventDefault();
            addLoding.style.display = 'block';
            axios.post('{{ route('teacher.class.create') }}', {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrf_token.content,
                    },
                    meet_topic: meet_topic.value,
                    meet_agenda: meet_agenda.value,
                    meet_type: meet_type.value,
                    meet_duration: meet_duration.value,
                    meet_password: meet_password.value,
                    meet_start: meet_start.value,
                    meet_approval: meet_approval.value,
                })
                .then((res) => {
                    topic_error.style.display = 'none';
                    agenda_error.style.display = 'none';
                    type_error.style.display = 'none';
                    duration_error.style.display = 'none';
                    password_error.style.display = 'none';
                    start_error.style.display = 'none';
                    approval_error.style.display = 'none';

                    addLoding.style.display = 'none';

                    if (res.data.status) {
                        message.innerText = 'Class Created Successfully, redirecting...';
                        setTimeout(() => {
                            window.location.replace('{{ route('teacher.class.index') }}')
                        }, 3000);
                    }
                })
                .catch((err) => {
                    addLoding.style.display = 'none';
                    console.log(err);
                    if (err.response.data.errors) {
                        err.response.data.errors.meet_topic == undefined ? topic_error.style.display = 'none' : topic_error.style.display =
                            'block';
                        err.response.data.errors.meet_agenda == undefined ? agenda_error.style.display = 'none' : agenda_error.style.display =
                            'block';
                        err.response.data.errors.meet_type == undefined ? type_error.style.display = 'none' : type_error.style.display =
                            'block';
                        err.response.data.errors.meet_duration == undefined ? duration_error.style.display = 'none' : duration_error.style
                            .display =
                            'block';
                        err.response.data.errors.meet_password == undefined ? password_error.style.display = 'none' : password_error.style
                            .display =
                            'block';
                        err.response.data.errors.meet_start == undefined ? start_error.style.display = 'none' : start_error.style.display =
                            'block';
                        err.response.data.errors.meet_approval == undefined ? approval_error.style.display = 'none' : approval_error.style
                            .display =
                            'block';

                        topic_error.innerText = err.response.data.errors.meet_topic;
                        agenda_error.innerText = err.response.data.errors.meet_agenda;
                        type_error.innerText = err.response.data.errors.meet_type;
                        duration_error.innerText = err.response.data.errors.meet_duration;
                        password_error.innerText = err.response.data.errors.meet_password;
                        start_error.innerText = err.response.data.errors.meet_start;
                        approval_error.innerText = err.response.data.errors.meet_approval;
                    }
                })
        })
    </script>
@endpush
