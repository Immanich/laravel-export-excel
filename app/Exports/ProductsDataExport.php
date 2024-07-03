<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use App\Models\Product;

class ProductsDataExport implements FromView, ShouldAutoSize
{
    use Exportable;

    protected $products;

    public function __construct()
    {
        $this->products = Product::all();
    }

    public function view(): View
    {
        return view('products', [
            'products' => $this->products
        ]);
    }
}
