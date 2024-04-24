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
        background-image: url("{base_url}design/assets/img/event/event1.2.jpg");
    }

    .item-2 {
        background-image: url("{base_url}design/assets/img/event/event1.3.jpg");
    }

    .item-3 {
        background-image: url("{base_url}design/assets/img/event/event1.4.jpg");
    }

    .item-4 {
        background-image: url("{base_url}design/assets/img/event/event1.5.jpg");
    }

    .item-5 {
        background-image: url("{base_url}design/assets/img/event/event1.6.jpg");
    }

    .item-6 {
        background-image: url("{base_url}design/assets/img/event/event1.7.jpg");
    }

    .item-7 {
        background-image: url("{base_url}design/assets/img/event/event1.8.jpg");
    }

    .item-8 {
        background-image: url("{base_url}design/assets/img/event/event1.9.jpg");
    }

    .item-9 {
        background-image: url("{base_url}design/assets/img/event/event1.10.jpg");
    }

    .item-10 {
        background-image: url("{base_url}design/assets/img/event/event1.11.jpg");
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
                    <li><a href="<?php echo base_url('event/event'); ?>">EVENT</a></li>
                    <li>NEW YEAR PARTY</li>
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
                        <a href="<?php echo base_url('event/event1'); ?>">NEW YEAR PARTY</a>
                        <a href="<?php echo base_url('event/event2'); ?>">MAKING MERIT</a>
                        <a href="<?php echo base_url('event/event3'); ?>">SONGKRAN DAY</a>
                        <a href="<?php echo base_url('event/event4'); ?>">HERO</a>
                        <a href="<?php echo base_url('event/event5'); ?>">WELCOME</a>
                        <a href="<?php echo base_url('event/event6'); ?>">LEADERSHIP</a>
                    </div>
                   </div>

                <div class="col-lg-8">
                    <img src="{base_url}design/assets/img/event/event1.1.jpg" alt="" class="img-fluid services-img">
                    <h3>Company New Year party</h3>
                    <p>kingpac New Year's party on 27 January 2024</p>
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