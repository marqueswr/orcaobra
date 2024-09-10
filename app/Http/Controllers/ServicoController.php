<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public function index()
    {
        $servicos = Servico::orderBy('descricao')->paginate(10);
        return view('servicos.index',compact('servicos'));
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
      
        try
        {
            $servico = Servico::create([
                'codigo' => strtoupper($request->codigo), 
                'descricao' => strtoupper($request->descricao) ]);

                toastr()->success('O servico foi gravado com sucesso', 'Gravação efetuada');
                return view('servicos.create');
        }
        catch(Exception $e)
        {
            toastr()->error('O servico não foi gravado', 'Erro');
            return view('servicos.create');
        }
      
    }

    public function show(Servico $servico)
    {
        
    }


    public function edit(Servico $servico)
    {
        $servico=Servico::findorfail($servico->id);
       return view('servicos.edit',compact('servico'));
    }

    public function update(Request $request, Servico $servico)
    {
             
        try {
            $servico->update([
                'codigo' => strtoupper($request->codigo),
                'descricao' => strtoupper($request->descricao)
            ]);
            toastr()->success('O servico foi alterado', 'Sucesso');
            return redirect()->route('servicos.index');
 
 
        } catch (Exception $e) {
            toastr()->error('O servico não foi alterado', 'Erro');
            return back()->withInput();
        }
    }

   
    public function destroy(Servico $servico)
    {
       Servico::findorfail($servico->id)->delete();
       toastr()->success('O servico foi excluído com sucesso', 'Exclusão efetuada');
       return redirect()->route('servicos.index');
    }
}
