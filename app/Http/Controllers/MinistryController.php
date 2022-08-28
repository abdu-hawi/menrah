<?php

namespace App\Http\Controllers;

use App\Imports\MinisrtImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MinistryController extends Controller
{
    public function upload(Request $request){
        Excel::import(new MinisrtImport() , $request->file('upload'));
        return 'Success';
    }
}
