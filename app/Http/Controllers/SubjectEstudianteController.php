<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectEst;
use App\Subject;
class SubjectEstudianteController extends Controller
{
    //
    public function storeEst (Request $request){
        $subjectEst = new SubjectEst;
        $subjectEst->idSubject = $request->idSubject;
        $subjectEst->nameSubject = $request->nameSubject;
        $subjectEst->idEstudiante = $request->idEstudiante;
        $subjectEst->nameEstudiante = $request->nameEstudiante;
        $subjectEst->idDocente = $request->idDocente;
        $subjectEst->nameDocente = $request->nameDocente;
        $subjectEst->save();
        return $subjectEst;
    }
    public function loadMateriasDoc(Request $request){
        $users = SubjectEst::all()->where('idDocente',$request->idDocente)->where('idSubject',$request->idSubject);
        return $users;
    }
    public function loadMateriasEst(Request $request){
        $users = SubjectEst::all()->where('idEstudiante',$request->idEstudiante);
        return $users;
    }

}
