<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
</head>

<body>
    <div class="container">
        <h2>Reset Password</h2>
        <p class="message">A password reset will be sent to the email entered below.</p>
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email address">
        <form action="verify" method="#">
            <button type="submit">Reset Password</button>
        </form>
        <p class="remember">Remember your account? <a href="login">Sign In!</a></p>

    </div>

</body>

</html>