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
    <div class="row">
        <div class="col-md-2 py-md-0 py-sm-4 ">
            <h3 class="text-color-primary font-weight-bolder text-capitalize mb-3 letter-spacing-08 font-size-32 appear-animation mt-md-2" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Overview</h2>
        </div>
        <div class="col-md-10">
            <p class="text-4 line-height-9">The main goal of WAFRA is to develop a smart sustainable aquaponic system, monitored and controlled through photovoltaic powered remote sensing. The system would contribute to socio-economic growth and create new jobs in remote areas through offering a complete system that starts with training trainers and/or individuals on system operation and proposing a cost benefit analysis to start the system. WAFRA will also strengthen the international cooperation between the partner countries in research and innovation and enhance Euro-Mediterranean research networks in the fields of water, food security and remote sensing. A simplified system for WAFRA is shown in Figure 2.</p>
            <div class="w-100 text-center appear-animation"  data-appear-animation="fadeInLeftShorter">
                <img class="img-intro pt-3" src="{{asset('frontendFiles/img/picture4.png')}}" alt="">
                <p>Figure 2. A simplified view for the system</p>
            </div>
            <p>The lack of arable land area and degradation with water scarcity are the current problems of agricultural production, especially in the most underdeveloped areas and scarce resources, which should re-evaluate the way in which food is produced. Aquaculture in the desert and arid regions must be based on the use of as little freshwater as possible due to the limited rainfall and available freshwater sources. In land-based fish culture, water quality may be controlled by a high rate of both water exchange, which is costly or water treatment and subsequent recirculation, which comes at a price. To offset treatment cost, the integrated aquaculture, and plants offers an ideal solution to reduce nutrient discharge levels, increase profitability, and convert the excretion of fish culture into valuable products. Aquaculture as a business requires a stable run of the cultivation system, maintaining all environmental factors under control.</p> 
            <p>Therefore, we can say that aquaponics presents two profit centers for producers: fish and plants. If fish goes through a low cycle, then we have plant revenue to rely on and vice versa. Aquaponics increases economic efficiency because several key costs, such as nutrients, land, and water are substantially reduced; component operating, and infrastructural costs are shared. Lower resource requirements extend the geographic range of production to areas that rely heavily on food imports. 
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-2 py-md-0 py-sm-4 ">
            <h3 class="text-color-primary font-weight-bolder text-capitalize mb-3 letter-spacing-08 font-size-32 appear-animation mt-md-2" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Tasks</h2>
        </div>
        <div class="col-md-10">
            <p class="text-4 line-height-9">In WAFRA, several tasks must be accomplished for the success of the project.</p>
            <ol type="I">
                <li>
                    <p>The first one is obviously the treatment of water and the removing of the bad smell. This is done for the water out of the fish tank before reaching the plants. This is shown in Figure 3. An automated monitor of all the water parameters is done to ensure the quality of the water used in the plant tanks.</p> 
                    <div class="w-100 text-center appear-animation"  data-appear-animation="fadeInLeftShorter">
                        <img class="img-intro pt-3" src="{{asset('frontendFiles/img/picture5.png')}}" alt="">
                        <p>Figure 3. The need for water treatment</p>
                    </div>
                </li>
                <li>
                    <p>
                        To carefully monitor and control the dosing of nutrients into the growth media, biomimetic polymer sensors array based on molecular imprinting (MIP) are to be developed. These could be used in a remote monitoring system to quickly and selectively detect the concentration of both in-filed organoleptic substances and nutrients. A schematic of such sensors is shown in Figure 4 (a) and 4 (b).
                    </p>
                    <ul>
                        <li>Biomimetic sensors are based on molecular imprinted polymers (MIPs).</li>
                        <li>Molecular imprinting creates template-shaped cavities in polymer matrices with memory of the template molecules the same merits of “Lock and the Key” theory/paradigm.</li>
                        <li>MIP mimics molecular recognition ability of biological molecules and they are known as “plastic antibodies” in the molecular tailoring store </li>
                        <li>Plastic antibodies for NH4/NO2/NO3 parameters to monitor and control of nutrients in water cycle (e-tongue)</li>
                        <li>Plastic antibodies for some organoleptic gases; NH3/TMA (e-nose).</li>
                        <div class="w-100 text-center appear-animation"  data-appear-animation="fadeInLeftShorter">
                            <img class="img-intro pt-3" src="{{asset('frontendFiles/img/picture6.png')}}" alt="">
                            <p>4(a)</p>
                            <img class="img-intro pt-3" src="{{asset('frontendFiles/img/picture7.png')}}" alt="">
                            <p>4(b)</p>
                            <p>Figure 4. Biomimetic polymer sensors array based on molecular imprinting (MIP)</p>
                        </div>
                    </ul>
                </li>
                <li>
                    <p>
                        A wireless sensor and actuator network (WSAN) technology is suggested to monitor the water quality in this project. WSAN can be defined as a network of devices, denoted as nodes which can sense the environment and communicate the gathered information from monitored field (e.g. an area or volume) via wireless links. WSAN was primarily based on IEEE 802.15.4 but recently low power Wi-Fi and Bluetooth have been gaining popularity. Nodes can contain servos and motors as actuators. A WSAN with distributed nodes allows for automated measurement and control of environmental variables through autonomous or directly controllable sensors and actors. Sensor and actuators communicate and collaborate to perform distributed sensing and acting tasks. Sensors gather information about the physical world, while actuators can make decisions and perform actions that change parameters in their environment. 
                        Supervisory software is necessary at the supervisory computer. Through this software, different data-gathering scenarios can be implemented on a large scale of deployment meanwhile allowing control over different actuator nodes installed in the network. 
                    </p>
                </li>
                <li>
                    <p>
                        In this project, photovoltaic (PV) panels will not be used only for powering nodes but also as a source of energy for the bioremediation process taking place in BMECs. Energy harvested through PVs will be stored on batteries and will be used to power the different system components. Solar energy can be exploited either as concentrated solar power or as direct generation of electricity in PV panels in areas where grid power is inconvenient, unreasonably expensive to connect, or simply unavailable. Even in grid-connected situations, solar power is increasingly being used to feed low-carbon energy into the grid. Integrating PVs into wireless nodes is a common trend, especially for rural deployment where nodes are spatially distributed over a large area of land. Self-powered nodes based on PVs are becoming a common practice in many fields. 
                    </p>
                </li>
            </ol>
            
            
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row py-3 mt-2">
{{-- 
        <div class="col-lg-6 p-0">
            <section class="section section-height-3 bg-color-primary-darken-1 h-100 m-0 border-0">
                <div class="row justify-content-end m-0">
                    <div class="col-half-section col-half-section-right text-color-light">
                        <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation mb-5" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-secondary ml-0 mr-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Reliable Services</p>
                        <h2 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Project Objectives</h2>
                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>Development of a sustainable aquaponic system.</li>
                                <li>Assessment of plant productivity in aquaponic system.</li>
                                <li>On-line monitoring system for water quality and system efficiency.</li>
                                <li>Developing a training module for startups and individual farmers, easy DIY.</li>
                                <li>Building the PV powered platform for remote web-based sensing and actuation .</li>
                                <li>Characterization of the reactor microbiome and identification of the key players.</li>
                                <li>Development of software tools for management and configuration of the targeted platform.</li>
                                <li>Full comprehensive report addressing potential stakeholders i.e., industry, academia, aquaculture owners and decision makers.</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </section>
        </div> --}}
        <div class="section bg-color-primary col-lg-3"></div>
        <div class="col-lg-6 p-0 d-flex justify-content-center">
            <section class="section section-height-3 bg-color-primary h-100 m-0 border-0">
                <div class="row m-0 d-flex justify-content-center">
                    <div class="col-half-section text-color-light ">
                        <p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation mb-5" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-secondary ml-0 mr-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span>Partners</p>

                        <h3 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Egyptian Partners</h3>
                        
                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>Ain shams University (ASU).</li>
                            </ul>
                        </span>
                    </div>
                    <div class="col-half-section text-color-light text-left mt-4">
                        <h3 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation"  data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">Tunisian Partner</h3>
                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>Université Tunis-El Manar.</li>
                            </ul>
                        </span>
                    </div>
                    <div class="col-half-section text-color-light text-left mt-4">
                        <h3 class="text-color-light font-weight-bolder text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation"  data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">European Partners</h3>
                        <span class="opacity-7 d-block">
                            <ul class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <li>University of Girona (UdG), Spain.</li>
                                <li>University of Salerno, Italy.</li>
                                <li>Helmholtz Center for Environmental Research GmbH-UFZ, Germany.</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </section>
        </div>
        <div class="section bg-color-primary col-lg-3"></div>

    </div>
</div>

@endsection