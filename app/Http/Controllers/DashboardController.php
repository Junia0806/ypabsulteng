<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programCount = DB::table('programs')->count();
        $subprogramCount = DB::table('sub_programs')->count(); 

        return view('admin.dashboard', [
            'context'   => 'Dashboard',
            'program'   => $programCount,
            'subprogram'=> $subprogramCount
        ]);
    }

}
