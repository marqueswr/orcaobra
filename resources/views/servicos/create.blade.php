@extends('layouts.master')
@section('main')
<h4 style="margin-top:15px;">Criar novo Serviço</h4><span  style="color:rgb(29, 112, 36)">Revestimento Cerâmico 35 x 35 ...</span>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<form action="{{ route('servicos.store') }}" method="POST">
    @csrf
<div class="card mb-3" style="background-color: #b4afaf38;margin-top:30px">
    <div class="card-body">

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="87656" required>
        <label for="codigo">Código do serviço</label>
      </div></br>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="informe aqui o serviço">
            <label for="descricao">Descrição</label>
          </div>
            <button type="submit" type="button bt-sm" class="btn btn-success"><i class="bi bi-check-circle"></i> Gravar</button>
            <a  href="{{ route('servicos.index')}}" type="button bt-sm" class="btn btn-outline-primary"><i class="bi bi-check-circle"></i> Cancelar</a>
    </div>
  </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection