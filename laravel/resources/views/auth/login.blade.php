<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body class="">
<div class="">
    <form action="https://jubilant-succotash-qgxwq97p49rh44w-8000.app.github.dev/login" method="POST" class="">
        @csrf
        <h1 class="text-2xl font-bold mb-4">Login</h1>

        <label for="email" class="">Email</label>
        <input type="email" name="email" id="email" required class="">

        <label for="password" class="">Password</label>
        <input type="password" name="password" id="password" required class="">

        <button type="submit" class="">Login</button>
        <p class="">
            Don't have an account? <a href="https://jubilant-succotash-qgxwq97p49rh44w-8000.app.github.dev/register" class="">Register here</a>
        </p>
    </form>
</div>
</body>
</html>
