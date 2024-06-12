<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
       // Validasi input
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $program = new Program;
        $program->nama_program = $request->nama_program;
        $program->deskripsi_program = $request->deskripsi;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            // Ganti spasi dengan tanda hubung pada nama file
            $fileName = time() . '_' . str_replace(' ', '-', $file->getClientOriginalName());
            // Simpan file ke storage
            $filePath = $file->storeAs('uploads/thumbnails', $fileName, 'public');
            // Simpan path file ke dalam database
            $program->thumbnail = '/storage/' . $filePath;
        }

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
        // Validasi input
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Temukan data program berdasarkan id
        $program = Program::find($id);
        if ($program) {
            $program->nama_program = $request->nama_program;
            $program->deskripsi_program = $request->deskripsi;

            // Jika ada file thumbnail baru diunggah
            if ($request->hasFile('thumbnail')) {
                // Hapus file lama jika ada
                if ($program->thumbnail) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $program->thumbnail));
                }
                
                // Unggah file baru
                $file = $request->file('thumbnail');
                $fileName = time() . '_' . str_replace(' ', '-', $file->getClientOriginalName());
                $filePath = $file->storeAs('uploads/thumbnails', $fileName, 'public');
                $program->thumbnail = '/storage/' . $filePath;
            }

            // Simpan perubahan ke dalam database
            $program->save();

            // Redirect dengan pesan sukses
            return redirect()->route('program')->with('success', 'Program berhasil diupdate.');
        } else {
            // Redirect dengan pesan error jika data tidak ditemukan
            return redirect()->route('program')->with('error', 'Program tidak ditemukan.');
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
