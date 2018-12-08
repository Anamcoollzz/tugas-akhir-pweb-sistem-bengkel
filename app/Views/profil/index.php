<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php view('layouts/head',[
  'title'=>'Profil'
]) ?>

<body>

  <div id="wrapper">
    <?php view('layouts/nav',['active'=>'profil']) ?>
    <!-- isi -->

    <div id="page-wrapper" style="padding:70px 0px">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Profil
            </h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?=base_url()?>"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
              </li>
              <li class="active">
                <i></i> Profil
              </li>
            </ol>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Profil</h3>
              </div>
              <div class="panel-body">
                <div class="row register-form">
                  <div class="col-md-12">
                    <form id="formProfil" action="<?=base_url('profil/perbarui')?>" class="form-horizontal custom-form" method="post">
                      <div class="form-group">
                        <div class="col-sm-4 label-column"><label class="control-label" for="name-input-field">Nama</label></div>
                        <div class="col-sm-6 input-column"><input value="<?=$_SESSION['nama']?>" class="form-control" type="text" name="nama" id="nama" /></div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 label-column"><label class="control-label" for="email-input-field">Username</label></div>
                        <div class="col-sm-6 input-column"><input value="<?=$_SESSION['username']?>" id="username" class="form-control" type="text" /></div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 label-column"><label class="control-label" for="pawssword-input-field">Password</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" id="password" type="password" /></div>
                      </div>

                      <button class="btn btn-primary submit-button" type="submit">Perbarui</button>
                      <button class="btn btn-danger submit-button pull-right" type="button">Batal</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end of row -->

      </div>
      <!-- /.container-fluid -->

    </div>

  </div>
  <?php view('layouts/js') ?>
  <script>
    $('#formProfil').on('submit', function(e){
      e.preventDefault();
      var username = $('#username').val().trim();
      var password = $('#password').val().trim();
      var nama = $('#nama').val().trim();
      var adaError = false
      if(nama == ''){
        adaError = true;
        showError($('#formProfil').find('#nama'), 'Nama tidak boleh kosong');
      }
      if(username == ''){
        adaError = true;
        showError($('#formProfil').find('#username'), 'Username tidak boleh kosong');
      }
      if(password == ''){
        adaError = true;
        showError($('#formProfil').find('#password'), 'Password tidak boleh kosong');
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
          },
          success : function(response){
            if(response == 'success'){
              alert('profil berhasil diperbarui');
            }
          }
        })
      }
    });
  </script>
</body>

</html>
