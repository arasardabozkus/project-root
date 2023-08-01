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
    <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">
    <!-- Themeify Icon Css -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/themify/css/themify-icons.css')?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/animate-css/animate.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/aos/aos.css')?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/owl/assets/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/owl/assets/owl.theme.default.min.css')?>" >
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/slick-carousel/slick/slick.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/plugins/slick-carousel/slick/slick-theme.css')?>">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/style.css')?>">
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/6c15ee0292.js" crossorigin="anonymous"></script>

</head>

<body class="portfolio" id="top">

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
                    <a class="nav-link" href="<?php echo base_url('/'.$lang)?>"><?php echo lang('Landing.Nav.Home')?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="<?=base_url('/'.$lang)?>#about"><?php echo lang('Landing.Nav.About')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="<?=base_url('/'.$lang)?>#skillbar"><?php echo lang('Landing.Nav.Expertise')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="<?=base_url('/'.$lang)?>#portfolio"><?php echo lang('Landing.Nav.Portfolio')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="<?=base_url('/'.$lang.'/blogs')?>"><?php echo lang('Landing.Nav.Blog')?></a></li>
                <li class="nav-item"><a class="nav-link smoth-scroll" href="<?=base_url('/'.$lang)?>#contact"><?php echo lang('Landing.Nav.Contact')?></a></li>
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
            width: 50px !important;
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


<section class="page-title">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-title text-center">
                    <p><?=$blog->subject?></p>
                    <h1><?=$blog->title?></h1>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section portfolio-single pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <?php if(!empty(glob(FCPATH . 'upload/images/Blogs/blog_page_'.$blog->id.'.{jpg,png,jpeg}',GLOB_BRACE))):?>
                    <?php $ext = pathinfo(glob(FCPATH . 'upload/images/Blogs/blog_page_'.$blog->id.'.{jpg,png,jpeg}',GLOB_BRACE)[0])['extension']?>
                    <img src="<?php echo base_url('upload/images/Blogs/blog_page_'.$blog->id.'.'.$ext)?>" alt="blog-img" class="img-fluid rounded">
                <?php endif;?>
                <p></p>
                <br>

                <?=html_entity_decode($blog->blogtext)?>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-sidebar mt-5 mt-lg-0">
                    <div class="p-5 mt-4">
                        <h3 class="text-center mb-4"><?=lang("Landing.Blog.Title")?></h3>
                        <ul class="list-unstyled">
                            <?php foreach ($latest3 as $latest):?>
                                <li>
                                    <a href="<?=base_url('/'.$lang.'/blogs/'.$latest->uri.'/'.$latest->id)?>" class="text-white d-block mb-1"><?=$latest->title?></a>
                                    <span class="text-white-50"><?=$latest->additionDate?></span>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section border-top-1" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h1 class="title"><?=lang('Landing.Blog.News')?></h1>
                </div>
            </div>
        </div>

        <div class="row">

            <?php foreach ($latest3 as $latest):?>
                <div class="col-lg-4 col-md-6">
                    <div class="position-relative blog-item mb-5 mb-lg-0 ">
                        <?php if(!empty(glob(FCPATH . 'upload/images/Blogs/blog_'.$latest->id.'.{jpg,png,jpeg}',GLOB_BRACE))):?>
                            <?php $ext = pathinfo(glob(FCPATH . 'upload/images/Blogs/blog_'.$latest->id.'.{jpg,png,jpeg}',GLOB_BRACE)[0])['extension']?>
                            <img src="<?php echo base_url('upload/images/Blogs/blog_'.$latest->id.'.'.$ext)?>" alt="blog-img" class="img-fluid">
                        <?php endif;?>

                        <div class="blog-item-meta mb-3">
                            <span><i class="ti-user mr-2"></i><?=$latest->contributor?></span>
                            <span class="text-muted mx-2"> | </span>
                            <span class="text-white-50"><?=$latest->subject?></span>
                        </div>

                        <a href="<?=base_url('/'.$lang.'/blogs/'.$latest->uri.'/'.$latest->id)?>"><h3 class="mb-4 "><?=$latest->title?></h3></a>
                        <a href="<?=base_url('/'.$lang.'/blogs/'.$latest->uri.'/'.$latest->id)?>" class="learn-more text-uppercase text-sm"><i class="ti-arrow-right mr-2"></i>Learn more</a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<footer class="footer border-top-1">
    <div class="container">
        <div class="row align-items-center text-center text-lg-left">
            <div class="col-lg-2">
                <h2 class="logo mb-4">A. Bozkuş</h2>
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

<!--
   Essential Scripts
   =====================================-->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- Main jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4.3.1 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/popper.js')?>"></script>
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/nav/jquery.easing.1.3.js')?>"></script>

<!-- Slick Slider -->
<script src="<?=base_url('assets/plugins/slick-carousel/slick/slick.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/owl/owl.carousel.min.js')?>"></script>

<!-- Skill COunt -->
<script src="<?=base_url('assets/plugins/counto/apear.js')?>"></script>
<script src="<?=base_url('assets/plugins/counto/counTo.js')?>"></script>
<!-- AOS Animation -->
<script src="<?=base_url('assets/plugins/aos/aos.js')?>"></script>

<script src="<?=base_url('assets/dist/js/script.js')?>"></script>
<script src="<?=base_url('assets/dist/js/ajax-contact.js')?>"></script>

</body>
</html>