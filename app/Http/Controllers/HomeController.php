<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$products = Product::all(); // pegando todos os produtos do banco de dados
		return view('home', [
			'products' => $products // passando os produtos para a view
		]);
	}
}
