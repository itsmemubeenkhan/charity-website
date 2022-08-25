@extends('layout.homemaster')
@section('content')
@if ( Auth::user()->f_name == null)
<script>window.location = "/";</script>
@endif

<section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                        aria-expanded="true"><i>Step #01</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                        aria-expanded="false"><i>Step #02</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><i>Step
                                            #03</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><i>Step
                                            #04</i></a>
                                </li>
                            </ul>
                        </div>

                        <form role="form" action="{{ route('save_donation') }}" method="POST" class="login-box" enctype="multipart/form-data">
						@csrf
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div></div>
                                    <div class="col-12 col-lg-9">
                                        <h3>Write Your Donation Title</h3>
                                        <p>
                                            Placeholder is simply dummy text of the printing and
                                            typesetting industry Placeholder is simply dummy text of
                                            the printing and typesetting industry Placeholder is
                                            simply dummy text of the printing.
                                        </p>
                                    </div>

                                    <div class="wizard-title mt-5">
                                        <h6>Donation title</h6>
										<input type="text" name="user_id" hidden value="{{ Auth::user()->id }}">
                                        <input type="text" name="d_title" id="" placeholder="Donation Title" />
										<h6>Donation Amount</h6>
                                        <input type="number" name="d_amount" id="" placeholder="Donation Amount" />
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                        aria-expanded="false"><button type="button" class="default-btn next-step">
                                                Continue
                                            </button></a>
                                            
                                        </li>
                                    </ul>
                                    <div class="mt-5">
                                        <div class="wizard-tips">
                                            <h5>Tips</h5>
                                            <h6>Keep it short and to the point</h6>
                                            <p>
                                                Example: “Buy organic, free-range eggs for your
                                                restaurants.”
                                            </p>
                                            <h6>Focus on the solution</h6>
                                            <p>
                                                Example: "Raise the minimum wage in Manchester to £15
                                                an
                                            </p>
                                            <h6>Communicate urgency</h6>
                                            <p>
                                                Example: "Approve life-saving medication for my
                                                daughter's insurance before it’s too late."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="col-12 col-lg-9">
                                        <h3>Tell your story</h3>
                                        <p>
                                            Placeholder is simply dummy text of the printing and
                                            typesetting industry Placeholder is simply dummy text of
                                            the printing and typesetting industry Placeholder is
                                            simply dummy text of the printing.
                                        </p>
                                    </div>

                                    <div class="wizard-editor">
                                        <textarea name="d_desc" id="summernote" style="width:100%;"></textarea>
                                    </div>

                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="default-btn prev-step">
                                                Back
                                            </button>
                                        </li>                                        
                                        <li>
                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><button type="button" class="default-btn next-step">
                                                    Continue
                                                </button></a>
                                        </li>
                                    </ul>

                                    <div class="mt-5">
                                        <div class="wizard-tips">
                                            <h5>Tips</h5>
                                            <h6>Keep it short and to the point</h6>
                                            <p>
                                                Example: “Buy organic, free-range eggs for your
                                                restaurants.”
                                            </p>
                                            <h6>Focus on the solution</h6>
                                            <p>
                                                Example: "Raise the minimum wage in Manchester to £15
                                                an
                                            </p>
                                            <h6>Communicate urgency</h6>
                                            <p>
                                                Example: "Approve life-saving medication for my
                                                daughter's insurance before it’s too late."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="col-12 col-lg-9">
                                        <h3>Add a photo</h3>
                                        <p>
                                            Placeholder is simply dummy text of the printing and
                                            typesetting industry Placeholder is simply dummy text of
                                            the printing and typesetting industry Placeholder is
                                            simply dummy text of the printing.
                                        </p>
                                    </div>

                                    <div class="wizard-uploadPhoto">
                                        <label for="uploadPhoto"><i class="bx bx-image-add"></i>
                                            <span class="d-block">
                                                <button id="upload" class="upload-btn" type="button">
                                                    <svg class="upload-btn-border" xmlns="http://www.w3.org/2000/svg"
                                                        width="120px" height="50px" viewBox="0 0 120 50"
                                                        role="presentation">
                                                        <rect x="-2" y="-2" width="124" height="54" rx="27" ry="27"
                                                            fill="none" stroke="#000" stroke-width="4"
                                                            stroke-dasharray="0 310" opacity="0" />
                                                    </svg>
                                                    <span class="upload-btn-text">Upload</span>
                                            </span>
                                        </label>
                                        <input type="file" name="image" id="uploadPhoto" hidden />
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li>
                                            <button type="button" class="default-btn prev-step">
                                                Back
                                            </button>
                                        </li>                            
                                        <li>
                                            <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab"> <button type="button" class="default-btn next-step">
                                                Continue
                                            </button></a>
                                           
                                        </li>
                                    </ul>

                                    <div class="mt-5">
                                        <div class="wizard-tips">
                                            <h5>Tips</h5>
                                            <h6>Keep it short and to the point</h6>
                                            <p>
                                                Example: “Buy organic, free-range eggs for your
                                                restaurants.”
                                            </p>
                                            <h6>Focus on the solution</h6>
                                            <p>
                                                Example: "Raise the minimum wage in Manchester to £15
                                                an
                                            </p>
                                            <h6>Communicate urgency</h6>
                                            <p>
                                                Example: "Approve life-saving medication for my
                                                daughter's insurance before it’s too late."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="my-selft__content">
                                        <h3 class="mt-2">My-Self</h3>
                                        <div class="Published-img">
                                            <img src="{{ asset('assets/images/Published-img.jpg') }}" alt="image" class="imgFluid" />
                                            <h5 class="mt-3">Donation Title Goes Here</h5>
                                            <p>
                                                Placeholder is simply dummy text of the printing and
                                                typesetting industry Placeholder is simply dummy text of
                                                the printing and typesetting industry Placeholder is
                                                simply dummy text of the printing Placeholder is simply
                                                dummy text of the printing and typesetting industry
                                                Placeholder is simply dummy text of the printing and
                                                typesetting industry Placeholder is simply dummy text of
                                                the printing Placeholder is simply dummy text of the
                                                printing and typesetting industry Placeholder is simply
                                                dummy text of the printing and typesetting industry
                                                Placeholder is simply dummy text of the printing
                                                Placeholder is simply dummy text of the printing and
                                                typesetting industry Placeholder is simply dummy text of
                                                the printing and typesetting industry Placeholder is
                                                simply dummy text of the printing.
                                            </p>
                                            <ul class="list-inline pull-left">                                            
                                                <li>
                                                    <button type="submit" class="default-btn next-step mb-3">
                                                        Published
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection