<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public Produto $produtos;

    public function __construct(){
        $this->produtos = new Produto();
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos/produto', compact('produtos'));
    }

    public function create()
    {
        return view('produto.produto_create');
    }

    public function store(StoreProdutoRequest $request)
    {
        $preco = str_replace(',', '.', $request->input('preco'));

        Produto::create([
            'nome' => $request->nome,
            'preco' => $preco, 
            'quantidade' => $request->quantidade,
            'marca' => $request->marca,
        ]);

        return redirect()->route('produto')->with('success', 'O produto foi cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.produto_edit', compact('produto'));
    }

    public function update(StoreProdutoRequest $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $preco = str_replace(',', '.', $request->input('preco'));

        $produto->update([
            'nome' => $request->nome,
            'preco' => $preco, 
            'quantidade' => $request->quantidade,
            'marca' => $request->marca,
        ]);

        return redirect()->route('produto')->with('success', 'O produto foi atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produto')->with('deleted', 'O produto foi excluído com sucesso!');
    }
}