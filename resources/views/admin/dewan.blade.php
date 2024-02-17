@extends('admin.template.structure')
@section('content')
    <h2>Struktur Anggota Section</h2>

    <form>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" placeholder="Regular" class="form-control" disabled />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <input class="form-control" placeholder="Birthday" type="text">
                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-success">
                    <input type="text" placeholder="Success" class="form-control is-valid" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                </div>
            </div>
        </div>
    </form>
@endsection
