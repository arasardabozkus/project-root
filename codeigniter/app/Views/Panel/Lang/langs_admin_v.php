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
    <!-- Custom Selectable Card -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/custom-selectable.css')?>">
    <!-- font-awesome -->
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
                                <a href="<?php echo base_url('admin/pages')?>" class="nav-link">
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
                                <a href="<?=base_url('admin/admin_langs')?>" class="nav-link active">
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
                            <li class="breadcrumb-item active">Dilleri Yönet</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
                <?php if(session()->has('updateStatus')):?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('updateStatus')?>
                    </div>
                <?php endif;?>
                <?php foreach ($current_langs as $key=>$lang):?>
                    <div class="row" id="r<?=$key?>">
                        <div class="col-12">
                            <p></p>
                            <div class="custom-selectable card" id="d<?=$key?>">
                                <div class="card-body" style="display: flex;flex-direction: column">
                                    <h2 class="card-title" id = "h<?=$key?>"><?=$lang?></h2>
                                    <p id = "<?=$key?>"></p>
                                    <input id="c<?=$key?>" type="checkbox" style="width: 10px">
                                    <script>
                                        $(function (){
                                            $.ajax({
                                                type: "GET",
                                                url:"<?=base_url('admin/get_header/'.$lang)?>",
                                                success: function (data){
                                                    $('#<?=$key?>').after($(data));
                                                }
                                            })
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                <?php endforeach;?>
                <script>
                    $(function (){
                        $('div.custom-selectable').click(function (){
                            var id = '#c'+(this).id.substr(1)
                            $(id).prop('checked',!$(id).is(':checked'))
                        })
                        $('#addButton').click(function (){
                            var lastrow = '#r' + "<?=count($current_langs)-1?>"
                            var content = `
                                <div class="row">
                                    <div class="col-12">
                                        <p></p>
                                        <div class="custom-selectable card" id="">
                                            <div class="card-body" style="display: flex;flex-direction: column">
                                                <form action="<?=base_url('admin/add_lang')?>" method="post">
                                                    <div class="form-group" style="width:200px">
                                                        <label for="abbr">Kısaltma (max 2 harf)</label><br>
                                                        <input class= "form-control" id = "abbr" required=required name="abbr" type="text" maxlength="2"><br>
                                                        <label for="langname">Dil ismi</label><br>
                                                        <input class= "form-control" id="langname" required=required name="langname" type="text"><br>
                                                        <p></p>
                                                        <input type="submit" class="btn btn-primary btn-sm">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /.col-md-6 -->
                                </div>
                            `
                            $(lastrow).after(content)
                            $(this).remove();
                        })
                        $('#rmButton').click(function (){
                            for (var i =0;i<<?=count($current_langs)?>;i++){
                                if($('#c'+i).is(':checked')){
                                    var lang = $('#h'+i).text();
                                    if(confirm(lang + ' dilini sileceksiniz, devam etmek istiyor musunuz?')){
                                        $.ajax({
                                            type: "GET",
                                            url:"<?=base_url('admin/rm_lang/')?>"+lang,
                                            success:function (){
                                                location.reload();
                                            }
                                        })
                                    }
                                }
                            }
                        })
                    })

                </script>
                <!-- /.row -->
                <div class="row">
                    <div class="col-4"><button type="button" class="btn btn-success btn-sm" id="addButton"><i class="fa-solid fa-plus"></i></button></div>
                    <div class="col-4"><a href="<?=base_url('admin/langs/content/tr/edit_langs_v')?>" style="font-size: 1.8em"><i class="fa-solid fa-pen-to-square"></i></a></div>
                    <div class="col-4"><button type="button" class="btn btn-danger btn-sm" id="rmButton"><i class="fa-solid fa-trash"></i></button></div>
                </div>
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
