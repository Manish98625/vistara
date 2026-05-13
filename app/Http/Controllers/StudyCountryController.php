<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadDetails;
use App\Models\University;
use Illuminate\View\View;
use Illuminate\Http\Response;

class StudyCountryController extends Controller
{
    
    public function show($id): View|Response
    {
        $studyAbroad = StudyAbroadDetails::findOrFail($id);

        $universities = University::where('study_abroads_id', $studyAbroad->study_abroads_id)->get();

        return view('frontend.study.show', [
            'studyAbroad' => $studyAbroad,
            'universities' => $universities,
        ]);
    }
}
