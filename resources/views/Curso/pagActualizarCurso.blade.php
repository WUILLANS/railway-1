@extends('pagPlantilla') 

@section('titulo')
    <h1 class="display-4">Página de listaCurso </h1>
@endsection

@section('seccion')
    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj') }}
        </div>
    @endif

    <form action="{{ route('Curso.xUpdate', $xActCurso->id) }}" method="post" class="d-grid gap-2">
        @method('PUT')
        @csrf

        @error('denCur')
            <div class="alert alert-danger">
                La denominación es requerida
            </div>
        @enderror

        @error('hrsCur')
            <div class="alert alert-danger">
                Las horas es requerido 
            </div>
        @enderror

        @error('creCur')
            <div class="alert alert-danger">
                Los creditos son requeridos 
            </div>
        @enderror
        @error('PlaCur')
            <div class="alert alert-danger">
                Año de plan de estudios  
            </div>
        @enderror

        @error('tipCur')
            <div class="alert alert-danger">
                El tipo de curso es requerido  
            </div>
        @enderror

        @error('estCur')
            <div class="alert alert-danger">
                El estado de curso es requerido  
            </div>
        @enderror


        <input type="text" name="denCur" placeholder="Código" value="{{ $xActCurso->denCur}}" class="form-control mb-1">
        <input type="text" name="hrsCur" placeholder="Nombres" value="{{ $xActCurso->hrsCur}}" class="form-control mb-1">
        <input type="text" name="creCur" placeholder="Apellidos" value="{{ $xActCurso->creCur}}" class="form-control mb-1">
        <input type="text" name="PlaCur" placeholder="Fecha de nacimiento" value="{{ $xActCurso->PlaCur}}" class="form-control mb-1">
        <select name="tipCur" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="1"  @if ($xActCurso->tipCur == 1)   {{"SELECTED"}} @endif>Transversal</option>
            <option value="2" @if ($xActCurso->tipCur == 2)   {{"SELECTED"}} @endif>Especialidad</option>
            
        </select>
       
        <select name="estCur" class="form-control mb-1">
            <option value="">Seleccione...</option>
            <option value="0" @if ($xActCurso->estCur == 1)   {{"SELECTED"}} @endif>Inactivo</option>
            <option value="1" @if ($xActCurso->estCur == 0)   {{"SELECTED"}} @endif>Activo</option>
        </select>
        <button class="btn btn-success" type="submit">Actualizar</button>
    </form>

   
    
   

     
@endsection