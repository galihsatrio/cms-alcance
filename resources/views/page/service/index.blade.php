@extends('layout.main')

@section('title') Service @endsection

@section('content')
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <a href="/service/create" class="btn btn-primary btn-sm ml-auto">
                    <i class="fa fa-plus"></i> &nbsp;
                    Tambah
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>File</th>
                                <th width="5%">Action</th>
                            </tr>
                            @foreach ( $list as $key => $val )
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $val->image }}</td>
                                <td>{{ $val->content }}</td>
                                <td>{{ $val->file }}</td>
                                <td>
                                    <a href="/service/{{$val->id}}/edit" class="btn btn-info btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
