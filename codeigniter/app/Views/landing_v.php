<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="themeturn.com">

    <title>Aras Arda Bozkuş</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">
    <!-- Themeify Icon Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/themify/css/themify-icons.css')?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/animate-css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/aos/aos.css')?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl/assets/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl/assets/owl.theme.default.min.css')?>" >
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick-carousel/slick/slick.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick-carousel/slick/slick-theme.css')?>">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css')?>">

    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/6c15ee0292.js" crossorigin="anonymous"></script>
    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contactForm").submit();
        }
    </script>

</head>

<body class="portfolio" id="top">


<!-- Navigation start -->
<!-- Header Start -->

<nav class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation" id="navbar">
    <div class="container">

        <a class="navbar-brand" href="<?php echo base_url('/'.$lang)?>">
            <h2 class="logo">A. Bozkuş</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-view-list"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('Home')?>"><?php echo lang('Landing.Nav.Home')?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="#about"><?php echo lang('Landing.Nav.About')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="#skillbar"><?php echo lang('Landing.Nav.Expertise')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio"><?php echo lang('Landing.Nav.Portfolio')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="<?=base_url($lang.'/blogs')?>"><?php echo lang('Landing.Nav.Blog')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact"><?php echo lang('Landing.Nav.Contact')?></a></li>
            </ul>

            <ul class="list-inline mb-0 ml-lg-4 nav-social">
                <?php foreach ($contacts as $contact):?>
                    <?php if($contact->onTop):?>
                        <li class="list-inline-item"><a href="<?=$contact->link?>" target="_blank"><?=html_entity_decode($contact->icon)?></a></li>
                    <?php endif;?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>

<nav style="width: 50px;height: 50px;margin-top:104px;border-radius: 2px;background-color: transparent;margin-left: 81%;" class="fixed-top">
    <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-solid fa-globe" style="padding: 5px;"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php foreach ($current_langs as $current_lang):?>
                <a class="dropdown-item" href="<?=base_url($current_lang)?>"><?=strtoupper($current_lang)?></a>
            <?php endforeach;?>
        </div>
    </div>
    <style>
        .btn-secondary {
            width: 55px !important;
            height: 30px !important;
            padding: 0 !important;
            background-color: #424C5C !important;
            border: none !important;
        }
        .dropdown-menu {
            min-width: 100px !important;
            background-color: #131F33 !important;
        }

        .dropdown-item {
            padding: 0px 5px !important;
            color: #FFFFFF !important;
            font-weight: bold !important;
        }
    </style>
</nav>

<!-- Navigation End -->

<!-- Banner start -->

<!-- Slider Start -->
<section class="slider py-7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-12 col-12 col-md-5">
                <div class="slider-img position-relative">
                    <?php helper(['filesystem_helper']);?>
                    <img src="<?php echo base_url('upload/images/Avatar/'.directory_map(FCPATH . '/upload/images/Avatar',1,false)[0])?>" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6 col-12 col-md-7">
                <div class="ml-5 position-relative mt-5 mt-lg-0">
                    <span class="head-trans">Aras</span>
                    <h1 class="font-weight-normal text-color text-md"><i class="ti-minus mr-2"></i><?php echo lang('Landing.Home.Profession')?></h1>
                    <h2 class="mt-3 text-lg mb-3 text-capitalize">Aras Arda Bozkuş</h2>
                    <div id = "description" class="animated fadeInUp mt-4 text-white-50 lh-35" style="font-size: 1.2em"><?= html_entity_decode(html_entity_decode($maindesc))?></div>
                    <a href="#about" class="btn btn-solid-border"><?php echo lang('Landing.Home.AboutMeButton')?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- About start -->
<section class="section" id="about" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-4">
                        <h2><i class="ti-minus"></i><?php echo lang('Landing.About.Myself')?></h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="text-white-50 text-md">
                            <?=html_entity_decode($about)?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 mt-md-0 col-md-6">
                <div class="row">
                    <div class="col-lg-3">
                        <h2><i class="ti-minus"></i><?php echo lang('Landing.About.Skills')?></h2>
                    </div>
                    <div class="col-lg-12 pl-5">
                        <div class="text-white-50 text-md">
                            <?=html_entity_decode($skills)?>
                        </div>

                        <ul class="list-unstyled lh-45">
                            <?php foreach ($skillset as $skill):?>
                                <li> <i class="ti-check mr-3 text-color"></i><span class="text-white-50"><?=$skill->general?></span> - <?=$skill->specific?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- About End -->

<!-- Skills start -->
<?php if(count($exps)>0):?>
    <section class="section bg-gray" id="skillbar" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i><?php echo lang('Landing.Expertise.Set')?></span>
                        <h2 class="title"><?php echo lang('Landing.Expertise.Expertise')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($exps as $exp):?>
                    <div class="col-lg-6 col-md-6">
                        <div class="skill-bar mb-4 mb-lg-0">
                            <div class="mb-4 text-right"><h4 class="font-weight-normal"><?=$exp->exp?> </h4></div>
                            <div class="progress">
                                <div class="progress-bar" data-percent="<?=$exp->percent?>">
                                    <span class="percent-text"><span class="count"><?=$exp->percent?></span>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif;?>

<!-- Skills End -->

<!-- Service start -->
<?php if(count($services)>0):?>
    <section class="section bg-gray" id="service" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i><?php echo lang('Landing.Services.WhatIOffer')?></span>
                        <h2 class="title"><?php echo lang('Landing.Services.Services')?></h2>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <?php foreach ($services as $service):?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-5 rounded-0">
                            <?php $icon = html_entity_decode($service->icon)?>
                            <?php preg_match('/\"([^"]*?)\"/',html_entity_decode($icon),$matches)?>
                            <?= htmlspecialchars_decode(str_replace($matches[1],$matches[1].' text-lg-2 text-muted',$icon))?>
                            <i class = "text-lg-2 text-muted"></i>
                            <h3 class="my-4 text-capitalize"><?=$service->header?></h3>
                            <?=html_entity_decode($service->desc)?>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>

            <div class="row align-items-center mt-5" data-aos="fade-up">
                <div class="col-lg-6 mt-5">
                    <h2 class="mb-5 text-lg-2 text-white-50"><span class="text-white"><?php echo lang('Landing.Work2Gether.W2G')?></span></h2>
                </div>
                <div class="col-lg-4 ml-auto text-right">
                    <a href="#contact" class="btn btn-main text-white smoth-scroll"><?php echo lang('Landing.Work2Gether.HireMe')?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
<!-- Service End -->

<!-- Portfolio start -->
<?php if(count($portfolios)>0):?>
    <section class="section" id="portfolio" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus"></i><?php echo lang('Landing.Portfolio.Works')?></span>
                        <h2 class="title"><?php echo lang('Landing.Portfolio.Portfolio')?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="post_gallery owl-carousel owl-theme">

                    <?php foreach ($portfolios as $portfolio):?>
                        <div class="item">
                            <div class="portfolio-item position-relative">
                                <?php if(!empty(glob(FCPATH . 'upload/images/Portfolios/portfolio_'.$portfolio->id.'.{jpg,png,jpeg}',GLOB_BRACE))):?>
                                    <?php $ext = pathinfo(glob(FCPATH . 'upload/images/Portfolios/portfolio_'.$portfolio->id.'.{jpg,png,jpeg}',GLOB_BRACE)[0])['extension']?>
                                    <img src="<?php echo base_url('upload/images/Portfolios/portfolio_'.$portfolio->id.'.'.$ext)?>" alt="blog" class="img-fluid">
                                <?php endif;?>

                                <div class="portoflio-item-overlay">
                                    <a href="<?=base_url($lang.'/portfolios/'.$portfolio->id)?>"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="text mt-3">
                                <h4 class="mb-1 text-capitalize"><?=$portfolio->title?></h4>
                                <p class="text-uppercase letter-spacing text-sm"><?=$portfolio->category?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
<!-- Portfolio End -->

<!-- Tetsimonial start -->
<?php if(count($testimonials)>0):?>
    <section class="section testomionial" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i><?php echo lang('Landing.Testimonial.TestimonialH')?></span>
                        <h1 class="title"><?php echo lang('Landing.Testimonial.Title')?></h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="testimonial-slider">
                        <?php foreach ($testimonials as $key=>$testimonial):?>
                            <div class="testimonial-item position-relative">
                                <i class="ti-quote-left text-white-50"></i>
                                <div class="testimonial-content">
                                    <div class="text-md mt-3"><?=html_entity_decode($testimonial->quote)?></div>

                                    <div class="media mt-5 align-items-center">
                                        <div class="media-body">
                                            <h3 class="mb-0"><?=$testimonial->name?></h3>
                                            <span class="text-muted"><?=$testimonial->field?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif?>
<!-- Tetsimonial End -->

<!-- Contact start -->
<section class="section" id="contact" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i><?php echo lang('Landing.GetInTouch.Header')?></span>
                    <h1 class="title"><?php echo lang('Landing.GetInTouch.Title')?></h1>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <?php if(session()->has('updateStatus')):?>
                            <?php if(session()->getFlashdata('updateStatus')[0]):?>
                                <div class="alert alert-success contact__msg" role="alert">
                                    <?=session()->getFlashdata('updateStatus')[1]?>
                                </div>
                            <?php else:?>
                                <div class="alert alert-danger contact__msg" role="alert">
                                    <?=session()->getFlashdata('updateStatus')[1]?>
                                </div>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                </div>
                <form class="contact__form form-row contact-form" method="post" action="<?=base_url('send_message')?>" id="contactForm">
                    <div class="form-group col-lg-6 mb-5">
                        <input type="text" id="name" name="name" class="form-control bg-transparent" placeholder="<?php echo lang('Landing.GetInTouch.YourName')?>">
                    </div>
                    <div class="form-group col-lg-6 mb-5">
                        <input type="text" name="email" id="email" class="form-control bg-transparent" placeholder="<?php echo lang('Landing.GetInTouch.YourMail')?>">
                    </div>
                    <div class="form-group col-lg-12 mb-5">
                        <input type="text" name="subject" id="subject" class="form-control bg-transparent" placeholder="<?php echo lang('Landing.GetInTouch.YourSubject')?>">
                    </div>

                    <div class="form-group col-lg-12 mb-5">
                        <textarea id="message" required name="message" cols="30" rows="6" class="form-control bg-transparent" placeholder="<?php echo lang('Landing.GetInTouch.YourMessage')?>"></textarea>
                        <div class="text-center">
                            <button type="submit" class="btn btn-main text-white mt-5 btn-hero g-recaptcha"
                                    data-sitekey="6LfySQwnAAAAAL9HBKlAGQ7xAYPr4pZAHYtGhGB9"
                                    data-callback='onSubmit'
                                    data-action='submit'><?php echo lang('Landing.GetInTouch.SendMessage')?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->


<!-- Footer start -->
<footer class="footer border-top-1">
    <div class="container">
        <div class="row align-items-center text-center text-lg-left">
            <div class="col-lg-2">
                <h2 class="logo mb-4">Aras A. Bozkuş</h2>
            </div>

            <div class="col-lg-5">
                <ul class="list-inline footer-socials ">
                    <?php foreach ($contacts as $contact):?>
                        <li class="list-inline-item"><a href="<?=$contact->link?>" target="_blank"><?=html_entity_decode($contact->icon)?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="col-lg-5">
                <p class="lead"><span class="text-color">Copyright © 2023, </span>Aras Arda Bozkuş</p>
                <a href="#top" class="backtop smoth-scroll"><i class="ti-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>


<!-- Footer End -->


<!--
Essential Scripts
=====================================-->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- Main jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4.3.1 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>

<!-- Slick Slider -->
<script src="<?php echo base_url('assets/plugins/slick-carousel/slick/slick.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/owl/owl.carousel.min.js')?>"></script>

<!-- Skill COunt -->
<script src="<?php echo base_url('assets/plugins/counto/apear.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/counto/counTo.js')?>"></script>
<!-- AOS Animation -->
<script src="<?php echo base_url('assets/plugins/aos/aos.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/script.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/script.js')?>"></script>

</body>
</html>
