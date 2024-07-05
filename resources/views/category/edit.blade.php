@extends('../admin')
@section('container')

  <div id="wrapper">
    

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">kategori</li>
              <li class="breadcrumb-item active" aria-current="page">edit</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-8">
              

              

              <!-- Horizontal Form -->
              <div class="card mb-4">
                <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
                </div> -->
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="id"  name="id" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="deskripsi"></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
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