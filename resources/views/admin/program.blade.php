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
                                    @if ($programData->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <h4>Tidak ada Data</h4>
                                                <p>Silahkan untuk menambah data</p>
                                            </td>
                                        </tr>
                                    @else
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
                                                        <img src={{ asset($program->thumbnail) }}
                                                            class="avatar avatar-sm me-3"
                                                            alt="{{ $program->nama_program }}">
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalMessage2-{{ $program->id_program }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-notification-{{ $program->id_program }}">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ url('admin/program/kelola') }}/{{ $program->id_program }}"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        <i class="fas fa-cog"></i> Kelola
                                                    </a>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="exampleModalMessage2-{{ $program->id_program }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Program</h5>
                                                            <button type="button" class="btn-close text-dark"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">X</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST"
                                                                action="{{ route('program.update', $program->id_program) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group mb-3">
                                                                    <label for="nama-program-{{ $program->id_program }}"
                                                                        class="col-form-label">Nama Program:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_program" id="nama-program"
                                                                        value="{{ $program->nama_program }}">
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <label for="message-text-{{ $program->id_program }}"
                                                                        class="col-form-label">Deskripsi:</label>
                                                                    <textarea class="form-control" name="deskripsi" id="message-text">{{ $program->deskripsi_program }}</textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="imageInput" class="col-form-label">Upload
                                                                        Thumbnail Baru:</label>

                                                                    <div
                                                                        style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                                                        <input type="file"
                                                                            id="imageInput-{{ $program->id_program }}"
                                                                            name="thumbnail" accept="image/*"
                                                                            style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;"
                                                                            onchange="displayFile({{ $program->id_program }})">
                                                                        <div class="text-center">
                                                                            <p style="text-color:gray-500; font-size:14px;">
                                                                                Klik di
                                                                                sini</p>
                                                                            <p id="fileName-{{ $program->id_program }}"
                                                                                style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;"
                                                                                class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <p id="errorMessage-{{ $program->id_program }}" style="color:red; display:none;">
                                                                    </p>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="text-center my-3"
                                                                        id="thumbnailPreview-{{ $program->id_program }}"
                                                                        style="display: none;">
                                                                        <img id="selectedThumbnail-{{ $program->id_program }}"
                                                                            class="img-thumbnail rounded shadow-sm"
                                                                            alt="Thumbnail yang Dipilih"
                                                                            style="max-width: 100px; max-height: 100px; border: 1px solid #dee2e6;">
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn bg-gradient-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn bg-gradient-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Modal Hapus Program --}}
                                            <div class="modal fade" id="modal-notification-{{ $program->id_program }}"
                                                tabindex="-1" role="dialog" aria-labelledby="modal-notification"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-danger modal-dialog-centered modal-"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="modal-title-notification">
                                                                Peringatan!</h6>
                                                            <button type="button" class="btn-close text-dark"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="py-3 text-center">
                                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                                <h4 class="text-gradient text-danger mt-4">Konfirmasi</h4>
                                                                <p>Apakah Anda yakin untuk menghapus data secara permanen?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="POST"
                                                                action="{{ route('program.destroy', $program->id_program) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Ok,
                                                                    Hapus!</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Program</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('program.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama-program" class="col-form-label">Nama Program:</label>
                                <input required type="text" class="form-control" name="nama_program"
                                    value="{{ old('nama_program') }}">
                            </div>
                            <div class="form-group">
                                <label required for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" name="deskripsi">{{ old('deskripsi') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="imageInput-add" class="col-form-label">Upload Thumbnail:</label>
                                <div
                                    style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                    <input type="file" id="imageInput-add" name="thumbnail" accept="image/*"
                                        style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;"
                                        onchange="displayFileTambah()">
                                    <div class="text-center">
                                        <p style="color:gray-500; font-size:14px;">Klik di sini</p>
                                        <p id="fileName-add"
                                            style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;"
                                            class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap"></p>
                                    </div>
                                </div>
                                <p id="errorMessage-add" style="color:red; display:none;"></p>
                            </div>
                            <div class="form-group">
                                <div class="text-center my-3" id="thumbnailPreview-add" style="display: none;">
                                    <img id="selectedThumbnail-add" class="img-thumbnail rounded shadow-sm"
                                        alt="Thumbnail yang Dipilih"
                                        style="max-width: 100px; max-height: 100px; border: 1px solid #dee2e6;">
                                </div>
                            </div>
                            <p style="color:gray; font-size:12px;">Nb: Upload 1 gambar untuk Thumbnail Program</p>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function displayFileTambah() {
            const input = document.getElementById('imageInput-add');
            const preview = document.getElementById('thumbnailPreview-add');
            const selectedThumbnail = document.getElementById('selectedThumbnail-add');
            const fileName = document.getElementById('fileName-add');
            const errorMessage = document.getElementById('errorMessage-add');

            const file = input.files[0];
            if (file) {
                // Validasi ukuran file (2MB = 2 * 1024 * 1024 bytes)
                if (file.size > 2 * 1024 * 1024) {
                    errorMessage.textContent = 'Ukuran file tidak boleh lebih dari 2MB.';
                    errorMessage.style.display = 'block';
                    preview.style.display = 'none'; // Sembunyikan preview
                    fileName.textContent = '';
                    return; // Hentikan eksekusi lebih lanjut
                } else {
                    errorMessage.style.display = 'none'; // Reset error message jika ukuran valid
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.style.display = 'block';
                    selectedThumbnail.src = e.target.result;
                    fileName.textContent = file.name;
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                fileName.textContent = '';
            }
        }

        function displayFile(programId) {
            const input = document.getElementById('imageInput-' + programId);
            const preview = document.getElementById('thumbnailPreview-' + programId);
            const selectedThumbnail = document.getElementById('selectedThumbnail-' + programId);
            const fileName = document.getElementById('fileName-' + programId);
            const errorMessage = document.getElementById('errorMessage-' + programId);

            const file = input.files[0];
            if (file) {

                if (file.size > 2 * 1024 * 1024) {
                    errorMessage.textContent = 'Ukuran file tidak boleh lebih dari 2MB.';
                    errorMessage.style.display = 'block';
                    preview.style.display = 'none';
                    fileName.textContent = '';
                    return;
                } else {
                    errorMessage.style.display = 'none';
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.style.display = 'block';
                    selectedThumbnail.src = e.target.result;
                    fileName.textContent = file.name;
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                fileName.textContent = '';
            }
        }
    </script>
    @include('sweetalert::alert')
@endsection
