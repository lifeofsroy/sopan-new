<div>
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row mb-xl-3 mb-2">
                    <div class="d-none d-sm-block col-auto">
                        <h4 class="text-info"><strong>Features</strong></h4>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Modified</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($features as $feature)
                            <tr wire:key='{{ $feature->id }}'>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $feature->title }}</td>

                                <td>{{ $feature->subtitle }}</td>

                                <td>
                                    {{ Carbon\Carbon::parse($feature->updated_at)->diffForHumans() }}
                                </td>

                                <td class="table-action text-center">
                                    <a class="text-info mx-2" wire:click.prevent="editFeature({{ $feature->id }})">
                                        <x-feathericon-edit />
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="editFeatureModal" role="dialog" aria-hidden="true" tabindex="-1" wire:ignore.self>
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Slider</h5>
                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <form wire:submit="updateFeature">
                                <input type="hidden" wire:model='feature_id'>

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input class="form-control" type="text" wire:model.blur='title'>
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input class="form-control" type="text" wire:model='slug'>
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subtitle</label>
                                    <textarea class="form-control" wire:model='subtitle' rows="3">
                                    </textarea>
                                    @error('subtitle')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" wire:model='description' rows="3">
                                    </textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="d-flex">
                                    <button class="btn btn-primary" type="submit">Update Feature</button>
                                    <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" role="status" wire:loading>
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('admin-script')
    <script>
        // bootstrap modal
        let editFeatureModal = new bootstrap.Modal(document.querySelector('#editFeatureModal'), {});

        // show edit modal
        document.addEventListener('edited', (e) => {
            editFeatureModal.show();
        });

        // close edit modal
        document.addEventListener('updated', (e) => {
            editFeatureModal.hide();
        });
    </script>
@endpush
