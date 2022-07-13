<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
	public function index()
	{
		$products = Product::all();
		return view('admin.products', compact('products'));
	}

	// mostrar a página de edição de produtos
	public function edit()
	{
		return view('admin.product.edit');
	}

	// recebe requisição de edição de produtos
	public function update(Request $request)
	{
		// validação
		$request->validate([
			'name' => 'required|max:255',
			'description' => 'required|max:255',
			'price' => 'required|numeric',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
	}

	// mostrar página de criar
	public function create()
	{
		return view('admin.product.create');
	}

	// recebe requisição de criação de produtos
	public function store(Request $request)
	{
		// validação
		$request->validate([
			'name' => 'required|max:255',
			'description' => 'required|max:255',
			'price' => 'required|numeric',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
	}
}
