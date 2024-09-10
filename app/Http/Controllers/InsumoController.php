<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumos = INsumo::orderBy('descricao')->paginate(10);
        return view('insumos.index',compact('insumos'));
    }


    public function create()
    {
        $unidades = ['M2','M3','KG','UN','LITRO','LATA','H','M'];
        return view('insumos.create',compact('unidades'));
    }


    public function store(Request $request)
    {

        $unidades = ['M2','M3','KG','UN','LITRO','LATA','H','M'];

        $tipoInsumo = $request->all();

        $tipoInsumo['tipo'] = (!isset($tipoInsumo['tipo']))?'MATERIAL' : 'MÃO DE OBRA';

        try
        {
            $insumo = Insumo::create([
                'codigo' => strtoupper($request->codigo),
                'descricao' => strtoupper($request->descricao),
                'tipo' => $tipoInsumo['tipo'],
                'unidade' => $request->unidade,
                'unitario' => $request->unitario,
            ]);
                toastr()->success('O Insumo foi gravdo com sucesso', 'Gravação efetuada');
                return view('insumos.create',compact('unidades'));
        }
        catch(Exception $e)
        {
            toastr()->error('O Insumo não foi gravado', 'Erro');
            return view('insumos.create',compact('unidades'));
        }
    }


    public function show(Insumo $insumo)
    {

    }


    public function edit(Insumo $insumo)
    {
        $unidades = ['M2','M3','KG','UN','LITRO','LATA','H','M'];

        $insumo=Insumo::findorfail($insumo->id);

        $tipodoinsumo = $insumo->tipo;
        return view('insumos.edit',compact('insumo','unidades','tipodoinsumo'));
    }


    public function update(Request $request, Insumo $insumo)
    {
        $unidades = ['M2','M3','KG','UN','LITRO','LATA','H','M'];
        $tipoInsumo = $request->all();
        $tipoInsumo['tipo'] = (!isset($tipoInsumo['tipo']))?'MATERIAL' : 'MÃO DE OBRA';

        try {
            $insumo->update([
                'codigo' => strtoupper($request->codigo),
                'descricao' => strtoupper($request->descricao),
                'tipo' => $tipoInsumo['tipo'],
                'unidade' => $request->unidade,
                'unitario' => $request->unitario,
            ]);
            toastr()->success('O insumo foi alterado', 'Sucesso');
            return redirect()->route('insumos.index');


        } catch (Exception $e) {
            toastr()->error('O insumo não foi alterado', 'Erro');
            return back()->withInput();
        }
    }


    public function destroy(Insumo $insumo)
    {
        Insumo::findorfail($insumo->id)->delete();
       toastr()->success('O insumo foi excluído com sucesso', 'Exclusão efetuada');
       return redirect()->route('insumos.index');
    }
}
