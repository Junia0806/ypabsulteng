<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubProgram;
use App\Models\Picture;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image; // Tambahkan ini untuk menggunakan Intervention

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
        // Validasi input
        $request->validate([
            'nama_sub' => 'required|string|max:255',
            'deskripsi_sub' => 'required|string',
            'gambar' => 'nullable|array|max:5',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Buat instance subprogram baru
        $subprogram = new SubProgram;
        $subprogram->id_program = $request->id_program;
        $subprogram->nama_sub = $request->nama_sub;
        $subprogram->deskripsi_sub = $request->deskripsi_sub;
        $subprogram->save();

        // Proses upload gambar jika ada
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $fileName = time() . '_' . str_replace(' ', '-', $file->getClientOriginalName());
                $filePath = $file->storeAs('uploads/subprograms/'.$subprogram->id, $fileName, 'public');

                // Resize gambar menggunakan Intervention Image
                $image = Image::make(public_path('/storage/' . $filePath))->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode();

                // Simpan file yang sudah diresize
                Storage::disk('public')->put($filePath, $image);

                // Simpan data gambar ke tabel pictures
                $picture = new Picture;
                $picture->id_sub = $subprogram->id;
                $picture->nama_gambar = '/storage/' . $filePath;
                $picture->save();
            }
        }

        // Redirect dengan pesan sukses
        return redirect('admin/program/kelola/' . $subprogram->id_program)->with('success', 'Subprogram berhasil ditambahkan.');
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
            'nama_sub' => 'required|string|max:255',
            'deskripsi_sub' => 'required|string',
            'gambar' => 'nullable|array|max:5',
            'gambar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $subprogram = SubProgram::find($id);
        if ($subprogram) {
            $subprogram->id_program = $request->id_program;
            $subprogram->nama_sub = $request->nama_sub;
            $subprogram->deskripsi_sub = $request->deskripsi_sub;
            $subprogram->save();

            // Proses upload gambar jika ada
            if ($request->hasFile('gambar')) {
                // Hapus gambar lama
                foreach ($subprogram->picture as $oldPicture) {
                    Storage::delete('public' . str_replace('/storage/', '', $oldPicture->nama_gambar));
                    $oldPicture->delete();
                }

                foreach ($request->file('gambar') as $file) {
                    $fileName = time() . '_' . str_replace(' ', '-', $file->getClientOriginalName());
                    $filePath = $file->storeAs('uploads/subprograms', $fileName, 'public');

                    // Resize gambar menggunakan Intervention Image
                    $image = Image::make(public_path('/storage/' . $filePath))->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode();

                    // Simpan file yang sudah diresize
                    Storage::disk('public')->put($filePath, $image);

                    // Simpan data gambar baru ke tabel pictures
                    $picture = new Picture;
                    $picture->id_sub = $subprogram->id;
                    $picture->nama_gambar = '/storage/' . $filePath;
                    $picture->save();
                }
            }

            return redirect('admin/program/kelola/' . $request->id_program)->with('success', 'Subprogram berhasil diupdate.');
        } else {
            return redirect('admin/program/kelola/' . $request->id_program)->with('error', 'Subprogram tidak ditemukan.');
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
