<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar  bg-body-tertiary">
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
            <a class="nav-link" href="#">Produk</a>
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
        <h1>Halaman Produk</h1>

        <table class="table table-sm table-hover table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $nilai_awal = 0; ?>
                @while ($nilai_awal < $jumlah)
                    <tr>
                        <td>{{ $kode[$nilai_awal] }}</td>
                        <td>{{ $nama[$nilai_awal] }}</td>
                        <td>{{ $jenis[$nilai_awal] }}</td>
                        <td>{{ $harga[$nilai_awal] }}</td>
                    </tr>

                    <?php $nilai_awal++; ?>
                @endwhile
            </tbody>
        </table>
    </div>
    <div class="container">
        <li class="d-flex justify-content-end">
            <a href="/tambah"><button class="btn btn-primary">Tambah Produk</button></a>
        </li>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>