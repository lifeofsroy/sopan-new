<div>
    <div class="container-fluid p-0">

        <div class="row mb-xl-3 mb-2">
            <div class="d-none d-sm-block col-auto">
                <h3><strong>App</strong> Setting</h3>
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
                <form wire:submit="updateSetting">
                    <div class="mb-3">
                        <label class="form-label" for="account_id">Account Id</label>
                        <input class="form-control" id="account_id" type="text" wire:model='account_id'>
                        @error('account_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="client_key">Client Key</label>
                        <input class="form-control" id="client_key" type="text" wire:model="client_key">
                        @error('client_key')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="client_secret">Client Secret</label>
                        <input class="form-control" id="client_secret" type="text" wire:model="client_secret">
                        @error('client_secret')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Update Setting</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('teacher-script')
    <script>
        let sessionMessage = document.querySelector('#sessionMessage');
        document.addEventListener('session-message', () => {
            setTimeout(() => {
                sessionMessage.style.display = 'none';
            }, 2000);
        });
    </script>
@endpush
