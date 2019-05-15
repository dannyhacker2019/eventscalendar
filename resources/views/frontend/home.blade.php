@extends('layouts.default')

@section('content')

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Find Events that are happening near you in UNN</h2>
                <form action="{{ route('frontend.events')}}"  class="d-block d-lg-flex mb-4">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Keyword search..."></div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Event</option>
                        <option value="">Today Event</option>
                        <option value="">Tomorrow Event</option>
                        <option value="">Next tomorrow Event</option>
                        <option value="">Next week Event</option>
                      
                      </select>
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"></div>
                      <select name="" id="" class="form-control">
                        
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Search">  
                </form>
                <p class="text-center mb-5">We tell and remind you  you of events coming up in UNN.Register with us to enjoy more of our services </p>
                <p class="text-center"><a href="{{ route('register')}}" class="btn py-3 px-5">Register Now</a></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Welcome to EventsCalendar</h2>
              </div>
              <div class="text mb-5">
              <p>This is EventsCalendar the webiste that brings your notice to events that are happening around in the University of Nigeria Nsukka. You can view past, present or upcoming events.Through our website you can also view your class timetable</p>
              </div>
              <p><a href="{{ route('frontend.about')}}" class="btn btn-primary reverse py-2 px-4">Read More</a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="images/img_2_b.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2>Education is life when you know what is happening around you</h2>
              </div>
              <div class="text mb-5">
                <p>This is an avenue for everyone: just log on to our website register with us and begin to find out events that are taking place or the ones that will take place in the future</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-student"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="2921">0</strong>
                    <span>Students joined with us</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="51">0</strong>
                    <span>Events</span>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-books"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="3902">0</strong>
                    <span>Commendations</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="1921">0</strong>
                    <span>Likes</span>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Popular Events that we viewed</h2>
            <p>These are past events that EventsCalendar viewed on the webiste.</p>
            <p><a href="{{ route('register')}}" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Register Now</a></p>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading">First year orientation</h2>
                  <p class="mb-4">The first year orientation that are held at the Ekpo Convocational Area.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading">Male and Female Hostel bonfires</h2>
                  <p class="mb-4">Male hostels like Eni-Njoku and ALvan-Ikoku and female hostels like Nkrumah,Eyo-Ita,Bello bonfire that held at their respectives hostels </p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                     
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading">First year Matriculation</h2>
                <p class="mb-4">The first year matriculation that held at the different faculties of the great Institution.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading">Catholic Student Concert</h2>
                <p class="mb-4">The catholic students choir concert that held at the Princess Alexandra Auditorium(PAA).</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading">SUG first years Bonfire</h2>
                  <p class="mb-4">The special bonfire organised by UNN SUG for first years at Freedom Square</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/indexdd.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading">SUG first years Orientation</h2>
                  <p class="mb-4">The first year orientation that are held at the Ekpo Convocational Area.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading">First year Matriculation</h2>
                <p class="mb-4">The first year matriculation that held at the different faculties of the great Institution..</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading">Male and Female Hostel bonfires</h2>
                <p class="mb-4">Male hostels like Eni-Njoku and ALvan-Ikoku and female hostels like Nkrumah,Eyo-Ita,Bello bonfire that held at their respectives hostels.</p>
                <div class="meta d-flex align-items-center">
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
       
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Blog</h2>
            <p>Our Blog. You can chat with other students and talk about past, present or future events.You can chat so you pair with someone to go with to an event</p>
          </div>
        </div>
        <div class="row element-animate">
          
          <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">

            <div class="block-20 ">
              <figure>
                <a href="#"><img src="images/img_1.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12 col-lg-6">
            
            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_1.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_2.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_3.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <a href="#"><img src="images/img_3.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  

          </div>
        </div>
      </div>
    </div>
  
@stop