@extends('crudops.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('crudops.create') }}"> Create New Crudop</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($crudops as $crudop)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{$loop->iteration}}</td>
            <td>{{ $crudop->name }}</td>
            <td>{{ $crudop->details }}</td>
            <td>
                <form action="{{ route('crudops.destroy',$crudop->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('crudops.show',$crudop->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('crudops.edit',$crudop->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {!! $crudops->links() !!} --}}

@endsection
