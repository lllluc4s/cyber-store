<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function show(Product $product) // usando como parâmetro o Model Product
	{
		return view('product', [
			'product' => $product,
		]);
	}
}
