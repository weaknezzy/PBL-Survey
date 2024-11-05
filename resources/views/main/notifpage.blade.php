<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/notif.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="name-project navbar-brand mb-0 h1">$ SurviN</span>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Settings
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Notifikasi</span>
                <a href="{{ route('mainpage') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <!-- Notifikasi 1 -->
                <div class="alert alert-primary mb-2" role="alert">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <strong>Pemberitahuan akun anda sudah diaktifkan</strong>
                            <div>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis quo provident
                                consequuntur, nostrum cumque temporibus deserunt ducimus animi harum, a quibusdam
                                quisquam totam esse voluptates sint accusamus perspiciatis. Autem, voluptatibus?
                            </div>
                        </div>
                        <small class="text-muted ms-2 waktu">1 hari yang lalu</small>
                    </div>
                </div>
                <!-- Notifikasi 2 -->
                <div class="alert alert-primary mb-2" role="alert">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <strong>Pemberitahuan Survei anda diterima</strong>
                            <div>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis quo provident
                                consequuntur, nostrum cumque temporibus deserunt ducimus animi harum, a quibusdam
                                quisquam totam esse voluptates sint accusamus perspiciatis. Autem, voluptatibus?
                            </div>
                        </div>
                        <small class="text-muted ms-2 waktu">10 menit yang lalu</small>
                    </div>
                </div>
                <div class="alert alert-primary mb-2" role="alert">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <strong>Pemberitahuan Survei anda ditolak</strong>
                            <div>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis quo provident
                                consequuntur, nostrum cumque temporibus deserunt ducimus animi harum, a quibusdam
                                quisquam totam esse voluptates sint accusamus perspiciatis. Autem, voluptatibus?
                            </div>
                        </div>
                        <small class="text-muted ms-2 waktu">15 menit yang lalu</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
