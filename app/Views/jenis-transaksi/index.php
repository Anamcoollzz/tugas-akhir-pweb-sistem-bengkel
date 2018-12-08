<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php view('layouts/head',[
  'title'=>'Jenis Transaksi'
]) ?>

<body>
  <div id="wrapper">
    <?php view('layouts/nav',['active'=>'jenisTransaksi']) ?>
    <!-- isi -->

    <div id="page-wrapper" style="padding:70px 0px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              Jenis Transaksi
            </h1>
            <ol class="breadcrumb">
              <li>
                <i class="glyphicon glyphicon-dashboard"></i><a href="<?=base_url()?>"> Dashboard</a>
              </li>
              <li class="active">
                <i></i> Jenis Transaksi
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
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Jenis Transaksi</h3>
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
            <h4 class="modal-title">Tambah Jenis Transaksi</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="jenisTransaksi">Jenis Transaksi</label>
              <input type="text" name="jenis_transaksi" class="form-control" id="jenisTransaksi" placeholder="Jenis Transaksi">
            </div>
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
            <h4 class="modal-title">Ubah Jenis Transaksi</h4>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button onclick="perbarui(event)" id="perbaruiButton" type="submit" class="btn btn-primary">Perbarui</button>
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
        var jenisTransaksi = $('#tambahForm').find('#jenisTransaksi').val().trim();
        if(jenisTransaksi == ''){
          showError('#jenisTransaksi', 'Jenis Transaksi tidak boleh kosong');
        }else{
          $.ajax({
            url : '<?=base_url('jenis-transaksi/tambah')?>',
            method : 'POST',
            data : {
              jenisTransaksi : jenisTransaksi,
            },
            success : function(response){
              loadTabel();
            }
          })
        }
      });

      $('#ubahForm').on('submit', function(e){
        e.preventDefault();
        var jenisTransaksi = $('#ubahForm').find('#jenisTransaksi').val().trim();
        var action = $(this).attr('action');
        if(jenisTransaksi == ''){
          showError('#jenisTransaksi', 'Jenis Transaksi tidak boleh kosong');
        }else{
          $.ajax({
            url : action,
            method : 'POST',
            data : {
              jenisTransaksi : jenisTransaksi,
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
        url : '<?=base_url('jenis-transaksi/tabel')?>',
        success : function(response){
          $('.table-responsive').html(response);
        }
      })
    }

    function ubah(e, id){
      e.preventDefault();
      $.ajax({
        url : '<?=base_url('jenis-transaksi/ubah')?>/'+id,
        success : function(response){
          $('#ubahForm').find('.modal-body').html(response);
          $('#ubahForm').attr('action', '<?= base_url('jenis-transaksi/perbarui/') ?>/'+id);
          $('#modalUbah').modal('show');
        }
      });
    }

    function hapus(e, id){
      e.preventDefault();
      if(confirm('Anda yakin ?')){
        $.ajax({
          url : '<?=base_url('jenis-transaksi/hapus')?>/'+id,
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
