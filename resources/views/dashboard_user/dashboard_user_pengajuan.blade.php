<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_user_pengajuan.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="merk navbar-brand fw-bold" href="{{route('dash_user')}}">$ SurviN</a>
        </div>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="card">
        <div class="header"> Selamat Datang, Yoga Pradana</div>
        <div class="card-content">
            <a href="{{ route('dash_user_kelola')}}" class="btn-kelola btn me-2">Kelola Survei</a>
            <a href="{{ route('dash_user_ajuan')}}" class="btn-ajukan btn me-2">Ajukan Survei</a>
            <a href="{{ route('dash_user_saya')}}" class="btn-saya btn me-2">Survei Saya</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Pengajuan Survei</h5>
            <div class="d-flex justify-content-end">
                <form class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
            <h5 class="card-title">Data Survei</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal Diajukan</th>
                        <th scope="col">Operasi</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Survei Kepuasan Pelanggan</td>
                        <td>2024-11-01</td>
                        <td><button class="btn btn-sm btn-primary">Lihat</button></td>
                        <td><span class="badge bg-success">Pengajuan Diterima</span></td>
                    </tr>
                    <tr>
                        <td>Survei Kinerja Dosen</td>
                        <td>2024-11-03</td>
                        <td><button class="btn btn-sm btn-primary">Lihat</button></td>
                        <td><span class="badge bg-warning text-dark">Menunggu Konfirmasi</span></td>
                    </tr>
                    <tr>
                        <td>Survei Fasilitas Kampus</td>
                        <td>2024-10-30</td>
                        <td><button class="btn btn-sm btn-primary">Lihat</button></td>
                        <td><span class="badge bg-danger">Pengajuan Ditolak</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
