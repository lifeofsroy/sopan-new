@extends('layouts.user')

@section('user-section')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-lg-5 col-xl-3 border-end list-group">

                        <div class="d-none d-md-block px-4">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <input class="form-control my-3" type="text" placeholder="Search...">
                                </div>
                            </div>
                        </div>

                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="badge bg-success float-end">5</div>
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-5.jpg') }}" alt="Vanessa Tucker"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Vanessa Tucker
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="badge bg-success float-end">2</div>
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-2.jpg') }}" alt="William Harris"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    William Harris
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}" alt="Sharon Lessman"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Sharon Lessman
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-4.jpg') }}" alt="Christina Mason"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Christina Mason
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-5.jpg') }}" alt="Fiona Green"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Fiona Green
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-2.jpg') }}" alt="Doris Wilder"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Doris Wilder
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-4.jpg') }}" alt="Haley Kennedy"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Haley Kennedy
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action border-0" href="#">
                            <div class="d-flex align-items-start">
                                <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}" alt="Jennifer Chang"
                                    width="40" height="40">
                                <div class="flex-grow-1 ms-3">
                                    Jennifer Chang
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>

                        <hr class="d-block d-lg-none mb-0 mt-1" />
                    </div>
                    <div class="col-12 col-lg-7 col-xl-9">
                        <div class="border-bottom d-none d-lg-block px-4 py-2">
                            <div class="d-flex align-items-center py-1">
                                <div class="position-relative">
                                    <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}" alt="Sharon Lessman"
                                        width="40" height="40">
                                </div>
                                <div class="flex-grow-1 ps-3">
                                    <strong>Sharon Lessman</strong>
                                    <div class="text-muted small"><em>Typing...</em></div>
                                </div>
                                <div>
                                    <button class="btn btn-lg me-1 pe-2">
                                        <i class="feather-lg" data-feather="star" style="height: 22px; width: 22px;"></i>
                                    </button>
                                    <button class="btn btn-lg d-none d-md-inline-block me-1" data-bs-toggle="offcanvas"
                                        data-bs-target="#userChatInfoCanvas" href="#" aria-controls="userChatInfoCanvas">
                                        <i class="feather-lg" data-feather="info" style="height: 22px; width: 22px;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative">
                            <div class="chat-messages p-4">

                                <div class="chat-message-right pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light me-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}"
                                            alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light ms-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                    </div>
                                </div>

                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light me-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Cum ea graeci tractatos.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}"
                                            alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light ms-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                        Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}"
                                            alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light ms-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                    </div>
                                </div>

                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light me-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}"
                                            alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light ms-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                    </div>
                                </div>

                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:40 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light me-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Cum ea graeci tractatos.
                                    </div>
                                </div>

                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light me-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim metus urna eget purus.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}"
                                            alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light ms-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                        Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                    </div>
                                </div>

                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light me-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">You</div>
                                        Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img class="rounded-circle me-1" src="{{ asset('assets/admin/img/avatars/avatar-3.jpg') }}"
                                            alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light ms-3 rounded px-3 py-2">
                                        <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="border-top flex-grow-0 px-4 py-3">
                            <div class="input-group">
                                <button class="btn p-0"><i class="feather-lg" data-feather="file-plus"
                                        style="height: 30px; width: 30px;"></i></button>
                                <button class="btn mx-3 p-0"><i class="feather-lg" data-feather="smile"
                                        style="height: 30px; width: 30px;"></i></button>
                                <input class="form-control" type="text" placeholder="Type your message">
                                <button class="btn btn-primary"><i class="feather-lg" data-feather="send"
                                        style="height: 22px; width: 22px;"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" id="userChatInfoCanvas" data-bs-scroll="true" aria-labelledby="offcanvasWithBothOptionsLabel"
            tabindex="-1">
            <div class="offcanvas-header">
                <button class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">User Details</h5>
                    </div>
                    <div class="card-body text-center">
                        <img class="img-fluid rounded-circle mb-2" src="{{ asset('assets/admin/img/avatars/avatar-4.jpg') }}" alt="Christina Mason"
                            width="128" height="128" />
                        <h5 class="card-title mb-0">Christina Mason</h5>

                        <div class="mt-3">
                            <a class="btn btn-danger btn-sm" href="#">Delete Conversation</a>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <h5 class="h6 card-title">Shared Photos</h5>

                    </div>
                    <hr class="my-0" />
                </div>
            </div>
        </div>

    </main>
@endsection
