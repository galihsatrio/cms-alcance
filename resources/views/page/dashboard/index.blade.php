@extends('layout.main')

@section('content')
    <div class="section-body">
        <h2 class="section-title">Welcome to Alcance</h2>
        <p class="section-lead">This is the dashboard page.</p>

        <div class="card" style="height: 70vh">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('img/dashboard.png') }}" class="img-dashboard mt-5" alt="alcance" width="200">
                        <h4 style="color: #D9D9D9">
                            Welcome to the Content Management System <br>
                            Project Alcance Solutions
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .img-dashboard {
            width: 100%;
            max-width: 300px;
        }
    </style>
@endsection
