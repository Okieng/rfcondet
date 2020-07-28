  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('vendor/admin/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('vendor/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('vendor/admin/dist/js/adminlte.min.js');  ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$(document).ready(function() {
		$('.edit').on('click', function() {
			const id = $(this).data('id');
			$.ajax({
				url : '<?= base_url('Admin/edit'); ?>',
				method : 'post',
				data : {id : id},
				dataType : 'json',

				success : function(res){
					$('#id').val(res.id);
					$('#nama').val(res.judul);
					$('#tahun').val(res.tahun);
					$('#usia').val(res.usia);
					$('#detail').val(res.detail);
					$('#rating').val(res.rating);
					$('#negara').val(res.negara);
					
				}
			});

		});

		const id = $('.pesan').data('id');

		if(id){
			swal("Good job!", "Data Berhasil "+id, "success");
		}

		
	
	});
</script>
<script>
	$(document).ready(function() {
		$('.edit').on('click', function() {
			const id = $(this).data('id');

			$.ajax({
				url : '<?= base_url('News/edit'); ?>',
				method : 'post',
				data : {id : id},
				dataType : 'json',

				success : function(res){
					$('#id').val(res.id_berita);
					$('#nama').val(res.judul);
					$('#tgl').val(res.tanggal);
					
					
				}
			});

		});

		const id = $('.pesan').data('id');

		if(id){
			swal("Good job!", "Data Berhasil "+id, "success");
		}
	});
</script>
</body>
</html>
