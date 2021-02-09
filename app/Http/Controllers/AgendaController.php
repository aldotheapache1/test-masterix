<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class AgendaController extends Controller
{
    public function index()
    {

        $search = request('search');

        if ($search) {

            $contatos = Pessoa::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $contatos = Pessoa::all();
        }

        return view('index', ['contatos' => $contatos, 'search' => $search]);
    }
}
