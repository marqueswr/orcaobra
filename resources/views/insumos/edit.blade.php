@extends('layouts.master')
@section('main')
<h4 style="margin-top:15px;">Alterar Insumo</h4><span  style="color:rgb(29, 112, 36)">Cano PvC de esgoto 100mm ...</span>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<form action="{{ route('insumos.update',['insumo' => $insumo->id]) }}" method="POST">
    @csrf
    @method('put')

    <div class="card mb-3" style="background-color: #b4afaf38;margin-top:30px">
        <div class="card-body">

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('insumo', $insumo->codigo) }}" required>
            <label for="codigo">Código</label>
          </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ old('insumo', $insumo->descricao) }}" >
                <label for="descricao">Descrição</label>
             </div>

             <div class="form-floating mb-3">
                <select class="form-select" name="unidade" id="unidade">

                    @foreach ($unidades as $item)
                    <option value="{{ $item }}"
                      {{ old('insumo',  $insumo->unidade ) == $item ? 'selected' : '' }}>
                      {{ $item }}</option>
                    @endforeach

                </select>
                <label for="descricao">Unidade</label>
             </div>

             <div class="form-floating mb-3">
                <input type="text" class="form-control" id="unitario" name="unitario" value="{{ old('insumo', $insumo->unitario) }}" placeholder="utilize ponto e não virgula">
                <label for="descricao">Unitário R$</label>
             </div>

             <div class="form-floating mb-3">

                @if($tipodoinsumo == 'MÃO DE OBRA')
                <input type="checkbox"  id="tipo" name="tipo" checked >&nbsp;&nbsp;Mão de obra (deixe desmarcado caso seja insumo)
                @else
                <input type="checkbox"  id="tipo" name="tipo" >&nbsp;&nbsp;Mão de obra (deixe desmarcado caso seja insumo)
                @endif

             </div>
             <br>
                <button type="submit" type="button bt-sm" class="btn btn-success"><i class="bi bi-check-circle"></i> Gravar</button>
                <a  href="{{ route('insumos.index')}}" type="button bt-sm" class="btn btn-outline-primary"><i class="bi bi-check-circle"></i> Cancelar</a>
        </div>
      </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
