<div class="container-fluid">
  <br>
  <br>
  <h3 class="h3">Penjualan</h3>
  <form action="<?= base_url()?>penjualan/cari_barang" method="post">
    <div class="row">
      <div class="col">
        <label for="tgl">Tanggal</label>
        <input type="text" value="<?= date("Y-m-d") ?>" class="form-control" disabled>
      </div>

      <div class="col"></div>
      <div class="col">
        <h5 class="h5">Total</h5>
        <h3 class="h3" id="total">0</h3>

      </div>
      <!--  barang  -->
    </div>
    <div class="row">
          <div class="col">
            <!-- kode barang -->
              <h6> Nama barang</h6>
              <input type="text" name="nama" id="nama" class="form-control">
          </div>
          <div class="col-md-2">
            
              <h6>Tipe Harga</h6>
              <select name="jenis" id="jenis">
                <option value="Eceran">Eceran</option>
                <option value="Grosir">Grosir</option>
              </select>
          </div>
          <div class="col-md-2">
            
              <h6>Jumlah</h6>
              <input type="text" name="jumlah" class="form-control">
          </div>
          <!--
          <div class="col-md-2">
            
              <h6>Jenis Harga</h6>
              <select name="jenis" id="jenis" class="form-control">
                <option value="Eceran">Eceran</option>
                <option value="Grosir">Grosir</option>
              </select>
          </div>
          <div class="col-md-2">
            
              <h6>Total</h6>
              <input type="text" name="total" class="form-control">
          </div> -->
          <div class="col">
            <!-- Total -->
              <input type="submit" name="total" class="form-control" value="Tambah">
          </div>
    </div>
  </form>
  <form action="" method="post">
    <div class="container-fluid row mt-5">
      <table class="table" id="tablePenjualan">
        <tr>
          <th>Kode Barang</th>
          <th>Jumlah</th>
          <th>Nama Barang</th>
          <th>Jenis Harga</th>
          <th>Satuan Harga</th>
          <th>Total Harga</th>
        </tr>
        <?php if(isset($barang)){
          var_dump($barang);
          foreach ($barang as $data) { ?>
        <tr>
          <td><?= $barang->id_barang ?></td>
          <td><?= $barang->jumlah ?></td>
          <td><?= $barang->nama_barang ?></td>
          <td><?= $jenis ?></td>
          <td><?php if (isset($barang->hg_grosir)) {
                    echo $barang->hg_grosir;
                  } else {
                    $barang->hg_ecer;
                  }
           ?></td>
          <td><?php if (isset($barang->hg_grosir)) {
                    echo $barang->hg_grosir * $barang->jumlah;
                  } else {
                    $barang->hg_ecer * $barang->jumlah;
                  } ?></td>
        </tr>
      <?php }}?>
      </table>
    </div>
  </form>
    <div class="container row mt-3">
      <input type="submit" value="Cetak Struk" class="btn btn-success">
    </div>
</div>