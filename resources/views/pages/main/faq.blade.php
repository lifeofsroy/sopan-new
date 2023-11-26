@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | FAQs </title>
@endpush

@section('main-section')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/main/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Pages</li>
                </ul>
                <h2>FAQs</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Feature Four Start-->
    <section class="feature-four">
        <div class="feature-four-shape" style="background-image: url({{ asset('assets/main/images/shapes/feature-four-shape-1.png') }});"></div>
        <div class="container">
            <div class="feature-four__inner">
                <div class="row">
                    <!--Feature Four Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-four__single">
                            <div class="feature-four__icon">
                                <span class="icon-bonus"></span>
                            </div>
                            <div class="feature-four__content">
                                <h3 class="feature-four__title">Payments <br> & donations</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature Four Single End-->
                    <!--Feature Four Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-four__single">
                            <div class="feature-four__icon">
                                <span class="icon-fingerprint-scan"></span>
                            </div>
                            <div class="feature-four__content">
                                <h3 class="feature-four__title">Taxes & <br> legal issues</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature Four Single End-->
                    <!--Feature Four Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-four__single">
                            <div class="feature-four__icon">
                                <span class="icon-account"></span>
                            </div>
                            <div class="feature-four__content">
                                <h3 class="feature-four__title">Charity <br> account help</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature Four Single End-->
                </div>
                <div class="feature-four__search-box">
                    <form class="feature-four__form">
                        <div class="feature-four__form-input">
                            <input type="search" placeholder="Search here anything...">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Feature Four End-->

    <!--FAQ Page Start-->
    <section class="faq-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Do you need help?</span>
                <h2 class="section-title__title">We answers to all your <br> daily questions</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Nulla eu purus scelerisque, dignissim diam.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Quisque non diam porta, ullamcorper dolor sit amet.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How can I make a change to my application?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Sed mattis neque sed commodo efficitur.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Nulla eu purus scelerisque, dignissim diam.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Quisque non diam porta, ullamcorper dolor sit amet.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How can I make a change to my application?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Sed mattis neque sed commodo efficitur.</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ Page End-->
@endsection
