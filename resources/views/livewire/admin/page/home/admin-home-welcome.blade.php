<div>
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header">
                <div class="row mb-xl-3 mb-2">
                    <div class="d-none d-sm-block col-auto">
                        <h4 class="text-info"><strong>Welcome</strong></h4>
                    </div>
                </div>

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
                <form wire:submit="updateWelcome">
                    <div class="mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input class="form-control" id="title" type="text" wire:model='title'>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="subtitle">Subtitle</label>
                        <input class="form-control" id="subtitle" type="text" wire:model="subtitle">
                        @error('subtitle')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="context">Context</label>
                        <input class="form-control" id="context" type="text" wire:model="context">
                        @error('context')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="brand">Brand</label>
                        <input class="form-control" id="brand" type="text" wire:model="brand">
                        @error('brand')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="d-flex">
                                <label class="form-label">Upload Image</label>
                                <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" role="status" wire:loading
                                    wire:target="editImage">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <input class="form-control" type="file" wire:model='editImage'>
                            @error('editImage')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <div class="mt-2">
                                @if ($editImage)
                                    <img src="{{ $editImage->temporaryUrl() }}" width="60px">
                                @else
                                    <img src="{{ asset('storage') }}/{{ $image }}" width="60px">
                                @endif
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="d-flex">
                                <label class="form-label">Upload Logo</label>
                                <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" role="status" wire:loading
                                    wire:target="editLogo">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <input class="form-control" type="file" wire:model='editLogo'>
                            @error('editLogo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <div class="mt-2">
                                @if ($editLogo)
                                    <img src="{{ $editLogo->temporaryUrl() }}" width="60px">
                                @else
                                    <img src="{{ asset('storage') }}/{{ $logo }}" width="60px">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" id="description" wire:model="description" rows="10"></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Update Welcome</button>
                </form>
            </div>
        </div>
    </div>
</div>
