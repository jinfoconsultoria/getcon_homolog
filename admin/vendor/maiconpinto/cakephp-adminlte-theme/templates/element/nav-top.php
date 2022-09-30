<?php use Cake\Core\Configure; ?>

<style>
  .navbar-nav>li>a {
    padding-top: 0px;
    padding-bottom: 10px;
    line-height: 41px;
}

.skin-blue .main-header .navbar {
    background-color: #1e88e5;
}

.skin-blue .main-header .logo {
    background-color: #1e88e5;
}
</style>
<nav class="navbar navbar-static-top">

  <?php if (isset($layout) && $layout == 'top'): ?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- /.navbar-collapse -->
  <?php else: ?>
  <?php endif; ?>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="hidden-xs">Alexander Pierce</span>
        </a>
      </li>
      <li>
        <a href="#">
          <img class="imagem-perfil" src="assets/uploads/imagens/usuario/1619617757.jpg">
        </a>
      </li>
    </ul>
  </div>

  <?php if (isset($layout) && $layout == 'top'): ?>
  
  <?php endif; ?>
</nav>


<!-- <li class="nav-item">
				<div style="display:flex;flex-direction:row">
					<p class="m-2 nome-perfil">Leandro Ribeiro De Oliveira</p>	
					<img class="imagem-perfil" src="assets/uploads/imagens/usuario/1619617757.jpg">
					
					
				</div>
			</li> -->