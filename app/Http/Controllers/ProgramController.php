<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\SubProgram;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image; // Tambahkan ini untuk menggunakan Intervention
use RealRashid\SweetAlert\Facades\Alert;

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
    public function create(Request $request){
    // Validasi input
    $validatedData = $request->validate([
        'nama_program' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $program = new Program;
    $program->nama_program = $validatedData['nama_program'];
    $program->deskripsi_program = $validatedData['deskripsi'];

    if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $fileName = time() . '_' . str_replace(' ', '-', $file->getClientOriginalName());
        $filePath = $file->storeAs('uploads/thumbnails', $fileName, 'public');

        $image = Image::make(public_path('/storage/' . $filePath));
        $width = $image->width();
        $height = $image->height();

        // Memastikan aspect ratio 2:1
        if ($width / $height != 2) {
            // Memaksa konversi ke aspect ratio 2:1
            $image->resize(2 * $height, $height, function ($constraint) {
                $constraint->aspectRatio();
            })->encode();
        }

        $image->resize(600, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->encode();

        Storage::disk('public')->put('uploads/thumbnails/' . $fileName, $image);
        $program->thumbnail = '/storage/uploads/thumbnails/' . $fileName;
    }

    $program->save();

    Alert::success('Success', 'Data Berhasil Disimpan!');
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

        $program = Program::find($id);
        if ($program) {
            $program->nama_program = $request->nama_program;
            $program->deskripsi_program = $request->deskripsi;

            if ($request->hasFile('thumbnail')) {
                // Hapus file lama jika ada
                if ($program->thumbnail) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $program->thumbnail));
                }

                $file = $request->file('thumbnail');
                $fileName = time() . '_' . str_replace(' ', '-', $file->getClientOriginalName());
                $filePath = $file->storeAs('uploads/thumbnails', $fileName, 'public');

                // Resize gambar menggunakan Intervention
                $image = Image::make(public_path('/storage/' . $filePath))->resize(600, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode();

                Storage::disk('public')->put('uploads/thumbnails/' . $fileName, $image);

                $program->thumbnail = '/storage/uploads/thumbnails/' . $fileName;
            }

            $program->save();

            return redirect()->route('program')->with('success', 'Program berhasil diupdate.');
        } else {
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
            // Hapus subprogram berdasarkan id_program yang sesuai dengan program yang dihapus
            SubProgram::where('id_program', $id)->delete();
            
            // Hapus program
            $program->delete();
            
            return redirect()->route('program')->with('success', 'Program dan subprogram berhasil dihapus.');
        } else {
            return redirect()->route('program')->with('error', 'Program tidak ditemukan.');
        }
    }

}
