<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/landing.css')}}">
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg mb-5">
            <div class="container-fluid">
                <a class="navbar-brand me-5 ms-4" href="#">SurviN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav w-100 justify-content-center ms-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ajukan Survei</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-5">
                        <li class="nav-item">
                            <a class="nav-link fw-bold me-2" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('register')}}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main Content -->
    <div>
        <h1 class="text-center">SurviN</h1>
        <h6 class="text-center">Survei Online Prodi Teknik Informatika</h6>
    </div>
    <div class="sambutan">
        <p>
            SurviN adalah platform inovatif yang memungkinkan mahasiswa, dosen, dan responden untuk menjelajahi, membuat, dan berpartisipasi dalam survei di lingkungan kampus. Kami menyediakan wadah interaktif yang memudahkan setiap langkah, mulai dari menemukan survei relevan hingga membuat survei sendiri dengan berbagai pilihan kustomisasi.

            Bergabunglah dengan kami untuk memberikan kontribusi berharga dan mendapatkan wawasan yang mendalam melalui survei yang bermanfaat. Mari bersama-sama menjadikan kampus kita tempat yang lebih informatif dan terhubung!
        </p>
        <a class="justify-content-center" href="{{ route('login') }}">Buat Survei Anda</a>
    </div>
    <div class="sub-judul">
        <header>
            <h2 class="text-center">Kenapa SurviN?</h2>
        </header>
        <div class="card-container">
            <div class="card ">
                <h2>Kenapa Yaa..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum culpa voluptate enim earum maiores minus, ea tenetur perspiciatis odio nesciunt quam deserunt reiciendis repudiandae porro saepe neque eveniet veniam..</p>
            </div>
            <div class="card">
                <h2>Kenapa Yaa..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum culpa voluptate enim earum maiores minus, ea tenetur perspiciatis odio nesciunt quam deserunt reiciendis repudiandae porro saepe neque eveniet veniam..</p>
            </div>
            <div class="card">
                <h2>Kenapa Yaa..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum culpa voluptate enim earum maiores minus, ea tenetur perspiciatis odio nesciunt quam deserunt reiciendis repudiandae porro saepe neque eveniet veniam..</p>
            </div>
        </div>
        <div class="card-container">
            <div class="card ">
                <h2>Kenapa Yaa..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum culpa voluptate enim earum maiores minus, ea tenetur perspiciatis odio nesciunt quam deserunt reiciendis repudiandae porro saepe neque eveniet veniam..</p>
            </div>
            <div class="card">
                <h2>Kenapa Yaa..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum culpa voluptate enim earum maiores minus, ea tenetur perspiciatis odio nesciunt quam deserunt reiciendis repudiandae porro saepe neque eveniet veniam..</p>
            </div>
            <div class="card">
                <h2>Kenapa Yaa..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex laborum culpa voluptate enim earum maiores minus, ea tenetur perspiciatis odio nesciunt quam deserunt reiciendis repudiandae porro saepe neque eveniet veniam..</p>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <div class="about-us mt-5 mb-5">
    <h2>About Us</h2>
        <div class="info-container mt-5">
            <div class="info-box">
                <img src="{{ asset('image/developer128px.png') }}" alt="Developer Icon">
                <p>Developer</p>
            </div>
            <div class="info-box">
                <img src="{{asset('image/documentation.png')}}" alt="Documentation Icon">
                <p>Documentation</p>
            </div>
            <div class="info-box">
                <img src="{{asset('image/contact.png')}}" alt="Contact Icon">
                <p>Contact</p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="copyright">
        <div class="text-center p-3">
            <p>Copyright &copy; 2024</p>
            <p>SurviN All rights reserved</p>
        </div>
    </footer>
</body>

</html>