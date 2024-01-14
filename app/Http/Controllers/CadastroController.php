<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       

        return view('welcome');
    }

    public function table() 
    {
        $Allcadastro = Cadastro::all();
        return view('table', ['Allcadastro' => $Allcadastro ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro;
        $cadastro->fill($request->all());
        $cadastro->save();
        
        return  redirect()->route('welcome.home')->with('success', 'Cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cadastro $item)
    {
        return view('welcomeEdit', [ 'item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $NewCadastro = [
            'nome' => $request->input('nome'),
            'tel' => $request->input('tel'),
            'idade' => $request->input('idade')
        ];

        // Atualização de resultado

        Cadastro::where('id', $id)->update($NewCadastro);

        return redirect()->route('welcome.table')->with('success', 'Alterado com sucesso. 👍');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->delete();
    
        return redirect()->route('welcome.table')->with('danger', 'Excluído com sucesso. 🔥');
    }
    
}
