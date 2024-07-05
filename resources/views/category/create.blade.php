@extends('../admin')
@section('container')
<body id="page-top">
  <div id="wrapper">
    

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">kategori</li>
              <li class="breadcrumb-item active" aria-current="page">tambah</li>
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
                        <input type="text" class="form-control" id="id" placeholder="ID kategori" name="id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama kategori" name="nama">
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

  

</body>

</html>
@endsection