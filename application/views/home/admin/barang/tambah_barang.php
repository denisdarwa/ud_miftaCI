
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-md-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Barang</h1>
                    </div>
                    <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action="<?php echo base_url();?>admin/tambah" method="post" enctype="multipart/form-data">
      <div class=" form-group" >
        <label>Nama Barang </label>
        <input name="nama_barang" type="text" class="form-control" placeholder="Masukan Nama Barang" id="name" required maxlength="100" />
      </div>
      <div class=" form-group" >
        <label>ID Distributor </label>
        <input name="id_distributor" type="text" class="form-control" placeholder="ID Distributor" id="name" required maxlength="100" />
      </div>
       <div class=" form-group" >
        <label>Stok </label>
        <input name="stok" type="text" class="form-control" placeholder="Stok Barang" id="name" required maxlength="100" />
      </div>

      <div class=" form-group">
        <label>Masukkan Harga Modal</label>
        <input name="hg_modal" type="text" placeholder="Masukan Harga Modal" required class="form-control"/>
      </div>
      <div class="form-group">
        <label>Masukkan Harga Grosir</label>
        <input name="hg_grosir" type="text" placeholder="Masukan Harga Grosir" required class="form-control"/>
      </div>
      <div class="form-group">
        <label>Masukkan Harga Eceran</label>
        <input name="hg_ecer" type="text" placeholder="Masukan Harga eceran" required class="form-control" />
      </div>

      <div class="submit">
        <input type="submit" value="Upload" id="button-blue" class="btn btn-primary" />
        <div class="ease"></div>
      </div>
    </form>
  </div>
                </div>
            </div>

