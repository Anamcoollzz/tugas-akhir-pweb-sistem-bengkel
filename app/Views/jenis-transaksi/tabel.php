<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Jenis Transaksi</th>
      <?php 
        if($_SESSION['role'] == 'Admin'){        
          ?>
      <th>Aksi</th>
      <?php
    }
    ?>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($jenisTransaksi as $d) {
      ?>
      <tr>
        <td><?=$d->id?></td>
        <td><?=$d->nama?></td>
        <?php 
        if($_SESSION['role'] == 'Admin'){        
          ?>
          <td>
            <a href="" class="btn btn-success" onclick="ubah(event, <?=$d->id?>)">Ubah</a>
            <a href="" class="btn btn-danger" onclick="hapus(event, <?=$d->id?>)">Hapus</a>
          </td>
          <?php 
        }
        ?>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>