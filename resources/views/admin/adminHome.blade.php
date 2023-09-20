@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are  Admin.
                </div>


        <div class="pull-left">
            <h2>Redirects anyway not the best way</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('crudops.index') }}">CRUDOPS</a>
        </div>


            </div>
        </div>
    </div>
</div>

@endsection

