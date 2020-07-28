 <div class="content">
      <div class="container-fluid">
        <a href="<?= base_url('News/tambah');  ?>"><button type="button" class="btn btn-warning">New Data</button></a><br><br>
        <form action="<?= base_url('Admin');  ?>" method="post" class="form-inline my-2 my-lg-0"  >
      <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="keyword">
     <input class="btn btn-warning" type="submit" name="submit">
    </form>
        <br>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Juduk</th>
              <th scope="col">gambar</th>
              <th scope="col">isi berita</th>
              <th scope="col">tanggal</th>
              <th colspan="2" style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            
              <?php $i=1; ?>
            <?php foreach($berita as $b) : ?>
            <tr>
              <th><?= $i++; ?></th>
              <td><?= $b['judul']; ?></td>
              <td><img src="<?= base_url('vendor/gambar/news/'); ?><?= $b['gambar']; ?>" alt="" style="width: 60px; height: 75px;"></td>
              <td><?= $b['isi_berita'];  ?></td>
          
              <td><?= $b['tanggal'];  ?></td>
              
              <td><button type="button" class="btn btn-info edit" data-toggle="modal" data-target="#exampleModal" data-id="<?= $b['id_berita']; ?>">Edit</button></td>
              <td><a href="<?= base_url('News/hapus/');  ?><?= $b['id_berita']; ?>"><h5 class="badge badge-danger" onclick="return confirm('yakin');">Hapus</h5></a></td>
            </tr>
            
          <?php endforeach; ?>
          </tbody>
        </table>

      </div><!-- /.container-fluid -->
    </div>
        

    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    Control sidebar content goes here
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
        <form action="<?= base_url('News/update'); ?>" method="post">
          <input type="hidden" name="id" id="id">  
                    <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="judul" >
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gambar" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">tanggal</label>
                  <input type="date" class="form-control" id="tgl" aria-describedby="emailHelp" name="tgl" >
                  
                
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
        </form>
      
      </div>

    </div>
  