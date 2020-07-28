  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?= base_url('vendor/js/sc.js'); ?>"></script>
	 <script src="<?= base_url('vendor/owl/dist/owl.carousel.min.js'); ?>"></script>
	
    <script>
    	$(document).ready(function() {

    		$('.detail').on('click', function() {
	    		const id = $(this).data('id');
	    		
	    		$.ajax({
	    			url : '<?= base_url('Home/detail');  ?>',
	    			method : 'post',
	    			data : {id : id},
	    			dataType : 'json',

	    			success : function(res){
	    				$('.modal-body').html(`

							
							<div class="modal-body">
						        <div class="card bg-dark mb-3" style="width: 29rem;">
						        <iframe width="460" height="200" src=" `+res.link+` " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						        <div class="card-body">
						          <h5 class="card-title">`+res.judul+`</h5>
						          <p class="card-text">`+res.detail+`</p>
						          <p class="card-text">Director : `+res.nama+`</p>
						          <p class="card-text">Usia : `+res.usia+`</p>
						          
						          <p class="card-text">Genre    : `+res.genre+`</p>
						          <p class="card-text">Production   : `+res.production+`</p>
						          
						        </div>
						      </div>
						      </div>
						      
							



	    					`);
	    			}
	    		});
    		});

    		$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:5
			        }
			    }
			});

    		
    		
    		
    	});
    </script>
  </body>
</html>