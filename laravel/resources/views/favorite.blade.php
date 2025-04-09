<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favorites - Movie Collection</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white font-sans">

    <nav class="bg-gray-900 border-b border-gray-700 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-yellow-400">🎬 Movie Dashboard</h1>
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
            <h2 class="text-3xl font-bold text-white">Your Favorite Movies</h2>
            <a href="dashboard"
               class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-4 py-2 rounded-lg font-semibold transition-all">
               🏠 Back to Dashboard
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($favorites->count() > 0)
            <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-md">
                <table class="min-w-full table-auto text-gray-300">
                    <thead>
                        <tr class="bg-gray-900">
                            <th class="px-4 py-2 text-left">Title</th>
                            <th class="px-4 py-2 text-left">Year</th>
                            <th class="px-4 py-2 text-left">Genre</th>
                            <th class="px-4 py-2 text-left">Description</th>
                            <th class="px-4 py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($favorites as $movie)
                            <tr class="border-t border-gray-700">
                                <td class="px-4 py-2">{{ $movie->title }}</td>
                                <td class="px-4 py-2">{{ $movie->release_year }}</td>
                                <td class="px-4 py-2">{{ $movie->genre }}</td>
                                <td class="px-4 py-2 text-sm text-gray-400 line-clamp-3">{{ $movie->description }}</td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('favorites.remove', $movie->id, false) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="bg-gray-700 p-8 rounded text-center">
                <p class="text-xl mb-4">You haven't added any movies to your favorites yet.</p>
                <a href="{{ route('dashboard', [], false) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Discover Movies</a>
            </div>
        @endif
    </div>

</body>
</html>
