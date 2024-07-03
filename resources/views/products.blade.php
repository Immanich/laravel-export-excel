<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto mt-10" style="font-family: monospace;">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-4xl font-bold tracking-wide ml-2" style="font-size: 3rem;">Products</h1>
            <form action="{{ route('products.download-excel')}}" method="POST" target="__blank">
                @csrf
                <button type="submit" class="bg-green-400 text-white py-2 px-4 rounded-lg hover:bg-green-600 duration-300 mr-2">
                    Export Excel
                </button>
            </form>
            
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-500 text-white border border-gray-300 text-lg">
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
                    @foreach($products as $index => $p)
                    <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-200' }} text-center text-black">
                        <td class="py-2 px-4 border-b border">{{ $p->name }}</td>
                        <td class="py-2 px-4 border-b border">{{ $p->brand }}</td>
                        <td class="py-2 px-4 border-b border">{{ $p->description }}</td>
                        <td class="py-2 px-4 border-b border">₱{{ number_format($p->price, 2) }}</td>
                        <td class="py-2 px-4 border-b border">{{ $p->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
