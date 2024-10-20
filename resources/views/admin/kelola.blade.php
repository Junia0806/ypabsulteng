@extends('admin.template.structure')
@section('content')
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <h2>{{ $context }}</h2>
        </div>
        <div class="col-6 text-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalMessage"
                class="btn bg-gradient-primary mb-0">
                &nbsp;&nbsp;Tambah Sub - Program
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
                                            Sub-Program</th>
                                        <th colspan="0"
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($subData->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                <h4>Tidak Ada Data</h4>
                                                <p>Silahkan untuk menambah data</p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($subData as $subProgram)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $subProgram->nama_sub }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalMessage2-{{ $subProgram->id }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-notification-{{ $subProgram->id }}">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>

                                            {{-- Edit Program --}}
                                            <div class="col-md-4">
                                                <!-- Button trigger modal -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalMessage2-{{ $subProgram->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                    Sub-Program</h5>
                                                                <button type="button" class="btn-close text-dark"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST"
                                                                    action="{{ route('kelola.update', $subProgram->id) }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label for="nama-program-{{ $subProgram->id }}"
                                                                            class="col-form-label">Nama Sub-Program:</label>
                                                                        <input type="text" name="nama_sub"
                                                                            class="form-control" id="nama-program"
                                                                            value="{{ $subProgram->nama_sub }}">
                                                                        <input type="hidden" name="id_program"
                                                                            class="form-control" id="nama-program"
                                                                            value="{{ $subProgram->id_program }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text-{{ $subProgram->id }}"
                                                                            class="col-form-label">Deskripsi:</label>
                                                                        <textarea class="form-control" name="deskripsi_sub" id="message-text">{{ $subProgram->deskripsi_sub }}</textarea>
                                                                    </div>
                                                                    {{-- <div class="form-group">
                                                                        <label for="imageInput"
                                                                            class="col-form-label">Upload Foto
                                                                            Kegiatan:</label>
                                                                        <div
                                                                            style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                                                            <input type="file" id="imageInput"
                                                                                name="gambar[]" accept="image/*" multiple
                                                                                style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;"
                                                                                onchange="displayFileName()">
                                                                            <div class="text-center">
                                                                                <p
                                                                                    style="text-color:gray-500; font-size:14px;">
                                                                                    Tarik dan lepas gambar atau klik di sini
                                                                                </p>
                                                                                <p id="fileName"
                                                                                    style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;"
                                                                                    class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p style="color:red; font-size:12px;">Nb: Tekan CTRL +
                                                                        pilih foto kegiatan (maks. 5 gambar)</p> --}}

                                                                    <div class="form-group">
                                                                        <label for="imageInput-edit-{{ $subProgram->id }}"
                                                                            class="col-form-label">Ubah Foto
                                                                            Kegiatan:</label>
                                                                        <div
                                                                            style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                                                            <input type="file"
                                                                                id="imageInput-edit-{{ $subProgram->id }}"
                                                                                name="gambar[]" accept="image/*" multiple
                                                                                style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;"
                                                                                onchange="displayFileEdit({{ $subProgram->id }})">
                                                                            <div class="text-center">
                                                                                <p style="color:gray-500; font-size:14px;">
                                                                                    Klik di sini dan pilih 5 foto kegiatan
                                                                                </p>
                                                                                <p id="fileName-edit-{{ $subProgram->id }}"
                                                                                    style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;"
                                                                                    class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <p id="errorMessage-edit-{{ $subProgram->id }}"
                                                                            style="color:red; display:none;"></p>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class="text-center my-3"
                                                                            id="thumbnailPreview-edit-{{ $subProgram->id }}"
                                                                            style="display: none;">
                                                                            <div id="imagePreviewContainer-edit-{{ $subProgram->id }}"
                                                                                style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                                            </div>
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
                                            </div>

                                            {{-- Hapus Program --}}
                                            <div class="modal fade" id="modal-notification-{{ $subProgram->id }}"
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
                                                                <span aria-hidden="true">X</span>
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
                                                                action="{{ route('kelola.destroy', ['id' => $subProgram->id, 'id_program' => $subProgram->id_program]) }}">
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
    <div class="col-md-4">
        <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub-Program</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('kelola.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama-program" class="col-form-label">Nama Sub-Program:</label>
                                <input type="hidden" class="form-control" id="nama-program" name="id_program"
                                    value="{{ $id_program }}">
                                <input type="text" class="form-control" id="nama-program" name="nama_sub" >
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" id="message-text" name="deskripsi_sub" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imageInput-add" class="col-form-label">Upload Foto Kegiatan:</label>
                                <div
                                    style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                    <input type="file" id="imageInput-add" name="gambar[]" accept="image/*" multiple
                                        style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;"
                                        onchange="displayFileTambah()" >
                                    <div class="text-center">
                                        <p style="color:gray-500; font-size:14px;">Klik di sini dan pilih 5 foto kegiatan
                                        </p>
                                        <p id="fileName-add"
                                            style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;"
                                            class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap"></p>
                                    </div>
                                </div>
                                <p id="errorMessage-add" style="color:red; display:none;"></p>
                            </div>

                            <div class="form-group">
                                <div class="text-center my-3" id="thumbnailPreview-add" style="display: none;">
                                    <div id="imagePreviewContainer" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                    </div>
                                </div>
                            </div>

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
            const previewContainer = document.getElementById('imagePreviewContainer');
            const fileName = document.getElementById('fileName-add');
            const errorMessage = document.getElementById('errorMessage-add');
            const previewWrapper = document.getElementById('thumbnailPreview-add');

            previewContainer.innerHTML = '';
            fileName.textContent = '';
            errorMessage.style.display = 'none';
            previewWrapper.style.display = 'none';

            const files = input.files;

            if (files.length > 5) {
                errorMessage.textContent = 'Foto yang dipilih tidak boleh lebih dari 5.';
                errorMessage.style.display = 'block';
                return;
            }

            if (files.length > 0) {
                const allowedSize = 2 * 1024 * 1024;
                let allFileNames = '';
                let hasError = false;

                Array.from(files).forEach((file) => {
                    if (file.size > allowedSize) {
                        errorMessage.textContent = `Ukuran file ${file.name} melebihi 2MB.`;
                        errorMessage.style.display = 'block';
                        hasError = true;
                        return;
                    }

                    allFileNames += `${file.name}\n`;

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imgElement.classList.add('img-thumbnail', 'rounded', 'shadow-sm');
                        imgElement.style.maxWidth = '80px';
                        imgElement.style.maxHeight = '80px';
                        imgElement.style.border = '1px solid #dee2e6';
                        previewContainer.appendChild(imgElement);
                    };
                    reader.readAsDataURL(file);
                });

                if (!hasError) {
                    fileName.textContent = allFileNames.trim();
                    previewWrapper.style.display = 'block';
                }
            }
        }

        function displayFileEdit(SubProgramId) {
            const input = document.getElementById('imageInput-edit-' + SubProgramId);
            const previewContainer = document.getElementById('imagePreviewContainer-edit-' + SubProgramId);
            const fileName = document.getElementById('fileName-edit-' + SubProgramId);
            const errorMessage = document.getElementById('errorMessage-edit-' + SubProgramId);
            const previewWrapper = document.getElementById('thumbnailPreview-edit-' + SubProgramId);

            previewContainer.innerHTML = '';
            fileName.textContent = '';
            errorMessage.style.display = 'none';
            previewWrapper.style.display = 'none';

            const files = input.files;

            if (files.length > 5) {
                errorMessage.textContent = 'Foto yang dipilih tidak boleh lebih dari 5.';
                errorMessage.style.display = 'block';
                return;
            }

            if (files.length > 0) {
                const allowedSize = 2 * 1024 * 1024;
                let allFileNames = '';
                let hasError = false;

                Array.from(files).forEach((file) => {
                    if (file.size > allowedSize) {
                        errorMessage.textContent = `Ukuran file ${file.name} melebihi 2MB.`;
                        errorMessage.style.display = 'block';
                        hasError = true;
                        return;
                    }

                    allFileNames += `${file.name}\n`;

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imgElement.classList.add('img-thumbnail', 'rounded', 'shadow-sm');
                        imgElement.style.maxWidth = '80px';
                        imgElement.style.maxHeight = '80px';
                        imgElement.style.border = '1px solid #dee2e6';
                        previewContainer.appendChild(imgElement);
                    };
                    reader.readAsDataURL(file);
                });

                if (!hasError) {
                    fileName.textContent = allFileNames.trim();
                    previewWrapper.style.display = 'block';
                }
            }
        }
    </script>

@endsection
