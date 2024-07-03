<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsDataExport;


class ProductController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('products', compact('products'));
    }

    public function exportExcel(){

        return  Excel::download(new ProductsDataExport, 'products-data.xlsx');
    }
}
