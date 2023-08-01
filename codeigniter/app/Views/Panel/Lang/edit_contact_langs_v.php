<form action="<?=base_url('admin/update_langs')?>" method="post" id = "form">
    <img src="<?=base_url('assets/dist/img/info/contact_langs.png')?>" alt="" style="max-width: 100%">
    <p></p>
    <div class="form-group" style="width:200px;">
        <select class="form-control" name="langs" id ="langs">
            <?php foreach ($current_langs as $current_lang):?>
                <option value="<?=$current_lang?>"><?=strtoupper($current_lang)?></option>
            <?php endforeach;?>
        </select>
    </div
    <p></p>
    <h3>(Aşağıya sayfada görülmesini istediğiniz kelimeleri yazınız)</h3>
    <br>
    <hr id = "navhr">
    <div class="container" id = "formelements">
        <div class="row">
            <div class="col-lg-3">
                <label for="header">Başlık</label><br>
                <input class="form-control" required="required" name="Header" id = "header" type="text" value="<?=$content['GetInTouch']['Header']?>"><br>
                <br>

                <label for="title">Açıklama(Title)</label><br>
                <input class="form-control" required="required" name = "Title" id = "title" type="text" value="<?=$content['GetInTouch']['Title']?>">
                <hr>
            </div>
            <div class="col-lg-3">
                <label for="yourname">İsminiz</label><br>
                <input class="form-control" required="required" name = "YourName" id = "yourname" type="text" value="<?=$content['GetInTouch']['YourName']?>"><br>
                <br>

                <label for="yourmail">Mailiniz</label><br>
                <input class="form-control" required="required" name = "YourMail" id = "yourmail" type="text" value="<?=$content['GetInTouch']['YourMail']?>">
                <hr>
            </div>
            <div class="col-lg-3">
                <label for="yoursubject">Konu</label><br>
                <input class="form-control" required="required" name="YourSubject" id = "yoursubject" type="text" value="<?=$content['GetInTouch']['YourSubject']?>"><br>
                <br>

                <label for="yourmessage">Mesajınız</label><br>
                <input class="form-control" required="required" name="YourMessage" id = "yourmessage" type="text" value="<?=$content['GetInTouch']['YourMessage']?>">
                <hr>
            </div>
            <div class="col-lg-3">
                <label for="sendmessage">Gönder (Submit)</label><br>
                <input class="form-control" required="required" name="SendMessage" id = "sendmessage" type="text" value="<?=$content['GetInTouch']['SendMessage']?>"><br>
                <br>
                <hr>
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-sm" style="position:absolute;;right: 10px;bottom: 10px">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(function (){
            $('#langs option[value="<?php echo $lang?>"]').attr("selected",true);
            var lang = $('#langs :selected').text().toLowerCase();
            var view = $('#pages :selected').val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url("admin/langs/content/")?>' + lang + "/" + view,
                success: function (data){
                    $('#formelements').remove();
                    $('#navhr').after($(data).find('#formelements'));
                }
            })

            $('#langs').change(function (){
                var view = $('#pages :selected').val();
                var lang = $('#langs :selected').text().toLowerCase();
                $.ajax({
                    type: 'GET',
                    url: '<?= base_url("admin/langs/content/")?>' + lang + "/" + view,
                    success: function (data){
                        $('#formelements').remove();
                        $('#navhr').after($(data).find('#formelements'));
                    }
                })
            })

        })
    </script>
</form>