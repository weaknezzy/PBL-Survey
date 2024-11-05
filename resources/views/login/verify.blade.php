<!DOCTYPE html>
<html>

<head>
    <title>Verifikasi Email</title>
    <link rel="stylesheet" href="{{asset('css/verify.css')}}">
</head>

<body>
    <div class="container">
        <h2>Verifikasi Email</h2>
        <p>Kode verifikasi telah dikirim ke alamat email Anda.</p>
        <div class="input-box">
            <input type="text" maxlength="1" />
            <input type="text" maxlength="1" />
            <input type="text" maxlength="1" />
            <input type="text" maxlength="1" />
        </div>
        <form action="newpassword" method="#">
            <button type="submit">Verifikasi</button>
        </form>
    </div>
</body>

</html>