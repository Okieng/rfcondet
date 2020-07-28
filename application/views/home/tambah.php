   <!-- Main content -->
    <div class="pesan" data-id="<?= $this->session->flashdata('pesan'); ?>"></div>
  <div class="container">
      <div class="content">
        
          
    <form  action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Film</label>
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
        <label>Tahun</label>
        <input type="text" class="form-control" placeholder="Tahun" name="tahun">
        <?= form_error('tahun','<small class="text-danger pl-3">', '</small>');  ?>
      </div>
      <div class="col">
        <label>Usia</label>
        <input type="text" class="form-control" placeholder="Usia" name="usia">
        <?= form_error('usia','<small class="text-danger pl-3">', '</small>');  ?>
      </div>
    </div>
    </div>
     <div class="form-group">
      <label for="exampleFormControlTextarea1">Link</label>
      <input type="text" class="form-control" placeholder="Link" name="link">
      <?= form_error('detail','<small class="text-danger pl-3">', '</small>');  ?>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Detail</label>
      <input type="text" class="form-control" placeholder="Genre" name="detail">
      <?= form_error('detail','<small class="text-danger pl-3">', '</small>');  ?>
    </div>
      <div class="form-group">
      <label for="exampleFormControlInput1">Negara</label>
      <input type="text" class="form-control" id="-" placeholder="Negara" name="negara">
      <?= form_error('negara','<small class="text-danger pl-3">', '</small>');  ?>
    </div>

     <div class="form-group">
      <div class="row">
      <div class="col">
        <label>Rating</label>
        <input type="text" class="form-control" placeholder="Rating" name="rating">
        <?= form_error('rating','<small class="text-danger pl-3">', '</small>');  ?>
      </div>
      <div class="col">
        <label>Jumlah Episode</label>
        <input type="number" class="form-control" placeholder="Episode" name="episode">
        <?= form_error('episode','<small class="text-danger pl-3">', '</small>');  ?>
      </div>
    </div>
    </div>

   <button type="submit" name="tambah" class="btn btn-primary">Save</button>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    tambah Genre
  </button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#production">
    Production
  </button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#direction">
    direction
  </button>
     <a href="<?= base_url('Admin'); ?>"><button type="button" class="btn btn-primary">Back To Home</button></a><br><br>
  </form>
     
      </div><!-- /.container-fluid -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Genre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/inputGenre'); ?>" method='post'>
          <div class="form-group">
             <label for="exampleFormControlSelect1">Movie</label>
              <select class="form-control" id="exampleFormControlSelect1" name="movie">
               <?php foreach($movie as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['judul']; ?></option>
             <?php endforeach; ?>
              </select>
            
            <div class="form-group">
            <label for="exampleFormControlSelect1">Genre</label>
            <select class="form-control" id="exampleFormControlSelect1" name="genre">
             <?php foreach($genre as $g) : ?>
              <option value="<?= $g['id']; ?>"><?= $g['genre']; ?></option>
           <?php endforeach; ?>
            </select>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- production -->
 <div class="modal fade" id="production" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Production</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/inputProduction'); ?>" method='post'>
          <div class="form-group">
              <label for="formGroupExampleInput">Production</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="production" name="production" required>
            
            <div class="form-group">
            <label for="exampleFormControlSelect1">Movie</label>
            <select class="form-control" id="exampleFormControlSelect1" name="movie">
             <?php foreach($movie as $m) : ?>
              <option value="<?= $m['id']; ?>"><?= $m['judul']; ?></option>
           <?php endforeach; ?>
            </select>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- direction -->
<div class="modal fade" id="direction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Direction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/inputDirector'); ?>" method='post' enctype="multipart/form-data">
          <div class="form-group">
              <label for="formGroupExampleInput">director</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Director" name="director" required>
            
            

            <div class="form-group">
            <label for="exampleFormControlSelect1">Movie</label>
            <select class="form-control" id="exampleFormControlSelect1" name="movie">
             <?php foreach($movie as $m) : ?>
              <option value="<?= $m['id']; ?>"><?= $m['judul']; ?></option>
           <?php endforeach; ?>
            </select>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>