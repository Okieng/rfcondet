
	<div class="container">
		<div class="row">
					<div class="col-md-8">
						<div id="carouselExampleInterval" class="carousel slide mt-5" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active" data-interval="2000">
						     <iframe width="750" height="500" src="https://www.youtube.com/embed/0rySKUayGh4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    </div>
						    <div class="carousel-item" data-interval="2000">
						      <iframe width="750" height="500" src="https://www.youtube.com/embed/mP0VHJYFOAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    </div>
						    <div class="carousel-item" data-interval="2000">
						     <iframe width="750" height="500" src="https://www.youtube.com/embed/zAGVQLHvwOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
					
					<div class="col-md-4">
						 <h5 class="trailer  mt-5 mb-4 born" style="color: #121212">Upcoming 2021</h5>
						 <table class="table table-dark">
							<tbody>
						    <tr>
						      <td>Mortal Kombat</td>
						      <td>8 Januari</td>
						    </tr>
						    <tr>
						      <td>Cinderella</td>
						      <td>12 Febuari</td>
						    </tr>
						    <tr>
						      <td>Tom dan Jerry</td>
						      <td>12 Maret</td>
						    </tr>
						    <tr>
						      <td>F9</td>
						      <td>16 April</td>
						    </tr>
						    <tr>
						      <td>Micronauts</td>
						      <td>11 Juni</td>
						    </tr>
						    <tr>
						      <td>Minions: The Rise of Gru </td>
						      <td>9 Juli</td>
						    </tr>
						    <tr>
						      <td>The Suicide Squad</td>
						      <td>13 Agustus</td>
						    </tr>
						</tbody>
						 </table>	
				</div>	
			</div>
		</div>
			<!-- end -->
						  


			<div class="container">
				<h5 class="tren mt-5">Trending Cartoon</h5>
					<div class="owl-carousel owl-theme">
						<?php foreach($ani as $k): ?>
							<div class="row">
								<div class="col">
							<iframe width="175" height="250" src="<?= $k['link']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							</div>
					<?php endforeach; ?>
					
					</div>

					<!--news-->
						<h5 class="born mt-5" style="color: #121212">News</h5>
						<div class="row">
							<?php foreach($news as $n) : ?>
							<div class="col-md-3">
								<img src="<?= base_url('vendor/gambar/news/'); ?><?= $n['gambar']; ?>" alt="" style="width: 240px; height: 240px">
								<p class="text-black mb5"><?= $n['judul']; ?></p>
								<a href="<?= base_url('Home/news/'); ?><?= $n['id_berita']; ?>" title="" class="float-right text-warning">See Full News</a>
							</div>
							<?php endforeach; ?>
						</div>

<br><br>
					<h5 class="tren">Most Popular Movies</h5>
					<hr>
						<div class="owl-carousel owl-theme">
							<?php foreach($pop as $p) : ?>
						    <div class="item">
						    	<div class="card bg-dark mb-3" style="width: 13.5rem;">
								  <img src="<?= base_url('vendor/gambar/'); ?><?= $p['gambar']; ?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <p class="card-text text-secondary"><i class="fa fa-star-half-o star" aria-hidden="true"></i> <?= $p['rating']; ?></p>
								    <p class="card-title  text-white"><?= $p['negara']; ?></p>
								    <p class="card-title  text-white"><?= $p['judul']; ?></p>
								    <a href="#" class="badge badge-warning float-right detail" data-toggle="modal" data-target="#exampleModal" data-id="<?= $p['id']; ?>">
								    	Detail
									</a>
								  </div>
								 
								</div>
						    </div>
						<?php endforeach; ?>
						</div>
			
					<h5 class="tren">Free To watch</h5>
					<hr>
					<div class="owl-carousel owl-theme">
							<?php foreach($all as $a) : ?>
						    <div class="item">
						    	<div class="card bg-dark mb-3" style="width: 13.5rem;">
								  <img src="<?= base_url('vendor/gambar/'); ?><?= $a['gambar']; ?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <p class="card-text text-secondary"><i class="fa fa-star-half-o star" aria-hidden="true"></i> <?= $a['rating']; ?></p>
								    <p class="card-title  text-white"><?= $a['negara']; ?></p>
								    <p class="card-title  text-white"><?= $a['judul']; ?></p>
								    <a href="#" class="badge badge-warning float-right detail" data-toggle="modal" data-target="#exampleModal" data-id="<?= $a['id']; ?>">
								    	Detail
									</a>
								  </div>
								 
								</div>
						    </div>
						<?php endforeach; ?>
						</div>
					</form>

					

					<h5 class="tren mt-3">On intermission</h5>
					<p class=" text-secondary">While theaters are closed, some features like Top Box Office, In Theaters, Coming Soon to Theaters, and Showtimes are on intermission. We look forward to bringing them back as soon as possible. In the meantime, check out our <span class="text-primary">What's on TV and Streaming section</span>.</p>
			

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-white text-center" id="exampleModalLabel">FILM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       	...
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" style="font-weight: bold;">Close</button>
       </div>
    </div>
  </div>
</div>

</div>

<!-- Footer -->
<footer style="background-color:#343a40;" class="page-footer font-small blue pt-4">
<div class="container">
  <!-- Footer Links -->
  <div class="text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 style="color: white;">RFCondet</h5>
        <p style="color: white">Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 style="color: white">Social Media</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
            <a href="#"><i class="fa fa-twitter" style="font-size:36px; margin-left: 50px;"></i></a>
          </li>
          <li>
            <br>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram" style="font-size:36px"></i></a>
            <a href="#"><i class="fa fa-youtube-play" style="font-size:36px; margin-left: 50px;"></i></a>
          </li>
          <li>

          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
</div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">#</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
