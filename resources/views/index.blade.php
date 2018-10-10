@extends('layouts.default')

@section('content')
    
<!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>
                Hello folks, we are <br>
                Transcend Studio.
                </h1>

                <p>
                We create stunning digital experiences <br>
                that will help your business stand out.
                </p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">About<span>who we are</span></a></li>
            <li><a class="smoothscroll" href="#services">Services<span>what we do</span></a></li>
            <li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                <i class="fab fa-facebook"></i>
                <span class="home-social-text">Facebook</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-twitter"></i>
                <span class="home-social-text">Twitter</span>
            </a></li>
            <li><a href="#0">
                <i class="fab fa-linkedin"></i>
                <span class="home-social-text">LinkedIn</span>
            </a></li>
        </ul> <!-- end home-social -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">О нас</h3>
                <h1 class="display-1">{{ $about->title }}</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                {!! $about->content !!} 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row">
                
            <div class="about-process process block-1-2 block-tab-full">

                <div class="process__vline-left"></div>
                <div class="process__vline-right"></div>

                <div class="col-block process__col" data-item="1" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Define</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="2" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Design</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="3" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Build</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="4" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Launch</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>

            </div> <!-- end process -->

        </div> <!-- end about-stats -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Услуги</h3>
                <h1 class="display-1">{{ $serviceHeader->title }}</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                    {!! $serviceHeader->description !!}
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            @foreach($services as $service)
            <div class="col-block service-item " data-aos="fade-up">
                <div class="service-icon service-icon--brand-identity">
                    <i class="{{ $service->icon }}"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            @endforeach

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">
                
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Наши роботы</h3>
                <h1 class="display-1">These are some of our recent design projects and we are so excited to show them to you.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">
                
                @foreach($works as $work)
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="/uploads/{{ $work->preview }}" class="thumb-link" title="Lamp" data-size="1050x700">
                                <img src="/uploads/{{ $work->preview }}" 
                                     srcset="/uploads/{{ $work->preview }} 1x, /uploads/{{ $work->preview }} 2x" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                {{ $work->title }}
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>

                        <a href="{{ $work->link }}" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <div class="item-folio__caption">
                            <p>{{ $work->description }}</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->
                @endforeach
                
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="h1">What Clients Are Saying.</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Qui ipsam temporibus quisquam velMaiores eos cumque distinctio nam accusantium ipsum. 
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.</p>
                        <div class="testimonials__author">
                            Tim Cook
                            <span>CEO, Apple</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="/images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
                        <div class="testimonials__author">
                            Sundar Pichai
                            <span>CEO, Google</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
                        <div class="testimonials__author">
                            Satya Nadella
                            <span>CEO, Microsoft</span>
                        </div>
                    </div> <!-- end testimonials__slide -->
                    
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-works -->


    <!-- stats
    ================================================== -->
    <section id="stats" class="s-stats">

        <div class="row stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">129</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1507</div>
                <h5>Cups of Coffee</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">108</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">103</div>
                <h5>Happy Clients</h5> 
            </div>

        </div> <!-- end stats -->

    </section> <!-- end s-stats -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">Контакты</h3>
                <h1 class="display-1 display-1--light">{{ $contacts->title }}</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row">

            <div class="col-full contact-main" data-aos="fade-up">
                <p>
                <a href="mailto:{{ $contacts->email }}" class="contact-email">{{ $contacts->email }}</a>
                <span class="contact-number">{{ $contacts->tel }}</span>
                </p>
            </div> <!-- end contact-main -->

        </div> <!-- end row -->

        <div class="row">

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Как нас найти</h3>

                <p class="contact-address">
                    {!! $contacts->address !!}
                </p>
            </div> <!-- end contact-secondary -->

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Follow Us</h3>

                <ul class="contact-social">
                    <li>
                        <a href="{{ $contacts->facebook }}"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="{{ $contacts->linkedin }}"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul> <!-- end contact-social -->

                <div class="contact-subscribe">
                    <form class="group mc-form" novalidate="true" action="{{ route('email.send') }}" method="post">
                        <input type="email" value="" name="email" class="email" id="mc-email" placeholder="Email Address" required="">
                        <textarea name="message" placeholder="Message" style="width: 100%; color: white;"></textarea>
                        <button name="subscribe" value="Subscribe"> Отправить сообщение</button>
                        <label for="mc-email" class="subscribe-message"></label>

                        {{ csrf_field() }}
                    </form>
                </div> <!-- end contact-subscribe -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end row -->

        <div class="row">
            <div class="col-full cl-copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>

    </section> <!-- end s-contact -->

@endsection