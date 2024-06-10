<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('programs')->get();
        // dd($query);
        return view('admin.program', 
        [
            'context'       => 'Program',
            'programData'   => $query
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $program                = new Program;
        $program->nama_program  = $request->nama_program;
        $program->deskripsi_program     = $request->deskripsi;
        $program->thumbnail        = $request->gambar;
        $program->save();
        return redirect('admin/program');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $program = Program::find($id);
        if ($program) {
            $program->nama_program      = $request->nama_program;
            $program->deskripsi_program = $request->deskripsi;
            $program->thumbnail         = $request->gambar;
            $program->save();
            return redirect()->route('program')->with('success', 'Kriteria berhasil diupdate.');
        } else {
            return redirect()->route('program')->with('error', 'Kriteria tidak ditemukan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id); // Gunakan model programs
        if ($program) {
            $program->delete();
            return redirect()->route('program')->with('success', 'Program berhasil dihapus.');
        } else {
            return redirect()->route('program')->with('error', 'Program tidak ditemukan.');
        }
    }
}
