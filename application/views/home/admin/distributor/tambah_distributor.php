
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-md-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Distributor</h1>
                    </div>
                    <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action="<?php echo base_url();?>admin/tambah_distributor" method="post" enctype="multipart/form-data">
      <div class=" form-group" >
        <label>ID Distributor </label>
        <input name="id_distributor" type="text" class="form-control" placeholder="Masukan ID Distributor" id="name" required maxlength="100" />
      </div>
      <div class=" form-group" >
        <label>Nama Distributor </label>
        <input name="nama_distributor" type="text" class="form-control" placeholder="Nama Distributor" id="name" required maxlength="100" />
      </div>

      <div class=" form-group">
        <label>Perusahaan</label>
        <input name="perusahaan" type="text" placeholder="Masukan perusahaan" required class="form-control"/>
      </div>
      <div class="submit">
        <input type="submit" value="Upload" id="button-blue" class="btn btn-primary" />
        <div class="ease"></div>
      </div>
    </form>
  </div>
                </div>
            </div>

