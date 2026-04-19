<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
    

class CompanyController extends Controller
{
    public function cmp()
    {
        $data = ["Apple", "Google"];

        return view('company', compact('data'));
    }
}
