 </head>
  <body>
    

    <div class="container">

        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-warning">Search Movie</h1>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="masukan nama film" id="search-input" autofocus=>
                  <div class="input-group-append">
                    <button class="btn btn-dark" type="button" id="search-button">Search</button>
                  </div>
                </div>
            </div>
       

        <div class="row" id="list-movie">
            
        </div>


    </div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
