@extends('admin.template.structure')
@section('content')
    <div class="row">
        <div class="col-6 d-flex align-items-center">
            <h2>{{ $context }}</h2>
        </div>
        <div class="col-6 text-end">
            <button type="button" data-bs-toggle="modal"
                data-bs-target="#exampleModalMessage" class="btn bg-gradient-primary mb-0">
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
                                @if($subData->isEmpty())
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
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#exampleModalMessage2-{{ $subProgram->id }}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#modal-notification-{{ $subProgram->id }}">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>

                                            {{-- Edit Program --}}
                                            <div class="col-md-4">
                                                <!-- Button trigger modal -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalMessage2-{{ $subProgram->id }}" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Sub-Program</h5>
                                                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST" action="{{ route('kelola.update', $subProgram->id) }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label for="nama-program-{{ $subProgram->id }}" class="col-form-label">Nama Sub-Program:</label>
                                                                        <input type="text" name="nama_sub" class="form-control" id="nama-program" value="{{ $subProgram->nama_sub }}">
                                                                        <input type="hidden" name="id_program" class="form-control" id="nama-program" value="{{ $subProgram->id_program }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text-{{ $subProgram->id }}" class="col-form-label">Deskripsi:</label>
                                                                        <textarea class="form-control" name="deskripsi_sub" id="message-text">{{ $subProgram->deskripsi_sub }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="imageInput" class="col-form-label">Upload Foto Kegiatan:</label>
                                                                        <div style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                                                            <input type="file" id="imageInput" name="gambar[]" accept="image/*" multiple style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;" onchange="displayFileName()">
                                                                            <div class="text-center">
                                                                                <p style="text-color:gray-500; font-size:14px;">Tarik dan lepas gambar atau klik di sini</p>
                                                                                <p id="fileName" style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;" class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p style="color:red; font-size:12px;">Nb: Tekan CTRL + pilih foto kegiatan (maks. 5 gambar)</p>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Hapus Program --}}
                                            <div class="modal fade" id="modal-notification-{{ $subProgram->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
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
                                                            <form method="POST" action="{{ route('kelola.destroy', ['id' => $subProgram->id, 'id_program' => $subProgram->id_program]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Ok, Hapus!</button>
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
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('kelola.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama-program" class="col-form-label">Nama Sub-Program:</label>
                                <input type="hidden" class="form-control" id="nama-program" name="id_program" value="{{ $id_program }}">
                                <input type="text" class="form-control" id="nama-program" name="nama_sub">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" id="message-text" name="deskripsi_sub"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imageInput" class="col-form-label">Upload Foto Kegiatan:</label>
                                <div style="display: flex; align-items: center; justify-content: center; position: relative; cursor: pointer; border-style: dashed; border-width: 2px; border-color: #cb10b2; border-radius: 8px;">
                                    <input type="file" id="imageInput" name="gambar[]" accept="image/*" multiple style="width: 100%; margin:0%; position:absolute; cursor: pointer; inset:unset; opacity:0;" onchange="displayFileName()">
                                    <div class="text-center">
                                        <p style="color:gray; font-size:14px;">Tarik dan lepas gambar atau klik di sini</p>
                                        <p id="fileName" style="color: #cb10b2; font-size: small; font-weight: 500; margin-top: 2px; white-space: pre-wrap;" class="text-[#CB6A10] text-sm font-medium mt-2 whitespace-pre-wrap"></p>
                                    </div>
                                </div>
                            </div>
                            <p style="color:red; font-size:12px;">Nb: Tekan CTRL + pilih foto kegiatan (maks. 5 gambar)</p>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    function displayFileName() {
        const input = document.getElementById('imageInput');
        const fileNameDisplay = document.getElementById('fileName');
        fileNameDisplay.textContent = '';
        if (input.files.length > 0) {
            if (input.files.length > 5) {
                alert('Maksimal 5 gambar yang dapat diunggah.');
                input.value = '';
                fileNameDisplay.textContent = '';
                return;
            }
            for (const f of input.files) {
                fileNameDisplay.textContent += f.name + '\n';
            }
        }
    }
</script>



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
