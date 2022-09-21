<div class="section mt-3 text-center">
    <div class="avatar-section">
        <a href="#">
            <img id="imageProfile" src="../assets/uploads/imagens/usuario/<?= $usuario['imagem'] ?>" alt="avatar" class="imaged w100 rounded" style="object-fit: cover;object-position: center;height: 100px;">
            <span class="button" id="btn-update-usuario_imagem">
                <i class="fas fa-camera" style="font-size:0.8rem"></i>
            </span>
            <input type="file" id="usuario_imagem" data-pasta="usuario" name="imagem" style="display:none" />
        </a>
    </div>
</div>