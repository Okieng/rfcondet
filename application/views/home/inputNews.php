 <div class="pesan" data-id="<?= $this->session->flashdata('pesan'); ?>"></div>
  <div class="container">
      <div class="content">
        
          
    <form  action="<?= base_url('News/tambah'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">Judul</label>
      <input type="text" class="form-control" id="-" placeholder="Nama Film" name="name">
      <?= form_error('name','<small class="text-danger pl-3">', '</small>');  ?>
    </div>
   <div class="form-group">
      <label for="exampleFormControlFile1">Gambar</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
      <?= form_error('gambar','<small class="text-danger pl-3">', '</small>');  ?>
    </div>

    <div class="form-group">
      <div class="row">
      <div class="col">
       <div class="form-group">
          <label for="exampleFormControlTextarea1">Isi Berita</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="berita"></textarea>
        </div>
        <?= form_error('berita','<small class="text-danger pl-3">', '</small>');  ?>
      </div>
      <div class="col">
        <label>Tanggal</label>
        <input type="date" class="form-control" placeholder="tgl" name="tgl">
        <?= form_error('tgl','<small class="text-danger pl-3">', '</small>');  ?>
      </div>
    </div>
    </div>
    
    
   <button type="submit" name="tambah" class="btn btn-primary">Save</button>
   
     <a href="<?= base_url('Admin'); ?>"><button type="button" class="btn btn-primary">Back To Home</button></a><br><br>
  </form>
     
      </div><!-- /.container-fluid -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  </div>