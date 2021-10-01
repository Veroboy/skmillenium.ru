@extends('layouts.millenium', ['title' => 'Главная'])

@section('content')
{{-- home --}}
         {{-- background slider --}}
         <div id="home">

            {{-- revolution slider --}}
            <section class="fullwidthbanner-container no-bottom no-top" aria-label="section-slider">
               <div id="revolution-slider">
                  <ul>
                     <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                           {{--  BACKGROUND IMAGE --}}
                        <img src="{{ asset('assets/images-slider/img-slide-1.jpg') }}" alt="" />
                           <div class="tp-caption big-heading sft" data-x="50" data-y="200" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
                              BUILDSTATE CONSTRUCTION
                           </div>
                           <div class="tp-caption sub-heading sft" data-x="50" data-y="270" data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
                              We Build Your Dream
                           </div>

                           <div class="tp-caption sfb" data-x="50" data-y="370" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                              <div class="btn-slider">
                                 <a class="link-class " href="#">More Detail</a>
                              </div>
                           </div>
                     </li>

                     <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                        {{--  BACKGROUND IMAGE --}}
                        <img src="{{ asset('assets/images-slider/img-slide-1.jpg') }}" alt="" />
                           <div class="tp-caption big-heading sft" data-x="50" data-y="200" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
                              BUILDSTATE CONSTRUCTION
                           </div>
                           <div class="tp-caption sub-heading sft" data-x="50" data-y="270" data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
                              We Build Your Dream
                           </div>

                           <div class="tp-caption sfb" data-x="50" data-y="370" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                              <div class="btn-slider">
                                 <a class="link-class " href="#">More Detail</a>
                              </div>
                           </div>
                     </li>

                     <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                        {{--  BACKGROUND IMAGE --}}
                        <img src="{{ asset('assets/images-slider/img-slide-1.jpg') }}" alt="" />
                           <div class="tp-caption big-heading sft" data-x="50" data-y="200" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
                              BUILDSTATE CONSTRUCTION
                           </div>
                           <div class="tp-caption sub-heading sft" data-x="50" data-y="270" data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
                              We Build Your Dream
                           </div>

                           <div class="tp-caption sfb" data-x="50" data-y="370" data-speed="400" data-start="800" data-easing="easeInOutExpo">
                              <div class="btn-slider">
                                 <a class="link-class " href="#">More Detail</a>
                              </div>
                           </div>
                     </li>
                  </ul>
               </div>
            </section>
            {{-- revolution slider end --}}

            {{-- gallery-home --}}
            <div class="bot-home onStep" data-animation="fadeInUp" data-time="300">
               <div class="container">
                  <div class="row">
                     <div id="owl-gal" class="owl-carousel">

                        <div class="item">
                           <div class="gal-home big-img">
                              <a href="{{ asset('assets/img/gallery-home/big/img1.jpg') }}">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img1.jpg') }}">
                                    <div class="overlay">
                                       <h3>FONDATION BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home">
                              <a href="project-detail.html">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img2.jpg') }}">
                                    <div class="overlay">
                                       <h3>POLISHING BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home big-img">
                              <a href="{{ asset('assets/img/gallery-home/big/img3.jpg') }}">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img3.jpg') }}">
                                    <div class="overlay">
                                       <h3>RESTORATION BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home">
                              <a href="project-detail.html">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img4.jpg') }}">
                                    <div class="overlay">
                                       <h3>CONCREATE BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home big-img">
                              <a href="{{ asset('assets/img/gallery-home/big/img1.jpg') }}">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img1.jpg') }}">
                                    <div class="overlay">
                                       <h3>FONDATION BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home">
                              <a href="project-detail.html">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img2.jpg') }}">
                                    <div class="overlay">
                                       <h3>POLISHING BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home big-img">
                              <a href="{{ asset('assets/img/gallery-home/big/img3.jpg') }}">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img3.jpg') }}">
                                    <div class="overlay">
                                       <h3>RESTORATION BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="item">
                           <div class="gal-home">
                              <a href="project-detail.html">
                                 <div class="hovereffect">
                                    <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/gallery-home/img4.jpg') }}">
                                    <div class="overlay">
                                       <h3>CONCREATE BUILDING<span class="devider"></span></h3>
                                       <p>MORE DETAIL</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            {{-- gallery-home end --}}
         </div>
         {{-- background slider end --}}
         {{-- home end --}}
         {{-- section about --}}
         <section class="whitepage" id="about">
            {{-- space home --}}
            <div id="spacer">
               <div class="space-single"></div>
            </div>
            {{-- space home end --}}
            <div class="container">
               <div class="row">

                  <div class="col-md-4">
                     <div class="wrap-news onStep" data-animation="fadeInLeft" data-time="300">
                        <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/img-news.jpg') }}">
                        <h3>Design & build</h3>
                        <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. </p>
                        <a class="link-class" href="service-2.html">
                        MORE DETAIL
                           <span class="devider"></span>
                        </a>
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="wrap-news onStep" data-animation="fadeInRight" data-time="600">
                        <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/img-news1.jpg') }}">
                        <h3>Renovation</h3>
                        <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. </p>
                        <a class="link-class" href="service-3.html">
                        MORE DETAIL
                        <span class="devider"></span>
                        </a>
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="wrap-news onStep" data-animation="fadeInRight" data-time="900">
                        <img alt="imageportofolio" class="img-responsive" src="{{ asset('assets/img/img-news2.jpg') }}">
                        <h3>Tiling & painting</h3>
                        <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. </p>
                        <a class="link-class" href="service-4.html">
                        MORE DETAIL
                        <span class="devider"></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>

         </section>
         {{-- section about end --}}

         <section class="yellowpage">
            <div class="container">
               <div class="row">
                  <div class="col-md-7">
                     <h2>Looking best partner for your next project?</h2>
                  </div>
                  <div class="col-md-5">
                     <div class="right">
                        <div class="btn-content" >
                           <a class="link-class " href="#">Let us know</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         {{-- stepwork --}}
         <section id="step-page" class="step-page">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="text-center">
                        <h2>How we work</h2>
                        <span class="devider-center"></span>
                        <div class="space-single"></div>
                     </div>
                  </div>
                  <div class="onStep" data-animation="fadeInUp" data-time="300">
                     <div class="step-mains">
                        <div class="col-md-3 step-main">
                           <div class="step-main">
                              <a class="filt-step active" data-filter=".planing">
                                 <span>Planing</span>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3 step-main">
                           <div class="step-main">
                              <a class="filt-step" data-filter=".concept">
                                 <span>Concept Designs</span>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3 step-main">
                           <div class="step-main">
                              <a class="filt-step" data-filter=".construct">
                                 <span>Construct</span>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-3 step-main">
                           <div class="step-main">
                              <a class="filt-step" data-filter=".finish">
                                 <span>Finishing</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     {{-- step menu end --}}
                     {{-- step content --}}
                     <div id="step-text" class="col-md-12">
                        <div class="cont planing">
                           <div class="text-center">
                              <p>Maecenas justo neque, efficitur sit amet scelerisque eu, ornare a justo. Morbi scelerisque ex ut consequat vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent vel augue rutrum, scelerisque velit non, interdum nisl. Etiam purus lorem, aliquet a eros sit amet, vestibulum finibus augue. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum in augue in, commodo imperdiet turpis.</p>
                           </div>
                        </div>
                        <div class="cont concept">
                           <div class="text-center">
                              <p>Etiam purus lorem, aliquet a eros sit amet, vestibulum finibus augue. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum in augue in, commodo imperdiet turpis. Morbi scelerisque ex ut consequat vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent vel augue rutrum, scelerisque velit non, interdum nisl. Etiam purus lorem, aliquet a eros sit amet, vestibulum finibus augue. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum in augue in, commodo imperdiet turpis.</p>
                           </div>
                        </div>

                        <div class="cont construct">
                           <div class="text-center">
                              <p>Morbi scelerisque ex ut consequat vestibulum. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum in augue in, commodo imperdiet turpis. Maecenas justo neque, efficitur sit amet scelerisque eu, ornare a justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent vel augue rutrum, scelerisque velit non, interdum nisl. Etiam purus lorem, aliquet a eros sit amet, vestibulum finibus augue. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum in augue in, commodo imperdiet turpis.</p>
                           </div>
                        </div>

                        <div class="cont finish">
                           <div class="text-center">
                              <p>Praesent vel augue rutrum, scelerisque velit non, interdum nisl. Fusce justo ante, interdum in augue in, commodo imperdiet turpis. Maecenas justo neque, efficitur sit amet scelerisque eu, ornare a justo. Morbi scelerisque ex ut consequat vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent vel augue rutrum, scelerisque velit non, interdum nisl. Etiam purus lorem, aliquet a eros sit amet, vestibulum finibus augue. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum in augue in, commodo imperdiet turpis.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- step content end --}}
               </div>
            </div>
         </section>
         {{-- stepwork end --}}
         {{-- section --}}
         <section class="yellowpage">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="milestone-counter">
                        <div class="icon ti-time">
                        </div>
                        <div class="highlight">1822</div>
                        <div class="milestone-details">Hour Works</div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="milestone-counter">
                        <div class="icon ti-files"></div>
                        <div class="highlight">922</div>
                        <div class="milestone-details">Projects Complete</div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="milestone-counter">
                        <div class="icon ti-loop"></div>
                        <div class="highlight">600</div>
                        <div class="milestone-details">Clients repeat</div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 spacedown">
                     <div class="milestone-counter">
                        <div class="icon ti-crown"></div>
                        <div class="highlight">432</div>
                        <div class="milestone-details">Clients satisfied</div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         {{-- section end --}}
         <section id="testi" class="testi-page">
            <div class="container">
               <div class="row">
                  {{-- testimoni start--}}
                  <div id="owl-testimonial" class="owl-carousel">
                     <div class="item col-md-12">
                        <blockquote>
                           <h3>Steve Makelew</h3>
                           <p>Look famous. Be legendary. Appear complex. Act easy. Radiate presence. Travel light. Seem a dream. Prove real.</p>
                           <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                     </div>
                     <div class="item col-md-12">
                        <blockquote>
                           <h3>Nathan Swaim</h3>
                           <p>Look famous. Be legendary. Appear complex. Act easy. Radiate presence. Travel light. Seem a dream. Prove real.</p>
                           <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                     </div>
                     <div class="item col-md-12">
                        <blockquote>
                           <h3>Ian Murhphy</h3>
                           <p>Look famous. Be legendary. Appear complex. Act easy. Radiate presence. Travel light. Seem a dream. Prove real.</p>
                           <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                     </div>
                  </div>
                  {{-- testimoni end --}}
               </div>
            </div>
         </section>
         {{-- section team --}}
         <section class="whitepage" id="team">
            {{-- team --}}
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div class="team-wrapper">
                        <img alt="team img 1" class="img-responsive" src="{{ asset('assets/img/team-img1.jpg') }}">
                        <div class="team-des">
                           <h3>John Doe</h3>
                           <span>Project Manager</span>
                           <a href="#"><span class="ti-facebook"></span></a>
                           <a href="#"><span class="ti-twitter"></span></a>
                           <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                     <div class="team-wrapper">
                        <img alt="team img 4" class="img-responsive" src="{{ asset('assets/img/team-img4.jpg') }}">
                        <div class="team-des">
                           <h3>Renita</h3>
                           <span>Project Director</span>
                           <a href="#"><span class="ti-facebook"></span></a>
                           <a href="#"><span class="ti-twitter"></span></a>
                           <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                     <div class="team-wrapper">
                        <img alt="team img 3" class="img-responsive" src="{{ asset('assets/img/team-img3.jpg') }}">
                        <div class="team-des">
                           <h3> Steve Makelew</h3>
                           <span>C E O</span>
                           <a href="#"><span class="ti-facebook"></span></a>
                           <a href="#"><span class="ti-twitter"></span></a>
                           <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                     <div class="team-wrapper">
                        <img alt="team img 4" class="img-responsive" src="{{ asset('assets/img/team-img2.jpg') }}">
                        <div class="team-des">
                           <h3>Jess Parker</h3>
                           <span>Bussines Dev</span>
                           <a href="#"><span class="ti-facebook"></span></a>
                           <a href="#"><span class="ti-twitter"></span></a>
                           <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            {{-- team end --}}
            {{-- space mobile --}}
            <div class="space-double-mobile"></div>
         </section>
@endsection
