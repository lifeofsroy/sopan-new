<div>
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row mb-xl-3 mb-2">
                    <div class="d-none d-sm-block col-auto">
                        <h4 class="text-info"><strong>Sliders</strong></h4>
                    </div>

                    <div class="mt-n1 col-auto ms-auto text-end">
                        <button class="btn btn-primary" type="button" wire:click='resetInput' onclick="addFaqBtn()">Add New Slider</button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Activate</th>
                            <th>Modified</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr wire:key='{{ $slider->id }}'>

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img class="me-2" src="{{ '/storage' }}/{{ $slider->image }}" alt="{{ $slider->title }}" width="80"
                                        height="40" />
                                </td>

                                <td>{{ $slider->title }}</td>

                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox"
                                            {{ $slider->is_active == 1 ? 'checked' : '' }} wire:change='changeActive({{ $slider->id }})'>
                                    </div>
                                </td>

                                <td>
                                    {{ Carbon\Carbon::parse($slider->updated_at)->diffForHumans() }}
                                </td>

                                <td class="table-action text-center">
                                    <a class="text-info mx-2" wire:click.prevent="editSlider({{ $slider->id }})">
                                        <x-feathericon-edit />
                                    </a>
                                    <a class="text-danger mx-2" wire:confirm='Are You Sure?' wire:click.prevent="deleteSlider({{ $slider->id }})">
                                        <x-feathericon-trash-2 />
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $sliders->links() }}
            </div>

            <div class="modal fade" id="addModal" role="dialog" aria-hidden="true" tabindex="-1" wire:ignore.self>
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Slider</h5>
                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <form wire:submit="createSlider">
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

                                    <div class="d-flex">
                                        <label class="form-label">Upload Image</label>
                                        <div class="spinner-border spinner-border-sm text-danger me-2 ms-2 mt-2" role="status" wire:loading
                                            wire:target="addImage">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <input class="form-control" type="file" wire:model='addImage'>
                                    @error('addImage')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    <div class="mt-2">
                                        @if ($addImage)
                                            <img src="{{ $addImage->temporaryUrl() }}" width="80px">
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" wire:model='description' rows="3">
                                    </textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" wire:model='is_active'>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">
                                            Activate
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Create Slider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editModal" role="dialog" aria-hidden="true" tabindex="-1" wire:ignore.self>
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Slider</h5>
                            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <form wire:submit="updateSlider">
                                <input type="hidden" wire:model='slider_id'>

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
                                            <img src="{{ $editImage->temporaryUrl() }}" width="100px">
                                        @else
                                            <img src="{{ asset('storage') }}/{{ $image }}" width="100px">
                                        @endif
                                    </div>
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
                                    <button class="btn btn-primary" type="submit">Update FAQ</button>
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
        let addModal = new bootstrap.Modal(document.querySelector('#addModal'), {});
        let editModal = new bootstrap.Modal(document.querySelector('#editModal'), {});

        // show add modal
        function addFaqBtn() {
            addModal.show();
        }

        // close add modal
        document.addEventListener('created', (e) => {
            addModal.hide();
        });

        // show edit modal
        document.addEventListener('edited', (e) => {
            editModal.show();
        });

        // close edit modal
        document.addEventListener('updated', (e) => {
            editModal.hide();
        });
    </script>
@endpush
