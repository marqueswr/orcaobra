<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Fase;
use App\Models\Etapa;
use App\Models\Servico;
use Illuminate\Http\Request;

class FaseController extends Controller
{

    public function index()
    {
        $fases = Fase::orderBy('etapa_id')->paginate(10);
        return view('fases.index',compact('fases'));
    }

    public function filtrarEtapa(Request $request)
    {
        $servicos = Servico::orderBy('descricao')->where('descricao','like',"%$request->paramServico%")->get();
        $etapas = Etapa::all();
        return view('fases.create',compact('etapas','servicos'));
    }


    public function create(Request $request)
    {
        $servicos = Servico::orderBy('descricao')->where('descricao','=','nada')->get();
        $etapas = Etapa::all();
        return view('fases.create',compact('etapas','servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $fase = Fase::create([
                'etapa_id' => $request->etapa_id,
                'servico_id' => $request->servico_id
             ]);
                toastr()->success('A fase foi gravada com sucesso', 'Gravação efetuada');
                $fases = Fase::orderBy('etapa_id')->paginate(10);
                return view('fases.index',compact('fases'));

    }

    public function show(Fase $fase)
    {

    }


    public function edit(Fase $fase)
    {
        $fase=Fase::findorfail($fase->id);
        $servicos=Servico::all();
        $etapas=Etapa::all();

       return view('fases.edit',compact('etapas','servicos','fase'));
    }


    public function update(Request $request, Fase $fase)
    {

            $fase->update([
                'etapa_id' => $request->etapa_id,
                'servico_id' => $request->servico_id,
            ]);
            toastr()->success('A Fase foi alterada', 'Sucesso');
            $fases = Fase::orderBy('etapa_id')->paginate(10);
            return view('fases.index',compact('fases'));

    }


    public function destroy(Fase $fase)
    {
       Fase::findorfail($fase->id)->delete();
       toastr()->success('A fase foi excluída com sucesso', 'Exclusão efetuada');
       $fases = Fase::orderBy('etapa_id')->paginate(10);
       return view('fases.index',compact('fases'));

    }
}
