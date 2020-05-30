<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    public function index(){
        return Professor::with('gradebook')->get();
    }

    public function show($id){
        return Professor::find($id);
    }

    public function search($term){
        return Professor::where('name', 'LIKE', '%' . $term . '%')->get();
    }
}
