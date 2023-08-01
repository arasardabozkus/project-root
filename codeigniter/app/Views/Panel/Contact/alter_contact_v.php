<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"></div>
            <form action="submit_alter_c" method="post" style="margin-left: 50px">
                <div class="form-group" style="width: 75%">
                    <label for="name">Platform</label><br>
                    <input class="form-control" id ="name" name="name" required="required" type="text" value="<?=$contact->name?>"><br><br>
                    <input class="form-control" type="hidden" name="id" required="required" value="<?=$contact->id?>">

                    <label for="link">Link</label><br>
                    <input class="form-control" id="link" name="link" required="required" type="text" value="<?=$contact->link?>"><br><br>

                    <label for="onTop">Üstte Gözüksün mü? (3-4 taneden fazla yapmak sayfa görünüşünü etkileyebilir)</label><br>
                    <select class="form-control" name="onTop" id="onTop">
                        <option value="1">EVET</option>
                        <option value="0">HAYIR</option>
                    </select>
                    <br>
                    <br>

                    <label for="icon">İkon</label><br>
                    <input class="form-control" id="icon" name="icon" type="text" required="required" value="<?=$contact->icon?>">
                    <!-- Default dropright button -->
                    <div class="btn-group dropright">
                        <button id="what-is" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;width: 20px;height: 20px;padding: 0px;border: none">
                            <i class="fa-regular fa-circle-question" style="color: black"></i>
                        </button>
                        <div class="dropdown-menu" style="width: 380px;height: 100px">
                            <a href="https://fontawesome.com/search" target="_blank">Fontawesome</a> üzerinden bir ikon seçerek <?=htmlentities('<i class="fa-solid fa-house"></i>')?> gibi gözüken etiket kısmını kopyalayıp "ikon" kısmına yapıştırın.
                        </div>
                    </div>
                    <br><br>
                    <input type="submit" class="btn btn-primary btn-sm" style="position: absolute;right: 10px;bottom: 10px">
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(function (){
        $('#onTop option[value="<?php echo $contact->onTop?>"]').attr("selected",true);
    })
</script>