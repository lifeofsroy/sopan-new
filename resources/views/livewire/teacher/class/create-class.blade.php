<div>
    <div class="container-fluid p-0">

        <div class="row mb-xl-3 mb-2">
            <div class="d-none d-sm-block col-auto">
                <h3><strong>Add</strong> Class</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div id='sessionMessage'>
                    @if (session('success'))
                        <h6 class="card-subtitle text-success fw-bolder">{{ session('success') }}</h6>
                    @endif
                    @if (session('error'))
                        <h6 class="card-subtitle text-danger fw-bolder">{{ session('error') }}</h6>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <form wire:submit="addClass">
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input class="form-control" type="text" wire:model='meet_topic'>
                        @error('meet_topic')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Agenda</label>
                        <input class="form-control" type="text" wire:model="meet_agenda">
                        @error('meet_agenda')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label" for="meet_type">Class Type</label>
                            <select class="form-control" wire:model="meet_type">
                                <option value="">Select</option>
                                <option value="1">Instant</option>
                                <option value="2">Scheduled</option>
                                <option value="3">Recurring with no fixed time</option>
                                <option value="8">Recurring with fixed time</option>
                            </select>
                            @error('meet_type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label">Class Duration <span class="text-info">(in minutes)</span></label>
                            <input class="form-control" type="number" wire:model="meet_duration">
                            @error('meet_duration')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label">Meet Password</label>
                            <input class="form-control" type="text" wire:model="meet_password">
                            @error('meet_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label">Start Time</span></label>
                            <input class="form-control" type="datetime-local" wire:model="meet_start">
                            @error('meet_start')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label" for="meet_approval">Approval Type</label>
                            <select class="form-control" wire:model="meet_approval">
                                <option value="">Select</option>
                                <option value="0">Automatically Approve</option>
                                <option value="1">Manually Approve</option>
                                <option value="2">No Registration Required</option>
                            </select>
                            @error('meet_approval')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex">
                        <button class="btn btn-primary" type="submit">Create Class</button>
                        <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" role="status" wire:loading>
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
