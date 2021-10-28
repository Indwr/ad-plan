<?php
   require_once 'header.php' ;
?>
<style>

.single-promo-block {
    display: block;
    overflow: hidden;
    position: relative;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.box_box h4.choose-card__title.base--color {
    font-size: 20px;
    font-weight: 600;
    color: #FBA507;
    margin: 0;
}
.box_box {
    text-align: center;
}
i.fas, i.fab.fa-expeditedssl {
    font-size: 30px;
    padding: 15px 0px 10px;
}
.box_box > div > div:hover {
    position: relative;
    top: -5px;
    transition: 0.3s;
}
.box_box > div > div {
    margin-bottom: 30px;
    padding: 15px;
    height: 220px;
    border-radius: 5px;
    box-shadow: 2px 2px 12px #fba507;
    background: #fff;
    transition: 0.3s;
    cursor: pointer;
}
.colo_title, .colo_title h2 {
    color: #fff !important;
}
.about-content img {
    width: 250px;
}
a.cmn-btn.mt-4 {
    background: #fba507;
    font-size: 18px;
    padding: 10px 30px;
    border-radius: 5px;
    color: #fff;
    font-weight: 600;
}
section.box_sec {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='250' preserveAspectRatio='none' viewBox='0 0 1440 250'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='250' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M9 250L259 0L395.5 0L145.5 250z' fill='url(%23SvgjsLinearGradient1001)'%3e%3c/path%3e%3cpath d='M248.60000000000002 250L498.6 0L752.1 0L502.1 250z' fill='url(%23SvgjsLinearGradient1001)'%3e%3c/path%3e%3cpath d='M506.20000000000005 250L756.2 0L1113.2 0L863.2 250z' fill='url(%23SvgjsLinearGradient1001)'%3e%3c/path%3e%3cpath d='M748.8000000000001 250L998.8000000000001 0L1099.3000000000002 0L849.3000000000001 250z' fill='url(%23SvgjsLinearGradient1001)'%3e%3c/path%3e%3cpath d='M1403 250L1153 0L884.5 0L1134.5 250z' fill='url(%23SvgjsLinearGradient1002)'%3e%3c/path%3e%3cpath d='M1161.4 250L911.4000000000001 0L734.4000000000001 0L984.4000000000001 250z' fill='url(%23SvgjsLinearGradient1002)'%3e%3c/path%3e%3cpath d='M929.8 250L679.8 0L465.29999999999995 0L715.3 250z' fill='url(%23SvgjsLinearGradient1002)'%3e%3c/path%3e%3cpath d='M688.1999999999999 250L438.19999999999993 0L307.69999999999993 0L557.6999999999999 250z' fill='url(%23SvgjsLinearGradient1002)'%3e%3c/path%3e%3cpath d='M1289.7012159702535 250L1440 99.70121597025346L1440 250z' fill='url(%23SvgjsLinearGradient1001)'%3e%3c/path%3e%3cpath d='M0 250L150.29878402974654 250L 0 99.70121597025346z' fill='url(%23SvgjsLinearGradient1002)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='250' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1001'%3e%3cstop stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1002'%3e%3cstop stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(15%2c 70%2c 185%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
}
	.main_bg {
    background-color: #ee9e0a !important;
   
    background-attachment: fixed;
    padding: 120px 0!important;
}
.section-header {
    color: #fff;
}
h4.base--color {
    color: #fff;
}
.work-card__icon {
    color: #fff;
}
.work-item {
    box-shadow: 0 0 5px 0 #fff;
    flex: 0 0 30% !important;
}
.icon_row.row {
    justify-content: space-between !important;
}
.work-item {
    box-shadow: 0 0 5px 0 #fff;
    flex: 0 0 30% !important;
    padding: 50px 20px;
}
span.step-number {
    font-size: 34px;
    font-weight: 700;
}
h4.base--color.mb-3 {
    font-size: 22px;
}
h2.section-title.how_adlife {
    color: #fff;
}
.overlay-bg {
    width: 100%;
    height: 100%;
    z-index: 100;
    background: rgba(20, 20, 20, .5) !important;
    top: 0;
}
</style>      
	  <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="section-intro" class="full-height relative owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg">

                    <div class="owl-slider-nav">
                        <div class="next"></div>
                        <div class="prev"></div>
                    </div>

                    <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
                        <div class="item">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/slider/500.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/slider/doller.jpg" alt="">
                        </div>
                    </div>

                    <div class="center-y fadeScroll relative" data-scroll-speed="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div id="defaultCountdown" class="countdown-s1"></div> -->
                                    <div class="spacer-single">BEST OPPERTUNITY</div>
                                    <h1 class="big"><?php echo title;?> <span class="id-color"><?php echo year;?></span></h1>
                                    <div class="spacer-single"></div>
                                    <div class="subtitle s2"><span><i class="fa fa-calendar-o id-color"></i><?php echo date_stamp;?></span><span><i class="fa fa-map-marker id-color"></i><?php echo address;?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- section close -->
<section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-11.jpg" style="background-image: url(&quot;assets/images/bg/bg-11.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="about-content">
                        <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">Us</b></h2>
                        <p>We are an international Advertisement company engaged in Advertisement activities, which are related to Video advertisement and pramotions of businesses.</p>
                        <p class="mt-4">Our goal is to provide our Members with a reliable source of Earning, while minimizing any possible risks and offering a high-quality service, allowing us to automate and simplify the relations between the Members and the trustees. We work towards increasing your profit margin by profitable earning. We look forward to you being part of our community.</p>
                        <a href="#0" class="cmn-btn mt-4">MORE INFO</a>
                    </div>
                    <!-- about-content end -->
                </div>
					<div class="col-lg-6 ">
                    <div class="about-content text-center">
                           <img src="<?php echo base_url('Resource/App/Assets2/');?>images/slider/aaaaa.png" alt="">
                    </div>
                    <!-- about-content end -->
                </div>
            </div>
        </div>
    </section>

            <!-- section begin -->
            <section id="section-speakers" class="box_sec">
                <div class="container relative">
                    <div class="row">
					<div class=" justify-content-center m-auto">
					<div class="col-lg-3 text-center">
					</div>
                <div class="col-lg-6 text-center">
                    <div class="section-header colo_title pb-3">
                        <h2 class="section-title "><span class="font-weight-normal">Why Choose</span> <b class="base--color">Adlife</b></h2>
                        <p>Our goal is to provide our investors with a reliable source of high income, while minimizing any possible risks and offering a high-quality service.</p>
                    </div>
                </div>
				<div class="col-lg-3 text-center">
				</div>
            </div>
					 <div class="row justify-content-center mb-none-30 box_box">
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Legal Company</h4>
                        </div>
                        <p>Our company conducts absolutely legal activities in the legal field. We are certified to operate investment business, we are legal and safe.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h4 class="choose-card__title base--color">High reliability</h4>
                        </div>
                        <p>We are trusted by a huge number of people. We are working hard constantly to improve the level of our security system and minimize possible risks.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Anonymity</h4>
                        </div>
                        <p>Anonymity as a payment instrument. In the era of electronic money – this is one of the most convenient ways of cooperation.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
                        </div>
                        <p>Our all retreats are treated spontaneously once requested. There are high maximum limits.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Referral Program</h4>
                        </div>
                        <p>We are offering a certain level of referral income through our referral program. you can increase your income by simply refer a few people.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4 class="choose-card__title base--color">24/7 Support</h4>
                        </div>
                        <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives are periodically available to elucidate any difficulty..</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <h4 class="choose-card__title base--color">Dedicated Server</h4>
                        </div>
                        <p>We are using a dedicated server for the website which allows us exclusive use of the resources of the entire server.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fab fa-expeditedssl"></i>
                            </div>
                            <h4 class="choose-card__title base--color">SSL Secured</h4>
                        </div>
                        <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
                <div class=" col-md-4 mb-30">
                    <div class="choose-card border-radius--5">
                        <div class="choose-card__header mb-3">
                            <div class="choose-card__icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="choose-card__title base--color">DDOS Protection</h4>
                        </div>
                        <p>We are using one of the most experienced, professional, and trusted DDoS Protection and mitigation provider.</p>
                    </div>
                    <!-- choose-card end -->
                </div>
            </div>
                        </div>
                    
                </div>
            </section>
            <!-- section close -->
			 <!-- section begin -->
            <section id="section-speakers">
                <div class="container relative">
                    <div class="row">
					
                        <div class="col-md-12 text-center">
                            <h2><span class="id-color">Event</span> Speakers</h2>
                            <p class="lead">We invites digital experts arround the world</p>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/1.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all digital things. Has earned several awards and has experience of being a speaker at world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/1.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>Ben Sheridan</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>

                        <div class="col-md-4 mb30">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/2.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/2.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>Sophie Lana</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>

                        <div class="col-md-4 mb30">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/3.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/3.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>James Hoult</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>

                        <div class="col-md-3 mb30">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/4.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/4.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>Oscar Helman</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>

                        <div class="col-md-3 mb30">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/5.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/5.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>Rose Shipp</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>

                        <div class="col-md-3 mb30">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/6.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/6.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>Isaac Nicholas</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>

                        <div class="col-md-3 mb30">
                            <div class="profile_pic text-center">
                                <figure class="picframe mb30">
                                    <a class="image-popup" href="<?php echo base_url('Resource/App/Assets2/');?>images/team/7.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                    <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/7.jpg" class="img-responsive" alt="">
                                </figure>

                                <h3>John Arnold</h3>
                                <span class="subtitle">Founder & CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
<section class="main_bg pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-5.jpg" style="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title how_adlife"><span class="font-weight-normal">How</span> <b class="base--color">Adlife</b> <span class="font-weight-normal">Works</span></h2>
                        <p>Get involved in our tremendous platform . We will utilize your time and give you profit in your wallet automatically.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="icon_row row justify-content-center mb-none-30">
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon">
                            <i class="fas fa-user"></i><br>
                            <span class="step-number">01</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Create Account</h4>
                        </div>
                    </div>
                    <!-- work-card end -->
                </div>
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon">
                            <i class="fas fa-hamsa"></i><br>
                            <span class="step-number">02</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Watch Advertisement Videos</h4>
                        </div>
                    </div>
                    <!-- work-card end -->
                </div>
                <div class="col-lg-4 col-md-6 work-item mb-30">
                    <div class="work-card text-center">
                        <div class="work-card__icon">
                            <i class="fas fa-wallet"></i><br>
                            <span class="step-number">03</span>
                        </div>
                        <div class="work-card__content">
                            <h4 class="base--color mb-3">Get Profit</h4>
                        </div>
                    </div>
                    <!-- work-card end -->
                </div>
            </div>
        </div>
    </section>
            <!-- section begin -->
            <section id="section-fun-facts" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg pt80 pb80">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay="0">
                                <div class="de_count">
                                    <i class="icon_id-2 id-color" data-animation="fadeInDown" data-delay="0"></i>
                                    <h3 class="timer" data-to="8800" data-speed="2500">0</h3>
                                    <span>Participants</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".25s">
                                <div class="de_count">
                                    <i class="icon_easel  id-color" data-animation="fadeInDown" data-delay="200"></i>
                                    <h3 class="timer" data-to="300" data-speed="2500">0</h3>
                                    <span>Topics</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                                <div class="de_count">
                                    <i class="icon_headphones  id-color" data-animation="fadeInDown" data-delay="400"></i>
                                    <h3 class="timer" data-to="50" data-speed="2500">0</h3>
                                    <span>Speakers</span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".75s">
                                <div class="de_count">
                                    <i class="icon_globe id-color" data-animation="fadeInDown" data-delay="600"></i>
                                    <h3 class="timer" data-to="20" data-speed="2500">0</h3>
                                    <span>Awards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-schedules" aria-label="section-services-tab" data-bgcolor="#f5f5f5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><span class="id-color">Event</span> Schedules</h2>
                            <p class="lead">Do not miss it and be sure to attend</p>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_style_4 text-center">
                                <ul class="de_nav">
                                    <li class="active" data-link="#section-services-tab">
                                        <h3>Day <span>01</span></h3>
                                        <h4>3 August, <?php echo year;?></h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>02</span></h3>
                                        <h4>4 August, <?php echo year;?></h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>03</span></h3>
                                        <h4>5 August, <?php echo year;?></h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>04</span></h3>
                                        <h4>6 August, <?php echo year;?></h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>05</span></h3>
                                        <h4>7 August, <?php echo year;?></h4>
                                    </li>
                                </ul>

                                <div class="de_tab_content text-left">

                                    <div id="tab1" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 10:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Ben Sheridan</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sophie Lana</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/3.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>James Hoult</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/4.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Oscar Helman</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/5.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Rose Shipp</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/6.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Isaac Nicholas</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/7.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Arnold</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Ben Sheridan</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab3" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sophie Lana</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/3.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>James Hoult</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/4.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Oscar Helman</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/5.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Rose Shipp</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab4" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/6.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Isaac Nicholas</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/7.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Arnold</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Ben Sheridan</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sophie Lana</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab5" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Ben Sheridan</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Ben Sheridan</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/3.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>James Hoult</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/team/4.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Oscar Helman</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3><?php echo title;?></h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-testimonial" class="text-light no-top no-bottom" data-stellar-background-ratio=".2">
                <div class="overlay-bg pt80 pb80">
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2><span class="id-color">They</span> Says</h2>
                                <div class="spacer-single"></div>
                            </div>


                            <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">

                                <div class="col-md-6 item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>I'm very happy with this event. I will recommend this to my family and friends. The speakers are professional. It's worth quality for the price.</p>
                                            <div class="de_testi_by">
                                                John, Freelancer
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-md-6 item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>A wonderful event thank you! The best event as it proved by quality. I learn many digital things. I would definitely return for future events.</p>
                                            <div class="de_testi_by">
                                                Sarah, College Student
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-md-6 item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>I will recommend this to my family and friends. I'm very happy with this event. The speakers are professional. It's worth quality for the price.</p>
                                            <div class="de_testi_by">
                                                Michael, Office Staff
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="col-md-6 item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>I learn many digital things! A wonderful event thank you! The best event as it proved by quality. I would definitely return for future events.</p>
                                            <div class="de_testi_by">
                                                <?php echo md;?>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-sponsors">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><span class="id-color">Event</span> Sponsors</h2>
                            <p class="lead">Check who make this event possible</p>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 text-center">
                            <h3>Gold Sponsors</h3>
                            <div class="spacer-single"></div>
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/1.png" alt="" class="grey-hover">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/2.png" alt="" class="grey-hover">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/3.png" alt="" class="grey-hover">

                            <div class="spacer-double"></div>

                            <h3>Silver Sponsors</h3>
                            <div class="spacer-single"></div>
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/a1.png" alt="" class="grey-hover">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/a2.png" alt="" class="grey-hover">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/a3.png" alt="" class="grey-hover">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/a4.png" alt="" class="grey-hover">
                            <img src="<?php echo base_url('Resource/App/Assets2/');?>images/logo/a5.png" alt="" class="grey-hover">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-tickets" class="text-light no-top no-bottom" data-stellar-background-ratio=".2">
                <div class="overlay-bg pt80 pb80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2><span class="id-color">Get</span> Tickets</h2>
                                <p class="lead">Join the biggest digital event of the year</p>
                                <div class="spacer-single"></div>
                            </div>

                            <div class="col-md-12">
                                <div class="item pricing">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="pricing-s1 mb30">
                                                    <div class="top">
                                                        <h2>Early Bird</h2>
                                                        <p class="price"><span class="currency">$</span> <b>39</b> <span class="month">/1 person</span></p>
                                                    </div>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="icon_check"></i>1 Conference Day</li>
                                                            <li><i class="icon_check"></i>1 Workshop Day</li>
                                                            <li><i class="icon_check"></i>Regular Seat</li>
                                                            <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                            <li><i class="icon_check"></i>One Certificate</li>
                                                        </ul>
                                                        <a href="#" class="btn btn-custom">Get Ticket</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="pricing-s1 featured mb30">
                                                    <div class="ribbon">Best Selling</div>
                                                    <div class="top">
                                                        <h2>Regular</h2>
                                                        <p class="price"><span class="currency">$</span> <b>99</b> <span class="month">/1 person</span></p>
                                                    </div>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="icon_check"></i>2 Conference Day</li>
                                                            <li><i class="icon_check"></i>2 Workshop Day</li>
                                                            <li><i class="icon_check"></i>Regular Seat</li>
                                                            <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                            <li><i class="icon_check"></i>Two Certificate</li>
                                                        </ul>
                                                        <a href="#" class="btn btn-custom">Get Ticket</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="pricing-s1 mb30">
                                                    <div class="top">
                                                        <h2>Exclusive</h2>
                                                        <p class="price"><span class="currency">$</span> <b>199</b> <span class="month">/1 person</span></p>
                                                    </div>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="icon_check"></i>Full Conference Day</li>
                                                            <li><i class="icon_check"></i>Full Workshop Day</li>
                                                            <li><i class="icon_check"></i>VIP Seat</li>
                                                            <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                            <li><i class="icon_check"></i>Three Certificate</li>
                                                        </ul>
                                                        <a href="#" class="btn btn-custom">Get Ticket</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><span class="id-color">Venue</span> Information</h2>
                            <p class="lead">Everything you need, 24 hours</p>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-4 text-center">
                            <i class="icon-flag id-color mb20 size40"></i>
                            <h3>Venue</h3>
                            <p>Large audiotorium with capacity of fifty thousand participants is also equipped with advanced facilities for your pleasure.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <i class="icon-bike id-color mb20 size40"></i>
                            <h3>Transport</h3>
                            <p>The location of the seminar is located in the city center so it is easily reached by private or public vehicles which available for 24 hours.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <i class="icon-map id-color mb20 size40"></i>
                            <h3>Hotel</h3>
                            <p>There are many hotels available around the event location for temporary residence as long as you follow this event, from motels to 5 stars.</p>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <!-- <section id="section-map" class="no-top no-bottom" aria-label="map-container">
                <div id="map"></div>
            </section> -->
            <!-- section close -->

            <!-- section begin -->
            <section id="section-quick-contact" class="bordertop">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="wm-1"></div>
                            <i class="icon_mobile id-color size40 mb20"></i>
                            <h5>Call Us</h5>
                            <h4><?php echo phone;?></h4>
                        </div>

                        <div class="col-md-4">
                            <div class="wm-1"></div>
                            <i class="icon_house_alt id-color size40 mb20"></i>
                            <h5>Address</h5>
                            <h4><?php echo address;?></h4>
                        </div>

                        <div class="col-md-4">

                            <div class="wm-1"></div>
                            <i class="icon_mail_alt id-color size40 mb20"></i>
                            <h5>Email Us</h5>
                            <h4><?php echo email;?></h4>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->
  <?php
   require_once 'footer.php' ;
?>     
