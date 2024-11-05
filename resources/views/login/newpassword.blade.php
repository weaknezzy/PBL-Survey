<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="stylesheet" href="{{asset('css/npassword.css')}}">
</head>

<body>
    <div class="container">
        <h2>New Password</h2>
        <p class="message">Please write your new password.</p>
        <label>New Password</label>
        <input type="password" name="newpassword" placeholder="New Password">
        <label>New Password(Confirmation)</label>
        <input type="password" name="repassword " placeholder="New Password confirmation">
        <form action="login" method="#">
            <button type="submit">Reset Password</button>
        </form>
    </div>

</body>

</html>