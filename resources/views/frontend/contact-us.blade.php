@extends('layouts.app')

@section('content')
<section class="page-header page-header-modern custom-page-header bg-color-quaternary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-9 text-color-secondary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">Contact Us</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="cards custom-cards h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
        <div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
            <div class="col p-5">
                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Get in Touch</p>
                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-2 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Send Us a Message</h2>
                <p class="mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat.</p>
    
                <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
    
                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input placeholder="Subject" type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea placeholder="Your Message..." maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection