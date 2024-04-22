@extends('layouts.admin')
@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tickets list</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{url('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tickets list</li>
        </ol>
        @if(false)
        <div class="card mb-4 bg-light border-info">
            <div class="card-body">
                Additional info
            </div>
        </div>
        @endif
        <div class="mb-4">
            <a class="btn btn-primary btn-md" href="{{url('newticket')}}">
                <i class="fa fa-plus"></i> New
            </a>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="col-md-2">Name</th>
                        <th class="col-md-2">Contact Person</th>
                        <th class="col-md-2">Email</th>
                        <th class="col-md-2">Phone</th>
                        <th class="col-md-2">Tools</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Tools</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>5757575757</td>
                        <td>
                            <form action="{{url('deleteticket')}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a href="{{url('showticket')}}" class="btn btn-warning btn-sm" title="edit" type="button"><i class="fa fa-edit"></i> Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
