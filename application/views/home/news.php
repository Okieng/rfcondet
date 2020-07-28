<div class="container">
	<h1 class="text-warning">News</h1>
	<div class="row mt-3">
		<div class="col-md-8">
			<img class="berita" src="<?= base_url('vendor/gambar/news/'); ?><?= $news['gambar']; ?>" alt="">
			<h3 class="text-muted"><?= $news['judul']; ?></h3>
			<label for="tanggal" class="text-muted"><?= $news['tanggal']; ?></label>
			<p class="text-dark"><?= $news['isi_berita']; ?></p>
			<a href="<?= base_url('Home'); ?>" class="btn btn-warning font-weight-bold float-right">Back</a>
		</div>
		
		<div class="col-md-4">
		<p class="text-dark news">Other News</p>
		<?php foreach($new as $n) : ?>
			<div class="row no-gutters">
			<div class="col-md-8">
			<img class="berita" src="vendor/gambar/berita.jpg" alt="">
			<p class="text-dark"><?= $n['judul']; ?></p>
			<a href="<?= base_url('Home/news/'); ?><?= $n['id_berita']; ?>" class="badge badge-warning float-right">Read</a>
			</div>
			</div>
	<?php endforeach; ?>
		</div>
		
		

	</div>
</div>	

