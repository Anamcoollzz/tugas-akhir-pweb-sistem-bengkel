<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- navbar brand  -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?=base_url()?>"> Sistem Bengkel </a>
  </div>
  <!-- top nav -->
  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?=$_SESSION['username']?> </a>
      <ul class="dropdown-menu">
        <li>
          <a href="<?=base_url('profil')?>"><i class="glyphicon glyphicon-cog"></i> Profil</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="<?=base_url('keluar')?>"><i class=" glyphicon glyphicon-log-out"></i> Keluar</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- sidebar nav -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <?php 
      if($_SESSION['role'] != 'Kasir'){
        ?>
      <li <?php if($active == 'dasbor') echo 'class="active"'; ?>>
        <a href="<?=base_url('')?>"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
      </li>
      <li <?php if($active == 'akun') echo 'class="active"'; ?>>
        <a href="<?=base_url('akun')?>">
          <i class="glyphicon glyphicon-plus"></i> Akun
        </a>
      </li>
      <li <?php if($active == 'jenisTransaksi') echo 'class="active"'; ?>>
        <a href="<?=base_url('jenis-transaksi')?>">
          <i class="glyphicon glyphicon-list-alt"></i> Jenis Transaksi
        </a>
      </li>
      <?php 
    }
    ?>
      <li <?php if($active == 'profil') echo 'class="active"'; ?>>
        <a href="<?=base_url('profil')?>"><i class="glyphicon glyphicon-cog"></i> Profil </a>
      </li>
      <li>
        <a href="<?=base_url('keluar')?>"><i class="glyphicon glyphicon-log-out"></i> Keluar </a>
      </li>
    </div>
    <!-- end of navbar -->
  </nav>