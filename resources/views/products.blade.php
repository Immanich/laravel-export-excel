<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto mt-10">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold ml-2">Products</h1>
            <form action="{{ route('products.download-excel')}}" method="POST" target="__blank">
                @csrf
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 mr-2">
                    Export Excel
                </button>
            </form>
            
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-500 text-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Brand</th>
                        <th class="py-2 px-4 border-b">Description</th>
                        <th class="py-2 px-4 border-b">Price</th>
                        <th class="py-2 px-4 border-b">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="bg-gray-50 text-center text-black">
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->brand }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->description }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->price }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
