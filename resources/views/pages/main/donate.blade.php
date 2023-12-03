@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Donate Us </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section title="Make Some Donation" link="Donate Us" />

    <!--Donate Now Start-->
    <section class="donate-now">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="donate-now__left">
                        <div class="donate-now__enter-donation">
                            <h3 class="donate-now__title">Enter your donation</h3>
                            <div class="donate-now__enter-donation-input">
                                <select class="selectpicker">
                                    <option>₹</option>
                                    <option>$</option>
                                </select>
                                <input name="donation-money" type="text" value=".00">
                            </div>
                        </div>

                        <div class="donate-now__personal-info-box">
                            <h3 class="donate-now__title">Personal info</h3>
                            <form class="donate-now__personal-info-form" id='showDonateDetail'>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input name="name" type="text" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input name="last-name" type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input name="email" type="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input name="phone" type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input name="Address" type="text" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Country</option>
                                                <option value="1">USA</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button class="thm-btn donate-now__payment-info-btn mt-4" type="submit">Submit Here</button>
                            </form>
                        </div>

                        {{-- <div class="donate-now__payment-info">
                            <h3 class="donate-now__title">Payment info</h3>
                            <form class="donate-now__payment-info-form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input name="number" type="text" placeholder="Card number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input id="datepicker" name="date" type="text" placeholder="MM / YY">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input name="code" type="text" placeholder="Card code ( CVC )">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input name="Billing" type="text" placeholder="Billing address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input name="City" type="text" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Country</option>
                                                <option value="1">USA</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="donate-now__payment-info-btn-box">
                                    <button class="thm-btn donate-now__payment-info-btn" type="submit">Donate
                                        now</button>
                                </div>
                            </form>
                        </div> --}}

                        
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 d-none" id="depositDetail">
                    <div class="donate-now__right">
                        <div class="causes-one__single">
                            <div class="causes-one__content" style="border-radius: 15px;">
                                <h3 class="causes-one__title mb-3"><a href="donation-details.html">Bank Details :</a>
                                </h3>
                                <h5 class="causes-one__text pt-0 pb-1">Name : Jaugram Sopan</h5>
                                <h5 class="causes-one__text pt-0 pb-1">Bank : Bank of India</h5>
                                <h5 class="causes-one__text pt-0 pb-1">Branch : Jaugram Branch</h5>
                                <h5 class="causes-one__text pt-0 pb-1">A/C No. : 420410100012943</h5>
                                <h5 class="causes-one__text pt-0 pb-1">IFSC Code : BKID0004204</h5>
                            </div>
                        </div>

                        <div class="causes-one__single">
                            <div class="causes-one__content" style="border-radius: 15px;">
                                <h3 class="causes-one__title mb-3"><a href="donation-details.html">Cheque or Draft Details :</a>
                                </h3>
                                <h5 class="causes-one__text pt-0 pb-1">Jaugram Sopan</h5>
                                <h5 class="causes-one__text pt-0 pb-1">Village - Badpur </h5>
                                <h5 class="causes-one__text pt-0 pb-1">Post - Jaugram</h5>
                                <h5 class="causes-one__text pt-0 pb-1">District - Purba Bardhaman</h5>
                                <h5 class="causes-one__text pt-0 pb-1">Pin - 713166</h5>
                            </div>
                        </div>

                        <div class="causes-one__single">
                            <div class="causes-one__content" style="border-radius: 15px;">
                                <h3 class="causes-one__title"><a href="donation-details.html">UPI Details :</a>
                                </h3>
                                <p class="causes-one__text pe-3 pb-0" style="line-height: 20px; color:brown">Please verify the details given below before
                                    transaction.</p>
                                <h5 class="causes-one__text">Name : Suman Roy</h5>
                                {{ \QrCode::size(150)->backgroundColor(255, 255, 0)->color(0, 0, 255)->margin(1)->generate('lifeofsroy@pingpay') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donate Now End-->
@endsection

@push('main-script')
    <script>
        let depositDetail = document.querySelector('#depositDetail');
        let donateDetailForm = document.querySelector('#showDonateDetail');

        donateDetailForm.addEventListener('submit', (e)=>{
            e.preventDefault();
            depositDetail.classList.remove('d-none');
        })
    </script>
@endpush