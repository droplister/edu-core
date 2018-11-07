<?php

namespace Droplister\EduCore\App\Http\Controllers;

use Droplister\EduCore\App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Droplister\EduCore\App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, School $school)
    {
        return view('edu-core::schools.show', compact('school'));
    }
}