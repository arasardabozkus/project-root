<form action="<?=base_url('admin/update_langs')?>" method="post" id = "form">
    <img src="<?=base_url('assets/dist/img/info/testimonial_langs.png')?>" alt="" style="max-width: 100%">
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
            <div class="col-lg-4">
                <label for="testimonial">Referanslar (Testimonial)</label>
                <br>
                <input class="form-control" id="testimonial" name="TestimonialH" required="required" type="text" value="<?=$content['Testimonial']['TestimonialH']?>">
                <br>
                <p></p>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-4">
                <label for="title">Açıklama (Title)</label>
                <br>
                <input class="form-control" id="title" name="Title" required="required" type="text" value="<?=$content['Testimonial']['Title']?>">
                <br>
                <p></p>
            </div>

            <div class="col-lg-3">
                <br>
                <p></p>
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