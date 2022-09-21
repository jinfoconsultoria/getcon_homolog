<div class="listview-title mt-1">Notificações</div>
<ul class="listview image-listview text">
    <li>
        <div class="item">
            <div class="in">
                <div>
                    Notificações de Email
                    <div class="text-muted">
                        Ative para receber notificações do condominio pelo email cadastrado
                    </div>
                </div>
                <div class="custom-control custom-switch">
                    <?php
                    $statusMsg = $usuario['recebe_mensagens'];

                    if ($usuario['recebe_mensagens'] === 'sim') {
                        echo "<input type='checkbox' class='custom-control-input' id='msgEmailMorador' value='$statusMsg' checked/>";
                    } else {
                        echo "<input type='checkbox' class='custom-control-input' id='msgEmailMorador' value='$statusMsg'  />";
                    }
                    ?>

                    <label class="custom-control-label" for="msgEmailMorador"></label>
                </div>
            </div>
        </div>
    </li>
</ul>