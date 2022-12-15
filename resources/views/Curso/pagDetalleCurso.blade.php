@extends('pagPlantilla') 

@section('titulo')
    <h1 class="display-4">Página de detalle curso </h1>
@endsection

@section('seccion')
    
    <div class="btn btn-info d-grid display-3">Información detallada del los cursos</div>

    <p>Id:  {{ $xDetCurso -> id }} </p> 
    <p>denominacion del curso    :  {{ $xDetCurso -> denCur }} </p> 
    <p>horas del curso: {{ $xDetCurso -> hrsCur }} </p> 
    <p>Creditos del curso:    {{ $xDetCurso -> creCur }} </p> 
    <p>Año de plan de estudios       {{ $xDetCurso -> PlaCur }} </p> 
    <p>Transversal/Especialidad   {{ $xDetCurso -> tipCur }} </p> 
    <p>Estado del curso  {{ $xDetCurso -> estCur }} </p> 

    <div class="btn btn-info d-grid display-3">...</div>
    
@endsection
