@extends('layouts.master')
@section('main')
<h4 style="margin-top:15px;">Lista de Fases</h4><span style="color:rgb(29, 112, 36)">Revestimentos / Cerâmica 30 x 30</span>
<div style="text-align: right">
<a type="button" class="btn btn-primary btn-lg" href={{ route('fases.create') }} ><i class="bi bi-plus-circle-fill"></i></a>
<div style="text-align: left">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th  style="text-align: center">#</th>
        <th  style="color:rgb(28, 54, 30)">ETAPA</th>
        <th  style="color:rgb(28, 54, 30)">SERVIÇO</th>
        <th ></th>
      </tr>
    </thead>
    <tbody>
        @foreach($fases as $item)
      <tr>
        <td class="col-md-1" style="width: 5%;background-color:rgb(28, 54, 30);color:white;text-align:center">{{ $item->id }}</td>
        <td class="col-md-2" style="color:rgb(28, 54, 30)">{{  $item->etapa->descricao }}</td>
        <td class="col-md-7" style="color:rgb(28, 54, 30)">{{  $item->servico->descricao }}</td>

        <td class="col-md-2" style="text-align: right">
             <a class="btn btn-outline-dark" href="{{ route('fases.edit',['fase'=> $item->id]) }}" ><i class="bi bi-pencil-square"></i></a>
             <a class="btn btn-outline-danger"  href="{{ route('fases.destroy',['fase'=>$item->id]) }}" ><i class="bi bi-trash3"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div>
    <div class="d-flex justify-content-center">
        {{ $fases->links() }}
    </div>
@endsection

