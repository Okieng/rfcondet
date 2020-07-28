   
    <div class="pesan" data-id="<?= $this->session->flashdata('pesan'); ?>"></div>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <a href="<?= base_url('Admin/tambah');  ?>"><button type="button" class="btn btn-warning">New Data</button></a><br><br>
        <form action="<?= base_url('Admin');  ?>" method="post" class="form-inline my-2 my-lg-0"  >
      <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="keyword">
     <input class="btn btn-warning" type="submit" name="submit">
    </form>
        <br>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama Film</th>
              <th scope="col">Gambar</th>
              <th scope="col">Tahun</th>
           
              <th scope="col">Detail</th>
              <th scope="col">Rating</th>
              <th scope="col">Negara</th>
              <th scope="col">Usia</th>
              
              <th colspan="2" style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php foreach($film as $f) : ?>
            <tr>
              <th scope="row"><?= ++$mulai;  ?></th>
              <td><?= $f['judul']; ?></td>
              <td><img src="<?= base_url('vendor/gambar/'); ?><?= $f['gambar']; ?>" alt="" style="width: 60px; height: 75px;"></td>
              <td><?= $f['tahun'];  ?></td>
          
              <td><?= $f['detail'];  ?></td>
              <td><?= $f['rating'];  ?></td>
              <td><?= $f['negara'];  ?></td>
              <td><?= $f['usia'];  ?></td>
              
              <td><button type="button" class="btn btn-info edit" data-toggle="modal" data-target="#exampleModal" data-id="<?= $f['id']; ?>">Edit</button></td>
              <td><a href="<?= base_url('Admin/hapus/');  ?><?= $f['id']; ?>"><h5 class="badge badge-danger" onclick="return confirm('yakin');">Hapus</h5></a></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>

      </div><!-- /.container-fluid -->
    </div>
        <?= $this->pagination->create_links(); ?>

    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Film</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Admin/update'); ?>" method="post">
          <input type="hidden" name="id" id="id">  
                    <div class="form-group">
                  <label for="exampleInputEmail1">Nama Film</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="judul" >
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gambar" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input type="text" class="form-control" id="tahun" aria-describedby="emailHelp" name="tahun" >
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">usia</label>
                  <input type="text" class="form-control" id="usia" aria-describedby="emailHelp" name="usia" >
                
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Detail</label>
                  <input type="text" class="form-control" id="detail" aria-describedby="emailHelp" name="detail" >
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Rating</label>
                  <input type="text" class="form-control" id="rating" aria-describedby="emailHelp" name="rating">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Negara</label>
                  <input type="text" class="form-control" id="negara" aria-describedby="emailHelp" name="negara">
                  
                </div>
              
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
        </form>
      
      </div>

    </div>
  </div>
</div>