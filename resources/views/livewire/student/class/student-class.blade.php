<div>
    <div class="container-fluid p-0">
        <div class="row mb-xl-3 mb-2">
            <div class="d-none d-sm-block col-auto">
                <h3><strong>All</strong> Classes</h3>
            </div>

            <div class="mt-n1 col-auto ms-auto text-end">
                <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" wire:click='AllClass'>All Classes</a>
                        <a class="dropdown-item" wire:click='upcomingClass'>Upcoming</a>
                        <a class="dropdown-item" wire:click='previousClass'>Previous</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header pb-0">
                <div id='sessionMessage'>
                    <h6 class="card-subtitle text-success fw-bolder" id="clipMsz"></h6>
                </div>
            </div>

            <div class="card-body">
                <table class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Teacher</th>
                            <th>Subject</th>
                            <th>Agenda</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $class)
                            <tr wire:key='{{ $class->id }}'>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $class->user->name }}</td>

                                <td>{{ $class->topic }}</td>

                                <td>{{ $class->agenda }}</td>

                                <td>{{ date('jS M, Y - h:i a', strtotime(optional($class)->start_at)) }}</td>

                                <td class="table-action text-center">
                                    <a class="text-info mx-2" wire:click.prevent='classDetail({{ $class->id }})'>
                                        Details
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="detailModal" role="dialog" aria-hidden="true" tabindex="-1" wire:ignore.self>
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row mb-xl-3 mb-2">
                                <div class="d-none d-sm-block col-auto">
                                    <h3>Class <strong>Details</strong></h3>
                                </div>
                                <div class="mt-n1 col-auto ms-auto text-end">
                                    <a class="btn btn-light" href="{{ optional($single_class)->join_url }}" target="_blank">Join Class</a>
                                </div>
                            </div>
                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Subject: {{ optional($single_class)->topic }}</li>
                                    <li class="list-group-item">Agenda: {{ optional($single_class)->agenda }}</li>
                                    <li class="list-group-item">Date: {{ date('jS M, Y - h:i a', strtotime(optional($single_class)->start_at)) }}
                                    </li>
                                    <li class="list-group-item">Type:
                                        {{ ((optional($single_class)->type == 1 ? 'instant' : optional($single_class)->type == 2) ? 'scheduled' : optional($single_class)->type == 3) ? 'recurring with no fixed time' : 'recurring with fixed time' }}
                                    </li>
                                    <li class="list-group-item">Status: {{ optional($single_class)->status }}</li>
                                    <li class="list-group-item">Approval:
                                        {{ (optional($single_class)->approval == 0 ? 'Automatically' : optional($single_class)->approval == 1) ? 'Manually' : 'No Registration Required' }}
                                    </li>
                                    <li class="list-group-item">Email: {{ optional($single_class)->email }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('student-script')
    <script>
        // details modal
        let detailModal = new bootstrap.Modal(document.querySelector('#detailModal'), {});

        document.addEventListener('show-detail-modal', (e) => {
            detailModal.show();
        });
    </script>
@endpush
