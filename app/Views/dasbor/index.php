<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php view('layouts/head',[
  'title'=>'Dasbor'
]) ?>

<body>
  <div id="wrapper">
    <?php view('layouts/nav',['active'=>'dasbor']) ?>
    <!-- isi -->

    <div id="page-wrapper" style="padding:70px 0px">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Dashboard <small>Statistics Overview</small>
            </h1>
            <ol class="breadcrumb">
              <li>
                <i class="glyphicon glyphicon-dashboard"></i> Dashboard
              </li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 ">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?=$jmlAkun?></div>
                    <div>Akun Pengguna</div>
                  </div>
                </div>
              </div>
              <a href="<?=base_url('akun')?>">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">0</div>
                    <div>Pelanggan</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><?=$jmlJenisTransaksi?></div>
                    <div>Jenis Transaksi</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-support fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">0</div>
                    <div>Transaksi</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nota</th>
                        <th>Kendaraan</th>
                        <th>Transaksi</th>
                        <th>Biaya</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="text-right">
                  <a href="<?=base_url('transaksi')?>">View All Transactions</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->

    </div>


  </div>
  <form id="tambahForm" action="" method="post">
    <div id="modalTambah" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Akun</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="usernamejenis_transaksi" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <select class="form-control" name="role" id="role">
              <option value="Kasir">Kasir</option>
              <option value="Manajer">Manajer</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <form id="ubahForm" action="" method="post">
    <div id="modalUbah" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Ubah Akun</h4>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button id="perbaruiButton" type="submit" class="btn btn-primary">Perbarui</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <?php view('layouts/js') ?>
  <script>
    $(function(){
      
    function loadTabel(){
      $.ajax({
        url : '<?=base_url('akun/tabel')?>',
        success : function(response){
          $('.table-responsive').html(response);
        }
      })
    }

    
    // loadTabel();
  </script>
</body>

</html>
