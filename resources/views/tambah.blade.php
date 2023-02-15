<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('style1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style2.css')}}">
    <title>Tambah</title>
</head>

<body>
    <div class="container-fluid" style="background-color: #feebed;">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background: #beebe8;">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="{{ route('dashboard') }}"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline  text-dark px-0 fw-bold">Dashboard</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="{{ route('produk') }}" class="nav-link align-middle text-dark px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kelola Data Produk</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="people.jpg" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Logout</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                Halaman Kelola Data Produk
                <table class="data-table">
                    <br>
                    <div class="content">
                        <div class="container">
                            <h1 class="font-weight-bold text-center text-dark">Tambah Produk</h1>
                            <hr>
                            <form action="/prosesproduk" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Judul Produk</label>
                                    <textarea class="form-control" name="judulProduk" id="" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsiBarang" id="" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="gambar_produk" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" id="">
                                </div>
                                <div class="mb-3 tombol">
                                    <button type="submit" class="btn btn-secondary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
