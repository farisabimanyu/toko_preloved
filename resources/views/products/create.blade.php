@extends('../admin')
@section('container')
    

<body id="page-top">
  <div id="wrapper">
    

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">produk</li>
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
                        <input type="text" class="form-control" id="id" placeholder="ID barang" name="id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama barang" name="name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga barang" name="price">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="description"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                      <div class="col-sm-9">
                        <select class="form-control mb-3" name="category">
                          <option>Default select</option>
                          @foreach ($data as $select)
                          <option value="{{category_id}}">{{category_id}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                      <div class="col-sm-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="gambar">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
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

</html>
@endsection