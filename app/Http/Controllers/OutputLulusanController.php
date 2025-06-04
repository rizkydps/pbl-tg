<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutputLulusan;

class OutputLulusanController extends Controller
{
    public function index()
    {
        $outputLulusans = OutputLulusan::all();
        return view('output_lulusan', compact('outputLulusans'));
    }
}
