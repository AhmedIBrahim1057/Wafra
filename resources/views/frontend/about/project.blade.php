@extends('../layouts.app')

@section('content')
<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">About &nbsp; Project</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <li><a href="/">Home</a></li>
                    <li class="active">About</li>
                    <li class="active">Project</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-2 py-md-0 py-sm-4">
            <h3 class="text-color-primary font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Overview</h2>
        </div>
        <div class="col-md-10">
            <p class="text-4 line-height-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row py-3 mt-2">

        <div class="col-lg-6 p-0">
            <section class="section section-height-3 bg-color-primary-darken-1 h-100 m-0 border-0">
                <div class="row justify-content-end m-0">
                    <div class="col-half-section col-half-section-right text-color-light">
                        <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation mb-5" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-secondary ml-0 mr-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Reliable Services</p>
                        <h2 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Project Objectives</h2>
                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>consectetur adipiscing elit.</li>
                                <li>Cras a elit sit amet leo accumsan volutpat.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>consectetur adipiscing elit.</li>
                                <li>Cras a elit sit amet leo accumsan volutpat.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Cras a elit sit amet leo accumsan volutpat.</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-6 p-0">
            <section class="section section-height-3 bg-color-primary h-100 m-0 border-0">
                <div class="row m-0">
                    <div class="col-half-section text-color-light ">
                        <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation mb-5" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100">Partners<span class="line-pre-title mr-0 ml-3 bg-color-secondary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200"></span></p>

                        <h3 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Egyptian Partners</h3>

                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>consectetur adipiscing elit.</li>
                                <li>Cras a elit sit amet leo accumsan volutpat.</li>
                            </ul>
                        </span>
                    </div>
                    <div class="col-half-section text-color-light text-left mt-4">
                        <h3 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation"  data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">European Partners</h3>
                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>consectetur adipiscing elit.</li>
                                <li>Cras a elit sit amet leo accumsan volutpat.</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>

@endsection