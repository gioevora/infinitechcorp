@extends('Layout.Layouts')
@section('title', 'Infinitech Advertising Corporation')



@section('content')
    <main>
        <section class="hero-section">
            <div class="hero-image">
                <div class="hero-overlay"></div>
            
            </div>

            <div class="hero-content mb-4">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-6 left-content">
                            <h1 class="slogan">High Quality, <strong class="typing-effects">Lower Price</strong> </h1>
                            <p class="sub-slogan">We offer excellent products without breaking the bank.</p>
                            <button class="button">Learn more</button>
                        </div>
                        <div class="col-12 col-lg-6 right-content">
                            <img src="/assets/img/elements/website-mockup.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section-layout">
            <div class="trusted">
                <div class="section-header">
                    <small class="category">
                        <span class="badge">Trusted by 100+ happy clients</span>
                    </small>
                    <h1 class="title">Our Clients</h1>
                </div>

                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="/assets/img/logo/1.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/2.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/3.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/4.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/5.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/6.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/7.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="/assets/img/logo/8.png" height="100" width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="service-section section-layout">


            <div class="container">
                <div class="section-header">
                    <small class="category">
                        <span class="badge">Our Services</span>
                    </small>
                    <h1 class="title">What sets Infinitech apart?</h1>
                    <p class="description">Infinitech specializes in custom web development and targeted advertising to
                        help
                        your business grow and reach the right audience.
                    </p>
                </div>

                <div class="section-content">
                    <div class="row d-flex justify-content-center aling-items-center">
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <img class="service-img" src="/assets/img/svg/web-design.svg" alt="">
                            <h1 class="service-title">Web Development</h1>
                            <p class="service-description">Custom-built, professionally-designed websites featuring an
                                easy-to-use Content Management System (CMS).</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <img class="service-img" src="/assets/img/svg/web-design.svg" alt="">
                            <h1 class="service-title">Web Application</h1>
                            <p class="service-description">We have the capability to create personalized web applications
                                designed to enhance your organization's operational effectiveness.</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <img class="service-img" src="/assets/img/svg/web-design.svg" alt="">
                            <h1 class="service-title">Ecommerce</h1>
                            <p class="service-description">Infinitech specializes in developing meticulously designed
                                e-commerce websites and online stores.</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <img class="service-img" src="/assets/img/svg/web-design.svg" alt="">
                            <h1 class="service-title">Website Maintenance</h1>
                            <p class="service-description">We are dedicated to maintaining your website's relevance by
                                incorporating the latest technological trends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection


@section('scripts')
    @parent
@endsection
