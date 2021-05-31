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

    .img-intro {
        width: 100%;
        margin: 0 auto;
    }

    @media (min-width: 768px){
        .img-intro {
            width: 60%;
            margin: 0 auto;
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

<!----------------------- PROJECT TITLE ----------------------->

<section class="bg-color-light p-relative z-index-2">
    <div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
        <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
            <div class="col-21 bg-light shadow-none p-5">
                <h3 class="text-color-primary font-weight-bolder text-capitalize mt-2 mb-4 text-center" style="line-height: 40px">Wireless Aquaponic Farming in Remote Areas: A smart adaptive socio-economic solution [WAFRA]</h3>
                <p class="text-justify">WAFRA is an Arabic word that means abundance. This word reflects the aim of our project which is to develop a smart aquaponic system in remote areas to supply plant and fish in abundance. An aquaponic system could be defined as an integration of a hydroponic system with an aquaculture through the efficient use of natural resources. This integrated farming technology limits the water exchange and reduces the environmental impact of aquacultures and conventional farming by converting the waste excreted by fish into valuable nutrients for plants within a confined water capacity. Nile Tilapia, a very common fish species and lettuce, a widespread leafy vegetable are the subjects of this project. In recent years, aquaponics has turned from small individual scale to marketable scale.  However, monitoring such a system in remote areas requires an appropriate strategy to control the different operating parameters. The use of remote sensing presents an "around the clock monitor" for the critical parameters such as pH, temperature, dissolved oxygen (DO), nitrates, nitrites, ammonia and water level in the bioremediation tanks. Necessary actions are taken whenever a parameter is diverted from its predetermined safe level. Photovoltaic powered wireless platforms offer a renewable and sustainable energy system to allow functioning in remote areas where the national electricity grid is not available. This application will be user friendly offering easy access to end users whether owners or personnel. The complete system overview is shown in Figure 1.</p>
                <div class="w-100 text-center">
                    <img class="img-intro pt-3" src="{{asset('frontendFiles/img/picture1.png')}}" alt="">
                    <p>Figure 1. The system overview of WAFRA</p>
                </div>
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
                    <li>Development of a sustainable aquaponic system.</li>
                    <li>Assessment of plant productivity in aquaponic system.</li>
                    <li>On-line monitoring system for water quality and system efficiency.</li>
                    <li>Developing a training module for startups and individual farmers, easy DIY.</li>
                    <li>Building the PV powered platform for remote web-based sensing and actuation .</li>
                    <li>Characterization of the reactor microbiome and identification of the key players.</li>
                    <li>Development of software tools for management and configuration of the targeted platform.</li>
                    <li>Full comprehensive report addressing potential stakeholders i.e., industry, academia, aquaculture owners and decision makers.</li>
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
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Sponsor </p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Funding Agencies</h2>
                {{-- <p class="mb-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;"><strong>STDF :</strong> Science, Technology & Innovation Funding Authority. (STDF) has stimulated the Egyptian scientific society by funding distinguished research papers and establishing scientific partnerships with scientists from many advanced countries in order to keep track of quickly advancing technology, and be open to different societies, as well as, new economic unions, compete on the international arena, link scientific research to technological development and cooperate with civil society institutions to activate their role in the integrated scientific research system.</p>
                <p class="mb-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;"><strong>ERANETMED :</strong> (ERA.NET with the Mediterranean Partner Countries) is a European Union (EU) project aimed at promoting a unified European approach to collaborating with the Mediterranean in the field of science and technology research for innovation and sustainable development. </p> --}}
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center">
                <div class="row">
                   <div class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center">
                    <div class="card border-radius-0 box-shadow-1 border-0 mt-4 ml-lg-3 p-3 mb-3 mb-lg-0" style="width: fit-content; margin: 0 auto !important; background-color: #eef0f4;">
                        <img src="{{asset('frontendFiles/img/sponsor/picture2.jpg')}}" class="img-fluid border-radius-0 w-100" alt="">
                    </div>
                   </div>

                   <div class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center">
                    <div class="card border-radius-0 box-shadow-1 border-0 mt-4 ml-lg-3 p-3 mb-3 mb-lg-0" style="width: fit-content; margin: 0 auto !important; background-color: #eef0f4;">
                        <img src="{{asset('frontendFiles/img/sponsor/picture3.png')}}" class="img-fluid border-radius-0 w-100" alt="">
                    </div>
                   </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!----------------------- EVENTS ----------------------->
{{-- 
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
</section> --}}


<!----------------------- PARTNERS ----------------------->


<section class="bg-color-light pt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Egyptian & European</p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Partners</h2>
            </div>
        </div>
    </div>
</section>

<section class="partners" style="padding: 0px 0 100px 0 !important">

    <div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <div class="row" style="text-align: center;">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center">
                        <img
                        onclick="window.open('http://www.asu.edu.eg/')" src="/frontendFiles/img/partners/picture1.png"
                        class="img-responsive" alt=""
                        style="width: 150px; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('https://eng.asu.edu.eg/')" src="/frontendFiles/img/partners/picture2.png"
                        class="img-responsive" alt=""
                        style="width: 130px; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('http://www.utm.rnu.tn/visirech/Fr/utm/fst/lmba/')" src="/frontendFiles/img/partners/picture3.png"
                        class="img-responsive" alt=""
                        style="width: 130px; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('http://www.issbat.rnu.tn/')" src="/frontendFiles/img/partners/picture4.png"
                        class="img-responsive" alt=""
                        style="width: 150px !important; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('http://www.utm.rnu.tn/utm/fr/')" src="/frontendFiles/img/partners/picture5.png"
                        class="img-responsive" alt=""
                        style="width: 115px !important; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('http://www.lequia.udg.edu/')" src="/frontendFiles/img/partners/picture6.png"
                        class="img-responsive" alt=""
                        style="width: 130px height: auto; margin: 10px; cursor: pointer;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-4 offset-xl-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('https://www.udg.edu/en/')" src="/frontendFiles/img/partners/picture7.png"
                        class="img-responsive" alt=""
                        style="width: 130px; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('http://www.euni.de/tools/jobpopup.php?lang=en&option=showJobs&jobid=63753&jobtyp=9&university=University+of+Salerno&country=IT&sid=2889')" src="/frontendFiles/img/partners/picture8.png"
                        class="img-responsive" alt=""
                        style="width: 130px; height: auto; margin: 10px; cursor: pointer;">
                    </div>

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center"><img
                        onclick="window.open('https://www.ufz.de/index.php?en=34257')" src="/frontendFiles/img/partners/picture9.png"
                        class="img-responsive" alt=""
                        style="width: 250px; height: auto; margin: 10px; cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
