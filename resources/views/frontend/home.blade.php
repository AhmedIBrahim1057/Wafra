@extends('layouts.app')

@section('head')
 <style>
     @media (min-width: 1200px){
        .custom-cards .cards-container.box-shadow-1:before {
            width: 100% !important;
            height: 99% !important;
        }
    }
 </style>   
@endsection

@section('content')
<div class="slider-container bg-color-grey rev_slider_wrapper p-relative overflow-hidden custom-slider-container" style="height: 991px;">
    <div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8" style="height: 991px;">
        <ul>
            <li data-transition="fade">
                <img src="{{asset('frontendFiles/img/place-holder.jpg')}}"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat"
                    data-kenburns="on" 
                    data-duration="20000" 
                    data-ease="Linear.easeNone" 
                    data-scalestart="110" 
                    data-scaleend="100" 
                    data-offsetstart="250 100" 
                    class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="{{asset('frontendFiles/img/place-holder.jpg')}}"  
                    alt=""
                    data-bgposition="center center" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat"
                    data-kenburns="on" 
                    data-duration="20000" 
                    data-ease="Linear.easeNone" 
                    data-scalestart="110" 
                    data-scaleend="100" 
                    data-offsetstart="-250 100" 
                    class="rev-slidebg">
            </li>
        </ul>
    </div>
</div>

<section class="bg-color-light p-relative z-index-2">
    <div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
        <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
            <div class="col-21 bg-light shadow-none p-5">
                <h2 class="text-color-primary font-weight-bolder text-capitalize mt-2 mb-4 text-center">Project Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in risus augue. Nam quis mauris quis erat euismod vulputate eu ut tellus. Nulla facilisi. Pellentesque vehicula tincidunt justo at ullamcorper. Fusce imperdiet mi ac porttitor faucibus. Morbi sit amet auctor ligula, vitae pharetra mi. Vestibulum finibus ipsum in dolor pretium cursus. Suspendisse laoreet enim leo, ac laoreet metus porta nec. Maecenas eu consequat ex. In a laoreet justo. Aliquam efficitur justo ut arcu tempor, sed interdum magna mattis. Curabitur in odio et nulla fermentum aliquet. Duis risus tortor, laoreet in neque at, sodales pharetra mi.</p>
            </div>
        </div>
    </div>
</section>

<section class="our-services d-flex p-relative z-index-1 bg-color-light" data-plugin-lazyload data-plugin-options="{'threshold': 300, 'effect':'fadeIn'}" data-original="{{asset('frontendFiles/img/place-holder.jpg')}}" style="background: fixed">
    <div class="col-img-our-services p-absolute overflow-hidden w-50 h-100"></div>
    <div class="container">
        <div class="row justify-content-end align-items-center h-100">
            <div class="col-lg-5 position-relative bg-color-light z-index-1 col-our-services-text">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>our services</p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Project Objectives</h2>
                <ul class="appear-animation" data-appear-animation="fadeInLeftShorter">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Nullam sed magna sit amet erat dapibus tempus ut ac urna.</li>
                    <li>Pellentesque vestibulum lacus eu massa tristique elementum.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Nullam sed magna sit amet erat dapibus tempus ut ac urna.</li>
                    <li>Pellentesque vestibulum lacus eu massa tristique elementum.</li>
                </ul>
                <a href="/about-project" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">FIND OUT MORE</a>
            </div>	
        </div>
    </div>
</section>

<section class="are-you-looking-for bg-color-secondary mt-3 py-5">
    <div class="container py-5">
    </div>
</section>

@endsection
