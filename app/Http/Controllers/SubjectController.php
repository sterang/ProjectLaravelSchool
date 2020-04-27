<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\DB;
class SubjectController extends Controller
{
    //
    public function store (Request $request){
        $subject = new Subject;
        $subject->nameSubject = $request->nameSubject;
        $subject->idDocente = $request->idDocente;
        $subject->nameDocente = $request->nameDocente;
        $subject->save();
        return $subject;
    }
    public function loadMaterias(Request $request){
        $users = Subject::all()->where('idDocente',$request->idDocente);
        return $users;
    }
    public function loadMateriasAll(Request $request){
        $users = Subject::all();
        return $users;
    }
    public function loadMateriasEspecifica(Request $request){
        $users = Subject::all()->where('id',$request->idSubject);
        return $users;
    }
}
