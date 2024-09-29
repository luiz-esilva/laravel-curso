<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/suporte/index', compact('supports'));
    }

    public function create()
    {
        return view('admin/suporte/criar');
    }

    public function store(Request $request, Support $support)
    {
        $dados = $request->all();
        $dados['status'] = 'a';

        $support->create($dados);

        return redirect()->route('suporte.index');
    }
}
