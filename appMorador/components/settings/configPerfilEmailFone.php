<style>
    .buttonAtt {
        cursor: pointer;
        margin: 0
    }
    .inputUpdate{
        width:100%;
        border:none;
        border-bottom: 1px solid #ddd;
    }
    .error-email{
        color: var(--danger);
        margin-top: 10px;
    }
</style>

<ul class="listview image-listview text">

    <li class="updateItem">
        <a href="#" class="item" id="btn-att-fone">
            <div class="in">
                <div>Atualizar Telefone</div>
                <p class="buttonAtt" id="btn_altera-fone" style="display:none;">
                    <i class="fas fa-pen"></i>Atualizar
                </p>
            </div>
        </a>

        <div class="div_altera_morador" id="div-fone_morador" style="display:none">
            <input type="text" id="fone_morador" value="<?= $usuario['telefone'] ?>" class="form-control" />
            <input type="hidden" id="fone_acao" value="editFone" />

        </div>

    </li>
    <li class="updateItem">
        <a href="#" class="item" id="btn-att-email">
            <div class="in">
                <div>Atualizar Email</div>
                <p class="buttonAtt" id="btn_altera-email" style="display:none;">
                    <i class="fas fa-pen" ></i>Atualizar
                </p>
            </div>

        </a>
        <div class="div_altera_morador" id="div-email_morador" style="display:none">
            <input type="email" id="email_morador" value="<?= $usuario['email'] ?>" class="form-control"  />
            <input type="hidden" id="email_acao" value="editEmail" />

            <p class="error-email" style="display:none"> Digite um e-mail válido</p>
        </div>
    </li>
</ul>

<script>
    $(document).ready(function(){
        $("#fone_morador").mask('(00) 0 0000-0000')
    })
</script>