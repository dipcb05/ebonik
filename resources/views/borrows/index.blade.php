@extends('layouts.app', ['page' => 'Borrow Management', 'pageSlug' => 'clients', 'section' => 'clients'])
@section('content')
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Borrows</h1>
 
        <h4>Negative balance indicates retailer owes that money to supplier</h4>
        <br>
 
        <a href="/borrows/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add to the list</a>
        
        <br>
        <p id="content"></p>
    </div>
    <script type="text/javascript">

	fetch('/borws')
		.then(response => response.json())
		.then(json => {
                html = ``;
				datas = json.data;
                datas.forEach(data => html += `<br>
                <a href = "borrows/${data.id}/edit"><article class="mb-2">
                <p  class="text-xl font-bold text-blue-500">Retailer - ${data.retailer}</p>
                <p class="text-xl font-bold text-blue-500" >Supplier - ${data.supplier}</p>
                <h3 class="text-md text-gray-600">Balance =  ${data.balance}</h3>
                <hr class="mt-2">
                </article></a>`);
                document.getElementById("content").innerHTML = html;
			});
            console.log("abc");
</script>
@endsection
