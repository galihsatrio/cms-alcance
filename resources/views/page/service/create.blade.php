@extends('layout.main')

@section('title') Create Service @endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <div class="card-header justify-content-end d-flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/service">Service</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control py-2" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control form-control-sm" id="content" name="content" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control py-2" id="file" name="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <a href="/service" class="btn btn-sm btn-light mr-2">
                    <i class="fa fa-chevron-left"></i> &nbsp; Kembali
                </a>
                <button class="btn btn-sm btn-primary">
                    <i class="fa fa-save"></i> &nbsp; Simpan
                </button>
            </div>
        </div>
    </div>
@endsection
