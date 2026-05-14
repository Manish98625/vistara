<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadDetails;
use App\Models\University;

class StudyCountryController extends Controller
{
    
    public function show($id)
    {
        $studyAbroad = StudyAbroadDetails::findOrFail($id);

        $universities = University::where('study_abroads_id', $studyAbroad->study_abroads_id)->get();

        return view('frontend.study.show', [
            'studyAbroad' => $studyAbroad,
            'universities' => $universities,
        ]);
    }
}

