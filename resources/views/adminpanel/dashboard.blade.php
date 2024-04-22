@extends('layouts.admin')
@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <hr>
        <div class="row">
            <div class="col-xl-2 col-md-6">
                <a href="{{url('tickets')}}" class="text-decoration-none">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body mt-3 mb-3 text-center">View Tickets</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-2 col-md-6">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body mt-3 mb-3 text-center">View Users</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-2 col-md-6">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body mt-3 mb-3 text-center">View Comments</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2 col-md-6">
                <a href="{{url('/')}}" class="text-decoration-none">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body mt-3 mb-3 text-center">Back to website</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-2 col-md-6">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body mt-3 mb-3 text-center">Settings</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-2 col-md-6">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body mt-3 mb-3 text-center">Logout</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

@endsection
