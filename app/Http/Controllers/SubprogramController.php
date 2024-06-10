<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubProgram;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubprogramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $program = DB::table('programs')->where('id_program', $id)->first();
        $query = DB::table('sub_programs')->where('id_program', $id)->get();
        
        // retur nama program
        // dd($program->nama_program);

        // retur data kelola
        // dd($query);


        return view('admin.kelola', [
            'context'   => $program->nama_program,
            'id_program'=> $program->id_program,
            'subData'   => $query
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $subprogram                 = new SubProgram;
        $subprogram->id_program     = $request->id_program;
        $subprogram->nama_sub       = $request->nama_sub;
        $subprogram->deskripsi_sub  = $request->deskripsi_sub;
        $subprogram->save();

        return redirect('admin/program/kelola/'. $subprogram->id_program);
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
        $subprogram = SubProgram::find($id);
        if ($subprogram) {
            $subprogram->id_program         = $request->id_program;
            $subprogram->nama_sub           = $request->nama_sub;
            $subprogram->deskripsi_sub      = $request->deskripsi_sub;
            // $subprogram->thumbnail          = $request->gambar;
            $subprogram->save();

            // Menggunakan id_program dari request untuk redirect
            return redirect('admin/program/kelola/' . $request->id_program)->with('success', 'Item berhasil diupdate.');
        } else {
            return redirect('admin/program/kelola/' . $request->id_program)->with('error', 'Item tidak ditemukan.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id, $id_program)
    {
        $subprogram = SubProgram::find($id); // Gunakan model subprograms
        if ($subprogram) {
            $subprogram->delete();

            // Menggunakan id_program dari request untuk redirect
            return redirect('admin/program/kelola/' . $id_program)->with('success', 'Item berhasil dihapus.');
        } else {
            return redirect('admin/program/kelola/' . $id_program)->with('error', 'Item tidak ditemukan.');
        }
    }
}
