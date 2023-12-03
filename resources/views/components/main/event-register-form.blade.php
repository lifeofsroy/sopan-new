<div class="modal fade" id="exampleModal" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register For {{ $upcoming->title }}</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="become-volunteer-page__form">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="become-volunteer-page__input">
                                <input name="name" type="text" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="become-volunteer-page__input">
                                <input name="email" type="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="become-volunteer-page__input">
                                <input name="phone" type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="become-volunteer-page__input">
                                <input name="Address" type="text" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="become-volunteer-page__input">
                                <input id="datepicker" name="date" type="text" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="become-volunteer-page__input">
                                <input name="Occupation" type="text" placeholder="Occupation">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="become-volunteer-page__input become-volunteer__message-box">
                                <textarea name="message" placeholder="Write a Comment"></textarea>
                            </div>
                            <div class="become-volunteer-page__btn-box">
                                <button class="thm-btn contact-form__btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('main-script')
    <script>
        let eventModalBtn = document.querySelector('#eventModalBtn');
        let myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
            keyboard: false,
            backdrop: false
        })

        eventModalBtn.addEventListener('click', (e) => {
            e.preventDefault();
            myModal.show();
        })
    </script>
@endpush
