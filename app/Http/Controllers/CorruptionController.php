<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CorruptionController;

class CorruptionController extends Controller
{
    public function politique()
    {
        return view('corruption.politique');
    }

    public function education()
    {
        return view('corruption.education');
    }

    public function sante()
    {
        return view('corruption.sante');
    }

}


