<style>
    .buttonAtt {
        cursor: pointer;
        margin: 0
    }

    .inputUpdate {
        width: 100%;
        border: none;
        border-bottom: 1px solid #ddd;
    }
</style>


<ul class="listview image-listview text mb-2">
    <li class="updateItem">
        <a href="#" class="item" id="btn-att-senha">
            <div class="in">
                <div>Alterar Senha</div>
                <p id="btn_altera-senha" class="buttonAtt" style="display:none;">
                    <i class="fas fa-pen" ></i>Atualizar
                </p>
            </div>
        </a>
        <div class="div_altera_morador" id="div-senha_morador" style="display:none">
            <input type="password" id="senha_morador" value="<?= $usuario['senha'] ?>"  class="form-control" />
            <input type="hidden" id="senha_acao" value="editSenha" />

        </div>
    </li>
    <li>
        <a href="assets/php/logout.php" class="item">
            <div class="in">
                <div>Sair</div>
            </div>
        </a>
    </li>
</ul>