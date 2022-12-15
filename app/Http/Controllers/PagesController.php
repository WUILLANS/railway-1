<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
class PagesController extends Controller
{

    public function fnListaCurso() {
        $xCurso = Curso::all();    //datos de db
        return view('pagListaCurso', compact('xCurso'));
    }
    
    public function fnEstActualizarCurso($id){
        $xActCurso = Curso::findOrFail($id);
        return view('Curso.pagActualizarCurso', compact('xActCurso'));
    }
   public function fnUpdateCurso(Request $request,$id){ 

        $xUpdateCurso = Curso::findOrFail($id);

        $xUpdateCurso -> denCur = $request -> denCur;
        $xUpdateCurso -> hrsCur = $request -> hrsCur;
        $xUpdateCurso -> creCur = $request -> creCur;
        $xUpdateCurso -> PlaCur = $request -> PlaCur;
        $xUpdateCurso -> tipCur = $request -> tipCur;
        $xUpdateCurso -> estCur = $request -> estCur;

        $xUpdateCurso -> save();

        return back()->with('msj','Se actualizo con exito...');
    }
    public function fnRegistrarCurso(Request $request){

        //return $request;         //Prueba de "token" y datos recibidos

        $request ->validate([
            'denCur' => 'required',
            'hrsCur' => 'required',
            'creCur' => 'required',
            'PlaCur' => 'required',
            'tipCur' => 'required',
            'estCur' => 'required'
        ]);

        $nuevoCurso = new Curso;
        $nuevoCurso->denCur = $request->denCur;
        $nuevoCurso->hrsCur = $request->hrsCur;
        $nuevoCurso->creCur = $request->creCur;
        $nuevoCurso->PlaCur = $request->PlaCur;
        $nuevoCurso->tipCur = $request->tipCur;
        $nuevoCurso->estCur = $request->estCur;
        
        $nuevoCurso->save();
        
        //$xAlumnos = Estudiante::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se registro con éxito...'); //Regresar con msj
    }

    public function fnEstDetalleCurso($id){

        $xDetCurso = Curso::findOrFail($id);
        return view('Curso.pagDetalleCurso', compact('xDetCurso'));
    }

    public function fnEliminarCurso($id){
        $deleteCurso = Curso::findOrFail($id);
        $deleteCurso->delete();
        return back()->with('msj','Seelimino con exito....');
     }

    ////PORTADA BIENVENIDA PARA EL PUBLICO GENERAL//////////////


    public function fnIndex() {
        return view('welcome');
    }



/*
    //////LECTURA////////////
    public function fnLista() {
        $xAlumnos = Estudiante::all();    //datos de db
        return view('pagLista', compact('xAlumnos'));
    }
    public function fnEstActualizar($id){
        $xActAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }
    public function fnUpdate(Request $request,$id){ 

        $xUpdateAlumnos = Estudiante::findOrFail($id);

        $xUpdateAlumnos -> codEst = $request -> codEst;
        $xUpdateAlumnos -> nomEst = $request -> nomEst;
        $xUpdateAlumnos -> apeEst = $request -> apeEst;
        $xUpdateAlumnos -> fnEst = $request -> fnEst;
        $xUpdateAlumnos -> turMat = $request -> turMat;
        $xUpdateAlumnos -> semMat = $request -> semMat;
        $xUpdateAlumnos -> estMat = $request -> estMat;

        $xUpdateAlumnos -> save();

        return back()->with('msj','Se actualizo con exito...');
    }
    public function fnRegistrar(Request $request){

        //return $request;         //Prueba de "token" y datos recibidos

        $request ->validate([
            'codEst' => 'required',
            'nomEst' => 'required',
            'apeEst' => 'required',
            'fnEst' => 'required',
            'turMat' => 'required',
            'semMat' => 'required',
            'estMat' => 'required'
        ]);

        $nuevoEstudiante = new Estudiante;
        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnEst = $request->fnEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;
        
        $nuevoEstudiante->save();
        
        //$xAlumnos = Estudiante::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se registro con éxito...'); //Regresar con msj
    }

    public function fnEstDetalle($id){

        $xDetAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    public function fnEliminar($id){
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj','Seelimino con exito....');
     }
    */
    public function fnGaleria ($numero=69) {
        //return "FOTO DE CODIGO: ".$numero ;
        return view('pagGaleria', ['valor'=>$numero, 'otro'=>132]);
    }
    


}    

    