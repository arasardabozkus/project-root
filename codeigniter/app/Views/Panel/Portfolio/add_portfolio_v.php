<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"></div>
            <form action="<?=base_url('admin/submit_portfolio')?>" method="post" style="margin-left: 50px" enctype="multipart/form-data">
                <div class="form-group" style="width:200px;">
                    <select class="form-control" name="langs" id ="langs">
                        <?php foreach ($current_langs as $current_lang):?>
                            <option value="<?=$current_lang?>"><?=strtoupper($current_lang)?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <br>
                <br>
                <div class="form-group" style="width: 75%">
                    <label for="title">Başlık</label> <br>
                    <input class="form-control" id ="title" name="title" type="text" style="width: 50%"> <br> <br>

                    <label for="category">Kategori</label><br>
                    <input class="form-control" id="category" name="category" type="text" style="width: 50%"><br><br>

                    <label for="startDate">Proje Başlangıç Tarihi</label><br>
                    <input class="form-control" id="startDate" name="startDate" type="date"><br><br>

                    <label for="budget">Proje Bütçesi</label><br>
                    <input class="form-control" id="budget" name="budget" type="number" min="0">
                    <label for="currency"></label>
                    <select class="form-control" name="currency" id="currency">
                        <option value="tl">TL</option>
                        <option value="usd">DOLAR</option>
                        <option value="eur">EURO</option>
                    </select>
                    <br><br>

                    <label for="client">Müşteri-Partner</label><br>
                    <input class="form-control" id="client" name="client" type="text"><br><br>

                    <label for="duration">Proje süresi (Ör: 2 Hafta)</label><br>
                    <input class="form-control" id="duration" name = duration type="text"><br><br>

                    <label for="editor">Ana İçerik</label><br>
                    <textarea id="editor" name="text"  cols="60" rows="30" style="max-width: 100%"></textarea>
                    <br><br>

                    <label for="mainimg">Portfolyo ana resmi (PNG,JPG veya JPEG, resim koymak istemiyorsanız bu kısmı boş bırakın. Önerilen 900x600)</label>
                    <br>
                    <input id="mainimg" name="mainimg" required="required" type="file">
                    <br>
                    <br>

                    <label for="pageimg">Portfolyo sayfası resmi (Önerilen 780x499)</label>
                    <br>

                    <input type="file" id="pageimg" required="required" name="pageimg">
                    <br>

                    <input type="submit" class="btn btn-primary btn-sm" style="position: absolute;right: 10px;bottom: 10px">
                </div>
            </form>
            <br>
        </div>
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