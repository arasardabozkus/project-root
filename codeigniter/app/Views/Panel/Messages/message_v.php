<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="font-weight: bold">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">İsim - Email</th>
                        <th scope="col">Konu</th>
                        <th scope="col">Tarih</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="custom-selectable">
                        <td><?=$message->name?>  - <br><?=$message->mail?></td>
                        <td><?=$message->subject?></td>
                        <td><?=$message->time?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <div style="padding: 30px">
                <?=$message->message?>
            </div>
        </div>
    </div>
</div>