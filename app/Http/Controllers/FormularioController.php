<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
		 * Mostra os itens do formulário.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
				return view('formulario.index');
		}
}
