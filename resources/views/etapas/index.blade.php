@extends('layouts.master')
@section('main')
<h4 style="margin-top:15px;">Lista de Etapas da Obra</h4><span style="color:rgb(29, 112, 36)">Infraestrutura / Revestimentos / Pintura</span>
<div style="text-align: right">
<a type="button" class="btn btn-primary btn-lg" href={{ route('etapas.create') }} ><i class="bi bi-plus-circle-fill"></i></a>
<div style="text-align: left">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col" style="text-align: center">#</th>
        <th scope="col" style="color:rgb(28, 54, 30)">DESCRIÇÃO DA ETAPA</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($etapas as $item)
      <tr>
        <td style="width: 5%;background-color:rgb(28, 54, 30);color:white;text-align:center">{{ $item->id }}</td>
        <td style="color:rgb(28, 54, 30)">{{  $item->descricao }}</td>

        <td style="text-align: right">
             <a class="btn btn-outline-dark" href="{{ route('etapas.edit',['etapa'=> $item->id]) }}" ><i class="bi bi-pencil-square"></i></a>
             <a class="btn btn-outline-danger"  href="{{ route('etapas.destroy',['etapa'=>$item->id]) }}" ><i class="bi bi-trash3"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <div>
    <div class="d-flex justify-content-center">
        {{ $etapas->links() }}
    </div>
@endsection

