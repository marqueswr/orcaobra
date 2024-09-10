@extends('layouts.master')
@section('main')
<h4 style="margin-top:15px;">Lista de Serviços</h4><span style="color:rgb(29, 112, 36)">Revestimento Cerãmico 35 x 35 ...</span>
<div style="text-align: right">
<a type="button" class="btn btn-primary btn-lg" href={{ route('servicos.create') }} ><i class="bi bi-plus-circle-fill"></i></a>
<div style="text-align: left">
<table class="table table-striped table-hover">
  <thead >
      <tr>
        <th scope="col" style="text-align: center">#</th>
        <th scope="col" style="text-align: center;color:rgb(28, 54, 30)">CÓDIGO</th>
        <th scope="col" style="color:rgb(28, 54, 30)">DESCRIÇÃO DO SERVIÇO</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($servicos as $item)
      <tr>
        <td style="width: 5%;background-color:rgb(28, 54, 30);color:white;text-align:center">{{ $item->id }}</td>
        <td style="width: 5%;text-align: center;color:rgb(29, 112, 36)"><b>{{ $item->codigo }}</b></td>
        <td style="width: 80%;color:rgb(28, 54, 30)">{{  $item->descricao }}</td>

        <td style="text-align: right;width: 10%">
             <a class="btn btn-outline-dark" href="{{ route('servicos.edit',['servico'=> $item->id]) }}" ><i class="bi bi-pencil-square"></i></a>
             <a class="btn btn-outline-danger"  href="{{ route('servicos.destroy',['servico'=>$item->id]) }}" ><i class="bi bi-trash3"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <div>
    <div class="d-flex justify-content-center">
        {{ $servicos->links() }}
    </div>
@endsection

