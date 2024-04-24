<style>
  .wrapper {
  position: relative;
  width: 100%;
  margin: 0 auto;
  max-width: 1000px;
	
  video {
    width: 100%; 
  }
  
  svg { 
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    text {
      font-family: 'Montserrat', sans-serif;
      font-weight: 900;
      text-transform: uppercase;
      font-size: 28px;
    }
    
    > rect {
      -webkit-mask: url(#mask);
      mask: url(#mask);
    }
    
    rect {
      fill: #fff;
    }
  }
}

 codepen config
body {
  margin: 60px 50px 0;
}

.wrapper {
	&:before,
	&:after {
		content: '';
		position: absolute;
		top: 0;
		width: 10px;
		height: 100%;
		background-color: #fff;
	}
	
	&:before {
		left: -9px;
	}
	
	&:after {
		right: -5px;
	}
}
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-center">


      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{base_url}design/assets/img/Bg1.1.jpg" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img src="{base_url}design/assets/img/Bg2.2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{base_url}design/assets/img/Bg3.1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section><!-- End Hero Section -->

<body>
<div class="wrapper">
	<video autoplay playsinline muted loop preload poster="http://i.imgur.com/xHO6DbC.png">
    <source src="https://storage.coverr.co/videos/7RzPQrmB00s01rknm8VJnXahEyCy4024IMG?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6Ijg3NjdFMzIzRjlGQzEzN0E4QTAyIiwiaWF0IjoxNjI5MTg2NjA0fQ.M8oElp5VNO8bWEWmdF2nGiu3qDOOYRFfP8wkKvl8I20" />
	</video>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 80" preserveAspectRatio="xMidYMid slice">
    <defs>
      <mask id="mask" x="0" y="0" width="100%" height="100%" >
        <rect x="0" y="0" width="100%" height="100%" />
        <text x="72" y="50">kingpac</text>
      </mask>
    </defs>
    <rect x="0" y="0" width="100%" height="100%" />
  </svg>
</div>
</body>

<main id="main">
  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-newspaper"></i></div>
          <div>
            <h4 class="title">Reinforcing leadership</h4>
            <p class="description">King Pack Industrial Reinforcing leadership in the global plastics business</p>
            <a href="<?php echo base_url('News/news6'); ?>" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-newspaper"></i></div>
          <div>
            <h4 class="title">Hero, from recycle bag to Zero Waste Manufactory</h4>
            <p class="description">Hero, from recycle bag to Zero Waste Manufactory. PJ (Paiboon Julasaksrisakul) was interviewed by Thansettakij.</p>
            <a href="<?php echo base_url('News/news3'); ?>" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-newspaper"></i></div>
          <div>
            <h4 class="title">Hero, from recycle bag to Zero Waste Manufactory.</h4>
            <p class="description">Hero” is the market leader in zippered garbage bags and plastic packaging under the management of “Kings Pack Industrial</p>
            <a href="<?php echo base_url('News/news4'); ?>" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="{base_url}design/assets/img/About2.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=JXqu2ciJW2Q" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            As the largest plastic bag manufacturer in the Asian continent, King Pac Industrial Co.,Ltd is a full-fledged plastic bag supplier located nearby Laem Chabang Port in Thailand.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-box"></i>
              <div>
                <h5>On 107,920 square meters (1,161,641.21 square feet)</h5>
                <p>of factory land, our state-of-the-art facility is capable of producing largest100,000 metric tonslargest of finished products per year.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-cpu"></i>
              <div>
                <h5>Every step in the production process is undertaken</h5>
                <p>by experienced operators and is under close supervision of experienced quality control staff.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-boxes"></i>
              <div>
                <h5>Our meticulous selection of raw materials purchased</h5>
                <p>from both local and oversea suppliers augment our products to achieve the highest quality.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>NEWS</span>
        <h2>NEWS</h2>

      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-img">
              <img src="{base_url}design/assets/img/messageImage_1707903932965.jpg " alt="" class="img-fluid">
            </div>
            <h3><a href="<?php echo base_url('News/news6'); ?>" class="stretched-link">Reinforcing leadership</a></h3>
            <p>King Pack Industrial Reinforcing leadership in the global plastics business</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-img">
              <img src="{base_url}design/assets/img/new1.2.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="<?php echo base_url('News/news1'); ?>" class="stretched-link">PJ (Paiboon Julasaksrisakul)</a></h3>
            <p>PJ (Paiboon Julasaksrisakul), the founder of King Energy and Waste Solution</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-img">
              <img src="{base_url}design/assets/img/l222222222.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="<?php echo base_url('News/news2'); ?>" class="stretched-link">On 11 Sep 20, PJ (Paiboon Julasaksrisakul) was interviewed by Green Life for topic “Everyone can be #HERO”</a></h3>
            <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card">
            <div class="card-img">
              <img src="{base_url}design/assets/img/Detail3-1.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="<?php echo base_url('News/news3'); ?>" class="stretched-link">Hero, from recycle bag to Zero Waste Manufactory</a></h3>
            <p>Hero, from recycle bag to Zero Waste Manufactory. PJ (Paiboon Julasaksrisakul) was interviewed by Thansettakij.</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="card">
            <div class="card-img">
              <img src="{base_url}design/assets/img/Detail4-2.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="<?php echo base_url('News/news4'); ?>" class="stretched-link">“Heroes” and continuously help society under the project “The hero has arrived.”</a></h3>
            <p>“Heroes” continue to do activities to help society under the project “Heroes have arrived” delivering garbage bags and zip bags. Participate in the fight.</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="card">
            <div class="card-img">
              <img src="{base_url}design/assets/img/detail-6.jpg" alt="" class="img-fluid">
            </div>
            <h3><a href="<?php echo base_url('News/news5'); ?>" class="stretched-link">The factory is not yet ready to reveal its vision.</a></h3>
            <p>King Corporation Group welcomes Mr. Sekanan. Ruchithanachitphong Computer & Graphic Design Department</p>
          </div>
        </div><!-- End Card Item -->

      </div>
      <div class="section-header">
        <span>EVENT</span>
        <h2>EVENT</h2>
      </div>
      <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{base_url}design/assets/img/event/event1.1.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="<?php echo base_url('event/event1'); ?>" class="stretched-link">COMPANY NEW YEAR PARTY</a></h3>
              <p>kingpac New Year's party on 27 January 2024</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{base_url}design/assets/img/event/event2.5.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="<?php echo base_url('event/event2'); ?>" class="stretched-link">Making merit for the new treasury</a></h3>
              <p>Making merit for the new treasury on 20 March 2024</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{base_url}design/assets/img/event/event3.12.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="<?php echo base_url('event/event3');?>" class="stretched-link">SONGKRAN DAY</a></h3>
              <p>Songkran day on 11 April 2024</p>
            </div>
          </div><!-- End Card Item -->
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3>Philosophy</h3>
          <p> We are committed to doing business. By producing good products and services to create maximum satisfaction for customers.</p>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <section class="page-section2 bg-white" id="map">

    <div class="ratio ratio-16x9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5435.964141089347!2d101.00724407641782!3d13.412876585640385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d366cb40ecba9%3A0x9b17ad5e03c514f6!2z4Lia4LiI4LiBLiDguITguLTguIfguKrguYzguYHguJ7guYfguIQg4Lit4Li04LiZ4LiU4Lix4Liq4LmA4LiV4Lij4Li14Lii4Lil!5e0!3m2!1sth!2sth!4v1709101864223!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </section>

  </div>
  </section><!-- End Pricing Section -->


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="slides-1 swiper" data-aos="fade-up">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{base_url}design/assets/img/Eximex.png" class="testimonial-img" alt="">
              <h3>Eximex</h3>
              <h4>Export &amp; Import</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Export, Import and Distribution services for companies wishing to expand internationally
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{base_url}design/assets/img/king telecom.png" class="testimonial-img" alt="">
              <h3>King Telecom</h3>
              <h4>Engineering</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                It is engineering work that analyzes, critiques, and solves problems. Work systems are discussed in a comprehensive manner.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{base_url}design/assets/img/king dpac distribution.png" class="testimonial-img" alt="">
              <h3>King Dpac Distribution</h3>
              <h4>Manufacturer and distributor of packaging</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Manufacturer and distributor of HDPE, LDPE, LLDPE films and plastics among them.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{base_url}design/assets/img/king property development.png" class="testimonial-img" alt="">
              <h3>King Property Development</h3>
              <h4>Immovable Property</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Business type Real estate trading By selling housing developments with land, condominiums, commercial buildings, and industrial land. The project will be a project in Bangkok. Metropolitan area and projects in nearby provinces.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{base_url}design/assets/img/king leasing management.png" class="testimonial-img" alt="">
              <h3>King Leasing Management</h3>
              <h4>Hire</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Operating a leasing business, including vehicles, equipment, and machinery. Real estate and electrical appliances
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{base_url}design/assets/img/king energy.png" class="testimonial-img" alt="">
              <h3>King Energy</h3>
              <h4>Recycled</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                operating with the Highest Technology Wastes Washing Machines and Pelletizing Machines in order to deliver the Highest Quality of Recycled Pellets into the market worldwide.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>

      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-10">

          <div class="accordion accordion-flush" id="faqlist">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <i class="bi bi-question-circle question-icon"></i>
                  How to reserve a car
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Click on booking and select Reserve a car. Select the car, date and time of booking and press Confirm to reserve the car.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <i class="bi bi-question-circle question-icon"></i>
                  Lost or damaged employee card, wrong employee number, where can I contact?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Contact the Human Resources Department, Recruit Department.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <i class="bi bi-question-circle question-icon"></i>
                  If there's an accident or you're sick, what hours are there a doctor or nurse?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  There are nurses available 24 hours a day and a doctor on Tuesday and Thursday 3 hours a day.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <i class="bi bi-question-circle question-icon"></i>
                  Where can I find the time I want to take time off work?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  <i class="bi bi-question-circle question-icon"></i>
                  Contact at payroll
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <i class="bi bi-question-circle question-icon"></i>
                  Lost or damaged equipment in the factory? Where can I contact?
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Contact at GA
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
