<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Your Movie Collection</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Movie Dashboard</h1>
            <div class="flex items-center">
                <p class="mr-4">Welcome, {{ Auth::user()->name }}</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Dashboard</h2>
            <a href="{{ route('favorites.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">View My Favorites</a>
        </div>

        <!-- Add your Dashboard content here -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">Welcome to Your Movie Collection!</h3>
            <p>Here you can discover and manage your favorite movies.</p>
        </div>
    </div>

</body>
</html>
