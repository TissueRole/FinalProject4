<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Movie Collection</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white font-sans">

    <nav class="bg-gray-900 border-b border-gray-700 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-yellow-400">🎬 LeMovie</h1>
            <div class="flex items-center space-x-4">
                <p class="text-gray-300">Welcome, {{ Auth::user()->name }}</p>
                <form action="{{ route('logout', [], false) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg font-semibold transition-all">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-10 px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-white">Discover</h2>
            <a href="{{ route('favorites.index', [], false) }}"
               class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-4 py-2 rounded-lg font-semibold transition-all">
               ⭐ View My Favorites
            </a>
        </div>
        <div class="bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-700">
            <h3 class="text-2xl font-semibold text-yellow-400 mb-4">🍿 Welcome!</h3>
            <p class="text-gray-300 mb-4">Here you can discover new movies and manage your favorites. Start adding some blockbusters to your collection!</p>
            <div class="overflow-x-auto bg-gray-900 p-4 rounded-lg shadow-md">
                <table class="min-w-full table-auto text-white">
                    <thead>
                        <tr class="border-b border-gray-700">
                            <th class="px-4 py-2 text-left">Title</th>
                            <th class="px-4 py-2 text-left">Release Year</th>
                            <th class="px-4 py-2 text-left">Genre</th>
                            <th class="px-4 py-2 text-left">Description</th>
                            <th class="px-4 py-2 text-left">Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                            <tr class="border-b border-gray-700">
                                <td class="px-4 py-2">{{ $movie->title }}</td>
                                <td class="px-4 py-2">{{ $movie->release_year }}</td>
                                <td class="px-4 py-2">{{ $movie->genre }}</td>
                                <td class="px-4 py-2 text-ellipsis overflow-hidden" style="max-width: 200px;">{{ $movie->description }}</td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('favorites.toggle', ['movie' => $movie->id], false) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-400 text-gray-900 px-4 py-2 rounded font-semibold transition-all">
                                            Add to Favorites
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>
