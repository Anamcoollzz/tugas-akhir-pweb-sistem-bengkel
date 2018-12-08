<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php view('layouts/head',[
  'title'=>'Akun'
]) ?>

<body>
  <div id="wrapper">
    <?php view('layouts/nav',['active'=>'akun']) ?>
    <!-- isi -->

    <div id="page-wrapper" style="padding:70px 0px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Akun
            </h1>
            <ol class="breadcrumb">
              <li>
                <i class="glyphicon glyphicon-dashboard"></i><a href="<?=base_url()?>"> Dashboard</a>
              </li>
              <li class="active">
                <i></i> Akun
              </li>
            </ol>
          </div>
        </div>

        <a href="#" id="tambahButton" data-toggle="modal" data-target="#modalTambah" class="btn btn-primary"> Tambah</a>
        <br><br>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Akun</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

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
      $('#tambahForm').on('submit', function(e){
        e.preventDefault();
        var nama = $('#tambahForm').find('#nama').val().trim();
        var username = $('#tambahForm').find('#username').val().trim();
        var password = $('#tambahForm').find('#password').val().trim();
        var role = $('#tambahForm').find('#role').val().trim();
        var adaError = false
        if(nama == ''){
          adaError = true;
          showError('#nama', 'Nama tidak boleh kosong');
        }
        if(username == ''){
          adaError = true;
          showError('#username', 'Username tidak boleh kosong');
        }
        if(password == ''){
          adaError = true;
          showError('#password', 'Password tidak boleh kosong');
        }
        if(!adaError){
          $.ajax({
            url : '<?=base_url('akun/tambah')?>',
            method : 'POST',
            data : {
              nama : nama,
              username : username,
              password : password,
              role : role,
            },
            success : function(response){
              loadTabel();
            }
          })
        }
      });

      $('#ubahForm').on('submit', function(e){
        e.preventDefault();
        var nama = $('#ubahForm').find('#nama').val().trim();
        var username = $('#ubahForm').find('#username').val().trim();
        var password = $('#ubahForm').find('#password').val().trim();
        var role = $('#ubahForm').find('#role').val().trim();
        var adaError = false
        if(nama == ''){
          adaError = true;
          showError($('#ubahForm').find('#nama'), 'Nama tidak boleh kosong');
        }
        if(username == ''){
          adaError = true;
          showError($('#ubahForm').find('#username'), 'Username tidak boleh kosong');
        }
        if(password == ''){
          adaError = true;
          showError($('#ubahForm').find('#password'), 'Password tidak boleh kosong');
        }
        var action = $(this).attr('action');
        if(!adaError){
          $.ajax({
            url : action,
            method : 'POST',
            data : {
              nama : nama,
              username : username,
              password : password,
              role : role,
            },
            success : function(response){
              loadTabel();
            }
          })
        }
      });
    });

    function loadTabel(){
      $.ajax({
        url : '<?=base_url('akun/tabel')?>',
        success : function(response){
          $('.table-responsive').html(response);
        }
      })
    }

    function ubah(e, id){
      e.preventDefault();
      $.ajax({
        url : '<?=base_url('akun/ubah')?>/'+id,
        success : function(response){
          $('#ubahForm').find('.modal-body').html(response);
          $('#ubahForm').attr('action', '<?= base_url('akun/perbarui/') ?>/'+id);
          $('#modalUbah').modal('show');
        }
      });
    }

    function hapus(e, id){
      e.preventDefault();
      if(confirm('Anda yakin ?')){
        $.ajax({
          url : '<?=base_url('akun/hapus')?>/'+id,
          success : function(response){
            if(response == 'success')
              loadTabel()
            else
              alert(response)
          }
        });
      }
    }

    loadTabel();
  </script>
</body>

</html>
