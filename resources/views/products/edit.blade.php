@extends('../admin')
@section('container')
    

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">produk</li>
              <li class="breadcrumb-item active" aria-current="page">edit</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-8">
              

              

              <!-- Horizontal Form -->
              <div class="card mb-4">
                <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
                </div> -->
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="id" value="" name="id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" value="" name="nama">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" id="harga" value="" name="harga">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="deskripsi"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                      <div class="col-sm-9">
                        <select class="form-control mb-3" name="kategori">
                          <option>Default select</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                      <div class="col-sm-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="gambar" value="">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>

            
          </div>
          <!--Row-->

          

          

        </div>
        <!---Container Fluid-->
      </div>
      
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

@endsection