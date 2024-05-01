<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UTS LARAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">Produk</a>
          </li>
         
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
 

<div class="container">
        <h4>Form Tambah Produk</h4>
        <form action="" method="GET">
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Kode Barang</label>
                    <input type="" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label for="">Nama Barang</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label for="">Jenis Produk</label>
                    <select name="" id="" class="form-control">
                        <option value="selected">Pilih Produk</option>
                        <option value="">Alat Tulis</option>
                        <option value="">Kosmetik</option>
                        <option value="">Sembako</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="">Harga</label>
                    <input type="number" name="" id="" class="form-control">
                </div>
                <div class="col-sm-6 form-group mt-4">
                    <button class="btn btn-primary" style="width: 100%">Simpan</button>
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>