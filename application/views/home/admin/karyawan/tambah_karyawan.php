
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-md-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Karyawan</h1>
                    </div>
                    <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action="<?php echo base_url();?>admin/tambah_karyawan" method="post" enctype="multipart/form-data">
      <div class=" form-group" >
        <label>Nama Karyawan </label>
        <input name="nama_karyawan" type="text" class="form-control" placeholder="Masukan Nama Karyawan" id="name" required maxlength="100" />
      </div>
      <div class=" form-group" >
        <label>Alamat </label>
        <input name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat" id="name" required maxlength="100" />
      </div>

      <div class="submit">
        <input type="submit" value="Upload" id="button-blue" class="btn btn-primary" />
        <div class="ease"></div>
      </div>
    </form>
  </div>
                </div>
            </div>

