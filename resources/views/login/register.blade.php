<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @if (session('error'))
        <script>
            Swal.fire({
                title: 'Error!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <div class="form-container">
        <form action="{{ route('proses-register') }}" method="POST">
            @csrf
            <h1>Create Account</h1>
            <p>Fill your information for create account</p>

            <label>NIM</label>
            <input type="text" name="nim" placeholder="Nomor Indeks Mahasiswa" value="{{ old('nim') }}">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
            <label>Confirm Password</label>
            <input type="password" name="confirmed_password" placeholder="Confirm password"
                value="{{ old('confirm_password') }}" required>

            <button type="submit">Sign Up</button>
            <div class="options">
                <a href="login">Back</a>
            </div>
        </form>
    </div>

</body>

</html>
