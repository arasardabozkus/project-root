<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"></div>
            <form action="<?=base_url('admin/submit_alter_p')?>" method="post" style="margin-left: 50px" enctype="multipart/form-data">
                <div class="form-group" style="width: 75%">
                    <label for="title">Başlık</label> <br>
                    <input class="form-control" id ="title" name="title" type="text" style="width: 50%" value="<?=$content->title?>"> <br> <br>

                    <label for="category">Kategori</label><br>
                    <input class="form-control" id="category" name="category" type="text" style="width: 50%" value="<?=$content->category?>"><br><br>

                    <label for="startDate">Proje Başlangıç Tarihi</label><br>
                    <input class="form-control" id="startDate" name="startDate" type="date" value="<?=$content->projectDate?>"><br><br>

                    <label for="budget">Proje Bütçesi</label><br>
                    <input class="form-control" id="budget" name="budget" type="number" min="0" value="<?=$content->budget?>">
                    <label for="currency"></label>
                    <select class="form-control" name="currency" id="currency">
                        <option value="tl">TL</option>
                        <option value="usd">DOLAR</option>
                        <option value="eur">EURO</option>
                    </select>
                    <br><br>
                    <input class="form-control" type="hidden" name="id" value="<?=$content->id?>">

                    <label for="client">Müşteri-Partner</label><br>
                    <input class="form-control" id="client" name="client" type="text" value="<?=$content->client?>"><br><br>

                    <label for="duration">Proje süresi (Ör: 2 Hafta)</label><br>
                    <input class="form-control" id="duration" name = duration type="text" value="<?=$content->duration?>"><br><br>

                    <label for="editor">Ana İçerik</label><br>
                    <textarea id="editor" name="text"  cols="60" rows="30" style="max-width: 100%" maxlength="65535"><?=html_entity_decode($content->text)?></textarea>
                    <br><br>

                    <label for="mainimg">Portfolyo ana resmi (PNG,JPG veya JPEG, değiştirmek istemiyorsanız bu kısmı boş bırakın. Önerilen 900x600)</label>
                    <br>

                    <div class="row">
                        <div class="col-lg-4">
                            <input id="mainimg" name="mainimg" type="file">
                            <br>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <button type="button" id ="rmPicButton" class="btn btn-danger btn-sm">resmi sil</button>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                    <br>
                    <br>
                    <label for="pageimg">Portfolyo sayfası resmi (Önerilen 780x499)</label>
                    <br>

                    <div class="row">
                        <div class="col-lg-4">
                            <input type="file" id="pageimg" name="pageimg">
                            <br>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <button type="button" id ="rmPagePicButton" class="btn btn-danger btn-sm">resmi sil</button>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                    <br>

                    <input type="submit" class ="btn btn-primary btn-sm" style="position: absolute;right: 10px;bottom: 10px">
                </div>
            </form>
            <br>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script>
            $(function (){
                $('#currency option[value="<?php echo $content->budgetCurrency?>"]').attr("selected",true);
                $('#rmPicButton').click(function (){
                    $.ajax({
                        type:"GET",
                        url:"<?=base_url("admin/rm_pic_portfolio/".'portfolio_'.$content->id)?>",
                        success(){
                            alert('Resim başarıyla silindi!');
                        }
                    })
                });

                $('#rmPagePicButton').click(function (){
                    $.ajax({
                        type:"GET",
                        url:"<?=base_url("admin/rm_pic_portfolio/".'portfolio_page_'.$content->id)?>",
                        success(){
                            alert('Resim başarıyla silindi!');
                        }
                    })
                })
            })
        </script>

        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
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
        </script>
    </div>
</div>