<html>

<head>
    <title>
        SurviN
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="{{ asset('css/mainpage.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <div class="header">
        <div class="logo">
            <i class="fas fa-clipboard-list"></i>
            SurviN
        </div>
        <div class="nav">
            <a class="ajukan" href="">Ajukan Survei</a>
            <div class="dropdown">
                <a href="#">
                    Account
                    <i class="fas fa-caret-down"></i>
                </a>

                <div class="dropdown-content">
                    <a href="{{ route('account') }}">Profile</a>

                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit"
                            style="background: none; border: none; color: inherit; cursor: pointer; padding: 12px 16px; font: inherit; min-width: 160px; display:block; text-align: left;">
                            {{ __('Logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <h1>
            SurviN
        </h1>
        <h2>
            Survei Online Prodi Teknik Informatika
        </h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
        </p>
    </div>
    <div class="recent-survey">
        <h2>
            Recent Survey?
        </h2>
        <div class="survey-items">
            <div class="survey-item">
                <img alt="Image of a building for survey" height="300"
                    src="https://storage.googleapis.com/a1aa/image/QsUTcenqT80DHqBi5VtqVlvxFTlTHL7fAPxfJefl6fNrGGB7E.jpg"
                    width="200" />
                <button>
                    Survei Gedung
                </button>
            </div>
            <div class="survey-item">
                <img alt="Image of a building for survey" height="300"
                    src="https://storage.googleapis.com/a1aa/image/QsUTcenqT80DHqBi5VtqVlvxFTlTHL7fAPxfJefl6fNrGGB7E.jpg"
                    width="200" />
                <button>
                    Survei Gedung
                </button>
            </div>
            <div class="survey-item">
                <img alt="Image of a building for survey" height="300"
                    src="https://storage.googleapis.com/a1aa/image/QsUTcenqT80DHqBi5VtqVlvxFTlTHL7fAPxfJefl6fNrGGB7E.jpg"
                    width="200" />
                <button>
                    Survei Gedung
                </button>
            </div>

        </div>
        <div style="text-align: center; margin-top: 20px; padding-left: 600px;">
            <button>
                &lt; Prev
            </button>
            <button>
                Next &gt;
            </button>
        </div>
    </div>
    <div class="testimoni">
        <h2>
            Testimoni
        </h2>
        <div class="testimoni-items">
            <div style="text-align: left; margin-top: 70px;">
                <button>&lt;</button>
            </div>
            <div class="testimoni-item">
                <p>
                    "Mantap Bang, Mata Pancing MANTAPPP"
                </p>
                <button>
                    Vito Sebastian
                </button>
            </div>
            <div class="testimoni-item">
                <p>
                    "Mantap Bang, Mata Pancing MANTAPPP"
                </p>
                <button>
                    Vito Sebastian
                </button>
            </div>
            <div class="testimoni-item">
                <p>
                    "Mantap Bang, Mata Pancing MANTAPPP"
                </p>
                <button>
                    Vito Sebastian
                </button>
            </div>
            <div class="testimoni-item">
                <p>
                    "Mantap Bang, Mata Pancing MANTAPPP"
                </p>
                <button>
                    Vito Sebastian
                </button>
            </div>
            <div class="testimoni-item">
                <p>
                    "Mantap Bang, Mata Pancing MANTAPPP"
                </p>
                <button>
                    Vito Sebastian
                </button>
            </div>
            <div class="testimoni-item">
                <p>
                    "Mantap Bang, Mata Pancing MANTAPPP"
                </p>
                <button>
                    Vito Sebastian
                </button>
            </div>
            <div style="text-align: right; margin-top: 70px;">
                <button>&gt;</button>
            </div>
        </div>
        <p class="lorbb"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum incidunt error dolores
            repellat quidem officia nihil adipisci molestiae ut. Numquam earum rem autem consequatur ratione itaque unde
            sapiente obcaecati quod.</p>
    </div>
    <div class="footer">
        Copyright © 2024
        <p>SurviN. All Rights Reserved.</p>
    </div>
</body>

</html>
