<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradebook;
use App\Http\Requests\GradebooksRequest;
use App\Professor;

class GradebooksController extends Controller
{
    public function index(){
        return Gradebook::with('professor')->get();
    }

    public function show($id){
        return Gradebook::find($id);
    }

    public function store(GradebooksRequest $request){
        return Gradebook::create($request->all());
    }

    public function search($term){
        return Gradebook::where('name', 'LIKE', '%' . $term . '%')->get();
    }
}
