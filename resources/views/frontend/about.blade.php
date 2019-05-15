@extends('layouts.default')

@section('content')

<section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">About Us</h1>
              <p class="bcrumb"><a href="{{ route('frontend.home')}}">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">About Us</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Company History</h2>
              </div>
              <div class="text mb-5">
              <p>This is eventscalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.Through our website you can also view your class timetable</p>
              <p>This is eventscalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.</p>
              <p>This is eventscalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.</p>
              
              </div>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">EventsCalendar Services</h2>
            <p>These are a list of the services eventscalendar provides you</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading">Never miss an event</h3>
                <p>With eventscalendar you can't miss any event within or outside school because we are always efficient to show you events happening</p>
                <p><a href="{{ route('frontend.events')}}" class="more">Go to today event<span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="heading">Broad knowledge of events</h3>
                <p>Eventscalendar brings to your notice events that you don't know its ever happening.</p>
                <p><a href="{{ route('frontend.events')}}" class="more">See events<span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading">Check your class timetable</h3>
                <p>Eventscalendar provides you the service of checking your class timetable online.It's always updated and no mistakes</p>
                <p><a href="{{ route('frontend.contact')}}" class="more">Check your timetable <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading">Get a chance to meet people</h3>
                <p>With our blog page you can chat and get to meet someone you go to an event with</p>
                <p><a href="{{ route('frontend.blog')}}" class="more">Go to blog <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Why Choose Us</h2>
            <p>This is eventscalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.</p>            
          </div>
        </div>
      <div class="block-3 d-md-flex pt-5">
        <div class="image" style="background-image: url('images/img_1.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">EventsCalendar</h4>
          <h2 class="heading">Excellent Services</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex">
        <div class="image order-2" style="background-image: url('images/img_2.jpg'); "></div>
        <div class="text order-1">
          <h4 class="subheading">EventsCalendar</h4>
          <h2 class="heading">Outstanding Facilities</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex">
        <div class="image" style="background-image: url('images/img_3.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">EventsCalendar</h4>
          <h2 class="heading">Efficiency</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
    </div>


    <div class="site-section element-animate">
      <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center section-heading">
              <h2 class="text-primary heading">Frequently Ask Questions</h2>
              <p>This is for frequently asked questions</p>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="accordion block-8" id="accordion">
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
              <p>This is eventscalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->
              
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseTwo">How will this website benefit me?<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
              <p>This is eventscalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="true" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
              <p>Yes you need to fucking register so you enjoy our fucking services</p>                   
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="true" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
              <p>You can call us on our hotlines our email us </p>                   
                  </div>
                </div>
              </div> <!-- .accordion-item -->

            </div>
          </div>
        </div>
      </div>
    </div>
    
@stop	
