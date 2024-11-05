<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Setting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/account.css')}}">
</head>

<body>
    <div class="survey-container">
        <div class="survey-card">
            <div class="image-section">
                <img src="{{asset('image/gedung-polnep.jpeg')}}" alt="Gedung POLNEP">
                <button onclick="location.href='{{ route('mainpage') }}'">Hompage</button>
                {{-- <button>Logout</button> --}}
            </div>
            <div class="content-section">
                {{-- <button class="close-button">✖</button> --}}
                <h2>Account Settings</h2>
                <form>
                    <label>NIM</label>
                    <input type="text" placeholder="Nomor Induk Mahasiswa">
                    <label>Email Address</label>
                    <input type="text" placeholder="Email Address">
                    <label>Password</label>
                    <input type="password" placeholder="Password ">
                    <label>Alamat</label>
                    <input type="text" placeholder="Alamat">
                </form>
                <div class="btn-group">
                    <button class="cancel-btn">Cancel</button>
                    <button class="save-btn">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>