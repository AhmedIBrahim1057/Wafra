@extends('layouts.app')

@section('head')
 <style>
     @media (min-width: 1200px){
        .custom-cards .cards-container.box-shadow-1:before {
            width: 100% !important;
            height: 99% !important;
        }
    }
    
    .real-word-stories .custom-testimonial-container .custom-testimonial .custom-testimonial-right img {
        max-width: 200px;
        height: auto;
        padding-bottom: 20px
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

<!----------------------- PROJECT TITLE ----------------------->

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

<!----------------------- PROJECT OBJ ----------------------->

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

<!----------------------- SPONSER ----------------------->

<section class="coaching-consulting d-flex p-relative bg-color-light pt-3 pb-3 pt-lg-5 pb-lg-4">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-6 pt-2">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Sponser </p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Co-funded by</h2>
                <p class="mb-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;"><strong>Sponser Name:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <div class="card border-radius-0 box-shadow-1 border-0 mt-4 mt-lg-0 ml-lg-3 p-3 mb-3 mb-lg-0">
                    <img src="{{asset('frontendFiles/img/place-holder.jpg')}}" class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------- EVENTS ----------------------->

<section class="real-word-stories bg-color-quaternary overflow-hidden p-relative pb-4">
    <div class="container py-xl-5">
        <div class="row justify-content-between align-items-center pt-5 py-xl-5 mt-3">
            <div class="col-xl-6 mb-5 pb-5 mb-xl-0 pb-xl-0">
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                    <div class="owl-carousel owl-theme m-0" data-plugin-options="{'items': 1, 'autoplay': false, 'animateOut': 'fadeOut', 'autoHeight': true}">
                        <div class="custom-testimonial-container bg-color-light">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontendFiles/img/place-holder.jpg')}}" alt="event_image">
                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bolder text-left">Event Name</h4>
                                    <p class="mb-0 text-left text-3 pb-3">event host institution</p>
                                    <p class="mb-0 text-left text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bolder text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                                <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">
                                    <img src="img/avatars/avatar-3.jpg" class="img-fluid rounded-circle m-0 mr-3" alt="">
                                    <p><span class="text-uppercase text-left">event date</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="custom-testimonial-container bg-color-light">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontendFiles/img/place-holder.jpg')}}" alt="event_image">
                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bolder text-left">Event Name</h4>
                                    <p class="mb-0 text-left text-3 pb-3">event host institution</p>
                                    <p class="mb-0 text-left text-3">Fusce nisl arcu, tincidunt sed eros sed, lobortis tincidunt risus. Sed sagittis, nulla vel pellentesque placerat.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bolder text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                                <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">
                                    <img src="img/avatars/avatar-3.jpg" class="img-fluid rounded-circle m-0 mr-3" alt="">
                                    <p><span class="text-uppercase text-left">event date</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="custom-testimonial-container bg-color-light">
                            <div class="testimonial custom-testimonial testimonial-style-2 mb-0">
                                <div class="d-none d-sm-flex align-items-center justify-content-center custom-testimonial-right bg-color-light p-absolute z-index-1">
                                    <img src="{{asset('frontendFiles/img/place-holder.jpg')}}" alt="event_image">
                                    <a href="demo-business-consulting-2-cases-detail.html" class="d-block btn btn-primary custom-button-testimonial-right text-center text-uppercase text-decoration-none border-0 p-0 font-weight-semibold p-absolute">read more</a>
                                </div>
                                <blockquote class="px-0 pb-5">
                                    <h4 class="text-color-secondary font-weight-bolder text-left">Event Name</h4>
                                    <p class="mb-0 text-left text-3 pb-3">event host institution</p>
                                    <p class="mb-0 text-left text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.<a href="demo-business-consulting-2-cases-detail.html" class="font-weight-bolder text-uppercase text-decoration-none d-block d-sm-none mt-3">read more +</a></p>
                                </blockquote>
                                <div class="testimonial-arrow-down"></div>
                                <div class="testimonial-author d-flex flex-row justify-content-start align-items-center">
                                    <img src="img/avatars/avatar-3.jpg" class="img-fluid rounded-circle m-0 mr-3" alt="">
                                    <p><span class="text-uppercase text-left">event date</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 mb-5 mb-xl-0">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300"><span class="line-pre-title bg-color-primary"></span>Meetings, Trainings & Dissemination</p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Events</h2>
                <p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat.</p>
            </div>
        </div>
    </div>
</section>


<!----------------------- PARTNERS ----------------------->


<section class="bg-color-light mt-3 py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Egyption & European</p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Partners</h2>
            </div>
        </div>
    </div>
</section>

@endsection
