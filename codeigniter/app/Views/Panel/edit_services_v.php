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
                            <li class="breadcrumb-item active">Hizmetler</li>
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
                                <div>
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
                                    <form action="<?= base_url('admin/update_services')?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group" style="width:200px;">
                                            <select class="form-control" name="langs" id ="langs">
                                                <?php foreach ($current_langs as $current_lang):?>
                                                    <option value="<?=$current_lang?>"><?=strtoupper($current_lang)?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <p></p>
                                        <img src="<?php echo base_url('assets/dist/img/info/servicesinfo.png')?>" style="width: 80%;height: 80%" alt="">
                                        <br>
                                        <br>
                                        <button type="button" id = "appendButton" class ="btn btn-success btn-sm">ekle</button>
                                        <?php foreach ($services as $key=>$service):?>
                                        <div class="modal-body row" id = "<?=$key?>">
                                                <div class="col-md-6">
                                                    <label for="header<?=$key?>">Başlık</label><br>
                                                    <input class ="form-control" id="header<?=$key?>" name="header<?=$key?>" type="text" value="<?= $service->header?>" required="required"> <br>
                                                    <label for="desc<?=$key?>">Açıklama</label> <br>
                                                    <textarea class="editor" id="desc<?=$key?>" name = "desc<?=$key?>" cols="150" rows="5" style="max-width: 100%;" maxlength="65535" required="required"><?=$service->desc?></textarea>
                                                    <br>
                                                </div>
                                                <div class="col-md-6" >
                                                    <label for="icon<?=$key?>">İkon</label><br>
                                                    <input class = "form-control icon" id="icon<?=$key?>" name="icon<?=$key?>" value="<?=html_entity_decode($service->icon)?>" type="text" required="required">
                                                    <!-- Default dropright button -->
                                                    <div class="btn-group dropright">
                                                        <button id="what-is" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;width: 20px;height: 20px;padding: 0px;border: none">
                                                            <i class="fa-regular fa-circle-question" style="color: black"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="width: 380px;height: 100px">
                                                            <a href="https://fontawesome.com/search" target="_blank">Fontawesome</a> üzerinden bir ikon seçerek <?=htmlentities('<i class="fa-solid fa-house"></i>')?> gibi gözüken etiket kısmını kopyalayıp "ikon" kısmına yapıştırın.
                                                        </div>
                                                    </div>
                                                    <button type="button" class = "deleteButton btn btn-danger btn-sm" id="d<?=$key?>" style="position: absolute;top: 90%;left: 90%">Sil</button>
                                                </div>
                                        </div>
                                            <hr id="hr<?=$key?>">
                                            <br>
                                        <p></p>
                                        <?php endforeach;?>
                                        <input id="submitButton" type="submit" class = "btn btn-primary btn-sm" style="position: absolute;right: 10px;bottom: 10px">
                                    </form>
                                    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
                                    <script>
                                        $(function(){
                                            $(".editor").each(function (){
                                                ClassicEditor
                                                    .create( document.querySelector( `#${(this).id}` ), {
                                                        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
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
                                                    url: '<?= base_url("admin/edit_services/getContent/")?>' + lang,
                                                    success: function (data){
                                                        window.location=this.url;
                                                    }
                                                })
                                            })

                                            //Add and remove buttons functionality
                                            var len = <?php echo count($services)?>;
                                            $('#appendButton').click(function (){
                                                var content =
                                                    `
                                                <div class="modal-body row" id = "${len}">
                                                    <div class="col-md-6">
                                                        <label for="header${len}">Başlık</label><br>
                                                        <input class ="form-control" id="header${len}" name="header${len}" type="text" required="required"> <br>
                                                        <label for="desc${len}">Açıklama</label> <br>
                                                        <textarea class="editor" id="desc${len}" name = "desc${len}" cols="150" rows="5" style="max-width: 100%;" maxlength="65535" required="required"></textarea>
                                                        <br>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="icon${len}">İkon</label><br>
                                                        <input class = "form-control icon" id="icon${len}" name="icon${len}" type="text" required="required">
                                                        <!-- Default dropright button -->
                                                        <div class="btn-group dropright">
                                                            <button id="what-is" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;width: 20px;height: 20px;padding: 0px;border: none">
                                                                <i class="fa-regular fa-circle-question" style="color: black"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="width: 380px;height: 100px">
                                                                <a href="https://fontawesome.com/search" target="_blank">Fontawesome</a> üzerinden bir ikon seçerek <?=htmlentities('<i class="fa-solid fa-house"></i>')?> gibi gözüken etiket kısmını kopyalayıp "ikon" kısmına yapıştırın.
                                                            </div>
                                                        </div>
                                                        <button type="button" class = "deleteButton btn btn-danger btn-sm" id="d${len}" style="position: absolute;top: 90%;left: 90%">Sil</button>
                                                    </div>
                                                </div>
                                                <hr id="hr${len}">
                                                <br>
                                                <p></p>
                                                    `
                                                $('#submitButton').before(content)
                                                ClassicEditor
                                                    .create( document.querySelector( `#desc${len}` ), {
                                                        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
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
                                                $('#hr'+e.target.id.substr(1)).remove();
                                            })
                                        })
                                    </script>

                                </div>
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
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4.3.1 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>
</html>
