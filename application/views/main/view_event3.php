<style>
    .gallery-wrap {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 70vh;
    }

    .item {
        flex: 1;
        height: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: none;
        transition: flex 0.8s ease;

        &:hover {
            flex: 7;
        }
    }

    .item-1 {
        background-image: url("{base_url}design/assets/img/event/event3.0.jpg");
    }

    .item-2 {
        background-image: url("{base_url}design/assets/img/event/event3.2.jpg");
    }

    .item-3 {
        background-image: url("{base_url}design/assets/img/event/event3.3.jpg");
    }

    .item-4 {
        background-image: url("{base_url}design/assets/img/event/event3.4.jpg");
    }

    .item-5 {
        background-image: url("{base_url}design/assets/img/event/event3.5.jpg");
    }

    .item-6 {
        background-image: url("{base_url}design/assets/img/event/event3.7.jpg");
    }

    .item-7 {
        background-image: url("{base_url}design/assets/img/event/event3.8.jpg");
    }

    .item-8 {
        background-image: url("{base_url}design/assets/img/event/event3.9.jpg");
    }

    .item-9 {
        background-image: url("{base_url}design/assets/img/event/event3.10.jpg");
    }

    .item-10 {
        background-image: url("{base_url}design/assets/img/event/event3.11.jpg");
    }



    .social {
        position: absolute;
        right: 35px;
        bottom: 0;

        img {
            display: block;
            width: 32px;
        }
    }
</style>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('{base_url}design/assets/img/2020-07-28.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>EVENT</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?php echo base_url('event/event');?>">EVENT</a></li>
                    <li>SONGKRAN DAY</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="services-list">
                        <a href="<?php echo base_url('News/news1'); ?>">NEW YEAR PARTY</a>
                        <a href="<?php echo base_url('News/news2');?>">MAKING MERIT</a>
                        <a href="<?php echo base_url('News/news3');?>">SONGKRAN DAY</a>
                        <a href="<?php echo base_url('News/news4'); ?>">HERO</a>
                        <a href="<?php echo base_url('News/news5'); ?>">WELCOME</a>
                        <a href="<?php echo base_url('News/news6'); ?>">LEADERSHIP</a>
                    </div>
                    <h4>Enim qui eos rerum in delectus</h4>
                    <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
                </div>

                <div class="col-lg-8">
                    <img src="{base_url}design/assets/img/event/event3.12.jpg" alt="" class="img-fluid services-img">
                    <h3>SONGKRAN DAY</h3>
                    <p>Songkran day on 11 April 2024</p>
                </div>
                <body>
                    <div class="gallery-wrap">
                        <div class="item item-1"></div>
                        <div class="item item-2"></div>
                        <div class="item item-3"></div>
                        <div class="item item-4"></div>
                        <div class="item item-5"></div>
                        <div class="item item-6"></div>
                        <div class="item item-7"></div>
                        <div class="item item-8"></div>
                        <div class="item item-9"></div>
                        <div class="item item-10"></div>
                    </div>
                </body>
            </div>
        </div>
    </section><!-- End Service Details Section -->

</main><!-- End #main -->