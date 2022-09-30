<style>
  .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
      background-color: #ffffff;
  }
  /* .skin-blue .sidebar-menu>li.menu-open>a {
    /* color: #fff;
    background: #26c6da; */
  /* } */ 
  .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
    color: #fff;
    background: #26c6da;
    border-radius: 5px;
    box-shadow: 0 0 10px rgb(0 0 0 / 20%);
    display: flex;
    align-items: center;
  }
  .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover{
    color: #212529;
    font-weight: 500;
  }
  .skin-blue .sidebar-menu>li>.treeview-menu{
    background-color: #ffffff;
    line-height: 20px;
  }
  body{
    font-size: 14px;
    line-height: 0.9;
  }
  .sidebar-menu {
    margin: 10px;
  }
  .treeview-menu>li>a {
    padding: 5px 5px 5px 15px;
    display: block;
    font-size: 14px;
  }
  .skin-blue .sidebar a {
      color: #607d8b;
  }
  .skin-blue .sidebar  {
      line-height: 22px;
  }

  
</style>

<ul class="sidebar-menu" data-widget="tree">
  <!-- <li class="header">MAIN NAVIGATION</li> -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Painel Master</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('#'); ?>"><i class="fa fa-circle-o"></i> Bloqueio</a></li>
      <li><a href="<?php echo $this->Url->build('#'); ?>"><i class="fa fa-circle-o"></i> Configurações de Acesso</a></li>
      <li><a href="<?php echo $this->Url->build('#'); ?>"><i class="fa fa-circle-o"></i> Cotações</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Cadastro</span>
      <span class="pull-right-container">
        <!-- <span class="label label-primary pull-right">4</span> -->
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/cad-enderecos'); ?>"><i class="fa fa-circle-o"></i>Endereços</a></li>
      <li><a href="<?php echo $this->Url->build('/cad-blocos'); ?>"><i class="fa fa-circle-o"></i>Blocos</a></li>
      <li><a href="<?php echo $this->Url->build('/cad-condominios'); ?>"><i class="fa fa-circle-o"></i>Condomínio</a></li>
      <li><a href="<?php echo $this->Url->build('/cad-ambientes'); ?>"><i class="fa fa-circle-o"></i>Ambiente</a></li>
      <li><a href="<?php echo $this->Url->build('/cad-apartamentos'); ?>"><i class="fa fa-circle-o"></i>Apartamentos</a></li>
      <li><a href="<?php echo $this->Url->build('/cad-fornecedores'); ?>"><i class="fa fa-circle-o"></i>Fornecedor</a></li>
      <li><a href="<?php echo $this->Url->build('/cad-usuarios'); ?>"><i class="fa fa-circle-o"></i>Usuário</a></li>
    </ul>
  </li>
  <!-- <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Layout Options</span>
      <span class="pull-right-container">
        <span class="label label-primary pull-right">4</span>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/layout/top-nav'); ?>"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/layout/boxed'); ?>"><i class="fa fa-circle-o"></i> Boxed</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/layout/fixed'); ?>"><i class="fa fa-circle-o"></i> Fixed</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/layout/collapsed-sidebar'); ?>"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
    </ul>
  </li> -->
  <!-- <li>
    <a href="<?php echo $this->Url->build('/pages/widgets'); ?>">
      <i class="fa fa-th"></i> <span>Widgets</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">new</small>
      </span>
    </a>
  </li> -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Financeiro</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/cad-lancamentos'); ?>"><i class="fa fa-circle-o"></i>Lançamentos</a></li>
      <!-- <li><a href="<?php echo $this->Url->build('/pages/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
    </ul>
  </li>
  <!-- <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Charts</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
    </ul>
  </li> -->
  <!-- <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>UI Elements</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/ui/general'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/ui/icons'); ?>"><i class="fa fa-circle-o"></i> Icons</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/ui/buttons'); ?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/ui/sliders'); ?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/ui/timeline'); ?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/ui/modals'); ?>"><i class="fa fa-circle-o"></i> Modals</a></li>
    </ul>
  </li> -->
  <!-- <li class="treeview">
    <a href="#">
      <i class="fa fa-edit"></i> <span>Forms</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/pages/forms/general'); ?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/forms/advanced'); ?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/forms/editors'); ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
    </ul>
  </li> -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-table"></i> <span>Relátórios</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/rel-acessos'); ?>"><i class="fa fa-circle-o"></i>Acessos</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-bike'); ?>"><i class="fa fa-circle-o"></i>Bike</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-receitasacademia'); ?>"><i class="fa fa-circle-o"></i>Receitas da Academia</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-logs'); ?>"><i class="fa fa-circle-o"></i>Relatório de Logs</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-geral'); ?>"><i class="fa fa-circle-o"></i>Relatório Geral</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-reservas'); ?>"><i class="fa fa-circle-o"></i>Reservas</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-cancelados'); ?>"><i class="fa fa-circle-o"></i>Reservas Canceladas</a></li>
      <li><a href="<?php echo $this->Url->build('/rel-veiculo'); ?>"><i class="fa fa-circle-o"></i>Veiculo</a></li>
    </ul>
  </li>
  <!-- <li>
    <a href="<?php echo $this->Url->build('/pages/calendar'); ?>">
      <i class="fa fa-calendar"></i> <span>Calendar</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-red">3</small>
        <small class="label pull-right bg-blue">17</small>
      </span>
    </a>
  </li> -->
  <!-- <li>
    <a href="<?php echo $this->Url->build('/pages/mailbox/mailbox'); ?>">
      <i class="fa fa-envelope"></i> <span>Mailbox</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-yellow">12</small>
        <small class="label pull-right bg-green">16</small>
        <small class="label pull-right bg-red">5</small>
      </span>
    </a>
  </li> -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-folder"></i> <span>Controles</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <!-- <li><a href="<?php echo $this->Url->build('/pages/examples/invoice'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/login'); ?>"><i class="fa fa-circle-o"></i> Login</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/register'); ?>"><i class="fa fa-circle-o"></i> Register</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/lockscreen'); ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/404'); ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/500'); ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/blank'); ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
      <li><a href="<?php echo $this->Url->build('/pages/examples/pace'); ?>"><i class="fa fa-circle-o"></i> Pace Page</a></li> -->
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-share"></i> <span>Site Portal</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Banner</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Conteúdo</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Layout Geral</a></li>
    </ul>
  </li>
  <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li> -->
</ul>
