<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
<div class="container mx-auto px-4 py-8">
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Edit Produk</h1>
        <form method="POST" action="{{ route('produk.update', $produk->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block text-sm text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="nama" value="{{ $produk->nama }}" class="w-full rounded dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm text-gray-700 dark:text-gray-300">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full rounded dark:bg-gray-700 dark:text-white" required>{{ $produk->deskripsi }}</textarea>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-sm text-gray-700 dark:text-gray-300">Harga</label>
                <input type="number" name="harga" value="{{ $produk->harga }}" class="w-full rounded dark:bg-gray-700 dark:text-white" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </form>
    </div>
</div>
</body>
</html>
