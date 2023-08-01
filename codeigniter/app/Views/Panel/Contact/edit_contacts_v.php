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
<body class="hold-transition sidebar-mini" style="background-color: #F4F6F9">
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
                        <a href="#" class="nav-link">
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
                        <a href="#" class="nav-link active">
                            <i class="fa-solid fa-address-card"></i>
                            <p>
                                İletişim
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('admin/edit_contacts')?>" class="nav-link active">
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
                            <li class="breadcrumb-item active">Linkler</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
        <div class="content">
            <div class="container-fluid">
                <p id = "afterp"></p>
                <div id = "pageContent">
                    <?php if(session()->has('updateStatus')):?>
                        <?php if(!session()->getFlashdata('updateStatus')[0]):?>
                            <div class="alert alert-danger" role="alert">
                                <?=session()->getFlashdata('updateStatus')[1]?>
                            </div>
                        <?php else:?>
                            <div class="alert alert-success" role="alert">
                                <?=session()->getFlashdata('updateStatus')[1]?>
                            </div>
                        <?php endif;?>
                    <?php endif;?>
                    <div class="row">
                        <div class="col-4"><button type="button" class="btn btn-success btn-sm" id="addButton"><i class="fa-solid fa-plus"></i></button></div>
                        <div class="col-4"><button type="button" class="btn btn-info btn-sm" id="editButton"><i class="fa-solid fa-pen-to-square"></i></button></div>
                        <div class="col-4"><button type="button" class="btn btn-danger btn-sm" id="rmButton"><i class="fa-solid fa-trash"></i></button></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <thead id="head">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Platform</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">İkon</th>
                                </tr>
                                </thead>
                                <?php foreach ($contacts as $key=>$contact):?>
                                    <tr class="custom-selectable" id="<?=$key?>">
                                        <th scope="row"><input type="checkbox" id="c<?=$key?>"></th>
                                        <td id = "t<?=$key?>"><?=$contact->name?></td>
                                        <td style="display: none" id="p<?=$key?>"><?=$contact->id?></td>
                                        <td><?=$contact->link?></td>
                                        <td><?=html_entity_decode($contact->icon)?></td>
                                    </tr>
                                <?php endforeach;?>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <p id="contentsHidden" style="display: none"><?php print_r($contacts)?></p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(function (){
            $('tr.custom-selectable').on('click',function (){
                let id = '#c'+(this).id;
                $(id).prop('checked',!$(id).is(':checked'));
            });

            $('#addButton').click(function (){
                $.ajax({
                    type:"GET",
                    url:"<?=base_url('admin/add_contact')?>",
                    success: function (data){
                        $('#pageContent').remove();
                        $('#afterp').after(data);
                    }
                })
            });

            $('#editButton').click(function (){
                for (let i =0;i<<?=count($contacts)?>;i++){
                    if($('#c'+i).is(':checked')){
                        let id = $('#p'+i).text();
                        $.ajax({
                            type:"GET",
                            url:"<?=base_url('admin/alter_contact/')?>" + id,
                            async: false,
                            success: function (data){
                                $('#pageContent').remove();
                                $('#afterp').after(data);
                                i=<?=count($contacts)?>;
                            }
                        })
                    }
                }
            });

            $('#rmButton').click(function (){
                for (let i =0;i<<?=count($contacts)?>;i++){
                    if($('#c'+i).is(':checked')){
                        let title = $('#t'+i).text();
                        let id = $('#p'+i).text();
                        if(confirm(title + ' İsimli link silinecek, onaylıyor musunuz?')){
                            $.ajax({
                                type: "GET",
                                url:"<?=base_url('admin/delete_contact/')?>"+id,
                                success:function (){
                                    location.reload();
                                }
                            })
                        }
                    }
                }
            });

        })
    </script>

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
