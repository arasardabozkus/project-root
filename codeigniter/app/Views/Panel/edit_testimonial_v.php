<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
    <!-- custom fontawesome -->
    <script src="https://kit.fontawesome.com/6c15ee0292.js" crossorigin="anonymous"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo base_url('admin/panel')?>" class="nav-link">Ana Sayfa</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url('admin/panel')?>" class="brand-link">
            <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">PARS ASSA</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Sayfaları Yönet
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('admin/pages')?>" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sayfalar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/langs/content/tr/edit_langs_v')?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Diller</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/admin_langs')?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dilleri Yönet</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/edit_blogs/tr')?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blogları Yönet</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/edit_portfolios/tr')?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Portfolyoları Yönet</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-address-card"></i>
                            <p>
                                İletişim
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('admin/edit_contacts')?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Linkler</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('admin/messages/read_messages')?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Mesajlar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin/panel')?>">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Sayfalar</li>
                            <li class="breadcrumb-item active">Referanslar</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <?php if(session()->has('updateStatus')):?>
                                    <?php if(session()->getFlashdata('updateStatus')[0]):?>
                                        <div class="alert alert-success" role="alert">
                                            <?=session()->getFlashdata('updateStatus')[1]?>
                                        </div>
                                    <?php else:?>
                                        <div class="alert alert-danger" role="alert">
                                            <?=session()->getFlashdata('updateStatus')[1]?>
                                        </div>
                                    <?php endif;?>
                                <?php endif;?>
                                <form method="post" action="<?php echo base_url('admin/update_testimonial')?>">
                                    <div class="form-group" style="width:200px;">
                                        <select class="form-control" name="langs" id ="langs">
                                            <?php foreach ($current_langs as $current_lang):?>
                                                <option value="<?=$current_lang?>"><?=strtoupper($current_lang)?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <p></p>
                                    <img src="<?php echo base_url('assets/dist/img/info/testimonial.png')?>" style="width: 100%;height: 100%" alt="">
                                    <br>
                                    <br>
                                    <button type="button" id = "appendButton" class="btn btn-success btn-sm">Ekle</button>
                                    <br>
                                    <br>
                                    <?php foreach ($testimonials as $key=>$testimonial):?>
                                        <div id="<?=$key?>">
                                            <label for="name<?=$key?>">İsim-soyisim</label>
                                            <br>
                                            <input class="form-control" id="name<?=$key?>" name = "name<?=$key?>" type="text" value="<?=$testimonial->name?>" required="required">
                                            <br>
                                            <br>
                                            <label for="job<?=$key?>">Meslek</label>
                                            <br>
                                            <input class="form-control" id="job<?=$key?>" name = "job<?=$key?>" type="text" value="<?=$testimonial->field?>" required="required">
                                            <br>
                                            <br>
                                            <label for="quote<?=$key?>">Alıntı</label>
                                            <br>
                                            <textarea class="editor" name="quote<?=$key?>" required="required" id="quote<?=$key?>" cols="50" rows="10" maxlength="65535" style="max-width: 100%"><?=$testimonial->quote?></textarea>
                                            <br>
                                            <br>
                                            <button type="button" class = "deleteButton btn btn-danger btn-sm" id="d<?=$key?>">Sil</button>
                                            <hr>
                                        </div>
                                    <?php endforeach;?>
                                    <br>
                                    <p></p>
                                    <input id="submitButton" type="submit" class="btn btn-primary btn-sm" style="position: absolute;right: 10px;bottom: 10px">
                                </form>
                                <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
                                <script>
                                    $(function(){
                                        $(".editor").each(function (){
                                            ClassicEditor
                                                .create( document.querySelector( `#${(this).id}` ), {
                                                    toolbar: [ 'heading', '|', 'bold', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                                                    heading: {
                                                        options: [
                                                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                                                        ]
                                                    }
                                                } )
                                                .catch( error => {
                                                    console.log( error );
                                                } );
                                        })
                                        $('#langs option[value="<?php echo $lang?>"]').attr("selected",true);
                                        var lang = $('#langs :selected').text().toLowerCase();
                                        $('#langs').change(function (){
                                            var lang = $('#langs :selected').text().toLowerCase();
                                            $.ajax({
                                                type: 'GET',
                                                url: '<?= base_url("admin/edit_testimonial/getContent/")?>' + lang,
                                                success: function (data){
                                                    window.location = this.url;
                                                }
                                            })
                                        })

                                        //Add and remove buttons functionality
                                        var len = <?php echo count($testimonials)?>;
                                        $('#appendButton').click(function (){
                                            var content = `
                                            <div id="${len}">
                                                <label for="name${len}">İsim-soyisim</label>
                                                <br>
                                                <input class="form-control" id="name${len}" name = "name${len}" type="text" required="required">
                                                <br>
                                                <br>
                                                <label for="job${len}">Meslek</label>
                                                <br>
                                                <input class="form-control" id="job${len}" name = "job${len}" type="text" required="required">
                                                <br>
                                                <br>
                                                <label for="quote${len}">Alıntı</label>
                                                <br>
                                                <textarea class="editor" name="quote${len}" required="required" id="quote${len}" cols="50" rows="10" maxlength="65535" style="max-width: 100%"></textarea>
                                                <br>
                                                <br>
                                                <button type="button" class = "deleteButton btn btn-danger btn-sm" id="d${len}">Sil</button>
                                                <hr>
                                            </div>`
                                            $('#submitButton').before(content)
                                            ClassicEditor
                                                .create( document.querySelector( `#quote${len}` ), {
                                                    toolbar: [ 'heading', '|', 'bold', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                                                    heading: {
                                                        options: [
                                                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                                                        ]
                                                    }
                                                } )
                                                .catch( error => {
                                                    console.log( error );
                                                } );
                                            len++;
                                        });
                                        $(document).on('click','.deleteButton',function (e){
                                            $('#'+e.target.id.substr(1)).remove();
                                        })
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Dijital Reklam ve Yazılım Hizmetleri
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2023 <a href="https://www.assadigital.com.tr/">ASSA Digital & Creative</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>
</html>
