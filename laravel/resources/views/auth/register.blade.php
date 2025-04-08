<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | My Movie Favorites</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 flex items-center justify-center text-white font-sans">

    <div class="bg-gray-900 shadow-xl rounded-xl p-8 w-full max-w-md border border-gray-700">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-yellow-400">🎥 Create Your Account</h1>

        <form action="https://jubilant-succotash-qgxwq97p49rh44w-8000.app.github.dev/register" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block mb-1 text-sm text-gray-300">Full Name</label>
                <input type="text" name="name" id="name" required
                       class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       placeholder="John Doe">
            </div>

            <div>
                <label for="email" class="block mb-1 text-sm text-gray-300">Email Address</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       placeholder="you@example.com">
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm text-gray-300">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       placeholder="••••••••">
            </div>

            <div>
                <label for="password_confirmation" class="block mb-1 text-sm text-gray-300">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       placeholder="••••••••">
            </div>

            <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-semibold py-2 px-4 rounded-lg transition-all">
                Register
            </button>

            <p class="text-sm text-center text-gray-400">
                Already have an account?
                <a href="https://jubilant-succotash-qgxwq97p49rh44w-8000.app.github.dev/login" class="text-yellow-400 hover:underline">Login here</a>
            </p>
        </form>
    </div>

</body>
</html>
