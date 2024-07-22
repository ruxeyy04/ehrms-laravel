<?php

namespace App\Http\Controllers;

use App\Models\HrUserinfo;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // Reporting Manager Web Pages
    public function dashboard () {
        return  view('principal.dashboard');
    }

    public function opcrf() {
        return  view('principal.opcrf');
    }
    public function fileManager() {
        $hruserinfo = HrUserinfo::all();
        return view('profile.filemanager', compact('hruserinfo'));
    }
    public function kra1() {
        return  view('principal.kra1');
    }

    public function kra2() {
        return  view('principal.kra2');
    }

    public function kra3() {
        return  view('principal.kra3');
    }
    public function kra4() {
        return  view('principal.kra4');
    }
    public function kra5() {
        return  view('principal.kra5');
    }
    public function proficient() {
        return  view('principal.proficient');
    }

    public function highlyProficient() {
        return  view('principal.highlyProficient');
    }
    public function total() {
        return  view('principal.total');
    }
    public function quarterly() {
        return  view('principal.quarterly');
    }
    public function grade() {
        return  view('principal.grade');
    }
    public function subjectarea() {
        return  view('principal.subjectarea');
    }
    public function skillsbyteacher() {
        return  view('principal.skillsbyteacher');
    }
    public function skillsbymasterteacher() {
        return  view('principal.skillsbymasterteacher');
    }
    public function profile () {
        return  view('principal.profile');
    }
    public function cot () {
        return  view('principal.cot');
    }
    public function cotassessmentLearning() {
        return  view('principal.cotassessmentLearning');
    }
    public function cotclassroomManagement() {
        return  view('principal.cotclassroomManagement');
    }
    public function cotoverallAssessment() {
        return  view('principal.cotoverallAssessment');
    }
    public function cotplanningLesson() {
        return  view('principal.cotplanningLesson');
    }
    public function cotpresentingLesson() {
        return  view('principal.cotpresentingLesson');
    }
}
