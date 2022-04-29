<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/borrows/{{ $borrow->id }}/update">
            @method('PUT')
            @csrf
 
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Retailer: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="retailer" name="retailer" value="{{ $borrow->retailer }}">
            </div>
 
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Supplier: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="supplier" name="supplier" value="{{ $borrow->supplier }}">
            </div>
 
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Balance: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="balance" name="balance" value="{{ $borrow->balance }}">
            </div>
 
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/borrows" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>
        <form method="POST" action="/borrows/{{ $borrow->id }}/delete">
                @method('DELETE')
                @csrf
                
                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
            </form>
    </div>
</body>
</html>


