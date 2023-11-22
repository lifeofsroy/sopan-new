@extends('layouts.teacher')
@section('teacher-section')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-xl-3 mb-2">
                <div class="d-none d-sm-block col-auto">
                    <h3><strong>Online</strong> Classes</h3>
                </div>

                <div class="mt-n1 col-auto ms-auto text-end">
                    <a class="btn btn-primary" onclick="addClassShow()">New Class</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <h5 class="card-title">All Classes</h5>
                        <div class="spinner-border spinner-border-sm text-danger me-2 ms-2" id="loadingIcon" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <h6 class="card-subtitle text-success fw-bolder" id="message"></h6>
                </div>
                <table class="table-striped table-hover table">
                    <thead>
                        <tr>
                            <th>Class ID</th>
                            <th>Topic</th>
                            <th>Agenda</th>
                            <th>Duration</th>
                            <th>Start At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="showModal" role="dialog" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row mb-xl-3 mb-2">
                                <div class="d-none d-sm-block col-auto">
                                    <h3>Class <strong>Details</strong></h3>
                                    <h6 class="card-subtitle text-success fw-bolder" id="clipMsz"></h6>
                                </div>
                                <div class="mt-n1 col-auto ms-auto text-end">
                                    <a class="btn btn-light" id="class-start" target="_blank">Start Class</a>
                                </div>
                            </div>

                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <div class="card">
                                <ul class="list-group list-group-flush" id='classDetail'>
                                    <li class="list-group-item">Topic: <span id="class-topic"></span></li>
                                    <li class="list-group-item">Agenda: <span id="class-agenda"></span></li>
                                    <li class="list-group-item">Date: <span id="class-date"></span></li>
                                    <li class="list-group-item">Type: <span id="class-type"></span></li>
                                    <li class="list-group-item">Status: <span id="class-status"></span></li>
                                    <li class="list-group-item text-primary">
                                        <a id="class-url">Copy Joining URL</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="addEditModal" role="dialog" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Class</h5>
                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <form id="newClassForm">
                                <div class="mb-3">
                                    <label class="form-label">Topic</label>
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

                                <div class="d-flex">
                                    <button class="btn btn-primary" id="createClassBtn" type="submit">Add Class</button>
                                    <button class="btn btn-primary" id="updateClassBtn" type="button">Update Class</button>
                                    <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" id="addLodingIcon" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('teacher-script')
    <script>
        var csrf_token = document.querySelector('[name="csrf_token"]')
        let tableBody = document.querySelector('#tableBody');
        let message = document.querySelector('#message');
        let loadingIcon = document.querySelector('#loadingIcon');
        let createClassBtn = document.querySelector('#createClassBtn');
        let updateClassBtn = document.querySelector('#updateClassBtn');
        let addEditModal = new bootstrap.Modal(document.querySelector('#addEditModal'), {});
        let newClassForm = document.querySelector('#newClassForm');
        let addLoding = newClassForm.querySelector('#addLodingIcon');

        addLoding.style.display = 'none';

        // get all meetings
        function getAllMeetings() {
            loadingIcon.style.display = 'block';
            axios.get('{{ route('teacher.class.all') }}')
                .then((res) => {
                    // console.log(res.data.data.meetings);
                    loadingIcon.style.display = 'none';

                    tableBody.innerHTML = '';

                    Array.from(res.data.data.meetings).forEach((meeting) => {
                        let tr = document.createElement('tr');
                        let serial = document.createElement('td');
                        let topic = document.createElement('td');
                        let agenda = document.createElement('td');
                        let duration = document.createElement('td');
                        let start = document.createElement('td');
                        let url = document.createElement('td');
                        let action = document.createElement('td');
                        let show = document.createElement('a');
                        let deleteBtn = document.createElement('a');
                        let editBtn = document.createElement('a');

                        action.className = 'table-action text-center';

                        serial.innerText = meeting.id;
                        topic.innerText = meeting.topic;
                        agenda.innerText = meeting.agenda;
                        duration.innerText = `${meeting.duration} min`;
                        start.innerText = moment(meeting.start_time).format('YY-MM-DD hh:mm a');

                        show.innerText = 'Details';
                        show.className = 'text-info mx-2';
                        show.setAttribute('onclick', `showMeeting(${meeting.id})`);

                        deleteBtn.innerText = 'Delete';
                        deleteBtn.className = 'text-danger mx-2';
                        deleteBtn.setAttribute('onclick', `deleteMeeting(${meeting.id})`);

                        editBtn.innerText = 'Edit';
                        editBtn.className = 'text-primary mx-2';
                        editBtn.setAttribute('onclick', `editMeeting(${meeting.id})`);

                        tr.appendChild(serial);
                        tr.appendChild(topic);
                        tr.appendChild(agenda);
                        tr.appendChild(duration);
                        tr.appendChild(start);
                        tr.appendChild(url);

                        action.appendChild(show);
                        action.appendChild(editBtn);
                        action.appendChild(deleteBtn);

                        tr.appendChild(action);

                        tableBody.append(tr);
                    })
                })
                .catch((err) => {
                    console.log(err);
                })
        }
        getAllMeetings();

        // Show a meeting
        let showModal = new bootstrap.Modal(document.querySelector('#showModal'), {});
        let class_start = document.querySelector('#class-start');
        let classDetail = document.querySelector('#classDetail');
        let class_topic = classDetail.querySelector('#class-topic');
        let class_date = classDetail.querySelector('#class-date');
        let class_agenda = classDetail.querySelector('#class-agenda');
        let class_type = classDetail.querySelector('#class-type');
        let class_status = classDetail.querySelector('#class-status');
        let class_url = classDetail.querySelector('#class-url');
        let join_url;

        function showMeeting(id) {
            loadingIcon.style.display = 'block';

            axios.get(`/teacher/class/show/${id}`)
                .then((res) => {
                    console.log(res.data.data);

                    function classType() {
                        if (res.data.data.type == 1) {
                            return 'instant';
                        } else if (res.data.data.type == 2) {
                            return 'scheduled';
                        } else if (res.data.data.type == 3) {
                            return 'recurring with no fixed time';
                        } else {
                            return 'recurring with fixed time';
                        }
                    }

                    class_topic.innerText = res.data.data.topic;
                    class_date.innerText = moment(res.data.data.start_time).format('YY-MM-DD hh:mm a');
                    class_agenda.innerText = res.data.data.agenda;
                    class_start.setAttribute('href', res.data.data.start_url);
                    class_status.innerText = res.data.data.status;
                    class_type.innerText = classType();
                    join_url = res.data.data.join_url;

                    showModal.show()
                    loadingIcon.style.display = 'none';
                })
                .catch((err) => {
                    console.log(err);
                })
        }

        // copy to clipboard
        let clipMsz = document.querySelector('#clipMsz');
        class_url.addEventListener('click', () => {
            navigator.clipboard.writeText(join_url);
            clipMsz.innerText = 'Copied to clipboard';
            setTimeout(() => {
                clipMsz.style.display = 'none';
            }, 2000);
        })

        // form fields & error blocks
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

        // reset fields
        function resetAll() {
            meet_topic.value = '';
            meet_agenda.value = '';
            meet_type.value = '';
            meet_duration.value = '';
            meet_password.value = '';
            meet_start.value = '';
        }

        // show add modal
        function addClassShow() {
            createClassBtn.style.display = 'inline-block';
            updateClassBtn.style.display = 'none';
            resetAll();
            addEditModal.show();
        }

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
                })
                .then((res) => {
                    console.log(res);
                    if (res.data.status) {
                        addEditModal.hide();
                        message.innerText = 'Created Successfully';
                        setTimeout(() => {
                            message.style.display = 'none';
                        }, 2000);
                        getAllMeetings();
                        addLoding.style.display = 'none';
                    }
                })
                .catch((err) => {
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

                        topic_error.innerText = err.response.data.errors.meet_topic;
                        agenda_error.innerText = err.response.data.errors.meet_agenda;
                        type_error.innerText = err.response.data.errors.meet_type;
                        duration_error.innerText = err.response.data.errors.meet_duration;
                        password_error.innerText = err.response.data.errors.meet_password;
                        start_error.innerText = err.response.data.errors.meet_start;
                    }
                })
        })

        // delete class
        function deleteMeeting(id) {
            loadingIcon.style.display = 'block';
            axios.get(`/teacher/class/delete/${id}`)
                .then((res) => {
                    if (res.data.status) {
                        message.innerText = res.data.message;
                        setTimeout(() => {
                            message.style.display = 'none';
                        }, 2000);
                        loadingIcon.style.display = 'none';
                        getAllMeetings();
                    }
                })
                .catch((err) => {
                    console.log(err);
                })
        }

        // edit class
        let classId;
        function editMeeting(id) {
            classId = id;
            loadingIcon.style.display = 'block';
            axios.get(`/teacher/class/edit/${id}`)
                .then((res) => {
                    // console.log(res.data.data);
                    document.querySelector('.modal-title').innerText = 'Edit Class';
                    createClassBtn.style.display = 'none';
                    updateClassBtn.style.display = 'inline-block';
                    updateClassBtn.innerText = 'Update Class';
                    meet_topic.value = res.data.data.topic;
                    meet_agenda.value = res.data.data.agenda;
                    meet_type.value = res.data.data.type;
                    meet_duration.value = res.data.data.duration;
                    meet_password.value = res.data.data.password;
                    meet_start.value = moment(res.data.data.start_time).format('YYYY-MM-DDTHH:mm');

                    loadingIcon.style.display = 'none';
                    addEditModal.show();
                })
                .catch((err) => {
                    console.log(err);
                })
        }

        // update class
        updateClassBtn.addEventListener('click', (e) => {
            e.preventDefault();
            addLoding.style.display = 'block';
            axios.post(`/teacher/class/update/${classId}`, {
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
                })
                .then((res) => {
                    // console.log(res);
                    if (res.data.status) {
                        addEditModal.hide();
                        message.innerText = res.data.message;
                        setTimeout(() => {
                            message.style.display = 'none';
                        }, 2000);
                        getAllMeetings();
                        addLoding.style.display = 'none';
                    }
                })
                .catch((err) => {
                    // console.log(err);
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

                        topic_error.innerText = err.response.data.errors.meet_topic;
                        agenda_error.innerText = err.response.data.errors.meet_agenda;
                        type_error.innerText = err.response.data.errors.meet_type;
                        duration_error.innerText = err.response.data.errors.meet_duration;
                        password_error.innerText = err.response.data.errors.meet_password;
                        start_error.innerText = err.response.data.errors.meet_start;
                    }
                })
        })
    </script>
@endpush
