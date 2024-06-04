@extends('admin.template.structure')
@section('content')
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <h2>Program</h2>
        </div>
        <div class="col-6 text-end">
            <button type="button" class="btn bg-gradient-primary mb-0" data-bs-toggle="modal"
                data-bs-target="#exampleModalMessage">
                Tambah Program
            </button>

        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                            Program</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Thumbnail</th>
                                        <th colspan="3"
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programData as $program)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $program->nama_program }} </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <img src={{ asset('AdminUI/assets/img/team-2.jpg') }}
                                                        class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#exampleModalMessage2-{{ $program->id_program }}">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#modal-notification-{{ $program->id_program }}">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{url('admin/program/kelola')}}/{{$program->id_program}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fas fa-cog"></i> Kelola
                                                </a>
                                            </td>
                                        </tr>

                                        {{-- Modal Edit Program --}}
                                        <div class="modal fade" id="exampleModalMessage2-{{ $program->id_program }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Program</h5>
                                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('program.update', $program->id_program) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="nama-program-{{ $program->id_program }}" class="col-form-label">Nama Program:</label>
                                                                <input type="text" class="form-control" name="nama_program" id="nama-program" value="{{ $program->nama_program }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text-{{ $program->id_program }}" class="col-form-label">Deskripsi:</label>
                                                                <textarea class="form-control" name="deskripsi" id="message-text">{{ $program->deskripsi_program }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="imageInput" class="col-form-label">Upload Thumbnail:</label>
                                                                <div style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                                                    <input type="file" id="imageInput" name="gambar" accept="image/*" style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;" onchange="displayFileName()">
                                                                    <div class="text-center">
                                                                        <p style="color:gray; font-size:14px;">Tarik dan lepas gambar atau klik di sini</p>
                                                                        <p id="fileName" style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;" class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p style="color:red; font-size:12px;">Nb: Upload 1 gambar untuk Thumbnail Program</p>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Modal Hapus Program --}}
                                        <div class="modal fade" id="modal-notification-{{ $program->id_program }}" tabindex="-1" role="dialog" aria-labelledby="modal-notification"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="modal-title-notification">Peringatan!</h6>
                                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="py-3 text-center">
                                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                                <h4 class="text-gradient text-danger mt-4">Konfirmasi</h4>
                                                                <p>Apakah Anda yakin untuk menghapus data secara permanen?</p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="POST" action="{{ route('program.destroy', $program->id_program) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Ok, Hapus!</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Segment! --}}

    {{-- Tambah Program --}}
    <div class="col-md-4">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Program</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('program.create') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama-program" class="col-form-label">Nama Program:</label>
                                <input type="text" class="form-control" name="nama_program">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imageInput" class="col-form-label">Upload
                                    Thumbnail:</label>
                                <div
                                    style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                    <input type="file" id="imageInput" name="gambar" accept="image/*"
                                        style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;"
                                        onchange="displayFileName()">
                                    <div class="text-center">
                                        <p style= "text-color:gray-500; font-size:14px;">Tarik dan lepas gambar
                                            atau klik di sini</p>
                                        <p id="fileName"
                                            style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;"
                                            class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap"></p>
                                    </div>
                                </div>
                            </div>
                            <p style= "color:red; font-size:12px;">Nb: Upload 1 gambar untuk Thumbnail Program</p>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        {{-- <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('program.create') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama-kriteria" class="col-form-label">Nama Kriteria:</label>
                                <input type="text" class="form-control" name="nama_kriteria">
                            </div>
                            <div class="form-group">
                                <label for="bobot" class="col-form-label">Bobot:</label>
                                <input type="text" class="form-control" name="bobot">
                            </div>
                            <div class="form-group">
                                <label for="jenis" class="col-form-label">Cost/Benefit:</label>
                                <select class="form-control" name="jenis">
                                    <option value="Cost">Cost</option>
                                    <option value="Benefit">Benefit</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    
    <script>
        function displayFileName() {
            const input = document.getElementById('imageInput');
            const fileNameDisplay = document.getElementById('fileName');
            fileNameDisplay.textContent = '';
            if (input.files.length > 0) {
                for (const f of input.files) {
                    fileNameDisplay.textContent += f.name + '\n'
                }
            }
        }
    </script>
@endsection
