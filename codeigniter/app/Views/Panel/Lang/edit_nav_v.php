<form action="<?=base_url('admin/update_langs')?>" method="post" id = "form">
    <img src="<?=base_url('assets/dist/img/info/nav.png')?>" alt="" style="max-width: 100%">
    <p></p>
    <div class="form-group" style="width:200px;">
        <select class="form-control" name="langs" id ="langs">
            <?php foreach ($current_langs as $current_lang):?>
                <option value="<?=$current_lang?>"><?=strtoupper($current_lang)?></option>
            <?php endforeach;?>
        </select>
    </div>
    <p></p>
    <h3>(Aşağıya sayfada görülmesini istediğiniz kelimeleri yazınız)</h3>
    <br>
    <hr id = "navhr">
    <div class="container" id = "formelements">
        <div class="row">
            <div class="col-lg-3">
                <label for="home">Ana Sayfa</label><br>
                <input class="form-control" required="required" name="Home" id = "home" type="text" value="<?=$content['Nav']['Home']?>"><br>
                <br>

                <label for="about">Hakkımda</label><br>
                <input class="form-control" required="required" name = "About" id = "about" type="text" value="<?=$content['Nav']['About']?>">
                <hr>
            </div>
            <div class="col-lg-3">
                <label for="expertise">Uzmanlık</label><br>
                <input class="form-control" required="required" name = "Expertise" id = "expertise" type="text" value="<?=$content['Nav']['Expertise']?>"><br>
                <br>

                <label for="services">Hizmetler</label><br>
                <input class="form-control" required="required" name = "Services" id = "services" type="text" value="<?=$content['Nav']['Services']?>">
                <hr>
            </div>
            <div class="col-lg-3">
                <label for="portfolio">Portfolyo</label><br>
                <input class="form-control" required="required" name="Portfolio" id = "portfolio" type="text" value="<?=$content['Nav']['Portfolio']?>"><br>
                <br>

                <label for="blog">Blog</label><br>
                <input class="form-control" required="required" name="Blog" id = "blog" type="text" value="<?=$content['Nav']['Blog']?>">
                <hr>
            </div>
            <div class="col-lg-3">
                <label for="contact">İletişim</label><br>
                <input class="form-control" required="required" name="Contact" id = "contact" type="text" value="<?=$content['Nav']['Contact']?>"><br>
                <hr>
                <br>
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