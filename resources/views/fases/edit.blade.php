@extends('layouts.master')
@section('main')
<h4 style="margin-top:15px;">Alterar Fase</h4><span  style="color:rgb(29, 112, 36)">Revestimento / Cerâmica 30 x 30 ...</span>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<form action="{{ route('fases.update',['fase' => $fase->id]) }}" method="POST">
    @csrf
    @method('put')

    <div class="card mb-3" style="background-color: #b4afaf38;margin-top:30px">
        <div class="card-body">

             <div class="form-floating mb-3">
                <select class="form-select" name="servico_id" id="servico_id">
                    @foreach($servicos as $item)
                    <option value="{{ $item->id }}"
                        {{ old('servico_id', $fase->servico_id) == $item->id ? 'selected' : '' }}>
                        {{ $item->descricao }}</option>
                @endforeach
                </select>
                <label for="servico_id">Serviço</label>
             </div>

             <div class="form-floating mb-3">
                  <select class="form-select" name="etapa_id" id="etapa_id">
                @foreach($etapas as $item)
                <option value="{{ $item->id }}"
                    {{ old('etapa_id', $fase->etapa->id) == $item->id ? 'selected' : '' }}>
                    {{ $item->descricao }}</option>
            @endforeach
            </select>
            <label for="etapa_id">Etapa</label>
             </div>
             <br>
                <button type="submit" type="button bt-sm" class="btn btn-success"><i class="bi bi-check-circle"></i> Gravar</button>
                <a  href="{{ route('fases.index')}}" type="button bt-sm" class="btn btn-outline-primary"><i class="bi bi-check-circle"></i> Cancelar</a>
        </div>
      </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
