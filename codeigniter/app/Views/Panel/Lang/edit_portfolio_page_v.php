<form action="<?=base_url('admin/update_langs')?>" method="post" id = "form">
    <img src="<?=base_url('assets/dist/img/info/portfolio_page_info.png')?>" alt="" style="max-width: 100%">
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
                <label for="created">Başlangıç Tarihi (Created)</label>
                <br>
                <input class="form-control" id="created" name="Created" required="required" type="text" value="<?=$content['PortfolioPage']['Created']?>">
                <br>
                <p></p>
                <label for="client">Müşteri (Client)</label>
                <br>
                <input class="form-control" id="client" name="Client" required="required" type="text" value="<?=$content['PortfolioPage']['Client']?>">
                <hr>
                <br>
                <p></p>
            </div>

            <div class="col-lg-4">
                <label for="budget">Bütçe</label>
                <br>
                <input class="form-control" id="budget" name="Budget" required="required" type="text" value="<?=$content['PortfolioPage']['Budget']?>">
                <br>
                <p></p>
                <label for="duration">Proje Süresi (Duration)</label>
                <br>
                <input class="form-control" id="duration" name="Duration" required="required" type="text" value="<?=$content['PortfolioPage']['Duration']?>">
                <hr>
                <br>
                <p></p>
            </div>

            <div class="col-lg-4">
                <label for="category">Kategori</label>
                <br>
                <input class="form-control" id="category" name="Category" required="required" type="text" value="<?=$content['PortfolioPage']['Category']?>">
                <hr>
                <br>
                <p></p>
            </div>
        </div>
        <br>
        <p></p>
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