<?php

namespace App\Http\Controllers;

use App\Models\Etapa;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EtapaController extends Controller
{

    public function index()
    {
        $etapas = Etapa::orderBy('descricao')->paginate(10);
        return view('etapas.index',compact('etapas'));
    }

    public function create()
    {
        return view('etapas.create');
    }

    public function store(Request $request)
    {
        try
        {
            $etapa = Etapa::create([
                'descricao' => strtoupper($request->descricao) ]);
                toastr()->success('A etapa foi gravada com sucesso', 'Gravação efetuada');
                return view('etapas.create');
        }
        catch(Exception $e)
        {
            toastr()->error('A etapa não foi gravada', 'Erro');
            return view('etapas.create');
        }
      
    }

    public function show(Etapa $etapa)
    {
        
    }


    public function edit(Etapa $etapa)
    {
        $etapa=Etapa::findorfail($etapa->id);
       return view('etapas.edit',compact('etapa'));
    }

    public function update(Request $request, Etapa $etapa)
    {
             
        try {
            $etapa->update([
                'descricao' => strtoupper($request->descricao)
            ]);
            toastr()->success('A etapa foi alterada', 'Sucesso');
            return redirect()->route('etapas.index');
 
 
        } catch (Exception $e) {
            toastr()->error('A etapa não foi alterada', 'Erro');
            return back()->withInput();
        }
    }

   
    public function destroy(Etapa $etapa)
    {
       Etapa::findorfail($etapa->id)->delete();
       toastr()->success('A etapa foi excluída com sucesso', 'Exclusão efetuada');
       return redirect()->route('etapas.index');
    }
}
