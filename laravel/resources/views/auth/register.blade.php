<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>
<body class="">
    <div class="">
        <form action="https://jubilant-succotash-qgxwq97p49rh44w-8000.app.github.dev/register" method="POST" class="">
            @csrf
            <h1 class="">Create Your Account</h1>

            <div class="">
                <label for="name" class="block text-gray-700 text-sm font-medium">Full Name</label>
                <input type="text" name="name" id="name" required class="">
            </div>

            <div class="">
                <label for="email" class="block text-gray-700 text-sm font-medium">Email Address</label>
                <input type="email" name="email" id="email" required class="">
            </div>

            <div class="">
                <label for="password" class="block text-gray-700 text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" required class="">
            </div>

            <div class="">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="">
            </div>

            <button type="submit" class="">
                Register
            </button>

            <p class="">
                Already have an account? <a href="https://jubilant-succotash-qgxwq97p49rh44w-8000.app.github.dev/login" class="">Login here</a>
            </p>
        </form>
    </div>
</body>
</html>
