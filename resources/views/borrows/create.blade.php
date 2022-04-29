@extends('layouts.app', ['page' => 'Borrow Management', 'pageSlug' => 'clients', 'section' => 'clients'])
@section('content')
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/borrows">
            @csrf
 
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Retailer: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="retailer" name="retailer">
            </div>
 
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Supplier: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="supplier" name="supplier">
            </div>
 
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="integer">Balance: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="balance" name="balance">
            </div>
 
 
 
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/borrows" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>
    </div>
@endsection

