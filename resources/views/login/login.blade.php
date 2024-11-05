<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
    <div class="login-box">
        <form action="{{ route('login-proses') }}" method="POST">
            @csrf
            <h2>Login</h2>
            <p>Please login to continue</p>
            <div class="input-box">
                <input type="text" name="email" required placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="input-box">
                <input type="password" name="password" required placeholder="Password">
            </div>
            
            <button type="submit">Login</button>
            <div class="options">
                <a href="{{ route('register') }}">Create Account</a>
                <a href="{{ route('resetpassword') }}">Forget Password</a>
            </div>
        </form>
    </div>
</body>
</html>
